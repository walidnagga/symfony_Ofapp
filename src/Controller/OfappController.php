<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Form\ConnexionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class OfappController extends AbstractController
{   
    //Formulaire d'inscription
        /**
         * @Route("/inscription", name="security_registartion")
         */
        public function registration(Request $request, EntityManagerInterface $manager)
        {
            $user = new User();
            
            $form = $this->createForm(RegistrationType::class, $user);
            
            $form->handleRequest($request);
           
            if($form->isSubmitted() && $form->isValid())
            {
                $manager->persist($user);
                $manager->flush();
            }

            return $this->render('security/registration.html.twig',[
                'inscrit' => $form->createView()   
            ]);
        }
    //Formulaire de connexion
        /**
         * @Route("/", name="ofapp")
         */
        public function connexion()
        {
            $user = new User();
            
            $form = $this->createForm(ConnexionType::class, $user);
            
            
            return $this->render('security/connexion.html.twig',[
                'connexion'=>$form->createView()
            ]);
        }
    // Affichage de l'interface du chef du projet
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
         * Route("/responsableOF", name="responsableOF")
         */
        public function resof()
        {
            return $this->render('ofapp/user/resof.html.twig');
        }
    //Affichage de l'interface de service paiement
        /**
         * Route("/servPaie", name="servPaie")
         */
        public function servPaie()
        {
            return $this->render('ofapp/user/servPaie.html.twig');
        }
    //Affichage de l'interface du topographe    
        /**
         * Route("/topograph", name="topo")
         */
        public function topo()
        {
            return $this->render('ofapp/user/topo.html.twig');
        }
    
}
