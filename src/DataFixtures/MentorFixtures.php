<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\GeneralUser;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class MentorFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
{
    $this->passwordEncoder = $passwordEncoder;        
}

    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 5; $i++){
            $generalUser = new GeneralUser();
            $generalUser->setNom("MentorNom$i")
                        ->setPrenom("MentorPrenom$i")
                        ->setEmail("Mentor$i@gmail.com")
                        ->setPassword("rootroot$i")
                        ->setStructure("Toto$i")
                        ->setRoles(["ROLE_MENTOR"]);
                        
            $hash = $this->passwordEncoder->encodePassword($generalUser, $generalUser->getPassword());
            $generalUser->setPassword($hash);
            $manager->persist($generalUser);
        }

        $manager->flush();
    }

    public function getPasswordEncoder() {
        return $this->passwordEncoder;
    }
 
    public function setPasswordEncoder($passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
        return $this;
    }
}
