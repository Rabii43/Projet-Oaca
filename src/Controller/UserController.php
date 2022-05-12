<?php

namespace App\Controller;

use ApiPlatform\Core\DataProvider\PaginatorInterface;
use App\Entity\User;
use App\Event\UsersEvent;
use App\Form\UserType;

//use App\Service\fileUploader;
use App\Service\FileUploader;
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
     * @Route("/users", name="get_all_users", methods={"GET"})
     */
    public function shoUsers(): Response
    {
        $lists = [];
        $datas = $this->em->getRepository(User::class)->findAll();
        foreach ($datas as $data) {
            $lists[] = ["id" => $data->getId(), "email" => $data->getEmail(),
                "username" => $data->getUsername(), "firstname" => $data->getFirstname(),
                "lastname" => $data->getLastname(), "image" => $data->getImage(),
                "active" => $data->getActive(), "roles" => $data->getRoles()];
        }
        return $this->successResponse($lists);
    }

    /**
     * @Route("/users/{id}", name="get_users", methods={"GET"})
     */
    public function show($id)
    {
        $lists = [];
        $user = $this->em->getRepository(User::class)->findBy(["id"=>$id]);
        if (isset($user)) {
            foreach ($user as $data) {
                $lists [] = ["id" => $data->getId(),
                    "email" => $data->getEmail(),
                    "username" => $data->getUsername(), "firstname" => $data->getFirstname(),
                    "lastname" => $data->getLastname(),
                    "image" => $data->getImage(), "active" => $data->getActive(),
                    "roles" => $data->getRoles()];
            }
            return $this->successResponse($lists);
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
            $this->insert($request, UserType::class, $user, $data);
            $user->setPassword($this->passwordEncoder->encodePassword($user, $data['password']));
            $this->em->persist($user);
            $this->em->flush();
            return $this->successResponse($data);
        } catch (NotEncodableValueException $e) {
            return $this->successResponse(["code" => 409, "message" => $e->getMessage()], 409);
        }
    }

    /**
     * @Route("/users/{id}", name="edit_user", methods={"POST","PUT"})
     */
    public function edit(Request $request, $id, HeaderAuthGenerator $headerAuthGenerator, FileUploader $fileUploader, HttpClientInterface $client)
    {
        $data = $this->jsonDecode($request);
        $user = $this->em->getRepository(User::class)->find($id);
        $email = $request->request->get('email');
        $firstName = $request->request->get('firstName');
        $lastName = $request->request->get('lastName');
        $phone = $request->request->get('phone');
        $roles = $request->request->get('roles');
        try {
            $this->update($request, UserType::class, $user, $data);
            $file = $fileUploader->upload($request);
            if ($file != null) {
                $user->setImage($file['image']);
            }

//                $user->setRoles(array('ROLE_ADMIN','ROLE_USER'));
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
            $this->em->persist($user);
            $this->em->flush();
            return $this->successResponse(["code" => 200, "message" => 'user successfully edited']);
        } catch (NotEncodableValueException $e) {
            return $this->successResponse(["code" => 409, "message" => $e->getMessage()], 409);
        }
    }


    /**
     * @Route("/users/{id}", name="delete_user", methods={"DELETE"})
     */
    public function delete($id, HeaderAuthGenerator $headerAuthGenerator, HttpClientInterface $client)
    {
        $user = $this->em->getRepository(User::class)->find($id);
        if (isset($user)) {
            $this->em->remove($user);
            $this->em->flush();
            return $this->successResponse(["code" => 200, "message" => 'user successfully deleted'], 200);
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

        if ($currentUser) {

            // Activate/Disactivate User (Banker)
            $user->getActive() ? $user->setActive(false) : $user->setActive(true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // Send Email
            $param = $user->getActive();
//            if($param){
//                // Account activated
//                $emailUserActivatedTemplate =  $this->emailRepo->findOneBy(['name'=>'user_activated']);
//            }else{
//                // Account Desactivated
//                $emailUserActivatedTemplate =  $this->emailRepo->findOneBy(['name'=>'user_desactivated']);
//            }
//            // Send email to user when account activated/desactivated
//            $emailEvent = new EmailEvent($user,$emailUserActivatedTemplate,$param);
//            $this->dispatsher->dispatch($emailEvent,EmailEvent::USER_ACTIVATED);
//
//            // Create user in CC ficodev when user activated in fibourse
//            if($param) {
//                $usersEvent = new UsersEvent($user, $this->getParameter('app_cc_register_endpoint'));
//                $this->dispatsher->dispatch($usersEvent, UsersEvent::USER_FICO_CREATED);
//            }
            return $this->successResponse($user);
        }

        return $this->successResponse(["status" => 401, "message" => "Unauthorized"]);
    }

    /**
     * @Route("/updatePassword/{id}", name="edit_passwrd_user", methods={"POST"})
     */
    public function changeUserPassword(Request $request, UserPasswordHasherInterface $passwordEncoder, $id)
    {
        $user = $this->em->getRepository(User::class)->findOneBy(['id' => $id]);
        $data = $this->jsonDecode($request);
        $this->update($request, UserType::class, $user, $data);
        $checkPass = $passwordEncoder->isPasswordValid($user, $data['oldPassword']);
        if ($checkPass === true) {
            $user->setPassword($passwordEncoder->hashPassword($user, $data['newPassword']));
            $this->em->persist($user);
            $this->em->flush();
            return $this->successResponse(["message" => 'password successfully edit'], 200);
        } else {
            return $this->successResponse(['message' => 'The current password is incorrect.'], 409);
        }
    }

}
