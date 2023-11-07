<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Project5Controller extends AbstractController
{
    #[Route('/project5', name: 'app_project5')]
    public function index(): Response
    {
        return $this->render('project5/index.html.twig', [
            'controller_name' => 'Project5Controller',
        ]);
    }
}
