<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Project4Controller extends AbstractController
{
    #[Route('/project4', name: 'app_project4')]
    public function index(): Response
    {
        return $this->render('project4/index.html.twig', [
            'controller_name' => 'Project4Controller',
        ]);
    }
}
