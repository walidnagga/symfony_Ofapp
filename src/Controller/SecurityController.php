<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\ConnexionType;
use App\Form\RegistrationType;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
         * @Route("/inscription", name="security_registration")
         */
        public function registration(Request $request, EntityManagerInterface $manager,
         UserPasswordEncoderInterface $encoder)
        {
            $user = new User();      
            $form = $this->createForm(RegistrationType::class, $user);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid())
            {
                $hash=$encoder->encodePassword($user,$user->getPassword());
                $user->setPassword($hash);
                $manager->persist($user);
                $manager->flush();
                $this->addFlash('success', 'Votre compte à bien été enregistré.');

                return $this->redirectToRoute('security_login');
            }
            return $this->render('security/registration.html.twig',[
                'form' => $form->createView()   
            ]);
        } 
         /**
         * @Route("/connexion", name="security_login")
         */
        public function login()
        {
            $user = new User();      
            $form = $this->createForm(ConnexionType::class, $user);
            
            
            return $this->render('security/login.html.twig',[
                'connexion'=>$form->createView()
            ]);
        }
         /**
         * @Route("/deconnexion", name="security_logout")
         */
        public function logout()
        {
            return $this->render('ofapp/index.html.twig');
        }
        
}
