<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{



    /**
     * @Route("/", name="default")
     *
     */
    public function index()
    {
        return $this->render('default/index.html.twig'); 
    }

    /**
     * @Route("/apropos", name="apropos")
     *
     */
    public function apropos()
    {
        return $this->render('default/apropos.html.twig'); 
    }
    /**
     * @Route("/contact", name="contact")
     *
     */
    public function contact()
    {
        return $this->render('default/contact.html.twig');
    }
 // /**
 //     * @Route("/", name="index")
 //     *
 //     */
 //    public function default()
 //    {
 //        return $this->render('default/index.html.twig');
 //    }
 //    *
 //     * @Route("public/index.php", name="index2")
 //     *
     
 //    public function default2()
 //    {
 //        return $this->render('default/index.html.twig');
 //    }
   

   /**
     * @Route("/alcalistore", name="alcalistore")
     *
     */
    public function alcalistore()
    {
        $customerEntityManager = $this->getDoctrine()->getManager('customer');
            
            
            $dqlquery = $customerEntityManager->createQuery('SELECT u FROM App\Entity\Customer\User u');
            
            $abonne = $dqlquery->getResult();
        return $this->render('default/alcalistore.html.twig',['abonne' => $abonne]); 
    }

    /**
     * @Route("/alcalistech", name="alcalistech")
     *
     */
    public function alcalistech()
    {
        $EntityManager = $this->getDoctrine()->getManager('default');
            
            
            $dqlquery = $EntityManager->createQuery('SELECT o FROM App\Entity\CjOffres o');
            
            $offre = $dqlquery->getResult();
        return $this->render('default/alcalistech.html.twig',['offre' => $offre]); 
    }
}
