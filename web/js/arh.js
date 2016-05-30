function arh()
{
            $( "#projectStatus" ).click(function() {

               $('#divProjectStatus').css({'display':'block'}); 
               $('#divAssist, #divColabMission, #divFees, #divProfile, #divPerdieme').css({'display':'none'});
               $('.titre').text($(this).text());
               $('.lien1').css({'borderBottom':'3px solid'});
               $('.lien2, .lien3, .lien4, .lien5, .lien6').css({'borderBottom':'0px solid'});
            });
                     
            $( "#assistCollaboratos" ).click(function() {

               $('#divAssist').css({'display':'block'}); 
               $('#divProjectStatus, #divColabMission, #divFees, #divProfile, #divPerdieme').css({'display':'none'});
               $('.titre').text($(this).text());
               $('.lien2').css({'borderBottom':'3px solid'});
               $('.lien1, .lien3, .lien4, .lien5, .lien6').css({'borderBottom':'0px solid'});
            });     
            
            $( "#collaborateursMission" ).click(function() {

               $('#divColabMission').css({'display':'block'}); 
               $('#divProjectStatus, #divAssist, #divFees, #divProfile, #divPerdieme').css({'display':'none'});
               $('.titre').text($(this).text());
               $('.lien3').css({'borderBottom':'3px solid'});
               $('.lien1, .lien2, .lien4, .lien5, .lien6').css({'borderBottom':'0px solid'});
            }); 
            
              $( "#frais" ).click(function() {

               $('#divFees').css({'display':'block'}); 
               $('#divProjectStatus, #divAssist, #divColabMission, #divProfile, #divPerdieme').css({'display':'none'});
               $('.titre').text($(this).text());
               $('.lien4').css({'borderBottom':'3px solid'});
               $('.lien1, .lien2, .lien3, .lien5, .lien6').css({'borderBottom':'0px solid'});
            });
            
            $( "#perdiem" ).click(function() {

               $('#divPerdieme').css({'display':'block'}); 
               $('#divProjectStatus, #divAssist, #divColabMission, #divFees, #divProfile').css({'display':'none'});
               $('.titre').text($(this).text());
               $('.lien5').css({'borderBottom':'3px solid'});
               $('.lien1, .lien2, .lien3, .lien4, .lien6').css({'borderBottom':'0px solid'});
            });
            
            $( "#profile" ).click(function() {

               $('#divProfile').css({'display':'block'}); 
               $('#divProjectStatus, #divAssist, #divColabMission, #divFees, #divPerdieme').css({'display':'none'});
               $('.titre').text($(this).text());
               $('.lien6').css({'borderBottom':'3px solid'});
               $('.lien1, .lien2, .lien3, .lien4, .lien5').css({'borderBottom':'0px solid'});
            });
           
}