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
