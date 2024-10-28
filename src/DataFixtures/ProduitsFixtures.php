<?php

namespace App\DataFixtures;

use App\Entity\Produits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProduitsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $produits = [
            ['id' => 1, 'name' => 'BOIS RONDS'],
            ['id' => 2, 'name' => 'BOIS BRUTS DE SCIAGE'],
            ['id' => 3, 'name' => 'BOIS RABOTÉS'],
            ['id' => 4, 'name' => 'TRAVERSES CHÊNE'],
            ['id' => 11, 'name' => 'PANNEAUX BRISE-VUE'],
            ['id' => 12, 'name' => 'QUINCAILLERIES'],
            ['id' => 13, 'name' => 'ENTRETIEN DU BOIS'],
            ['id' => 14, 'name' => 'PRODUITS DERIVÉS'],
        ];

        foreach ($produits as $produitsData) {
            $produit = new Produits();
            $produit->setId($produitsData['id']);
            $produit->setName($produitsData['name']);
            $manager->persist($produit);
        }

        $manager->flush();
    }
}  
