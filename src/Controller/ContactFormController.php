<?php

namespace App\Controller;

use App\DTO\ContactDTO;
use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactFormController extends AbstractController
{
    #[Route('/contact_form', name: 'contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $contact = new ContactDTO();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        $messageSent = false;

        if ($form->isSubmitted() && $form->isValid()) {
            $email = (new Email())
                ->from($contact->email)
                ->to('pierrehlauga@gmail.com')
                ->subject('Nouveau message de contact')
                ->text($contact->message);

            $mailer->send($email);
            $this->addFlash('success', 'Votre message a été envoyé avec succès.');
            $messageSent = true; // Message envoyé, donc flag à true
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
            'messageSent' => $messageSent, // Passage du flag au template
        ]);
    }
}
