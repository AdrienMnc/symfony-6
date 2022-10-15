<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TodoController extends AbstractController
{
    #[Route('/todo', name: 'app_todo')]
    public function index(Request $request): Response
    {

        $session = $request->getSession();

        if (!$session->has(name: 'todos')) {
            $todos = [
                'achat' => 'acheter cle usb',
                'cours' => 'finaliser mes cours',
                'correction' => 'corriger mes exams'
            ];
            $session->set('todos', $todos);
        }
        return $this->render('todo/index.html.twig');
    }
}

#[Route('/todo/{name}/{content}', name: 'app_todo')]


public function addTodo(Request $request, $name, $content): Response
{
    
}