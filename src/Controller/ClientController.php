<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Doctrine\ORM\EntityManagerInterface;

class ClientController extends AbstractController
{

    /**
     * @Route("/client", name="client")
     */
    public function index(Request $request,EntityManagerInterface $entityManager)
    { 	

        $form = $this->createFormBuilder()      
	         ->add('username', TextType::class) 
	         ->add('password', PasswordType::class)       
	         ->add('remenber', CheckboxType::class)
	         ->getForm(); 
         
       	

        if (isset($request->request->get('form')['username']) ){
    
     		$username =$request->request->get('form')['username'] ;

     		$customerEntityManager = $this->getDoctrine()->getManager('customer');
        	// $customerEntityManager = $this->get('doctrine.orm.customer_entity_manager');
        	$sql   = "SELECT * FROM user ";

        	$query = $customerEntityManager->createQuery($sql);   
    		$result = $query->getResult();


     		 try {// on se connecte a notre base de donne sur la table products
    				$BDD=new PDO("mysql:host=localhost;dbname=admineoserdb",'root','Alcalis@18', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  			} 	catch (Exception $e) {
    
    				die('erreur :'.$e->getMessage());
  				} 
  			// verificattion des indentifiants 
			$conn = $BDD->prepare("SELECT * FROM user WHERE username = :username ");
			$conn->execute(array('numero'=>$numero,));
			$resultat = $conn->fetch();

			if (!$resultat) {
		 	return $this->render('default/index.html.twig');
			}else{
		 	  return $this->render('cj_offres/index.html.twig') ;
	 		}		  

  		}else{
  			
      return $this->render('client/index.html.twig', ['form'=> $form->createView()] );
		
        // return $this->render('client/index.html.twig',array(
        //     'last_username' => null,
        //     'error' => null,
        //     'csrf_token' => null,));
    	}

    
	} 
} 
