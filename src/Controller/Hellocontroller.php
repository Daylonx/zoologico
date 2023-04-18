<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Hellocontroller
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response(content:'Olá, mundo!');
    }
    #[Route('//dinossauro')]
    public function dinossauro(): Response
    {
        return new Response(content:'Olá, Dinossauro!');
    }
}
