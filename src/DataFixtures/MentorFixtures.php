<?php

namespace App\DataFixtures;

use App\Entity\Equipe;
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
            for($e = 1; $e <= 5; $e++){
                $equipe = new Equipe();
                $equipe ->setNom("Equipe$e")
                        ->setStructure("Cacao$e")
                        ->setVille("chocolat$e");
            }            
            $hash = $this->passwordEncoder->encodePassword($generalUser, $generalUser->getPassword());
            $generalUser->setPassword($hash);
            $generalUser->addEquipe($equipe);
            $manager->persist($generalUser);
            $manager->persist($equipe);
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
