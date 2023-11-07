<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Project6Controller extends AbstractController
{
    #[Route('/project6', name: 'app_project6')]
    public function index(): Response
    {
        return $this->render('project6/index.html.twig', [
            'controller_name' => 'Project6Controller',
        ]);
    }
}
