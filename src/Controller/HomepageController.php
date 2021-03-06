<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Form\NewUserType;
use App\Entity\Competiton;
use App\Entity\GeneralUser;
use App\Form\EditUsersType;
use App\Form\NewEquipeType;
use App\Form\EditEquipeType;
use App\Form\CompetitionType;
use App\Form\JugeEditEquipeType;
use App\Form\EditCompetitionType;
use App\Form\InscriptionEquipeType;
use App\Repository\EquipeRepository;
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
    public function index(CompetitonRepository $repository, EquipeRepository $equipes)
    {
        $programmes = $repository->findAll();
        
        return $this->render('homepage/index.html.twig', ['programmes' => $programmes,'mainNavHome' => true, 'title' => 'Accueil','competitions' => $repository->findAll(),'equipes' => $equipes->findAll()]);
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
     * @Route("/manage/utilisateurs", name="utilisateurs")
     */
    public function usersList(GeneralUserRepository $users){

        // affichage des utilisateur si dans la bdd le champs modif = 1 

        return $this->render('admin/users.html.twig', ['users' => $users->findBy(
            array('modif' =>'1')
        )]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/manage/admins", name="admins")
     */
    public function adminsList(GeneralUserRepository $users){

        // affichage des admins si dans la bdd le champs modif = 1 

        return $this->render('admin/adminsList.html.twig', ['users' => $users->findBy(
            array('modif' =>'1')
        )]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/manage/juges", name="juges")
     */
    public function jugesList(GeneralUserRepository $users){

        // affichage des juges si dans la bdd le champs modif = 1 

        return $this->render('admin/jugesList.html.twig', ['users' => $users->findBy(
            array('modif' =>'1')
        )]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/manage/mentors", name="mentors")
     */
    public function mentorsList(GeneralUserRepository $users){

        // affichage des mentors si dans la bdd le champs modif = 1 

        return $this->render('admin/mentorsList.html.twig', ['users' => $users->findBy(
            array('modif' =>'1')
        )]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/manage/competitions", name="competitionsList")
     */
    public function competitionsList(CompetitonRepository $competitions){
        return $this->render('admin/competitionsList.html.twig', ['competitions' => $competitions->findAll()]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/manage/equipes", name="equipes")
     */
    public function equipeList(EquipeRepository $equipes){
        return $this->render('admin/adminEquipesList.html.twig', ['equipes' => $equipes->findAll()]);
    }

    /**
     * @IsGranted("ROLE_JUGE")
     * @Route("/juge/equipes", name="juge_equipes")
     */
    public function jugeEquipeList(CompetitonRepository $competitions, EquipeRepository $equipes){
        return $this->render('admin/equipesList.html.twig', ['competitions' => $competitions->findAll(),'equipes' => $equipes->findAll()]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/juge/competition/{id}/equipes", name="note_equipe")
     */
    public function note_equipe(CompetitonRepository $repository, $id, EquipeRepository $equipes){

        // affichage classement equipe par competitions

        $competitions = $repository->find($id);
        $Allcompetions = $repository->findAll();

        return $this->render('admin/noteEquipe.html.twig', ['competition' => $competitions,'competitions' => $Allcompetions,'equipes' => $equipes->findAll()]);
    }

    /**
     * @IsGranted("ROLE_MENTOR")
     * @Route("/mentor/equipes", name="mentor_equipes")
     */
    public function mentorequipeList(EquipeRepository $equipes){

        return $this->render('admin/equipesList.html.twig', ['equipes' => $equipes->findAll()]);
    } 

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/competition/{id}/classement", name="classement_competition")
     */
    public function classement_competition(CompetitonRepository $repository, $id, EquipeRepository $equipes){

        // affichage classement equipe par competitions

        $competitions = $repository->find($id);
        $Allcompetions = $repository->findAll();

        return $this->render('admin/classement_competition.html.twig', ['competition' => $competitions,'competitions' => $Allcompetions,'equipes' => $equipes->findAll()]);
    }

    /**
     * @IsGranted("ROLE_MENTOR")
     * @Route("/mentor/competition/{id}/classement", name="mentor_classement_competition")
     */
    public function mentor_classement_competition(CompetitonRepository $repository, $id, EquipeRepository $equipes){

        // affichage classement equipe par competitions

        $competitions = $repository->find($id);
        $Allcompetions = $repository->findAll();

        return $this->render('mentor/mentor_classement_competition.html.twig', ['competition' => $competitions,'competitions' => $Allcompetions,'equipes' => $equipes->findAll()]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/classement/général", name="classement_general")
     */
    public function classementGeneral(CompetitonRepository $competitions, EquipeRepository $equipes){
        return $this->render('admin/classementgeneral.html.twig', ['competitions' => $competitions->findAll(),'equipes' => $equipes->findAll()]);
    }

    /**
     * @IsGranted("ROLE_MENTOR")
     * @Route("mentor/classement/général", name="mentor_classement_general")
     */
    public function mentorClassementGeneral(CompetitonRepository $repository, EquipeRepository $equipes){

        $competitions = $repository->findAll();

        return $this->render('mentor/mentorClassementgeneral.html.twig', ['competitions' => $competitions,'equipes' => $equipes->findAll()]);
    }



    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/utilisateurs/modifier/{id}", name="modifier_utilisateur")
     */
    public function editUser(GeneralUser $user, Request $request){

        // création formulaire

        $form = $this->createForm(EditUsersType::class, $user);
        $form->handleRequest($request);

        // si le formulaire est correct

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager ->persist($user);
            $entityManager->flush();

            // message de success

            $this->addFlash('success', 'Utilisateur modifié avec succès');
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

        // création formulaire

        $form = $this->createForm(EditCompetitionType::class, $competition);
        $form->handleRequest($request);

        // si le formulaire est correct

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager ->persist($competition);
            $entityManager->flush();

            // message de success

            $this->addFlash('success', 'Compétition modifié avec succès');
            return $this->redirectToRoute('competitionsList');
        }

        return $this->render('admin/editcompetition.html.twig', [
            'competitionForm' => $form->createView()
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/equipes/{id}/modifier", name="modifier_equipe")
     */
    public function editEquipe(Equipe $equipe, Request $request, EquipeRepository $repository, $id){

        // On récupère l'équipe par l'id

        $equipes = $repository->find($id);

        // création formulaire

        $form = $this->createForm(EditEquipeType::class, $equipe);
        $form->handleRequest($request);

        // si le formulaire est correct

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager ->persist($equipe);
           // $entityManager ->persist($competition);
            $entityManager->flush();

            // message de success

            $this->addFlash('success', 'Equipe modifié avec succès');
            return $this->redirectToRoute('equipes');
        }

        return $this->render('admin/editequipe.html.twig', ['equipe' => $equipes,
            'equipeForm' => $form->createView()
        ]);
    }

    /**
     * @IsGranted("ROLE_JUGE")
     * @Route("/juge/equipes/{id}/modifier", name="juge_modifier_equipe")
     */
    public function jugeEditEquipe(Equipe $equipe, Request $request, EquipeRepository $repository, $id): Response{

        // On récupère l'équipe par l'id
        
        $equipes = $repository->find($id);

        // création formulaire

        $form = $this->createForm(JugeEditEquipeType::class, $equipe);
        $form->handleRequest($request);

        // si le formulaire est correct

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager ->persist($equipe);
           // $entityManager ->persist($competition);
            $entityManager->flush();

            // message de success

            $this->addFlash('success', 'Note ajouté avec succès');
            return $this->redirectToRoute('juge_equipes');
        }

        return $this->render('admin/editequipe.html.twig', ['equipe' => $equipes,
            'equipeForm' => $form->createView()
        ]);
    }

    /**
     * @IsGranted("ROLE_MENTOR")
     * @Route("/mentor/equipes/{id}/modifier", name="mentor_modifier_equipe")
     */
    public function mentoreditEquipe(Equipe $equipe, Request $request, EquipeRepository $repository, $id){

        // On récupère l'équipe par l'id

        $equipes = $repository->find($id);

        // création formulaire

        $form = $this->createForm(EditEquipeType::class, $equipe);
        $form->handleRequest($request);

        // si le formulaire est correct

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager ->persist($equipe);
           // $entityManager ->persist($competition);
            $entityManager->flush();

            // message de success

            $this->addFlash('success', 'Equipe modifié avec succès');
            return $this->redirectToRoute('mentor_equipes');
        }

        return $this->render('admin/editequipe.html.twig', ['equipe' => $equipes,
            'equipeForm' => $form->createView()
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

        $this->addFlash('success', 'Votre utilisateur à bien été supprimer.');

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

        $this->addFlash('success', 'Votre compétition à bien été supprimer.');

        return $this->redirectToRoute('competitionsList');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/deleteEquipe/{id}", name="delete_equipe")
     * @return RedirectResponse
     */
    public function deleteEquipe(Equipe $equipe): RedirectResponse{
        $em = $this->getDoctrine()->getManager();
        $em->remove($equipe);
        $em->flush();

        $this->addFlash('success', 'Votre équipe à bien été supprimer.');

        return $this->redirectToRoute('equipes');
    }

    /**
     * @IsGranted("ROLE_MENTOR")
     * @Route("mentor/deleteEquipe/{id}", name="mentor_delete_equipe")
     * @return RedirectResponse
     */
    public function mentorDeleteEquipe(Equipe $equipe): RedirectResponse{
        $em = $this->getDoctrine()->getManager();
        $em->remove($equipe);
        $em->flush();

        $this->addFlash('success', 'Votre équipe à bien été supprimer.');

        return $this->redirectToRoute('mentor_equipes');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/new", name="new_utilisateur")
     * @return Response
     */
    public function newUser(Request $request,UserPasswordEncoderInterface $encoder): Response{

        // ajout d'un nouvel utilisateur
        
        $user = new GeneralUser;

         // création formulaire

        $form = $this->createForm(NewUserType::class, $user);
        $form->handleRequest($request);

        // si le formulaire est correct

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // encodage du mot de passe

            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);

            $em->persist($user);
            $em->flush();

            // message de success

            $this->addFlash('success', 'Votre nouvel utilisateur à bien été enregistré.');

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

         // ajout d'une nouvelle compétition

        $competition = new Competiton;

        // création formulaire

        $form = $this->createForm(CompetitionType::class, $competition);
        $form->handleRequest($request);

        // si le formulaire est correct

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($competition);
            $em->flush();

            // message de success

            $this->addFlash('success', 'Votre compétition à bien été enregistré.');

            return $this->redirectToRoute('competitionsList');

        }
        return $this->render('admin/newCompetition.html.twig', [
            'competitionForm' => $form->createView()
        ]);
    }

    /**
     * @IsGranted("ROLE_MENTOR")
     * @Route("/competition/{id}/inscription_equipe", name="inscription_equipe")
     * @return Response
     */
    public function inscriptionCompetition(EquipeRepository $equipeRepository, CompetitonRepository $repository, Competiton $competition, Request $request): Response{

        #
        # On récupère l'utilisateur courant 
        #
        $gu = $this->getUser();

        #
        # Puis son ID
        #
        $gu = $gu->getId();


        // $equipe = $gu->getEquipes();

        // $equipe = new Equipe();

        //$repository->find
        //$gu->getEquipes();
        //$generalusers = $generalUserRepository->findByMentor();
        //  echo (gettype($em->findByMentor($gu)));
        //  echo( $em->findByMentor($gu));

        #
        #On récupère une array qui contient toutes les equipes selon le mentor connecté
        #
        $equipes = $equipeRepository->findMentor($gu);

        dump($competition);

        #
        # Pour chaque equipe dans le tableau equipes je l'ajoute à compétitions (en tant que #collection)
        #
        foreach($equipes as $equipe){
            $competition->getEquipe()->add($equipe);
            dump($competition);
        }
        // $competition->getEquipe()->add($equipes);

        $form = $this->createForm(InscriptionEquipeType::class, $competition);

        #
        # On modifie le field "equipe" du formulaire et on lui passe l'array contenu dans Equipe, compétition. (à vérifier)
        #
        $form->get('equipe')->setData($competition->getEquipe()->getValues());



        //TODO: Créer le forum ici et essayer de passer $gu à la query


        //$gu = $this->getUser();
        //$competition->setEquipe($gu->getEquipes());
        //$competition->setEquipe($equipe);
        //$equipe->setCompetitons($competition);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager ->persist($competition);
            $entityManager->flush();

            $this->addFlash('success', 'Votre équipe est inscrite à cette compétition');
            return $this->redirectToRoute('app_homepage_programme');
        }

        return $this->render('mentor/InscriptionEquipe.html.twig', [
            'InscriptionEquipeForm' => $form->createView()
        ]);
    }

  
    /**
     * @IsGranted("ROLE_MENTOR")
     * @Route("/mentor/equipe/new", name="new_equipe")
     * @return Response
     */
    public function newEquipe(Request $request): Response{

        // On récupère l'utilisitateur connecté à la session

        $generaluser = $this->getUser();

         // ajout d'une nouvelle equipe

        $equipe = new Equipe;

         // création formulaire
        
        $form = $this->createForm(NewEquipeType::class, $equipe);
        $form->handleRequest($request);

          // si le formulaire est correct

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $equipe->addGeneraluser($generaluser);

            $em->persist($equipe);
            $em->flush();

            // message de success

            $this->addFlash('success', 'Votre équipe à bien été enregistré.');

            return $this->redirectToRoute('app_homepage_programme');

        }
        return $this->render('mentor/newEquipe.html.twig', [
            'equipeForm' => $form->createView()
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
