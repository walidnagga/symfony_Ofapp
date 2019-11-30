<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OfappController extends AbstractController
{
    /**
     * @Route("/ofapp", name="ofapp")
     */
    public function index()
    {
        return $this->render('ofapp/index.html.twig', [
            'controller_name' => 'OfappController',
        ]);
    }
}
