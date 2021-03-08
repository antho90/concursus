<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CompetitonRepository;

class HomepageController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index() {
        return $this->render('homepage/index.html.twig', ['mainNavHome'=>true, 'title'=>'Accueil']);
    }

    /**
     * @Route("/programme")
     */
    public function programme(CompetitonRepository $repository) {

        $competitions = $repository->findAll();

        return $this->render('homepage/programme.html.twig', ['competitions'=> $competitions, 'title'=>'Programme']);
    }
}
