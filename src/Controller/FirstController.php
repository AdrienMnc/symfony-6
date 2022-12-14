<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function template(): Response
    {
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }


    #[Route('/first', name: 'first')]
    public function index(): Response
    {
        // chercher au la abse de données vos users
        return $this->render('first/index.html.twig', [
            'name' => 'Mnc',
            'firstname' => 'Adri'
        ]);
    }

    #[Route('/sayHello/{name}/{firstname}', name: 'say.hello')]
    public function sayHello(Request $request, $name, $firstname): Response
    {
        return $this->render('first/index.html.twig', [
            'nom' => $name,
            'prenom' => $firstname
        ]);
    }
}
