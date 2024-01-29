<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BraveGnomeController extends AbstractController
{
    #[Route('/brave/gnome', name: 'app_brave_gnome')]
    public function index(): Response
    {
        return $this->render('brave_gnome/index.html.twig', [
            'controller_name' => 'BraveGnomeController',
        ]);
    }
}
