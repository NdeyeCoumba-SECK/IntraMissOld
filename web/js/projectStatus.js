 function projectStatus(){ 
          //************** Received Project *************
              
                $( "#receivedProject" ).click(function(e) {
                              //e.preventDefault();
                              $('.recharge').css({'display':'block'});
                              $.ajax({
                             type: "GET",
                             url: "{{ path('gm_projet_received_project') }}",
                             cache: "false",
                             dataType: "html",
                             success: function(result){
                               $('.recharge').css({'display':'none'});
                               $("#divReceivedProject").html(result); 
                               positioned();
                             }
                          }); 

                         });
       
      //************* Posioned Project *****************  
         function positioned()
                     {
                         $("#divReceivedProject form").submit(function (e) {
                                e.preventDefault();
                                $('.recharge').css({'display':'block'});
                                var values = {};
                                $(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                 $(this).find('[type="submit"]').attr('class','voir');
                                 
                                 $.ajax({
                                    url: "{{ path('gm_projet_positioned_project') }}",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                     $('.recharge').css({'display':'none'});
                                     $(".voir").attr('disabled','disabled').css({'border':'none', 'background-color':'inherit'});
                                     $(".voir").html('<i class="fa fa-check fa-2x"  aria-hidden="true" style="color:green"></i>');
                                    /*setTimeout(function () {
                                        window.location.reload(1);
                                    }, 2000);*/
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                           });
                    }
           
           
}