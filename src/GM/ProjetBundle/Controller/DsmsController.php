<?php

namespace GM\ProjetBundle\Controller;

use GM\ProjetBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DateTimeZone;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


class DsmsController extends Controller
{
  
    public function updateProjectsAction(Request $request)
    {
       $form = $this->createFormBuilder()
        ->add('file', FileType::class, array('label' => 'File '))
        ->add('submitFile', SubmitType::class, array('label' => 'Importer'))
        ->getForm();
        if ($request->getMethod('post') == 'POST') {
           $form->handleRequest($request);
           
            if ($form->isValid()) {
                $file=$form->getData();
               $extension=$file['file']->getClientOriginalExtension(); 
               if (($extension!='xlsx') && ($extension!='xls') ) 
                 {
                    return new JsonResponse('Erreur (Extension: '. $extension.' ); Un fichier Excel (xls/xlsx) est attendu');
                 }
              else {
                $fileName=$file['file']->getRealPath();
                $em = $this->getDoctrine()->getManager();
                $tz = new DateTimeZone('Africa/Dakar');
                $date=new \DateTime();
                $date->setTimezone($tz);

                 $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject($fileName);
                 $sheet = $phpExcelObject->getSheet(0);
                 $highestRow = $sheet->getHighestRow(); 
                 $highestColumn = $sheet->getHighestColumn();
                 for($row = 2; $row <= $highestRow; $row++){ 
                    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE,FALSE);
                     var_dump($rowData[0][0]);
                          $project= new Projet();
                          $project->setReference($rowData[0][0]); $project->setIntitule($rowData[0][1]);
                          $project->setDatePublication($date); $project->setAnnonceur($rowData[0][3]);
                          $project->setDuree($rowData[0][4]); $project->setLieu($rowData[0][5]);
                          $project->setProfil($rowData[0][6]); $project->setDescription($rowData[0][7]);
                          $em->persist($project);
                    }
                  $em->flush();
                  return new JsonResponse('Successful');
              }
            }

        }

                return $this->render('GMProjetBundle:Dsms:updateProjects.html.twig',
                    array('form' => $form->createView())
                );
 
    }
    
    //*******Essai Excel
      public function excelAction()
    {
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

      for($i=1;$i<3; $i++)
      {
       $phpExcelObject->setActiveSheetIndex(0)
           ->setCellValue('A'.$i, 'Hello')
           ->setCellValue('B'.$i, 'world!');
      }
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
            'stream-file'.'.xlsx'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;              
    }
    
    
    //**************** Essai Date
     public function dateAction(Request $request)
    {
       $form = $this->createFormBuilder()
        ->add('date', DateTimeType::class, array('label' => 'File '))
        ->add('submitFile', SubmitType::class, array('label' => 'envoyer'))
        ->getForm();
        if ($request->getMethod('post') == 'POST') {
           $form->handleRequest($request);
           
            if ($form->isValid()) {
                $file=$form->getData();
             
            }

        }

                return $this->render('GMProjetBundle:Dsms:updateProjects.html.twig',
                    array('form' => $form->createView(),)
                );
 
    }
    
     public function perdiemAction(Request $request)
    {
          $em= $this->getDoctrine()->getManager();
          $dossiers=$em->getRepository('GMProjetBundle:DossierMissions')->findBY(array('candidature' => 'oui'));
          $datePerdiem = $request->request->get('datePerdiem');
           if($datePerdiem!=null) {$date= new \DateTime($datePerdiem);}
           else{$date= new \DateTime(); }
           
           $nbrjT=array(); $nbrjM=array();
           foreach ($dossiers as $dossier) 
           {
              $dateD= $dossier->getDateDepart();
              $id= $dossier->getCollaborateur()->getId();
                if ($date >= $dateD) 
                 {
                    $interval = $dateD->diff($date);
                    $nbjT=$interval->format('%a');
                    $nbjM=$date->format('d');

                    if (($dateD->format('m')==$date->format('m')) && ($dateD->format('y')==$date->format('y')))
                    {
                       $nbjM =$nbjT;
                    }

                    $nbrjT[$id]=$nbjT;
                    $nbrjM[$id]=$nbjM;
                 }
                 else {$nbrjT[$id]=0; $nbrjM[$id]=0;}
           }

      return $this->render('GMProjetBundle:Dsms:perdiem.html.twig',
              array('dossiers' =>$dossiers, 'nbrjT' =>$nbrjT, 'nbrjM'=>$nbrjM, 'date'=>$date)
              );
    }
    
      public function exportPerdiemAction(Request $request)
    {
         $id = $request->request->get('id');
         $nbrjT = $request->request->get('nbrjT');
         $nbrjM = $request->request->get('nbrjM');
         $date = $request->request->get('date');
         $em = $this->getDoctrine()->getManager();
         $dossier = $em->getRepository('GMProjetBundle:DossierMissions')->find($id);
         $colab=$dossier->getCollaborateur()->getUser();
         $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

            $phpExcelObject->setActiveSheetIndex(0)
                 ->setCellValue('C1', 'Etat des Perdiemes à la date du '.$date)
                 ->setCellValue('A2', 'DAS-ID')->setCellValue('B2', 'Ref Projet')
                 ->setCellValue('C2', 'Ville')->setCellValue('D2', 'Date Départ')
                 ->setCellValue('E2', 'Unité')->setCellValue('F2', 'Jours/Mois Courant')->setCellValue('G2', 'Montant/Mois Courant')
                 ->setCellValue('H2', 'Jours')->setCellValue('I2', 'Montant');
            
            $phpExcelObject->setActiveSheetIndex(0)
                 ->setCellValue('A3',$colab)
                 ->setCellValue('B3', $dossier->getProjet()->getReference())
                 ->setCellValue('C3', $dossier->getVille())
                 ->setCellValue('D3', $dossier->getDateDepart())
                 ->setCellValue('E3', 40)
                 ->setCellValue('F3', $nbrjM)
                 ->setCellValue('G3', $nbrjM*40)
                 ->setCellValue('H3', $nbrjT)
                 ->setCellValue('I3', $nbrjT*40);
                 
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
                  $colab.'_Perdiem'.'.xlsx'
              );
              $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
              $response->headers->set('Pragma', 'public');
              $response->headers->set('Cache-Control', 'maxage=1');
              $response->headers->set('Content-Disposition', $dispositionHeader);

              return $response; 
    }
    
     public function exportToutPerdiemAction(Request $request)
   {
        //******************
          $em= $this->getDoctrine()->getManager();
          $dossiers=$em->getRepository('GMProjetBundle:DossierMissions')->findBY(array('candidature' => 'oui'));
          $datePer = $request->request->get('date');
          $date= new \DateTime($datePer);

           $nbrjT=array(); $nbrjM=array();
           foreach ($dossiers as $dossier) 
           {
              $dateD= $dossier->getDateDepart();
              $id= $dossier->getCollaborateur()->getId();
                if ($date >= $dateD) 
                 {
                    $interval = $dateD->diff($date);
                    $nbjT=$interval->format('%a');
                    $nbjM=$date->format('d');

                    if (($dateD->format('m')==$date->format('m')) && ($dateD->format('y')==$date->format('y')))
                    {
                       $nbjM =$nbjT;
                    }

                    $nbrjT[$id]=$nbjT;
                    $nbrjM[$id]=$nbjM;
                 }
                 else {$nbrjT[$id]=0; $nbrjM[$id]=0;}
           }
         
         //***********
         $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

            $phpExcelObject->setActiveSheetIndex(0)
                 ->setCellValue('C1', 'Etat des Perdiemes à la date du '.$datePer)
                 ->setCellValue('A2', 'DAS-ID')->setCellValue('B2', 'Ref Projet')
                 ->setCellValue('C2', 'Ville')->setCellValue('D2', 'Date Départ')
                 ->setCellValue('E2', 'Unité')->setCellValue('F2', 'Jours/Mois Courant')->setCellValue('G2', 'Montant/Mois Courant')
                 ->setCellValue('H2', 'Jours')->setCellValue('I2', 'Montant');
            
          $i=3; $colab=0;
          
         foreach ($dossiers as $dossier)
         {
            $colab=$dossier->getCollaborateur();
            $phpExcelObject->setActiveSheetIndex(0)
                 ->setCellValue('A'.$i,$colab->getUser())
                 ->setCellValue('B'.$i, $dossier->getProjet()->getReference())
                 ->setCellValue('C'.$i, $dossier->getVille())
                 ->setCellValue('D'.$i, $dossier->getDateDepart())
                 ->setCellValue('E'.$i, 40)
                 ->setCellValue('F'.$i, $nbrjM[$colab->getId()])
                 ->setCellValue('G'.$i, $nbrjM[$colab->getId()]*40)
                 ->setCellValue('H'.$i, $nbrjT[$colab->getId()])
                 ->setCellValue('I'.$i, $nbrjT[$colab->getId()]*40);
                         $i++;
         }        

           $phpExcelObject->getActiveSheet()->setTitle('Simple');
             $phpExcelObject->setActiveSheetIndex(0);
             $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');
             $response = $this->get('phpexcel')->createStreamedResponse($writer);
             $dispositionHeader = $response->headers->makeDisposition(
                  ResponseHeaderBag::DISPOSITION_ATTACHMENT,
                  'Perdiem.xlsx'
              );
              $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
              $response->headers->set('Pragma', 'public');
              $response->headers->set('Cache-Control', 'maxage=1');
              $response->headers->set('Content-Disposition', $dispositionHeader);

              return $response;    
   }
   
}
