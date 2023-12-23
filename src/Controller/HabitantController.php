<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HabitantController extends AbstractController
{
    #[Route('/habitant', name: 'app_habitant')]
    public function index(): Response
    {
        return $this->render('habitant/index.html.twig', [
            'controller_name' => 'HabitantController',
        ]);
    }
}
