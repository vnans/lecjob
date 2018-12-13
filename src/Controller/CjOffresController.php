<?php

namespace App\Controller;

use App\Entity\CjOffres;
use App\Entity\User;
use App\Form\CjOffresType;
use App\Repository\CjOffresRepository;
use App\service\DataService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\guessExtension;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cj/offres")
 */
class CjOffresController extends AbstractController
{
   protected $em ;
    /**
     * @Route("/", name="cj_offres_index",  methods="GET")
     */
    public function index(Request $request, DataService $query,SessionInterface $session ): Response
    {
        $entityManager = $this->getDoctrine()->getManager('default');
        $customerEntityManager = $this->getDoctrine()->getManager('customer');

        $REQ = $entityManager->createQuery('SELECT v.valeur FROM App\Entity\Compteur v');
        $lastId = $REQ->getResult() ;

        $CustomerEntityManager = $this->getDoctrine()->getManager('customer');
        $req = $CustomerEntityManager->createQuery('SELECT x.username , x.id FROM App\Entity\Customer\User x  WHERE x.id > :id ');
        $req->setParameters(array(
                             
                 'id' => $lastId,
             ));

        $newAbonnes = $req->getResult() ;


        $req2 = $customerEntityManager->createQuery('SELECT count(s.id)  FROM App\Entity\Customer\User s WHERE s.id > :id');
        $req2->setParameters(array(
                             
                 'id' => $lastId,
             ));
            $record = $req2->getResult();

            if ($record > 0 ){
        ini_set('max_execution_time',0); //300 seconds = 5 minutes 

        foreach ($newAbonnes as $abonnes) {
               // var_dump($abonnes['username']);
            if (strlen($abonnes['username']) > 7) { // si c'est un  numero de telephone
                $numero=substr($abonnes['username'],-8) ; //on retire l'indicatif
                $user = new User();
                $user->setIduser($abonnes['id']);
                $user->setUsername($numero);
                $user->setPassword($numero);
                $user->setEmail($numero);
                $user->setEnabled('1');  
               
                $entityManager->persist($user);
                $entityManager->flush();
                // mettre a jour lecompteur
                $this->em= $entityManager;
                        $qb = $this->em->createQueryBuilder();
                        $req = $qb->update('App\Entity\Compteur', 'c')
                                ->set('c.valeur', '?1')
                                ->where('c.id = ?2')
                                ->setParameter(1, $abonnes['id'])
                                ->setParameter(2,1)
                                ->getQuery();
                        $res = $req->execute();
             } 
            // mettre a jour les nouveaux users
        


            }
        }



             $authChecker =  $this->container->get('security.authorization_checker');
             $form = $this->createFormBuilder()
         // ->add('recherche',SearchType::class , ['attr'=>['placeholder'=>'Saisissez vos critères de recherche ici ... ']])
       
         ->add('Type', ChoiceType::class, array('choices' => array(
                'Type' => 'Emploi',
                'Emploi' => 'Emploi',
                'Stage' => 'Stage',
                )))
         ->add('Niveau', ChoiceType::class, array('choices'  => array(
            'Niveau' => null,
            'Bac +2' => 'Bac +2',
             )))       
         ->add('Metier', ChoiceType::class, array('choices' => array(
            'Metier' => null,
            'Assurance' => 'education scolaire',
             )))
           ->add('Valider',SubmitType::class,['attr'=>['class'=>'float-right btn btn-primary']])
         ->getForm(); 

        $offres=$query->ReturnData($request);
        $user  =$session->get('user'); 

        if ($authChecker->IsGranted('ROLE_USER')  ) {
           $popup =1 ;
        }
        
      return $this->render('cj_offres/index.html.twig', ['cj_offres' => $offres,'formSearch'=>$form->createView(),'user'=>$user]);
       // return $this->render('cj_offres/index.html.twig', ['cj_offres' => $offres,'user'=>$user]);
     
    
        
    }

    /**
     * @Route("/new", name="cj_offres_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $cjOffre = new CjOffres();
        $form = $this->createForm(CjOffresType::class, $cjOffre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $cjOffre->getImage();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            // moves the file to the directory where brochures are stored
            $file->move($this->getParameter('images_directory'), $fileName);

            $cjOffre->setImage($fileName); 

            $em = $this->getDoctrine()->getManager('default'); //modifié
            $em->persist($cjOffre);
            $em->flush();

            return $this->redirectToRoute('cj_offres_index');
        }

        return $this->render('cj_offres/new.html.twig', [
            'cj_offre' => $cjOffre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cj_offres_show", methods="GET")
     */
    public function show(CjOffres $cjOffre, SessionInterface $session ): Response
    {

        



        $authChecker =  $this->container->get('security.authorization_checker');
       if ($authChecker->IsGranted('ROLE_ADMIN')) {

            $session->set('admin','admin'); 
            
            $admin=$session->get('admin'); 

        return $this->render('cj_offres/show.html.twig',['cj_offre' => $cjOffre,'admin' => $admin,]);

        }else if($authChecker->IsGranted('ROLE_USER') or $session->get('user') == 'abonne' ){

            $session->set('user','abonne'); 
            $user = $session->get('user'); 
            
            

            return $this->render('cj_offres/show.html.twig',['cj_offre' => $cjOffre,'user' =>$user]); 
        }else{
            // un message flash d'erreur de connexion
            $this->addFlash('info','Pour obtenir plus de détails'); 

  // si pas connecter afficher message 
        // return $this->render('cj_offres/index.html.twig',['message',$message])   ;        
            return $this->redirectToRoute('cj_offres_index'); 

 //invitation de connexion a l'utilisateur avec ce formulaire et redirection sur login/client
         //    $form = $this->createFormBuilder()      
         //     ->add('username', TextType::class, array(
         //        'attr'=>array(
         //        'maxlength'=>'8',
         //        'placeholder'=>'ex: 99000099'
         //     ))) 
         //     ->add('password', PasswordType::class)       
         //     // ->add('remenber', CheckboxType::class)
         //     ->getForm();                   

         // return $this->redirectToRoute('default');
         //     return $this->render('client/index.html.twig', ['form'=> $form->createView()] );
         //    return redirectToRoute('client');
         // return $this->render('@FOSUser/Security/login.html.twig',array(
         //    'last_username' => null,
         //    'error' => null,
         //    'csrf_token' => null,));
    }
}

    /**
     * @Route("/{id}/edit", name="cj_offres_edit", methods="GET|POST")
     */
    public function edit(Request $request, CjOffres $cjOffre): Response
    {
        $form = $this->createForm(CjOffresType::class, $cjOffre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $cjOffre->getImage();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            // moves the file to the directory where brochures are stored
            $file->move($this->getParameter('images_directory'), $fileName);

            $cjOffre->setImage($fileName); 

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cj_offres_edit', ['id' => $cjOffre->getId()]);
        }

        return $this->render('cj_offres/edit.html.twig', [
            'cj_offre' => $cjOffre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cj_offres_delete", methods="DELETE")
     */
    public function delete(Request $request, CjOffres $cjOffre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cjOffre->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cjOffre);
            $em->flush();
        }

        return $this->redirectToRoute('cj_offres_index');
    }

    
     /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}
