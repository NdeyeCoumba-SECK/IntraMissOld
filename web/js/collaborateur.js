function collaborateur()
{
           $( "#profile" ).click(function() {

               $('#divProfile').css({'display':'block'}); 
               $('#divMyDocument, #divFees, #divMyComments').css({'display':'none'});
               $('.titre').text($(this).text());
               $('.lien1').css({'borderBottom':'3px solid'});
               $('.lien2, .lien3, .lien4').css({'borderBottom':'0px solid'});
            });
                     
            $( "#myDocument" ).click(function() {

               $('#divMyDocument').css({'display':'block'}); 
               $('#divProfile, #divFees, #divMyComments').css({'display':'none'});
               $('.titre').text($(this).text());
               $('.lien2').css({'borderBottom':'3px solid'});
               $('.lien1, .lien3, .lien4').css({'borderBottom':'0px solid'});
            });     
            
            $( "#myFees" ).click(function() {

               $('#divFees').css({'display':'block'}); 
               $('#divProfile, #divMyDocument, #divMyComments').css({'display':'none'});
               $('.titre').text($(this).text());
               $('.lien3').css({'borderBottom':'3px solid'});
               $('.lien1, .lien2, .lien4').css({'borderBottom':'0px solid'});
            }); 
            
              $( "#myComments" ).click(function() {

               $('#divMyComments').css({'display':'block'}); 
               $('#divProfile, #divMyDocument, #divFees').css({'display':'none'});
               $('.titre').text($(this).text());
               $('.lien4').css({'borderBottom':'3px solid'});
               $('.lien1, .lien2, .lien3').css({'borderBottom':'0px solid'});
            });
            
            
           
}