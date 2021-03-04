<?php
namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/admin") */
class HomepageController extends AbstractController {

    /**
     * @Route("/")
     */
    public function index() {
        return $this->render('admin/index.html.twig', ['mainNavAdmin' => true, 'title' => 'Espace Admin']);
    }

    /**
     * @Route("/creation_competition")
     */
    public function creation_competition() {
        return $this->render('admin/creation_competition.html.twig');
    }

    /**
     * @Route("/CRUD_mentor")
     */
    public function CRUD_mentor() {
        return $this->render('admin/CRUD_mentor.html.twig');
    }

}