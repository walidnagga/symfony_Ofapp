<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OfappController extends AbstractController
{   //Formulaire de connexion
    /**
     * @Route("/", name="ofapp")
     */
    public function index()
    {
        return $this->render('ofapp/user/resof.html.twig');
    }
    
}
