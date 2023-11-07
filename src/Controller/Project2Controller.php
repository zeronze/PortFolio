<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Project2Controller extends AbstractController
{
    #[Route('/project2', name: 'app_project2')]
    public function index(): Response
    {
        return $this->render('project2/index.html.twig', [
            'controller_name' => 'Project2Controller',
        ]);
    }
}
