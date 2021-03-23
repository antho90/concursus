<?php

namespace App\Controller;

use App\Form\NewUserType;
use App\Entity\Competiton;
use App\Entity\GeneralUser;
use App\Form\EditUsersType;
use App\Form\CompetitionType;
use App\Form\EditCompetitionType;
use Doctrine\DBAL\Driver\Connection;
use App\Repository\CompetitonRepository;
use App\Repository\GeneralUserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
     * @Route("/admins", name="admins")
     */
    public function adminsList(GeneralUserRepository $users){
        return $this->render('admin/adminsList.html.twig', ['users' => $users->findBy(
            array('modif' =>'1')
        )]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/juges", name="juges")
     */
    public function jugesList(GeneralUserRepository $users){
        return $this->render('admin/jugesList.html.twig', ['users' => $users->findBy(
            array('modif' =>'1')
        )]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/mentors", name="mentors")
     */
    public function mentorsList(GeneralUserRepository $users){
        return $this->render('admin/mentorsList.html.twig', ['users' => $users->findBy(
            array('modif' =>'1')
        )]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/competitionsList", name="competitionsList")
     */
    public function competitionsList(CompetitonRepository $competitions){
        return $this->render('admin/competitionsList.html.twig', ['competitions' => $competitions->findAll()]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/competition/{id}/classement", name="classement_competition")
     */
    public function classement_competition(CompetitonRepository $competitions){
        return $this->render('admin/classement_competition.html.twig', ['competitions' => $competitions->findAll()]);
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

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/competitionsList/modifier/{id}", name="modifier_competition")
     */
    public function editCompetition(Competiton $competition, Request $request){
        $form = $this->createForm(EditCompetitionType::class, $competition);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager ->persist($competition);
            $entityManager->flush();

            $this->addFlash('message', 'Compétition modifié avec succès');
            return $this->redirectToRoute('competitionsList');
        }

        return $this->render('admin/editcompetition.html.twig', [
            'competitionForm' => $form->createView()
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/deleteUser/{id}", name="delete_utilisateur")
     * @return RedirectResponse
     */
    public function deleteUser(GeneralUser $user): RedirectResponse{
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('utilisateurs');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/deleteCompetition/{id}", name="delete_competition")
     * @return RedirectResponse
     */
    public function deleteCompetition(Competiton $competition): RedirectResponse{
        $em = $this->getDoctrine()->getManager();
        $em->remove($competition);
        $em->flush();

        return $this->redirectToRoute('competitionsList');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/new", name="new_utilisateur")
     * @return Response
     */
    public function newUser(Request $request,UserPasswordEncoderInterface $encoder): Response{
        $user = new GeneralUser;
        $form = $this->createForm(NewUserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);

            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('utilisateurs');

        }
        return $this->render('admin/new.html.twig', [
            'userForm' => $form->createView()
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/new_competition", name="new_competition")
     * @return Response
     */
    public function newCompetition(Request $request): Response{
        $competition = new Competiton;
        $form = $this->createForm(CompetitionType::class, $competition);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($competition);
            $em->flush();

            return $this->redirectToRoute('competitionsList');

        }
        return $this->render('admin/newCompetition.html.twig', [
            'competitionForm' => $form->createView()
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/manage_competition", name="manage_competition")
     */
    public function manage_competition(){
        
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/new_competiton", name="new_competiton")
     */
    public function new_competiton(){

    }

}
