<?php

namespace App\DataFixtures;

use App\Entity\Pub;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PubFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $pub1 = new Pub();
        $pub1->setTitle("Bienvenue sur le nouveau site de DeltaBois ! Retrouvez toutes les informations sur nos produits et services, et n’hésitez pas à nous contacter pour toute demande.");
        $pub1->setColor("#8A8A14"); 
        $pub1->setColorName("Deltabois");
        $pub1->setIsActive(true); 

        $pub2 = new Pub();
        $pub2->setTitle("Tout DeltaBois derrière l’ASS Rugby pour les phases finales du championnat de France ! Allez les Bleus, on croit en vous !");
        $pub2->setColor("#1A289F");
        $pub2->setColorName("ASS Rugby");
        $pub2->setIsActive(false); 

        $pub3 = new Pub();
        $pub3->setTitle("Participez au tournoi P100 de BluePadel le samedi 6 septembre 2025 ! Inscrivez-vous vite et venez jouer !");
        $pub3->setColor("#9F5334"); 
        $pub3->setColorName("BluePadel");
        $pub3->setIsActive(false);

        $pub4 = new Pub();
        $pub4->setTitle("Chez DeltaBois, on soutient Octobre Rose ! Parce qu’ensemble, on est plus forts pour lutter contre le cancer du sein. Pensées et soutien à toutes les guerrières.");
        $pub4->setColor("#F98FB2"); 
        $pub4->setColorName("Octonre Rose");
        $pub4->setIsActive(false);
        
        $pub5 = new Pub();
        $pub5->setTitle("Promotion sur les traverses en chêne chez DeltaBois ! Profitez de prix réduits pour vos projets de jardin. Offre limitée, dépêchez-vous !");
        $pub5->setColor("#D33346"); 
        $pub5->setColorName("Alerte");
        $pub5->setIsActive(false);

        $manager->persist($pub1);
        $manager->persist($pub2);
        $manager->persist($pub3);
        $manager->persist($pub4);
        $manager->persist($pub5);

        $manager->flush();
    }
}
