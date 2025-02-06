<?php

namespace App\DataFixtures;

use App\Entity\Produits; 
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProduitsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $nomsProduits = [
            'BOIS RONDS',
            'BOIS BRUTS DE SCIAGE',
            'BOIS RABOTÉS',
            'TRAVERSES CHÊNE',
            'PANNEAUX BRISE-VUE',
            'QUINCAILLERIES',
            'ENTRETIEN DU BOIS',
            'PRODUITS DERIVÉS',
        ];

        foreach ($nomsProduits as $nom) {
            $produit = new Produits(); 
            $produit->setName($nom);

            $manager->persist($produit); 
        }

        $manager->flush();
    }
}
