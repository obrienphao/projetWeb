<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\HabitantRepository;

class InsertRecensementController extends AbstractController
{
    #[Route('/insert/recensement', name: 'app_insert_recensement')]
    public function index(HabitantRepository $habitantRepository): Response
    {

        $habitant = new Habitant();
        $habitant
            ->setNom('Phao')
            ->setPrenom('grace')
            ->setAdresse('4 rue gaspard coriolis')
            ->setDateNaissance(
                DateTime::createFormat('d/m/y','23/05/1997'))
            ->setEmail('dimbugrace@gmail.com')
            ->setTelephone(658950021)
        ;
        //Injection 
        $em->persist($habitant);
        $em->flush();



        return $this->render('insert_recensement/index.html.twig', [
            'controller_name' => 'InsertRecensementController',
        ]);
    }
}
