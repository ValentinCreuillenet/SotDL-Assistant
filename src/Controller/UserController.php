<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function dashboard(Request $request): Response
    {
        return $this->render('dashboard.html.twig'
        );
    }

    #[Route('/user/settings', name: 'user_settings')]
    public function userSettings(Request $request): Response
    {
        return $this->render('user/user_settings.html.twig'
        );
    }

    #[Route('/user/update', name: 'user_update', methods: ['POST'])]
    public function updateUser(UserInterface $user)
    {

        $em=$this->getDoctrine()->getManager();

        if($_POST['mode'] == "edit"){
            $user->setRoles(array('ROLE_USER','ROLE_ADMIN'));
            $em->persist($user);
            $em->flush();
        }

        if($_POST['mode'] == "browse"){
            $user->setRoles(array('ROLE_USER'));
            $em->persist($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_settings');

    }

}
