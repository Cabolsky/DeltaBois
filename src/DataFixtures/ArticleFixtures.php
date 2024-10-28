<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $articles = [
            [
                'id' => 1,
                'title' => 'UNE HISTOIRE DE FAMILLE',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'picture' => 'assets/images/picture-3.jpg'
            ],
            [
                'id' => 2,
                'title' => 'LOCALISATION ET SIEGE',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.',
                'picture' => 'assets/images/picture-3.jpg'
            ],
            [
                'id' => 3,
                'title' => 'DECOUVREZ NOS PRODUITS',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.',
                'picture' => 'assets/images/picture-3.jpg'            ],
            [
                'id' => 4,
                'title' => 'SECTEUR ET LIVRAISON',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.',
                'picture' => 'assets/images/picture-3.jpg'            ],
            [
                'id' => 5,
                'title' => 'SDECOUVREZ NOTRE MACHINE POUR LES TERRASSES',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.',
                'picture' => 'assets/images/picture-3.jpg'            ],
        ];

        foreach ($articles as $articleData) {
            $article = new Article();
            $article->setId($articleData['id']);
            $article->setTitle($articleData['title']);
            $article->setText($articleData['text']);
            $article->setPicture($articleData['picture']);
            $manager->persist($article);
        }

        $manager->flush();
    }
}