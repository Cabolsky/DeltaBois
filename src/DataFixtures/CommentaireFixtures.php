<?php

namespace App\DataFixtures;

use App\Entity\Commentaire;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CommentaireFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $commentaire1 = new Commentaire();
        $commentaire1->setTitle('SPÉCIALISTE BOIS');
        $commentaire1->setText('Chez DeltaBois, le bois, c’est notre passion depuis 1993 ! Du bois traité de qualité, des conseils avisés et un service aux petits soins : on est là pour vous aider à réaliser tous vos projets, pro ou perso, avec des matériaux faits pour durer.');
        $manager->persist($commentaire1);

        $commentaire2 = new Commentaire();
        $commentaire2->setTitle('UNE HISTOIRE DE FAMILLE');
        $commentaire2->setText('Ici, c’est une affaire de famille ! Jean-Pierre a lancé DeltaBois en 1993, et aujourd’hui, c’est son fils Hugo qui tient la barre. Mais l’esprit reste le même : simplicité, confiance et proximité. On travaille main dans la main, toujours avec le sourire !');
        $manager->persist($commentaire2);

        $commentaire3 = new Commentaire();
        $commentaire3->setTitle('VOUS LIVRER, C’EST NOTRE MISSION');
        $commentaire3->setText('Besoin de bois ? On s’occupe de tout ! Christophe, notre chauffeur-livreur, prend la route pour vous amener votre commande directement chez vous ou sur chantier. Un service rapide, efficace et toujours avec le petit mot sympa qui fait plaisir !');
        $manager->persist($commentaire3);

        $manager->flush();
    }
}