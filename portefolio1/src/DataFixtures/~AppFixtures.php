<?php

namespace App\DataFixtures;

use App\Entity\Projets;
use App\Entity\Comppetences;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        // Projet 1
        $projet = new Projets();
        $projet ->setNom("Cadexconseil");
        $projet ->setLien("");
        $projet ->setDescription("");
        $manager->persist($projet);

        // Comppetences
        $skill = new Comppetences();
        $skill ->setNom("HTML");
        $skill ->setType("langage");
        $manager->persist($skill);
        

        $manager->flush();
    }
}
