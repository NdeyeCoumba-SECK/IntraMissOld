<?php

namespace UtilisateursBundle\Controller;

use FOS\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class ProfileController extends BaseController
{
    public function editAction(Request $request)
    { 
         
         $user = $this->getUser();
         
         $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);
        
        $form->handleRequest($request);
        $res = $form->getErrors(true, true);
      
      if ($form->isValid()) {
       if ($request->isXmlHttpRequest()) {
           
             $userManager = $this->get('fos_user.user_manager');
             $userManager->updateUser($user);
             $response = new JsonResponse('Successful');
         }
         return $response;
      }
      elseif ($request->isXmlHttpRequest()) {
           // die("Ici");
            $errors = array_filter(explode("\n", $res->__toString()));
            $res = ['response'=> 'failed', 'message' => $errors];
            return new JsonResponse($res, Response::HTTP_UNAUTHORIZED);
        }
        
        return $this->container->get('templating')->renderResponse('FOSUserBundle:Profile:edit.html.twig', array(
            'form' => $form->createView(),
        ));
        
        
    }
    
}
