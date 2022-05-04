<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Service\fileUploader;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;


class UserController extends MainController
{
    /**
     * @Route("api/users", name="app_use_all" ,methods={"GET"} )
     */
    public function shoUsers(): Response
    {
        $datas = $this->em->getRepository(User::class)->findAll();
        foreach ($datas as $data) {
            $List = $data->getExperience();
            $experienceList = explode(",", $List);
            $lists ["users"] [] = ["id" => $data->getId(), "email" => $data->getEmail(), "name" => $data->getName(), "content" => $data->getContent(), "experience" => $experienceList,"image" => $data->getImage()];
        }
        return $this->successResponse($lists);
    }

    /**
     * @Route("api/users/{id}", name="get_users_id", methods={"GET"})
     */
    public function show($id)
    {
        $user = $this->em->getRepository(User::class)->find($id);
        if (isset($user)) {
            return $this->successResponse($user);
        }
    }

    /**
     * @Route("api/users", name="app_add" ,methods={"POST"} )
     */
    public function createUser(Request $request, fileUploader $fileUploader): Response
    {
        $user = new User();
        try {
            $user->setname($request->request->get('name'));
            $user->setExperience($request->request->get('experience'));
            $user->setContent($request->request->get('content'));
            $user->setEmail($request->request->get('email'));
            $file = $fileUploader->upload($request);
            if ($file != null) {
                $image = $fileUploader->ImageUploade($file);
                $user->setImage($image);
            }
            $this->em->persist($user);
            $this->em->flush();
            return $this->successResponse(["code" => 200, "message" => 'user successfully added']);
        } catch (NotEncodableValueException $e) {
            return $this->successResponse(["code" => 409, "message" => $e->getMessage()], 409);
        }
    }
}
