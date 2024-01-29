<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonsterController extends AbstractController
{
    #[Route('/monster', name: 'app_monster')]
    public function index(): Response
    {
        return $this->render('monster/index.html.twig', [
            'controller_name' => 'MonsterController',
        ]);
    }
}
