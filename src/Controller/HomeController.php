<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\VehiculesRepository;

final class HomeController extends AbstractController{
    #[Route('/', name: 'app_home')]
    public function index(VehiculesRepository $vehiculeRepository): Response
    {
        $vehicules = $vehiculeRepository->findAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'vehicules' => $vehicules,
        ]);
    }
}
