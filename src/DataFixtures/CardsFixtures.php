<?php

namespace App\DataFixtures;

use App\Entity\Cards;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CardsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cardsData = [
            [
                'title' => 'BOIS RONDS',
                'text' => 'Découvrez notre sélection de bois ronds, disponibles en différentes tailles pour tous vos projets. ',
                'picture' => 'cards-1.jpg',
                'details' => 'bois-rond.png',
            ],
            [
                'title' => 'BOIS BRUTS DE SCIAGE',
                'text' => 'Explorez notre gamme de bois brut de sciage, proposé en plusieurs dimensions pour répondre à vos besoins. ',
                'picture' => 'cards-2.jpg',
                'details' => 'bois-brut.png',
            ],
            [
                'title' => 'BOIS RABOTÉS',
                'text' => 'Découvrez notre bois raboté, disponible en différentes épaisseurs et finitions pour une qualité optimale ',
                'picture' => 'cards-4.jpg',
                'details' => 'bois-rabote.png',
                
            ],
            [
                'title' => 'TRAVERSES CHÊNE',
                'text' => 'Explorez nos traverses de chêne, idéales pour vos projets solides et durables, disponibles en plusieurs tailles. ',
                'picture' => 'cards-3.jpg',
                'details' => 'traverse-chene.png',
                
            ],
            [
                'title' => 'PANNEAUX BRISE-VUE',
                'text' => 'Découvrez nos panneaux brise-vue, conçus pour vous offrir à la fois intimité et esthétisme, disponibles en différentes dimensions. ',
                'picture' => 'cards-5.jpg',
                'details' => 'brise-vue.png',
            ],
            [
                'title' => 'QUINCAILLERIES',
                'text' => 'Explorez notre large sélection de quincaillerie : vis, équerres, et bien plus, pour tous vos travaux de construction et d’assemblage. ',
                'picture' => 'cards-6.jpg',
                'details' => 'quincaillerie.png',
            ],
            [
                'title' => 'ENTRETIEN DU BOIS',
                'text' => 'Découvrez nos produits entretien bois et nos cales pour terrasse, conçus pour préserver la qualité de vos installations extérieures. ',
                'picture' => 'cards-7.jpg',
                'details' => 'produit-divers.png',
            ],
        ];

        foreach ($cardsData as $data) {
            $cards = new Cards();
            $cards->setTitle($data['title']);
            $cards->setText($data['text']);
            $cards->setPicture($data['picture']);
            $cards->setDetails($data['details']);

            $manager->persist($cards);
        }

        $manager->flush();
    }
}
