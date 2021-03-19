<?php

namespace App\Controller;

use App\Repository\GeneralUserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




class AdminController extends AbstractController
{


    /**
     * @Route("/utilisateurs", name="utilisateurs")
     */
    public function usersList(GeneralUserRepository $users){
        return $this->render('admin/users.html.twig', ['users' => $users->findAll()]);
    }
}
