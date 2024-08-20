<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $produit1 = new Produits();

        $produit1->setproduit_nom("testflute");

        $manager->flush();
    }
}
