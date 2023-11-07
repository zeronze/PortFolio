<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function redirectToIntro(): RedirectResponse
    {
        return $this->redirectToRoute('app_intro');
    }

    #[Route('/intro', name: 'app_intro')]
    public function intro()
    {
        // Votre logique pour la page d'accueil intro
        return $this->render('intro/index.html.twig');
    }

    #[Route('/home', name: 'app_home')]
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
