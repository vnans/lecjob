<?php

namespace App\service;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Decorator\createQuery;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\paginate;
use Symfony\Bundle\FrameworkBundle\Controller\createFormBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\getDoctrine;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\getInt;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\ClientController;

// class DataService extends ClientController
  class DataService extends Controller
{

protected $em ;
protected $container;
protected $repository;

public function __construct(EntityManagerInterface $entityManager, ContainerInterface $container ){
  

  $this->em= $entityManager;
  $this->container = $container;
    
}
public function ReturnData($request){ 
// retourne la liste des offres diŝponobles en BD par page de 15
    // $em    = $this->em;
    // $container = $this->container;
    // $sql   = "SELECT o FROM App\Entity\CjOffres o";
    // $query = $em->createQuery($sql);

    // $paginator  = $container->get('knp_paginator');
    // $result = $paginator->paginate($query,$request->query->getInt('page', 1),15);

    // parameters to template
    $container = $this->container;
    $defaultEntityManager =$this->getDoctrine()->getManager('default');

    $dql =$defaultEntityManager->createQuery(' SELECT o FROM App\Entity\CjOffres o ORDER BY o.id DESC ');
    $paginator =$container->get('knp_paginator');
    $result = $paginator->paginate($dql,$request->query->getInt('page', 1),15);
    return ($result); 
}

//public function ReturnResearch(Request $request)
public function ReturnResearch( string  $valeur1,$valeur2,$valeur3 )
{
    
    $em = $this->em;

   // $motcle=$request->request->get('form')['recherche'];
  // $motcle=$valeur;

    // $sql   = "SELECT o FROM App\Entity\CjOffres o WHERE o.slug LIKE '%$motcle%' ";.
     $sql   = "SELECT o FROM App\Entity\CjOffres o WHERE o.type = $valeur1  AND o.niveau = $valeur2 AND o.metier = $valeur3 "; 
    $query = $em->createQuery($sql);   
    $result = $query->getResult();
 //   return ($result);
    return ( $result);
 

    
 }    
}
