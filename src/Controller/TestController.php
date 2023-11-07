<?php

namespace App\Controller;

use App\Repository\CalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(CalendarRepository $calendarRepository, SerializerInterface $serializer): Response
    {
        $events = $calendarRepository->findAll(); // Utilisez $calendarRepository pour récupérer les événements

        $rdvs = [];

        foreach ($events as $event) {
            $rdvs[] = [
                'id' => $event->getId(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                'title' => $event->getTitle(),
                'description' => $event->getDescription(),
                'backgroundColor' => $event->getBackgroundColor(),
                'borderColor' => $event->getBorderColor(),
                'textColor' => $event->getTextColor(),
                'allDay' => $event->isAllDay(),
            ];
        }

        $data = $serializer->serialize($rdvs, 'json'); // Utilisez le SerializerInterface pour sérialiser les données en JSON

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'rdvs' => $rdvs,
            'data' => $data,
        ]);
    }
}
