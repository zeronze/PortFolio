<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Project7Controller extends AbstractController
{
    #[Route('/project7', name: 'app_project7')]
    public function index(): Response
    {
        return $this->render('project7/index.html.twig', [
            'controller_name' => 'Project7Controller',
        ]);
    }
}
