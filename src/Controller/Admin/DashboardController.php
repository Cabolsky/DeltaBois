<?php

namespace App\Controller\Admin;

use App\Entity\Pub;
use App\Entity\Cards;
use App\Entity\Article;
use App\Entity\Produits;
use App\Entity\Commentaire;
use App\Entity\Coordonnees;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Bundle\SecurityBundle\Annotation\IsGranted;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('DeltaBois');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Articles', 'fas fa-scroll', Article::class);
        yield MenuItem::linkToCrud('Commentaires', 'fas fa-comments', Commentaire::class);
        yield MenuItem::linkToCrud('Publicités', 'fas fa-circle-info', Pub::class);
        yield MenuItem::linkToCrud('Coordonnées', 'fas fa-location-dot', Coordonnees::class);
        yield MenuItem::linkToCrud('Produits', 'fas fa-tree', Produits::class);
        yield MenuItem::linkToCrud('Cartes', 'fas fa-address-card', Cards::class);
    }
}
