<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CompetitonRepository;
use Doctrine\DBAL\Driver\Connection;

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

        $programmes = $repository->findAll();

        return $this->render('homepage/programme.html.twig', ['programmes'=> $programmes, 'title'=>'Programme']);
    }

    /**
     * @Route("/competition")
     */
    public function competition() {
        return $this->render('homepage/competition.html.twig', ['title'=>'Competition']);
    }
}
