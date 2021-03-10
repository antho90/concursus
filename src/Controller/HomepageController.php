<?php

namespace App\Controller;

use App\Entity\Competiton;
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
    public function index()
    {
        return $this->render('homepage/index.html.twig', ['mainNavHome' => true, 'title' => 'Accueil']);
    }

    /**
     * @Route("/programme")
     */
    public function programme(CompetitonRepository $repository)
    {

        $programmes = $repository->findAll();

        $competitions = $repository->findAll();
        return $this->render('homepage/programme.html.twig', ['competitions' => $competitions,'programmes' => $programmes, 'title' => 'Programme']);
    }

    /**
     * @Route("/competition/{id}")
     */
    public function competition(CompetitonRepository $repository)
    {
        $competitions = $repository->findAll();
        return $this->render('homepage/competition.html.twig', ['competitions' => $competitions,'title' => 'Competition']);
    }

    /**
     * @Route("/competition/{id}", name="competition")
     */


    public function showCompetiton($id)
    {
        $repo = $this->getDoctrine()->getRepository(Competiton::class);
        $competition = $repo->find($id);
        return $this->render('homepage/competition.html.twig', [
            'competition' => $competition
        ]);
    }

    // public function showCompetiton($id)
    // {
    //     $competition = $this->getDoctrine()
    //         ->getRepository('App:Competiton')
    //         ->find($id);

    //     if (!$competition) {
    //         throw $this->createNotFoundException('Aucune compétition ne correspond à l\'id');
    //     }

    //     return $this->render('homepage/competition.html.twig', ['title' => 'Competition']);
    // }
}
