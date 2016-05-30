<?php

namespace GM\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GM\ProjetBundle\Entity\Mission;

use GM\ProjetBundle\Entity\Frais;
use GM\ProjetBundle\Form\FraisType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class DepenseController extends Controller
{
    public function indexAction()
    {
        return $this->render('GMProjetBundle:Depense:index.html.twig');
    }
//*************************************************************SEMAINE DU 28 MARS   

    
 
//*************************************************************AJOUT FRAIS    
//*************************************************************AJOUT FRAIS
      public function ajoutfraisAction(Request $request)
    {
        $f= new Frais();
        $form = $this->createForm(FraisType::class, $f);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if($form->isSubmitted() && $form->isValid()){
                $frais=$form->getData();
                $user = $this->getUser()->getUsername();
                $idColab=$em->getRepository('GMProjetBundle:Collaborateur')->findOneByUser($user)->getId(); 
                $dossier = $em->getRepository('GMProjetBundle:DossierMissions')->findOneBy(array('collaborateur' =>$idColab, 'candidature'=>'oui'));
                $colab=$dossier->getCollaborateur();
                $projet=$dossier->getProjet();

                $frais->setCollaborateur($colab);
                $frais->setProjet($projet);
                $file = $frais->getPiece();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
                $file->move($brochuresDir, $fileName);  
                $frais->setPiece($fileName);
                $em->persist($frais);
                $em->flush();
                return new JsonResponse('Successful');
                
               
            }
            
           return $this->render('GMProjetBundle:Depense:ajout.html.twig', array('f' => $form->createView()));
    } 
    
//*************************************************************AFFICHER FRAIS
        public function listefraisAction(Request $request)
    {      
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser()->getUsername();
            $idColab=$em->getRepository('GMProjetBundle:Collaborateur')->findOneByUser($user)->getId(); 
            $dossier = $em->getRepository('GMProjetBundle:DossierMissions')->findOneBy(array('collaborateur' =>$idColab, 'candidature'=>'oui'));
            $idProjet=$dossier->getProjet()->getId();
            $lf=$em->getRepository('GMProjetBundle:Frais')->findBy(array('collaborateur' =>$idColab, 'projet'=>$idProjet));
            return $this->render('GMProjetBundle:Depense:liste.html.twig', array('Frais' => $lf));   
    }
    
    
    //*************************************************************MODIFIER FRAIS
        public function modificationfraisAction(Request $request)
    {
       
        $id= $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $f= $em->getRepository('GMProjetBundle:Frais')->find($id);
        $form = $this->createForm(FraisType::class, $f);
        $form->handleRequest($request);
        if($form->isValid() && $form->isValid()){
          //$miss= new Mission();
                $file = $f->getPiece();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
                $file->move($brochuresDir, $fileName);  
                $f->setPiece($fileName);
                $em->persist($f);
                $em->flush();
                return new JsonResponse('Successful');
           }
           
          return $this->render('GMProjetBundle:Depense:modif.html.twig', array('f' => $form->createView()));
    
            
    }
    
 //*************************************************************SUPPRIMER FRAIS    
 //*************************************************************SUPPRIMER FRAIS
        public function suppressionfraisAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $f= $em->getRepository('GMProjetBundle:Frais')->find($id);
        if(!$f){
            throw $this->createNotFoundException('Le frais numéro '. $id. ' n\'existe pas dans la base');
        }
        $em->remove($f);
        $em->flush();
        return $this->redirectToRoute('gm_projet_liste');
    }



    
}
