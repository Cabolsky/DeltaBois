<?php

namespace App\DataFixtures;

use App\Entity\Coordonnees;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CoordonneesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $coordonnees = new Coordonnees();
        $coordonnees->setAdresse('4 Rue d’Aquitaine ZA de Cramat');
        $coordonnees->setVille('40140 SOUSTONS');
        $coordonnees->setTelephone('0558411670');
        $coordonnees->setMail('Deltabois40@Orange.fr');

        $manager->persist($coordonnees);
        
        $manager->flush();
    }
}