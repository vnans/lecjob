<?php

namespace App\Controller;

use App\Entity\CjOffres;
use App\service\DataService;
use App\service\ReturnResearch;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    // /**
    //  * @Route("/search", name="search" ,methods="GET")
    //  */
    // public function index(Request $request, DataService $query)
    // {
    //     $offres=$query->ReturnResearch($request);
        
    //     return $this->render('search/index.html.twig', [
    //         'offres' => $offres]);
    // }

     /**
     * @Route("/search", name="search" ,methods="POST")
     */
    public function recherche(Request $request, DataService $query)
 
    { 
       
 		$offres=$query->ReturnResearch($request->request->get('form')['Type'],$request->request->get('form')['Niveau'],$request->request->get('form')['Metier']);        

        return $this->render('search/index.html.twig', [
            'offres' => $offres]);
    }

  
    

}
