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
    #[Route('//mamiferos')]
    public function mamiferos(): Response
    {
        return new Response(content:'Olá, mamiferos!');
    }
    #[Route('//invertebrados')]
    public function invertebrados(): Response
    {
        return new Response(content:'Olá, invertebrados!');
    }
    #[Route('//insetos')]
    public function insetos(): Response
    {
        return new Response(content:'Olá, insetos!');
    }
    #[Route('//aves')]
    public function aves(): Response
    {
        return new Response(content:'Olá, aves!');
    }
}
