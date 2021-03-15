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

            
            $manager->persist($mentor);
            $manager->flush();
        }

        return $this->render('security_mentor/registration_mentor.html.twig', [
            'form' => $form->createView()
        ]);

    }
}
