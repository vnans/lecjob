<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Doctrine\ORM\EntityManagerInterface;
use App\service\DataService;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends AbstractController
{

    /**
     * @Route("/client", name="client")
     */
    public function index(Request $request,EntityManagerInterface $entityManager,DataService $query ,SessionInterface $session): Response
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
        	$sql   = "SELECT o FROM App\Entity\Customer\User o WHERE o.username = $username ";

        	$quer = $customerEntityManager->createQuery($sql);   
    		$result = $quer->getResult();
 

   //   		 try {// on se connecte a notre base de donne sur la table products
   //  				$BDD=new PDO("mysql:host=localhost;dbname=admineoserdb",'root','Alcalis@18', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  	// 		} 	catch (Exception $e) {
    
   //  				die('erreur :'.$e->getMessage());
  	// 			} 
  	// 		// verificattion des indentifiants 
			// $conn = $BDD->prepare("SELECT * FROM user WHERE username = :username ");
			// $conn->execute(array('numero'=>$numero,));
			// $resultat = $conn->fetch();

			if (!$result) {
		 	return $this->render('client/index.html.twig');
			}else{
			// $offres=$query->ReturnData($request);
		    //   	 $user=$session->get('user'); 
		        
		     // 		return $this->render('cj_offres/index.html.twig', ['cj_offres' => $offres,'user'=>$user]);
      		return $this->render('default/index.html.twig'); 
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
