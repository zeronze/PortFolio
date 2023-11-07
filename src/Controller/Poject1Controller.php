<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Poject1Controller extends AbstractController
{
    #[Route('/poject1', name: 'app_poject1')]
    public function index(): Response
    {
        return $this->render('poject1/index.html.twig', [
            'controller_name' => 'Poject1Controller',
        ]);
    }
}
