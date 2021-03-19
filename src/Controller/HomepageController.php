<?php

namespace App\Controller;

use App\Entity\Competiton;
use App\Entity\GeneralUser;
use App\Form\EditUsersType;
use Doctrine\DBAL\Driver\Connection;
use App\Repository\CompetitonRepository;
use App\Repository\GeneralUserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/utilisateurs", name="utilisateurs")
     */
    public function usersList(GeneralUserRepository $users){
        return $this->render('admin/users.html.twig', ['users' => $users->findBy(
            array('modif' =>'1')
        )]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/utilisateurs/modifier/{id}", name="modifier_utilisateur")
     */
    public function editUser(GeneralUser $user, Request $request){
        $form = $this->createForm(EditUsersType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager ->persist($user);
            $entityManager->flush();

            $this->addFlash('message', 'Utilisateur modifié avec succès');
            return $this->redirectToRoute('utilisateurs');
        }

        return $this->render('admin/edituser.html.twig', [
            'userForm' => $form->createView()
        ]);
    }

}
