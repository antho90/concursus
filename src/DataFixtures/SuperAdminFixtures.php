<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\GeneralUser;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SuperAdminFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
{
    $this->passwordEncoder = $passwordEncoder;        
}
    public function load(ObjectManager $manager)
    {
        
        $generalUser = new GeneralUser();
        $generalUser->setNom("Admin")
                    ->setPrenom("Super")
                    ->setEmail("admin@gmail.com")
                    ->setPassword("rootroot")
                    ->setRoles(["ROLE_SUPER_ADMIN"])
                    ->setModif(false);

        $hash = $this->passwordEncoder->encodePassword($generalUser, $generalUser->getPassword());
        $generalUser->setPassword($hash);

        $manager->persist($generalUser);
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
