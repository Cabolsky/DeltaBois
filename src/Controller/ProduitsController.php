<?php

namespace App\Controller;

use App\Entity\Pub;
use App\Entity\Contact;
use App\Entity\Cards;
use App\Entity\Article;
use App\Entity\Produits;
use App\Entity\Commentaire;
use App\Entity\Coordonnees;
use App\Repository\PubRepository;
use App\Repository\CardsRepository;
use App\Repository\ArticleRepository;
use App\Repository\ProduitsRepository;
use App\Repository\CommentaireRepository;
use App\Repository\CoordonneesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitsController extends AbstractController
{
    #[Route('/produits', name: 'app_produits')]
    public function index(CommentaireRepository $commentaireRepository, CoordonneesRepository $coordonneesRepository, ProduitsRepository $produitsRepository, ArticleRepository $articleRepository, CardsRepository $cardsRepository, PubRepository $pubRepository): Response
    {
        $commentaires = $commentaireRepository->findAll();
        $coordonnees = $coordonneesRepository->findAll();
        $produits = $produitsRepository->findAll();
        $Article1 = $articleRepository->find(1);
        $Article2 = $articleRepository->find(2);
        $Article3 = $articleRepository->find(3);
        $Article4 = $articleRepository->find(4);
        $Article5 = $articleRepository->find(5);
        $cards = $cardsRepository->findAll();
        $pubs = $pubRepository->findAll();
        $activePub = $this->getActivePub($pubs);

        return $this->render('produits/index.html.twig', [
            'controller_name' => 'ProduitsController',
            'commentaires' => $commentaires,
            'coordonnees' => $coordonnees,
            'produits' => $produits,
            'Article1' => $Article1,
            'Article2' => $Article2,
            'Article3' => $Article3,
            'Article4' => $Article4,
            'Article5' => $Article5,
            'cards' => $cards,
            'activePub' => $activePub,
        ]);
    }

    #[Route('/produits/{id}', name: 'produit_details')]
    public function details(int $id, CommentaireRepository $commentaireRepository, CoordonneesRepository $coordonneesRepository, ProduitsRepository $produitsRepository, ArticleRepository $articleRepository, CardsRepository $cardsRepository, PubRepository $pubRepository): Response
    {
        $card = $cardsRepository->find($id);

        if (!$card) {
            throw $this->createNotFoundException('Carte non trouvée.');
        }

        $commentaires = $commentaireRepository->findAll();
        $coordonnees = $coordonneesRepository->findAll();
        $produits = $produitsRepository->findAll();
        $Article1 = $articleRepository->find(1);
        $Article2 = $articleRepository->find(2);
        $Article3 = $articleRepository->find(3);
        $Article4 = $articleRepository->find(4);
        $Article5 = $articleRepository->find(5);
        $Article6 = $articleRepository->find(6);
        $cards = $cardsRepository->findAll();
        $pubs = $pubRepository->findAll();
        $activePub = $this->getActivePub($pubs);

        return $this->render('_partials/details.html.twig', [
            'card' => $card,
            'activePub' => $activePub,
            'commentaires' => $commentaires,
            'coordonnees' => $coordonnees,
            'produits' => $produits,
            'Article1' => $Article1,
            'Article2' => $Article2,
            'Article3' => $Article3,
            'Article4' => $Article4,
            'Article5' => $Article5,
            'Article6' => $Article6,
            'cards' => $cards,
            'activePub' => $activePub,
        ]);
    }

    private function getActivePub(array $pubs): ?Pub
    {
        foreach ($pubs as $pub) {
            if ($pub->isActive()) {
                return $pub;
            }
        }
        return null;
    }
}
