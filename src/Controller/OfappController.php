<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OfappController extends AbstractController
{       
        /**
         * @Route("/chef/projet", name="chefProjet")
         */
        public function chef()
        {
            return $this->render('ofapp/user/chef.html.twig');
        }
    //Affichage de l'interface de l'expert
        /**
         * @Route("/expert", name="expert")
         */
        public function expert()
        {
            return $this->render('ofapp/user/expert.html.twig');
        }
    //Affichage de l'interface de responsable de l'opération Foncière
        /**
         * @Route("/responsableOF", name="responsableOF")
         */
        public function resof()
        {
            return $this->render('ofapp/user/resof.html.twig');
        }
    //Affichage de l'interface de service paiement
        /**
         * @Route("/servPaie", name="servPaie")
         */
        public function servPaie()
        {
            return $this->render('ofapp/user/servPaie.html.twig');
        }
    //Affichage de l'interface du topographe    
        /**
         * @Route("/topograph", name="topo")
         */
        public function topo()
        {
            return $this->render('ofapp/user/topo.html.twig');
        }
    
}
