<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $articlesData = [
            [
                'title' => 'UNE HISTOIRE DE FAMILLE',
                'text' => 'Tout a commencé en 1993, quand Jean-Pierre a créé DeltaBois avec une idée simple : proposer du bois de qualité avec un service de confiance. Les années ont passé, et aujourd’hui, c’est son fils Hugo qui dirige l’entreprise, en conservant les atouts de DeltaBois qui font sa réputation. Jean-Pierre reste présent pour transmettre son expérience, tandis que Christophe assure les livraisons avec sérieux et efficacité. Depuis plus de 30 ans, DeltaBois continue d’évoluer, tout en restant fidèle à ses valeurs : expertise, proximité et fiabilité.',
                'picture' => 'article-1.jpg',
            ],
            [
                'title' => 'OÙ NOUS TROUVER ?',
                'text' => 'DeltaBois est basé à Soustons, au cœur de notre belle région des Landes. Ici, nous sommes proches de vous, dans une zone commerciale dynamique qui nous permet de mieux vous servir. C’est dans cette ambiance conviviale et locale que nous faisons vivre l’esprit de l’entreprise, avec simplicité et proximité.',
                'picture' => 'article-2.jpg',
            ],
            [
                'title' => 'DÉCOUVREZ NOS PRODUITS',
                'text' => 'Chez DeltaBois, nous proposons une large gamme de bois d’aménagement extérieur, idéale pour tous vos projets, que ce soit des terrasses, clôtures ou autres aménagements extérieurs. Nous travaillons principalement avec du pin traité classe 4, reconnu pour sa résistance aux intempéries et sa durabilité. Nous offrons également des traverses en chêne, parfaites pour des aménagements solides et esthétiques. Avec notre stock bien approvisionné, nous garantissons une disponibilité rapide et un service fiable, pour vous accompagner dans vos besoins.',
                'picture' => 'article-3.jpg',
            ],
            [
                'title' => 'NOTRE SERVICE DE LIVRAISON',
                'text' => 'Nous garantissons un service de livraison rapide et fiable, pour que vous puissiez commencer vos projets sans délai. Grâce à notre proximité avec nos clients et une organisation optimisée, nous assurons des livraisons dans des délais courts, tout en veillant à la sécurité de vos produits pendant le transport. Que votre commande soit urgente ou programmée, nous nous engageons à vous offrir un service réactif et de qualité.',
                'picture' => 'article-4.jpg',
            ],
            [
                'title' => 'LOCATION DE LA BROSSEUSE FLOORTEC',
                'text' => 'Chez DeltaBois, nous proposons la location de la brosseuse à sec Floortec, idéale pour raviver votre terrasse. Cette machine nettoie en profondeur vos lames de bois, éliminant salissures et usure, sans abîmer le matériau. Facile à utiliser, elle est parfaite pour entretenir vos extérieurs et prolonger leur durabilité. Contactez-nous pour plus d’infos.',
                'picture' => 'article-5.jpg',
            ],
            [
                'title' => 'CONTACTEZ-NOUS PAR E-MAIL',
                'text' => 'Vous avez des questions ou besoin d’informations supplémentaires ? Remplissez le formulaire ci-dessous, et nous vous répondrons dans les plus brefs délais. Nous sommes là pour vous aider !',
                'picture' => 'article-6.jpg',
            ],
        ];

        foreach ($articlesData as $data) {
            $article = new Article();
            $article->setTitle($data['title']);
            $article->setText($data['text']);
            $article->setPicture($data['picture']);

            $manager->persist($article);
        }

        $manager->flush();
    }
}
