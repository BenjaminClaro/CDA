<?php

namespace App\DataFixtures;

use App\Entity\Fournisseurs;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $f1 = new Fournisseurs();

        $f1->setnom("testflute");
        $f1->setreference("1234");

        $manager->persist($f1);

        $manager->flush();
    }
}
