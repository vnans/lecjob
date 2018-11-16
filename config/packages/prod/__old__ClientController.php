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
	         // ->add('remenber', CheckboxType::class)
	         ->getForm();                  	

        if (isset($request->request->get('form')['username']) ){
    
     		$username =$request->request->get('form')['username'] ;
     		$password =$request->request->get('form')['password'] ;

     		$customerEntityManager = $this->getDoctrine()->getManager('customer');
        	
        	
        	$dqlquery = $customerEntityManager->createQuery('SELECT u FROM App\Entity\Customer\User u WHERE (u.username = :username ) AND u.password = :password');
			$dqlquery->setParameters(array(
			    'username' => $username,
			    
			    'password' => $password,
			));
			$users = $dqlquery->getResult();

      //   	$quer = $customerEntityManager->createQuery($sql);   
    		// $result = $quer->getResult();
 


			if (!$users) { // verification avec indicatif +225
				$dqlquery = $customerEntityManager->createQuery('SELECT u FROM App\Entity\Customer\User u WHERE u.username = :username  AND u.password = :password');
				$dqlquery->setParameters(array(
			    'username' => '+225'.$username,
			    
			    'password' => $password,
			));
				$users = $dqlquery->getResult();

	    		if (!$users) { // verification avec indicatif 00225
	    			$dqlquery = $customerEntityManager->createQuery('SELECT u FROM App\Entity\Customer\User u WHERE (u.username = :username ) AND u.password = :password');
				$dqlquery->setParameters(array(
			    'username' => '00225'.$username,
			    
			    'password' => $password,
				));
				$users = $dqlquery->getResult();

		    		if (!$users) { // verification avec indicatif 00225
		    			$erreur= 1 ;
		    			return $this->render('client/index.html.twig', ['form'=> $form->createView() ,'erreurForm'=>'$erreur']);	//mauvais indentifiants
		    		}else{
		    				 $user=$session->get('user'); 
		    				return $this->render('default/index.html.twig',['user'=> $user]);		
		    		}
	    		}else{
	    				return $this->render('default/index.html.twig',['user'=> $user]);	
	    		}
			 	
			}else{
			// $offres=$query->ReturnData($request);
		    //   	 $user=$session->get('user'); 
		        
		     // 		return $this->render('cj_offres/index.html.twig', ['cj_offres' => $offres,'user'=>$user]);
      		return $this->render('default/index.html.twig',['user'=> $user]); 
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
