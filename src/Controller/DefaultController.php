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
   
}
