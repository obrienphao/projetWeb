<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchRecensementController extends AbstractController
{
    #[Route('/search/recensement', name: 'app_search_recensement')]
    public function index(): Response
    {
        return $this->render('search_recensement/index.html.twig', [
            'controller_name' => 'SearchRecensementController',
        ]);
    }
}
