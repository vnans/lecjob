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

class DataService 
{

protected $em ;
protected $container;
protected $repository;

public function __construct(EntityManagerInterface $entityManager, ContainerInterface $container ){
	$this->em= $entityManager;
	$this->container = $container;
    
}
public function ReturnData($request){

	$em    = $this->em;
	$container = $this->container;
    $sql   = "SELECT o FROM App\Entity\CjOffres o";
    $query = $em->createQuery($sql);

    $paginator  = $container->get('knp_paginator');
    $result = $paginator->paginate($query,$request->query->getInt('page', 1),15);

    // parameters to template
    return ($result);
}

//public function ReturnResearch(Request $request)
public function ReturnResearch( Request $request)
{
    
    $em = $this->em;

    $motcle=$request->request->get('form')['recherche'];

    $sql   = "SELECT o FROM App\Entity\CjOffres o WHERE o.slug LIKE '%$motcle%' ";
    $query = $em->createQuery($sql);   
    $result = $query->getResult();
  
 //   return ($result);
    return ( $result);
 

    
 }   	
}
