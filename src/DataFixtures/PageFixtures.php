<?php

// src/DataFixtures/PageFixtures.php

namespace App\DataFixtures;

use App\Entity\Page;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Tableau contenant les données des pages
        $pagesData = [
            [
                'name' => 'Accueil',
                'slug' => 'accueil',
            ],
            [
                'name' => 'Produits',
                'slug' => 'produits',
            ],
            [
                'name' => 'Contact',
                'slug' => 'contact',
            ],
        ];

        // Boucle à travers le tableau pour créer des pages
        foreach ($pagesData as $data) {
            $page = new Page();
            $page->setName($data['name']);
            $page->setSlug($data['slug']);

            $manager->persist($page);
        }

        $manager->flush();
    }
}
