<?php

namespace GM\ProjetBundle\Controller;

use GM\ProjetBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GM\ProjetBundle\Form\AssistType;
use GM\ProjetBundle\Form\MyDocumentType;
use Symfony\Component\Validator\Constraints\DateTime;
use DateTimeZone;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


class SuiviController extends Controller
{
   
    public function assistAction()
   {
        $em= $this->getDoctrine()->getManager();
        //$collaborateurs = $em->getRepository('GMProjetBundle:Collaborateur')->getAllWithinProject(); 
         $dossierMissions= $em->getRepository('GMProjetBundle:DossierMissions')->findBY(array('candidature' => NULL));
 
        
        return $this->render('GMProjetBundle:Suivi:assist.html.twig', array('dossierMissions'=>$dossierMissions));   
   }
   
    public function infoCollaborateurAction(Request $request)
   {
        $idProjet = $request->request->get('idProjet');
        $idCollab = $request->request->get('idCollab');
        $em= $this->getDoctrine()->getManager();
        $projet=$em->getRepository('GMProjetBundle:Projet')->find($idProjet);
        $collaborateur=$em->getRepository('GMProjetBundle:Collaborateur')->find($idCollab);
          
        $form = $this->createForm(AssistType::class);
        return $this->render('GMProjetBundle:Suivi:infoCollaborateur.html.twig', 
                               array('projet'=>$projet, 'collaborateur'=>$collaborateur, 'form' => $form->createView())
                );   
   }
   
   
      public function candidatureAction(Request $request)
   {
        $em= $this->getDoctrine()->getManager();
        $form = $this->createForm(AssistType::class);
        $form->handleRequest($request);
        $idProjet = $request->request->get('idProjet');
        $idColab = $request->request->get('idCollab');
        $dossier = $em->getRepository('GMProjetBundle:DossierMissions')->findOneBy(array('projet' => $idProjet, 'collaborateur' =>$idColab)); 
        
        $candidature=$form->get('candidature')->getData();
        if ($candidature=='non')
        { 
         $dossier->setCandidature('non');
         $em->persist($dossier); $em->flush();
         $response = new JsonResponse('Succsseful: Candidature Non Retenue');
        }
        
        else
        {
            $duree=$form->get('duree')->getData(); 
            $date=$form->get('dateDepart')->getData();
            $dossier->setCandidature('oui');
            $dossier->setDuree($duree);
            $dossier->setDateDepart($date);
            $em->persist($dossier); $em->flush();
            $response = new JsonResponse('Succsseful: Candidature Retenue');
        }
        
        return $response; 
   }
   
   
     public function onMissionAction()
   {
        $em= $this->getDoctrine()->getManager();
        //$collaborateurs = $em->getRepository('GMProjetBundle:Collaborateur')->getAllWithinProject(); 
         $dossierMissions= $em->getRepository('GMProjetBundle:DossierMissions')->findBy(array('candidature'=>'oui'));
        
         return $this->render('GMProjetBundle:Suivi:onMission.html.twig', array('dossierMissions'=>$dossierMissions));   
   }
   
   
      public function dtailOnMissionAction(Request $request)
   {
     $idProjet = $request->request->get('idProjet');
     $idColab = $request->request->get('idCollab');
          
     $em= $this->getDoctrine()->getManager();
     $dossier = $em->getRepository('GMProjetBundle:DossierMissions')->findOneBy(array('projet' => $idProjet, 'collaborateur' =>$idColab, 'candidature'=>'oui'));

         return $this->render('GMProjetBundle:Suivi:detailOnMission.html.twig', array('dossier'=>$dossier));   
   }
   
   
        public function mydocumentAction(Request $request)
   {
         $user = $this->getUser()->getUsername();
         $em= $this->getDoctrine()->getManager();
         $idColab=$em->getRepository('GMProjetBundle:Collaborateur')->findOneByUser($user)->getId(); 

          $dossier = $em->getRepository('GMProjetBundle:DossierMissions')->findOneBy(array('collaborateur' =>$idColab, 'candidature'=>'oui'));
          //var_dump($dossier); die();
        $form = $this->createForm(MyDocumentType::class);
         return $this->render('GMProjetBundle:Suivi:myDocument.html.twig', array('dossier'=>$dossier, 'form' => $form->createView())
                 );   
   }
   
   
     public function savemydocumentAction(Request $request)
   {
         $idDossier = $request->request->get('idDossier');
         $ville= $request->request->get('ville');
         $hotel = $request->request->get('hotel');
         $fonction = $request->request->get('fonction');
         $chefProjet = $request->request->get('chefProjet');
         $em= $this->getDoctrine()->getManager();
         $dossier = $em->getRepository('GMProjetBundle:DossierMissions')->find($idDossier);
         $dossier->setVille($ville);
         $dossier->setHotel($hotel);
         $dossier->setFonction($fonction);
         $dossier->setChefProjet($chefProjet);
         $em->persist($dossier);
         $em->flush();
         return new JsonResponse('Succsseful');
   
   }


 //*********  Frais et Collaborateurs
   
      public function fraisColabsAction()
   {
        $em= $this->getDoctrine()->getManager();
         $dossierMissions= $em->getRepository('GMProjetBundle:DossierMissions')->findBy(array('candidature'=>'oui'));

         return $this->render('GMProjetBundle:Suivi:fraisColabs.html.twig', array('dossierMissions'=>$dossierMissions));   
   }
   
  //**************** Frais par Collaborateur
     public function fraisParColabAction(Request $request)
   {
         $idProjet = $request->request->get('idProjet');
         $idColab = $request->request->get('idCollab');
          
          $em= $this->getDoctrine()->getManager();
          $frais = $em->getRepository('GMProjetBundle:Frais')->findBy(array('projet' => $idProjet, 'collaborateur' =>$idColab));
          $dossier = $em->getRepository('GMProjetBundle:DossierMissions')->findOneBy(array('projet' => $idProjet, 'collaborateur' =>$idColab,'candidature'=>'oui'));
         return $this->render('GMProjetBundle:Suivi:fraisParColab.html.twig', array('frais'=>$frais, 'dossier'=>$dossier));   
   }
   
        public function validerFraisAction(Request $request)
    {
        $id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $frais = $em->getRepository('GMProjetBundle:Frais')->find($id);
        $frais->setEtat("oui");
       
         $em->persist($frais);
         $em->flush();
         $response = new JsonResponse('Successful');
         return $response;   
    }
    
     public function exportFraisAction(Request $request)
    {
         $id = $request->request->get('id');
         $em = $this->getDoctrine()->getManager();
         $frais = $em->getRepository('GMProjetBundle:Frais')->find($id);
         $colab=$frais->getCollaborateur()->getUser();
         $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

            $phpExcelObject->setActiveSheetIndex(0)
                 ->setCellValue('A1', 'DAS-ID')->setCellValue('B1', 'Ref Projet')->setCellValue('C1', 'Designation')
                 ->setCellValue('D1', 'Montant')->setCellValue('E1', 'Unite')
                 ->setCellValue('F1', 'Date')->setCellValue('G1', 'Description');
            
            
            $phpExcelObject->setActiveSheetIndex(0)
                 ->setCellValue('A2',$colab)
                 ->setCellValue('B2', $frais->getProjet()->getReference())
                 ->setCellValue('C2', $frais->getDesignation())
                 ->setCellValue('D2', $frais->getMontant())
                 ->setCellValue('E2', $frais->getUnite())
                 ->setCellValue('F2', $frais->getDate())
                 ->setCellValue('G2', $frais->getInfoCom());
                 
             $phpExcelObject->getActiveSheet()->setTitle('Simple');
             // Set active sheet index to the first sheet, so Excel opens this as the first sheet
             $phpExcelObject->setActiveSheetIndex(0);

              // create the writer
              $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');
              // create the response
              $response = $this->get('phpexcel')->createStreamedResponse($writer);
              // adding headers
              $dispositionHeader = $response->headers->makeDisposition(
                  ResponseHeaderBag::DISPOSITION_ATTACHMENT,
                  $colab.'.xlsx'
              );
              $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
              $response->headers->set('Pragma', 'public');
              $response->headers->set('Cache-Control', 'maxage=1');
              $response->headers->set('Content-Disposition', $dispositionHeader);

              return $response; 
    }

    
     public function exportToutAction(Request $request)
   {
         $idProjet = $request->request->get('idProjet');
         $idColab = $request->request->get('idCollab');
          
          $em = $this->getDoctrine()->getManager();
          $frais = $em->getRepository('GMProjetBundle:Frais')->findBy(array('projet' => $idProjet, 'collaborateur' =>$idColab, 'etat'=>'oui'));
         
         $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

             $phpExcelObject->setActiveSheetIndex(0)
                 ->setCellValue('A1', 'DAS-ID')->setCellValue('B1', 'Ref Projet')->setCellValue('C1', 'Designation')
                 ->setCellValue('D1', 'Montant')->setCellValue('E1', 'Unite')
                 ->setCellValue('F1', 'Date')->setCellValue('G1', 'Description');
             
          $i=2; $colab=0;
          
         foreach ($frais as $f)
         {
             
            $colab=$f->getCollaborateur()->getUser();
            $phpExcelObject->setActiveSheetIndex(0)
                 ->setCellValue('A'.$i,$colab)
                 ->setCellValue('B'.$i, $f->getProjet()->getReference())
                 ->setCellValue('C'.$i, $f->getDesignation())
                 ->setCellValue('D'.$i, $f->getMontant())
                 ->setCellValue('E'.$i, $f->getUnite())
                 ->setCellValue('F'.$i, $f->getDate())
                 ->setCellValue('G'.$i, $f->getInfoCom());
            $i++;
         }        

           $phpExcelObject->getActiveSheet()->setTitle('Simple');
             $phpExcelObject->setActiveSheetIndex(0);
             $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');
             $response = $this->get('phpexcel')->createStreamedResponse($writer);
             $dispositionHeader = $response->headers->makeDisposition(
                  ResponseHeaderBag::DISPOSITION_ATTACHMENT,
                  $colab.'.xlsx'
              );
              $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
              $response->headers->set('Pragma', 'public');
              $response->headers->set('Cache-Control', 'maxage=1');
              $response->headers->set('Content-Disposition', $dispositionHeader);

              return $response;    
   }
   
    
}
