<?php

namespace App\Controller;

use App\Entity\Mentor;
use App\Form\RegistrationMentorType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class SecurityMentorController extends AbstractController
{
    /**
     * @Route("/inscription/mentor", name ="security_registration_mentor")
     */
    public function registrationMentor(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder) {

        $mentor = new Mentor();

        $form = $this->createForm(RegistrationMentorType::class, $mentor);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form-> isValid()) {

            $hash = $encoder->encodePassword($mentor, $mentor->getPassword());

            $mentor->setPassword($hash);
            
            $manager->persist($mentor);
            $manager->flush();

            return $this->redirectToRoute('security_login_mentor');
        }

        return $this->render('securityMentor/registrationMentor.html.twig', [
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/connexion/mentor", name="security_login_mentor")
     */

    

    public function loginMentor(){
        return $this->render('securityMentor/loginMentor.html.twig');
    }

     /**
     * @Route("/deconnexion/mentor", name="security_logout_mentor")
     */
    public function logoutMentor(){
    }
}
