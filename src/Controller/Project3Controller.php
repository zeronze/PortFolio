<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Project3Controller extends AbstractController
{
    #[Route('/project3', name: 'app_project3')]
    public function index(): Response
    {
        return $this->render('project3/index.html.twig', [
            'controller_name' => 'Project3Controller',
        ]);
    }
}
