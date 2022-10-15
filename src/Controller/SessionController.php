<?php

namespace App\Controller;

use Laminas\Code\Generator\EnumGenerator\Name;
use SebastianBergmann\Environment\Console;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    #[Route('/session', name: 'app_session')]
    public function index(Request $request): Response
    {
        
        $session = $request->getSession();
        if ($session->has(name: 'nbvisite')){
            $nbrevisite = $session->get(name: 'nbvisite') + 1;
            
        }else {
            $nbrevisite = 1;
        }
        $session->get('nbvisite', $nbrevisite);
        var_dump($nbrevisite);
        return $this->render('session/index.html.twig');
    }
}
