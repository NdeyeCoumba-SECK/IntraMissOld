<?php

namespace UtilisateursBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Security("has_role('ROLE_USER')")
 */
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        
       // $user = $this->getUser();
        $authorization = $this->get('security.authorization_checker'); 
        
        if($authorization->isGranted('ROLE_ADMIN')){
           return $this->redirectToRoute('utilisateurs_admin'); 
        }
        
         else if($authorization->isGranted('ROLE_ATOS')){
           return $this->redirectToRoute('utilisateurs_atos'); 
        }
        
        else if($authorization->isGranted('ROLE_COLAB')){
           return $this->redirectToRoute('utilisateurs_collaborateur'); 
        }
        
         else if($authorization->isGranted('ROLE_ARH')){ 
           return $this->redirectToRoute('utilisateurs_arh'); 
        }
        
         else if($authorization->isGranted('ROLE_DRH')){
           return $this->redirectToRoute('utilisateurs_drh'); 
        }
        
         else if($authorization->isGranted('ROLE_DG')){
           return $this->redirectToRoute('utilisateurs_dg'); 
        }
        
        else 
        {
          // $this->get('request')->getSession()->invalidate(); 
            return $this->redirectToRoute('fos_user_security_login');
        }
    }
    
   
    public function collaborateurAction()
    {
      
        return $this->render('UtilisateursBundle:Default:collaborateur.html.twig');
    }
    
     public function assistantRHAction()
    {

        return $this->render('UtilisateursBundle:Default:assistantRH.html.twig');
    }
    
     public function directeurRHAction()
    {

        return $this->render('UtilisateursBundle:Default:directeurRH.html.twig');
    }
    
        /**
        * @Security("has_role('ROLE_DG')")
        */
     public function dgAction()
    {    
         /*$requete = $this->get('gm_requete');
         var_dump($requete->getCollaborateurLibres(3)); die("ici");*/

        return $this->render('UtilisateursBundle:Default:dg.html.twig');
    }
    
     public function adminAction()
    {

        return $this->render('UtilisateursBundle:Default:admin.html.twig');
    }
    
     public function projetAction()
    {

        return $this->render('UtilisateursBundle:Default:projet.html.twig');
    }
    
    public function usersAction()
    {
         $em= $this->getDoctrine()->getEntityManager();
         $users=$em->getRepository('UtilisateursBundle:User')->findAll();
         //var_dump($users);
        return $this->render('UtilisateursBundle:Default:users.html.twig',array('users' => $users));
    }
    
    public function enableUserAction(Request $request)
    {
        $choix = $request->request->get('choix');
        $id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UtilisateursBundle:User')->find($id);
        if($choix === null){
            $user->setEnabled(false);
        }
        else if($choix == 1){
            $user->setEnabled(true);
        }
        else if($choix === ''){
          $user->setEnabled(true); 
        }
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('utilisateurs_admin');
        
    }
    
    
}
