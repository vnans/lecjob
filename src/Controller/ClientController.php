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
	         ->add('username', TextType::class, array(
	         	'attr'=>array(
	         	'maxlength'=>'8',
	         	'placeholder'=>'ex: 99000099'
	         ))) 
	         ->add('password', PasswordType::class)       
	         ->add('remenber', CheckboxType::class)
	         ->getForm();                  	

        if (isset($request->request->get('form')['username']) ){
    
     		$username =$request->request->get('form')['username'] ;
     		$password =$request->request->get('form')['password'] ;

     		$customerEntityManager = $this->getDoctrine()->getManager('customer');
        	// $customerEntityManager = $this->get('doctrine.orm.customer_entity_manager');
        	$sql   = "SELECT o FROM App\Entity\Customer\User o WHERE o.username = $username AND o.password = $password ";

        	$quer = $customerEntityManager->createQuery($sql);   
    		$result = $quer->getResult();
 


			if (!$result) { // verification avec indicatif +225
				$sql2   = "SELECT o FROM App\Entity\Customer\User o WHERE o.username = +225$username AND  o.password = $password ";

	        	$quer2 = $customerEntityManager->createQuery($sql2);   
	    		$result2 = $quer2->getResult();

	    		if (!$result2) { // verification avec indicatif 00225
	    			$sql3   = "SELECT o FROM App\Entity\Customer\User o WHERE o.username = 00225$username AND o.password = $password ";

		        	$quer3 = $customerEntityManager->createQuery($sql3);   
		    		$result3 = $quer3->getResult();
		    		if (!$result3) { // verification avec indicatif 00225
		    			$erreur= 1 ;
		    			return $this->render('client/index.html.twig', ['form'=> $form->createView() ,'erreurForm'=>'$erreur']);	//mauvais indentifiants
		    		}else{
		    				return $this->render('default/index.html.twig');		
		    		}
	    		}else{
	    				return $this->render('default/index.html.twig');	
	    		}
			 	
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
