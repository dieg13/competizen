<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test', methods: ['GET'])]
    public function testApi(): Response
    {
        return new Response('Installation Symfony fonctionnelle !', Response::HTTP_OK);
    }
}
