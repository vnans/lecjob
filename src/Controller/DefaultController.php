<?php

namespace App\Controller;

use App\Entity\User;

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
   

   /**
     * @Route("/alcalistore", name="alcalistore")
     *
     */
    public function alcalistore()
    {

        $customerEntityManager = $this->getDoctrine()->getManager('customer'); // connexion BD de    alcalist_job        
            //$dqlquery = $customerEntityManager->createQuery('SELECT u FROM App\Entity\Customer\User u');
           // $req = $customerEntityManager->createQuery('SELECT count(v.id)  FROM App\Entity\Customer\User v');
           // $record = $req->getResult();


            //$dqlquery = $customerEntityManager->createQuery('SELECT v FROM App\Entity\Customer\User v');
            $dqlquery = $customerEntityManager->createQuery('SELECT v.id , v.username FROM App\Entity\Customer\User v'); // recuperer tout les users existants dans alcalist_job
            $req = $customerEntityManager->createQuery('SELECT count(s.id)  FROM App\Entity\Customer\User s');
            $record = $req->getResult(); // total des users
            $i = 0;
          
            $abonnes = $dqlquery->getResult(); // tous les abonnes
            // var_dump($record) ;
            $entityManager = $this->getDoctrine()->getManager('default'); // connexion BD de APP
            ini_set('max_execution_time',0);   // temps d'execution illimité
            while ( $i < $record ) {    
               //  var_dump($abonne[$i]["username"]) ;
               
                $abonne = $abonnes[$i]["username"];
                $id = $abonnes[$i]['id'];
                if (strlen($abonne) > 7 ) { //si c'est un N° de telephone
                   
                    $numero=substr($abonne,-8) ; //on retire l'indicatif

                $user = new User();
                $user->setIduser($id)  ;           // on cree ses acces pour cjob_web 
                $user->setUsername($numero);
                $user->setPassword($numero);
                $user->setEmail($numero);

                $entityManager->persist($user);
                $entityManager->flush();
              
                }
              $i++ ;  
            }

        // foreach ($abonne as $abonnes) { 

        // $user = new User();
        // $user->setIduser($abonnes->id);
        // $user->setUsername($abonnes->username);
        // $user->setPassword($abonnes->username);
        // $user->setEmail($abonnes->username);

        
       
        // $entityManager->persist($user);
        // $entityManager->flush();

            
        // }
            
            
            $dqlquery = $entityManager->createQuery('SELECT u FROM App\Entity\User u');
            
            $offre = $dqlquery->getResult();
        return $this->render('default/alcalistech.html.twig',['offre' => $offre]); 

      // return $this->render('default/alcalistore.html.twig',['abonne' => $abonne]); 
    }

    /**
     * @Route("/alcalistech", name="alcalistech")
     *
     */
    public function alcalistech()

    {
        $entityManager = $this->getDoctrine()->getManager('default');

        // $req= $entityManager->createQuery('SELECT u FROM App\Entity\User u');

        // $user=$req->getResult();

    //    ini_set('max_execution_time',0); //300 seconds = 5 minutes 

        // foreach ($user as $users) {
        //     if ( length($users->password) >= 8  ) { // verifie si c'est N° de tel

        //         $password=substr($users->password,-8); // on enregistre unique le N° 8chiffre
        //         $id= $users->id ;
        //     $up= $entityManager->createQuery('UPDATE App\Entity\User SET (password = :password) WHERE (id = :id )');
        //     $up->setParameters(array(
        //         'password' => $password,               
        //         'id' => $id,
        //     ));
        //     $up->execute(); 

    
        //     }
            
        // }




        // $user = new User();
        // $user->setUsername('venance');
        // $user->setPassword('venance');
        // $user->setEmail('venance@email.com');
        // $EntityManager = $this->getDoctrine()->getManager('default');
        // $entityManager->persist($user);
        // $entityManager->flush();

            
            
            $dqlquery = $entityManager->createQuery('SELECT u FROM App\Entity\User u');
            
            $offre = $dqlquery->getResult();
            
            
           // $dqlquery = $EntityManager->createQuery('SELECT o FROM App\Entity\CjOffres o');
            
         //   $offre = $dqlquery->getResult();
        return $this->render('default/alcalistech.html.twig',['offre' => $offre]); 
    }
    /**
     * @Route("/test", name="test")
     *
     */
    public function test()

    {
         $entityManager = $this->getDoctrine()->getManager('default');

        // $req= $entityManager->createQuery('SELECT u FROM App\Entity\User u');

        // $user=$req->getResult();

        // ini_set('max_execution_time',0); //300 seconds = 5 minutes 

        // foreach ($user as $users) {
        //     if ( length($users->password) >= 8  ) { // verifie si c'est N° de tel

            //     $password='Alcalis18'; // on enregistre unique le N° 8chiffre
            //     $id= 6069;
            //  $up= $entityManager->createQuery('UPDATE App\Entity\User u SET (u.password = :password) WHERE (u.id = :id )');
            //  $up->setParameters(array(
            //      'password' => $password,               
            //      'id' => $id,
            //  ));
            // // $up->execute();
            //  $up->getResult();
            //     }
            
        
         $row=2 ;    
         $nom = "venance" ;
         $offre = strlen($nom);

         $decoup = substr($nom,-6) ;
          if ($offre > 7 ) {

             $decoup = substr($nom,-2) ; 
         }
             $name = "venance" ;

        // $user = new User();
        // $user->setUsername('venance');
        // $user->setPassword('venance');
        // $user->setEmail('venance@email.com');
        // $EntityManager = $this->getDoctrine()->getManager('default');
        // $entityManager->persist($user);
        // $entityManager->flush();

            
            
            // $dqlquery = $entityManager->createQuery('SELECT u FROM App\Entity\User u');
            
            // $offre = $dqlquery->getResult();
            
            
           // $dqlquery = $EntityManager->createQuery('SELECT o FROM App\Entity\CjOffres o');
            
         //   $offre = $dqlquery->getResult();

             // $liste = $entityManager->createQuery('select n APP/Entity/numero v');
             // $repertoire=$liste->getResult() ;
             // foreach ($numero as $repertoire) {
             //     header('location: http://197.159.206.142/api/test/sendSMS.php?smsc=OCI&from=$numero&key=test&msg=lemessageenquestion'); 
             // }
        return $this->render('test/index.html.twig',['offre' => $offre, 'decoup'=>$decoup , 'name'=>$name]); 


        
    }
}
