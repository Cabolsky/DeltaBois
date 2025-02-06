<?php

namespace App\Controller;

use App\Entity\Pub;
use App\Entity\Cards;
use App\DTO\ContactDTO;
use App\Entity\Article;
use App\Entity\Produits;
use App\Form\ContactType;
use App\Entity\Commentaire;
use App\Entity\Coordonnees;
use App\Repository\PubRepository;
use Symfony\Component\Mime\Email;
use App\Repository\CardsRepository;
use App\Repository\ArticleRepository;
use App\Repository\ProduitsRepository;
use App\Repository\CommentaireRepository;
use App\Repository\CoordonneesRepository;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer, CommentaireRepository $commentaireRepository, CoordonneesRepository $coordonneesRepository, ProduitsRepository $produitsRepository, ArticleRepository $articleRepository, CardsRepository $cardsRepository, PubRepository $pubRepository): Response
    {
        $contact = new ContactDTO();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        $messageSent = false; // Flag pour vérifier si le message a été envoyé

        if ($form->isSubmitted() && $form->isValid()) {
            $email = (new Email())
                ->from($contact->email)
                ->to('pierrehlauga@gmail.com')
                ->subject('Nouveau message de contact')
                ->text($contact->message);
            $mailer->send($email);

            $this->addFlash('success', 'E-MAIL ENVOYÉ');
            $messageSent = true; // Message envoyé, donc flag à true
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
        $pubs = $pubRepository->findAll();
        $activePub = $this->getActivePub($pubs);

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'commentaires' => $commentaires,
            'coordonnees' => $coordonnees,
            'produits' => $produits,
            'Article1' => $Article1,
            'Article2' => $Article2,
            'Article3' => $Article3,
            'Article4' => $Article4,
            'Article5' => $Article5,
            'Article6' => $Article6,
            'activePub' => $activePub,
            'form' => $form->createView(),
            'messageSent' => $messageSent, // Passage du flag au template
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
