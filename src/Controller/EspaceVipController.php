<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EspaceVipController extends AbstractController
{
    #[Route('/espace/vip', name: 'app_espace_vip')]
    public function index(): Response
    {
        return $this->render('espace_vip/index.html.twig', [
            'controller_name' => 'EspaceVipController',
        ]);
    }
}
