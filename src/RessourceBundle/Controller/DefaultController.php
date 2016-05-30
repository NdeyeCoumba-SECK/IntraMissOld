<?php

namespace RessourceBundle\Controller;

use GM\ProjetBundle\Entity\Projet;
use RessourceBundle\Form\ProjetType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
     public function newProjectAction(Request $request)
    {
        $project= new Projet();
        $form = $this->createForm(ProjetType::class, $project);
        $form->handleRequest($request);
        
        if($form->isValid() && $form->isValid()){
          $em = $this->getDoctrine()->getManager();
          $em->persist($project);
          $em->flush();
          //return $this->redirectToRoute('gm_projet_liste');
        }
           
        return $this->render('RessourceBundle:Default:project.html.twig', array('form' => $form->createView()));
     }
}
