<?php

namespace App\Controller;

use App\Entity\Pub;
use App\Entity\Color;
use App\Entity\Article;
use App\Entity\Produits;
use App\Entity\Commentaire;
use App\Entity\Coordonnees;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $article1 = $this->getArticle($entityManager, 1);
        $article2 = $this->getArticle($entityManager, 2);
        $article3 = $this->getArticle($entityManager, 3);
        $article4 = $this->getArticle($entityManager, 4);
        $article5 = $this->getArticle($entityManager, 5);
        $commentaire1 = $this->getCommentaireOrDefault($entityManager, 1);
        $commentaire2 = $this->getCommentaireOrDefault($entityManager, 2);
        $commentaire3 = $this->getCommentaireOrDefault($entityManager, 3);
        $colorIds = [1, 2, 3, 4, 5];
        $colors = $this->getColors($entityManager, $colorIds);
        $pub = $this->getPubOrDefault($entityManager, 1);
        $coordonnees = $this->getCoordonnees($entityManager, 1);
        $produits = $entityManager->getRepository(Produits::class)->findAll();

        return $this->render('contact/index.html.twig', [
            'article1' => $article1,
            'article2' => $article2,
            'article3' => $article3,
            'article4' => $article4,
            'article5' => $article5,
            'commentaire1' => $commentaire1,
            'commentaire2' => $commentaire2,
            'commentaire3' => $commentaire3,
            'colors' => $colors,
            'pub' => $pub,
            'coordonnees' => $coordonnees,
            'produits' => $produits,
        ]);
    }

    private function getArticle(EntityManagerInterface $entityManager, int $id): ?Article
    {
        return $entityManager->getRepository(Article::class)->find($id);
    }

    private function getCommentaireOrDefault(EntityManagerInterface $entityManager, int $id): Commentaire
    {
        $commentaire = $entityManager->getRepository(Commentaire::class)->find($id);
        if (!$commentaire) {
            $commentaire = new Commentaire();
            $commentaire->setTitle('Spécialistes EN BOIS');
            $commentaire->setText('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
        }
        return $commentaire;
    }

    private function getColor(EntityManagerInterface $entityManager, int $id): ?Color
    {
        return $entityManager->getRepository(Color::class)->find($id);
    }

    private function getColors(EntityManagerInterface $entityManager, array $ids): array
    {
        return $entityManager->getRepository(Color::class)->findBy(['id' => $ids]);
    }

    private function getPubOrDefault(EntityManagerInterface $entityManager, int $id): Pub
    {
        $pub = $entityManager->getRepository(Pub::class)->find($id);
        if (!$pub) {
            $pub = new Pub();
            $pub->setText('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam');
            $color = $this->getColor($entityManager, 1);
            if ($color) {
                $pub->setColor($color);
            }
        }
        return $pub;
    }

    private function getCoordonnees(EntityManagerInterface $entityManager, int $id): ?Coordonnees
    {
        return $entityManager->getRepository(Coordonnees::class)->find($id);
    }

    private function getProduits(EntityManagerInterface $entityManager, int $id): ?Produits
    {
        return $entityManager->getRepository(Produits::class)->find($id);
    }
}
