<?php

namespace App\DataFixtures;

use App\Entity\Coordonnees;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CoordonneesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $coordonneesData = [
            [
                'adresse' => '4 Rue d’Aquitaine ZA de Cramat',
                'codePostal' => '40140 Soustons',
                'phone' => '0558411670',
                'mail' => 'Deltabois40@Orange.fr',
            ],
        ];

        foreach ($coordonneesData as $data) {
            $coordonnees = new Coordonnees();

            $coordonnees->setAdresse($data['adresse']);
            $coordonnees->setCodePostal($data['codePostal']);
            $coordonnees->setPhone($data['phone']);
            $coordonnees->setMail($data['mail']);

            $manager->persist($coordonnees);
        }

        $manager->flush();
    }
}
