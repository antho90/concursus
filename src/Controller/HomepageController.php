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
    public function index(CompetitonRepository $repository)
    {
        $programmes = $repository->findAll();
        
        return $this->render('homepage/index.html.twig', ['programmes' => $programmes,'mainNavHome' => true, 'title' => 'Accueil']);
    }

    /**
     * @Route("/programme")
     */
    public function programme(CompetitonRepository $repository)
    {

        $programmes = $repository->findAll();

        return $this->render('homepage/programme.html.twig', ['programmes' => $programmes, 'title' => 'Programme']);
    }

    /**
     * @Route("/competition/{id}")
     */
    public function competition(CompetitonRepository $repository, $id)
    {
        $competitions = $repository->find($id);

        return $this->render('homepage/competition.html.twig', ['competition' => $competitions,'title' => 'Competition']);
    }

    /**
     * @Route("/livevideos")
     */
    public function livevideos()
    {

        return $this->render('homepage/livevideos.html.twig', ['title' => 'livevideos']);
    }

    /**
     * @Route("/aide")
     */
    public function aide()
    {

        return $this->render('homepage/aide.html.twig', ['title' => 'aide']);
    }

}
