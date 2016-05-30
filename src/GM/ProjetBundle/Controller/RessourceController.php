<?php

namespace GM\ProjetBundle\Controller;

use GM\ProjetBundle\Entity\Projet;
use GM\ProjetBundle\Entity\DossierMissions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GM\ProjetBundle\Form\ProjetType;
use Symfony\Component\Validator\Constraints\DateTime;
use DateTimeZone;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class RessourceController extends Controller
{
   
    public function newProjectAction(Request $request)
    {
        $project= new Projet();
        $tz = new DateTimeZone('Africa/Dakar');
        $date=new \DateTime();
        $date->setTimezone($tz);
        $project->setDatePublication($date);
        $form = $this->createForm(ProjetType::class, $project);
        $form->handleRequest($request);
         $res = $form->getErrors(true, true);
         
        if($form->isValid()){
            if ($request->isXmlHttpRequest()) {
                    $em = $this->getDoctrine()->getManager();
                    $req=$em->getRepository('GMProjetBundle:Projet')->findOneByReference($project->getReference());
                    if( $req===null )
                    {
                        $em->persist($project);
                        $em->flush();
                        $response = new JsonResponse('Projet publié avec succès');
                        return $response;
                    }
                    else {
                        $response = new JsonResponse($project->getReference().' : existe deja dans la base');
                        return $response;
                     }
            }
        }elseif ($request->isXmlHttpRequest()) {
            $errors = array_filter(explode("\n", $res->__toString()));
            $res = ['response'=> 'failed', 'message' => $errors];
            return new JsonResponse($res, Response::HTTP_UNAUTHORIZED);
         
        }
           
         return $this->render('GMProjetBundle:Ressource:newProject.html.twig', array('form' => $form->createView()));
    }
    
    
      public function listeProjetAction()
    {
      $em= $this->getDoctrine()->getEntityManager();
      $lp=$em->getRepository('GMProjetBundle:Projet')->findAll();
      return $this->render('GMProjetBundle:Ressource:listeProjet.html.twig', array('projets' => $lp));   
    }
    
      public function receivedProjectAction()
    {
      $em= $this->getDoctrine()->getEntityManager();
      $rp=$em->getRepository('GMProjetBundle:Projet')->findBy(array('etat' => null));
      return $this->render('GMProjetBundle:Ressource:receivedProject.html.twig', array('projets' => $rp));   
    }
    
    
     public function positionedAction(Request $request)
    {
        $id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('GMProjetBundle:Projet')->find($id);
        $project->setEtat("En cours de traitement");
       
         $em->persist($project);
         $em->flush();
         $response = new JsonResponse('Successful');
         return $response;
        
    }
    
    
      public function projectStatusAction()
    {
      $em= $this->getDoctrine()->getEntityManager();
      $lp=$em->getRepository('GMProjetBundle:Projet')->findAll();
      return $this->render('GMProjetBundle:Ressource:projectStatus.html.twig', array('projets' => $lp));   
    }
    
       public function ressourceAction(Request $request)
    {
         $id = $request->request->get('id');
         $em= $this->getDoctrine()->getManager();
         $projet=$em->getRepository('GMProjetBundle:Projet')->find($id);
     
         $collaborateurs = $em->getRepository('GMProjetBundle:Collaborateur')->getAllWithoutProject(); 
           
      
        return $this->render('GMProjetBundle:Ressource:ressource.html.twig', array('projet' => $projet,'collaborateurs' =>$collaborateurs ));   
    
        
    }
    
      public function detailProjetAction(Request $request)
    {
       $id = $request->request->get('id');
        $em= $this->getDoctrine()->getManager();
        $projet=$em->getRepository('GMProjetBundle:Projet')->find($id);
        $collaborateurs= $projet-> getCollaborateurs();
        return $this->render('GMProjetBundle:Ressource:detailProjet.html.twig', array('projet' => $projet,'collaborateurs' => $collaborateurs ));   
    }
    
    
     public function affectationAction(Request $request)
    {
        
        $idProjet = $request->request->get('idProjet');
        $idCollab= $request->request->get('idCollab');
        $em = $this->getDoctrine()->getManager(); 
        $project = $em->getRepository('GMProjetBundle:Projet')->find($idProjet);
        $collaborateur = $em->getRepository('GMProjetBundle:Collaborateur')->find($idCollab);
        $project->addCollaborateur($collaborateur);
        $dossierMission= new DossierMissions();
        $dossierMission->setProjet($project);
        $dossierMission->setCollaborateur($collaborateur);
        $em->persist($dossierMission);
        $em->persist($project);
        $em->flush();
        $response = new JsonResponse('Successful');
        return $response; 
          
    }

    


    
}
