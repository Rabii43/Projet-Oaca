<?php

namespace App\Controller;

use ApiPlatform\Core\DataProvider\PaginatorInterface;
use App\Entity\User;
use App\Event\UsersEvent;
use App\Form\UserType;
use App\Service\fileUploader;
use App\Service\HeaderAuthGenerator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Event\EmailEvent;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Class UserController
 * 
 * @package App\Controller
 * @Route("/api", name="api_users_")
 */
class UserController extends MainController
{
    /**
     * @Route("/admin/users", name="all_users", methods={"GET"})
     */
    public function indexAdmin(Request $request, PaginatorInterface $paginator)
    {
        $users = $this->em->getRepository(User::class)->findAll();
        if (isset($users)) {
            return $this->successResponse($users);
        }
    }

    /**
     * @Route("/users", name="get_all_users", methods={"GET"})
     */
    public function shoUsers(): Response
    {
        $lists=[];
        $datas = $this->em->getRepository(User::class)->findAll();
        foreach ($datas as $data) {
            $lists ["users"] [] = ["id" => $data->getId(), "email" => $data->getEmail(), "firstname" => $data->getFirstname(), "lastname" => $data->getLastname(), "image" => $data->getImage(), "active" => $data->getActiver()];
        }
        return $this->successResponse($lists);
    }

    /**
     * @Route("/users/{id}", name="get_all_users", methods={"GET"})
     */
    public function show($id)
    {
        $user = $this->em->getRepository(User::class)->find($id);
        if(isset($user)) {
            return $this->successResponse($user);
        }
    }

    /**
     * @Route("/users", name="create_user", methods={"POST"})
     */
    public function create(Request $request)
    {
        $data = $this->jsonDecode($request);
        $user = new User();
        try {
            $this->insert($request,UserType::class,$user,$data);
            $user->setPassword($this->passwordEncoder->encodePassword($user, $data['password']));
            $this->em->persist($user);
            $this->em->flush();
            return $this->successResponse($data);
        } catch (NotEncodableValueException $e) {
            return $this->successResponse(["code" => 409, "message" => $e->getMessage()],409);
        }
    }

    /**
     * @Route("/users/{id}", name="edit_user", methods={"POST","PUT"})
     */
    public function edit(Request $request, $id, FileUploader $fileUploader,HeaderAuthGenerator $headerAuthGenerator, HttpClientInterface $client)
    {
        $data = $this->jsonDecode($request);
        $user = $this->em->getRepository(User::class)->find($id);
        $email = $request->request->get('email');
        $firstName = $request->request->get('firstName');
        $lastName = $request->request->get('lastName');
        $phone = $request->request->get('phone');
        $address = $request->request->get('address');
        $profession = $request->request->get('profession');
        $reason = $request->request->get('reason');
        $bank = $request->request->get('bank');
        try {
            $this->update($request, UserType::class, $user, $data);
            $file = $fileUploader->upload($request);
            if ($file != null) {
                $user->setImage($file['image']);
            }
            if (isset($email)) {
                $user->setEmail($email);
            }
            if (isset($firstName)) {
                $user->setFirstName($firstName);
            }
            if (isset($lastName)) {
                $user->setLastName($lastName);
            }
            if (isset($phone)) {
                $user->setPhone($phone);
            }
            if (isset($address)) {
                $user->setAddress($address);
            }
            if (isset($profession)) {
                $user->setProfession($profession);
            }
            if (isset($reason)) {
                $user->setReason($reason);
            }
            if (isset($bank)) {
                $user->setBank($bank);
            }
            $this->em->persist($user);
            $this->editInCourtage($headerAuthGenerator,$client,$user,$user->getCCreditId());
            $this->em->flush();
            return $this->successResponse(["code" => 200, "message" => 'user successfully edited']);
        } catch (NotEncodableValueException $e) {
            return $this->successResponse(["code" => 409, "message" => $e->getMessage()], 409);
        }
    }
    public function editInCourtage($headerAuthGenerator, $client, $user,$id)
    {
        $headres = $headerAuthGenerator->getXWSSEHeader();
        // Register the user in the "courtagecredit"
        $request = $client->request('PATCH', $this->getParameter('app_cc_register_endpoint').'/admin/api/users/'.$id, [
            'headers' => $headres,
            'body'=>[
                "username" => $user->getUsername(),
                "email" => $user->getEmail(),
                "firstName" => $user->getFirstName(),
                "lastName" => $user->getLastName(),
                "phone" => $user->getPhone(),
            ]
        ]);
    }

    /**
     * @Route("/users/{id}", name="delete_user", methods={"DELETE"})
     */
    public function delete($id,HeaderAuthGenerator $headerAuthGenerator, HttpClientInterface $client)
    {
        $user = $this->em->getRepository(User::class)->find($id);
        if (isset($user)) {
            $this->em->remove($user);
            $this->em->flush();
            return $this->successResponse(["code" => 200, "message" => 'user successfully deleted'],200);
        }
    }

    /**
     * Activate/Disactivate User account (Banker)
     * 
     * @Route("/users/{id}/activate", name="activate_item", methods={"GET"})
     */
    public function activateUser(User $user)
    {
        // Get Current user (Admin)
        $currentUser = $this->getUser();

        if ($currentUser->hasRoles("ROLE_ADMIN")) {

            // Activate/Disactivate User (Banker)
            $user->getEnabled() ? $user->setEnabled(false) : $user->setEnabled(true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // Send Email
            $param = $user->getEnabled();
            if($param){
                // Account activated
                $emailUserActivatedTemplate =  $this->emailRepo->findOneBy(['name'=>'user_activated']);
            }else{
                // Account Desactivated
                $emailUserActivatedTemplate =  $this->emailRepo->findOneBy(['name'=>'user_desactivated']);
            }
            // Create user in CC ficodev when user activated in fibourse
            if($param) {
                $usersEvent = new UsersEvent($user, $this->getParameter('app_cc_register_endpoint'));
                $this->dispatsher->dispatch($usersEvent, UsersEvent::USER_FICO_CREATED);
            }
            return $this->successResponse($user);
        }
       
        return $this->successResponse(["status" => 401, "message" => "Unauthorized"]);
    }

    /**
     *  @Route("/updatePassword/{id}", name="edit_passwrd_user", methods={"POST"})
     */
    public function changeUserPassword(Request $request, UserPasswordHasherInterface $passwordEncoder,$id) {
        $user = $this->em->getRepository(User::class)->findOneBy(['id' => $id]);
        $data = $this->jsonDecode($request);
        $this->update($request,UserType::class,$user,$data);
        $checkPass = $passwordEncoder->isPasswordValid($user, $data['oldPassword']);
        if ($checkPass === true) {
            $user->setPassword($passwordEncoder->hashPassword($user, $data['newPassword']));
            $this->em->persist($user);
            $this->em->flush();
            return $this->successResponse(["message" => 'password successfully edit'],200);
        } else {
            return $this->successResponse(['message' => 'The current password is incorrect.'],409);
        }
    }

}
