<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OfappController extends AbstractController
{       
       
        /**
         * @Route("/chef/projet", name="chefprojet")
         */
        public function chef()
        {   
            $form = 'walid';
            return $this->render('ofapp/user/chefprojet.html.twig',[
                'form' => $form
            ]);
        }  
         /**
         * @Route("/dashbord", name="dashbord")
         */
        public function dashbord()
        {   
        
            return $this->render('ofapp/interface/dashbord.html.twig');
        }  
        /**
         * @Route("/profil_user", name="profil_user")
         */
        public function profiluser()
        {   
        
            return $this->render('ofapp/interface/profil_user.html.twig');
        }  
        /**
         * @Route("/edit_terrain", name="edit_terrain")
         */
        public function editterrain()
        {   
        
            return $this->render('ofapp/interface/edit_terrain.html.twig');
        }  
        /**
         * @Route("/edit_prop", name="edit_prop")
         */
        public function editprop()
        {   
        
            return $this->render('ofapp/interface/edit_prop.html.twig');
        }  
        /**
         * @Route("/table", name="table")
         */
        public function table()
        {   
        
            return $this->render('ofapp/interface/table.html.twig');
        }  
        /**
         * @Route("/tipographie", name="tipographie")
         */
        public function tipographie()
        {   
        
            return $this->render('ofapp/interface/tipographie.html.twig');
        }  
        /**
         * @Route("/icon", name="icon")
         */
        public function icon()
        {   
        
            return $this->render('ofapp/interface/icon.html.twig');
        }  
        /**
         * @Route("/map", name="map")
         */
        public function map()
        {   
        
            return $this->render('ofapp/interface/map.html.twig');
        }  
        /**
         * @Route("/notif", name="notif")
         */
        public function notification()
        {   
        
            return $this->render('ofapp/interface/notification.html.twig');
        }  
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
