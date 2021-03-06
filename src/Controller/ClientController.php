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
  * @Route("/deco", name="deconnexion")
  */
 public function deco()
 {
 	$session->set('user','deco');
 	$user=$session->get('user');
 	
 	return $this->render('default/index.html.twig',['user'=> $user]);  

 }


    /**
     * @Route("/client", name="client")
     */
    public function index(Request $request,EntityManagerInterface $entityManager,DataService $query ,SessionInterface $session): Response
    { 	
    	// formulaire de connexion abonne
        $form = $this->createFormBuilder()      
	         ->add('username', TextType::class, array(
	         	'attr'=>array(
	         	'maxlength'=>'8',
	         	'placeholder'=>'ex: 99000099'
	         ))) 
	         ->add('password', PasswordType::class)       
	         // ->add('remenber', CheckboxType::class)
	         ->getForm();                  	
// verifions si l'utilisateur est un abonne
        if (isset($request->request->get('form')['username']) ){
    
     		$username =$request->request->get('form')['username'] ;
     		$password =$request->request->get('form')['password'] ;

     		$customerEntityManager = $this->getDoctrine()->getManager('customer');
        	
        	
        	$dqlquery = $customerEntityManager->createQuery('SELECT u FROM App\Entity\Customer\User u WHERE (u.username = :username ) AND u.plainPassword = :password');
			$dqlquery->setParameters(array(
			    'username' => $username,
			    
			    'password' => $password,
			));
			$users = $dqlquery->getResult();

      //   	$quer = $customerEntityManager->createQuery($sql);   
    		// $result = $quer->getResult();
 


			if (!$users) { // verification avec indicatif +225
				$dqlquery = $customerEntityManager->createQuery('SELECT u FROM App\Entity\Customer\User u WHERE u.username = :username  AND u.plainPassword = :password');
				$dqlquery->setParameters(array(
			    'username' => '+225'.$username,
			    
			    'password' => $password,
			));
				$users = $dqlquery->getResult();

	    		if (!$users) { // verification avec indicatif 00225
	    			$dqlquery = $customerEntityManager->createQuery('SELECT u FROM App\Entity\Customer\User u WHERE (u.username = :username ) AND u.plainPassword = :password');
				$dqlquery->setParameters(array(
			    'username' => '00225'.$username,
			    
			    'password' => $password,
				));
				$users = $dqlquery->getResult();

		    		if (!$users) { // verification avec indicatif 00225
		    			$erreur= 1 ;
		    			return $this->render('client/index.html.twig', ['form'=> $form->createView() ,'erreurForm'=>'$erreur']);	//mauvais indentifiants
		    		}else{
		    				 $session->set('user','abonne'); 
            				 $user=$session->get('user'); 
		    				return $this->render('default/index.html.twig',['user'=> $user]);		
		    		}
	    		}else{
	    				$session->set('user','abonne'); 
            			$user=$session->get('user'); 
	    				return $this->render('default/index.html.twig',['user'=> $user]);	
	    		}
			 	
			}else{
			// $offres=$query->ReturnData($request);
		       	 $session->set('user','abonne'); 
            	$user=$session->get('user'); 
		    
      		// return $this->render('default/index.html.twig',['user'=> $user]); 
            	return $this->redirectToRoute('cj_offres_index');
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
