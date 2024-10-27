<?php

// src/Controller/IndexController.php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Page; // Ajout de l'entité Page
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Récupérer la page "accueil"
        $pageAccueil = $entityManager->getRepository(Page::class)->findOneBy(['slug' => 'accueil']);

        // Récupérer les articles associés à cette page
        $article1 = $entityManager->getRepository(Article::class)->findOneBy(['page' => $pageAccueil, 'id' => 1]);
        $article2 = $entityManager->getRepository(Article::class)->findOneBy(['page' => $pageAccueil, 'id' => 2]);
        $article3 = $entityManager->getRepository(Article::class)->findOneBy(['page' => $pageAccueil, 'id' => 3]);
        $article4 = $entityManager->getRepository(Article::class)->findOneBy(['page' => $pageAccueil, 'id' => 4]);

        // Passer les articles au template
        return $this->render('index/index.html.twig', [
            'article1' => $article1,
            'article2' => $article2,
            'article3' => $article3,
            'article4' => $article4,
        ]);
    }
}
