<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitsController extends AbstractController
{
    #[Route('/produits', name: 'app_produits')]
    public function produits(): Response
    {
        return $this->render('produits/index.html.twig', [
            // Vous pouvez ajouter des données à passer à votre template ici
        ]);
    }
}
