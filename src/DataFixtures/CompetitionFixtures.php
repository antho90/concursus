<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Competiton;

class CompetitionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 5; $i++){
            $competition = new Competiton();
            $competition->setNom("Competition $i")
                        ->setDate(new \DateTime());

            $manager->persist($competition);
        }

        $manager->flush();
    }
}
