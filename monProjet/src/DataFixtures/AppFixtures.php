<?php

namespace App\DataFixtures;

use App\Entity\Rubriques;
use App\Entity\SousRubriques;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $rub1 = new Rubriques();
        $rub2 = new Rubriques();
        $rub3 = new Rubriques();
        $rub1->setnom("Instruments");
        $rub2->setnom("Materiel");
        $rub3->setnom("Partitions");
        $rub1->setphoto("Instruments.png");
        $rub2->setphoto("Materiel.png");
        $rub3->setphoto("Partitions.png");
        $manager->persist($rub1);
        $manager->persist($rub2);
        $manager->persist($rub3);

        $srub1 = new SousRubriques();
        $srub1->setnom("Cordes");
        $srub1->setphoto("Cordes.png");
        $srub1->setrubriques($rub1);
        $manager->persist($srub1);
        $srub2 = new SousRubriques();
        $srub2->setnom("Vents");
        $srub2->setphoto("Vents.png");
        $srub2->setrubriques($rub1);
        $manager->persist($srub2);
        $srub3 = new SousRubriques();
        $srub3->setnom("Claviers");
        $srub3->setphoto("Claviers.png");
        $srub3->setrubriques($rub1);
        $manager->persist($srub3);
        $srub4 = new SousRubriques();
        $srub4->setnom("Son");
        $srub4->setphoto("Son.png");
        $srub4->setrubriques($rub2);
        $manager->persist($srub4);
        $srub5 = new SousRubriques();
        $srub5->setnom("Accessoires");
        $srub5->setphoto("Accessoires.png");
        $srub5->setrubriques($rub2);
        $manager->persist($srub5);
        $srub6 = new SousRubriques();
        $srub6->setnom("Classique");
        $srub6->setphoto("Classique.png");
        $srub6->setrubriques($rub3);
        $manager->persist($srub6);
        $srub7 = new SousRubriques();
        $srub7->setnom("Rock");
        $srub7->setphoto("Rock.png");
        $srub7->setrubriques($rub3);
        $manager->persist($srub7);




        $manager->flush();
    }
}
