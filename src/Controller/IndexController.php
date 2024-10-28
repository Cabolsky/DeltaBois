<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Commentaire;
use App\Entity\Color;
use App\Entity\Pub;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $article1 = $this->getArticleOrDefault($entityManager, 1);
        $article2 = $this->getArticleOrDefault($entityManager, 2);
        $article3 = $this->getArticleOrDefault($entityManager, 3);
        $article4 = $this->getArticleOrDefault($entityManager, 4);
        $commentaire1 = $this->getCommentaireOrDefault($entityManager, 1);
        $commentaire2 = $this->getCommentaireOrDefault($entityManager, 2);
        $commentaire3 = $this->getCommentaireOrDefault($entityManager, 3);
        $color1 = $this->getColorOrDefault($entityManager, 1);
        $color2 = $this->getColorOrDefault($entityManager, 2);
        $color3 = $this->getColorOrDefault($entityManager, 3);
        $color4 = $this->getColorOrDefault($entityManager, 4);
        $color5 = $this->getColorOrDefault($entityManager, 5);
        $pub = $this->getPubOrDefault($entityManager, 1);

        return $this->render('index/index.html.twig', [
            'article1' => $article1,
            'article2' => $article2,
            'article3' => $article3,
            'article4' => $article4,
            'commentaire1' => $commentaire1,
            'commentaire2' => $commentaire2,
            'commentaire3' => $commentaire3,
            'color1' => $color1,
            'color2' => $color2,
            'color3' => $color3,
            'color4' => $color4,
            'color5' => $color5,
            'pub' => $pub,
        ]);
    }

    private function getArticleOrDefault(EntityManagerInterface $entityManager, int $id): Article
    {
        $article = $entityManager->getRepository(Article::class)->find($id);
        if (!$article) {
            $article = new Article();
            $article->setTitle('UNE HISTOIRE DE FAMILLE');
            $article->setText('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.');
        }
        return $article;
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

    private function getColorOrDefault(EntityManagerInterface $entityManager, int $id): Color
    {
        $color = $entityManager->getRepository(Color::class)->find($id);
        if (!$color) {
            $color = new Color();
            $color->setCode('#ff0032');
            $color->setName('Couleur par défaut');
        }
        return $color;
    }

    private function getPubOrDefault(EntityManagerInterface $entityManager, int $id): Pub
    {
        $pub = $entityManager->getRepository(Pub::class)->find($id);
        if (!$pub) {
            $pub = new Pub();
            $pub->setText('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip');
            $defaultColor = $this->getColorOrDefault($entityManager, 4);
            $pub->setColor($defaultColor);
        }
        return $pub;
    }
}
