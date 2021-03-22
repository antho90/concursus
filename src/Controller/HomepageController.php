<?php

namespace App\Controller;

use App\Form\NewUserType;
use App\Entity\Competiton;
use App\Entity\GeneralUser;
use App\Form\EditUsersType;
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

}
