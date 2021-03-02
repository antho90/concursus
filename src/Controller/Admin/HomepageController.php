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

}