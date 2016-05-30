<?php

namespace UtilisateursBundle\Controller;

use FOS\UserBundle\Controller\ChangePasswordController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class ChangePasswordController extends BaseController
{
    public function changePasswordAction(Request $request)
    { 
         
         $user = $this->getUser();
         
       $formFactory = $this->get('fos_user.change_password.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);
       
        $form->handleRequest($request);
        
      if ($form->isValid()) {
       if ($request->isXmlHttpRequest()) {
           
           //var_dump($form);
             $userManager = $this->get('fos_user.user_manager');
             $userManager->updateUser($user);
             
             $response = new Response("Succes");
             return $response;
           
         }
      }
      
       return $this->render('FOSUserBundle:ChangePassword:changePassword.html.twig', array(
            'form' => $form->createView()
        ));
        
        
    }
    
}
