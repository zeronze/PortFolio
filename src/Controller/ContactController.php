<?php
namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérez les données du formulaire
            $formData = $form->getData();

            // Créez un email
            $email = (new Email())
                ->from($formData['email'])
                ->to('johan.mahe92@gmail.com') // Votre adresse Gmail
                ->subject('Nouveau message de contact')
                ->text("Nom: {$formData['nom']}\nPrénom: {$formData['prenom']}\nType: {$formData['type']}\nMessage:\n{$formData['message']}");

            // Envoyez l'email
            $mailer->send($email);

            // Redirigez l'utilisateur ou affichez un message de confirmation
            return $this->redirectToRoute('confirmation_contact');
        }

        return $this->renderForm('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'formulaire' => $form
        ]);
    }

    #[Route('/confirmation-contact', name: 'confirmation_contact')]
    public function confirmation(): Response
    {
        return $this->render('contact/confirmation.html.twig');
    }
}
