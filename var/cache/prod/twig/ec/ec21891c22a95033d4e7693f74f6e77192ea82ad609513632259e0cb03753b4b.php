<?php

/* UtilisateursBundle:Default:collaborateur.html.twig */
class __TwigTemplate_48fffca4938c32a0d0492b3b80e03e31a896a7c7fb004e0e8a1915da0be14f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:collaborateur.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
      <!-- Menu -->
         ";
        // line 6
        echo twig_include($this->env, $context, "UtilisateursBundle:Default:menuCollaborateur.html.twig");
        echo "
     
    <!--   Corps  -->

  <div class=\"row corps\">
        <div class=\"col-sm-10 col-sm-offset-1\" >
            <h4 class=\"titre\" style=\"text-align: right\">My Profile </h4> <div class=\"ligne\"> </div>
        </div>
      
       <div class=\"col-sm-7 col-sm-offset-1\">
           
         <!-- My Profile -->
          <div id=\"divProfile\" class=\"col-sm-12\">
             My Profile
          </div>
            <div id=\"popup\" class=\"col-sm-12\">
               <button class=\"fermer\"> Fermer</button> <br/> <br/>

               <div id=\"ressource\">

               </div>
           </div>
           
      <!-- My Document -->
          <div id=\"divMyDocument\" class=\"col-sm-12\">
             My Document
          </div>
      
      <!-- My Fees -->
          <div id=\"divFees\" class=\"col-sm-12\">
             My Fees
          </div>
      
       <!-- My Comments -->
          <div id=\"divMyComments\" class=\"col-sm-12\">
             My Comments
          </div>
      
       </div>
        
      <div class=\"col-sm-3\">
            <div class=\"panel panel-default\">
               <div class=\"panel-body\"> Atos Images</div>
               
            </div>
            <div class=\"panel panel-default\">
               <div class=\"panel-body\"> Atos </div>
               
             </div>
      </div>

     
   </div>
      
";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/collaborateur.js"), "html", null, true);
        echo "\"></script>
      <script >
        \$(function(){
           
            collaborateur();
            \$( \".fermer\" ).click(function() {
                \$('#popup').css({'display':'none'});
            });          
       
        
      //************** My Document *************
        
             \$( \"#myDocument\" ).click(function(e) {
                    // e.preventDefault();
                    \$('.recharge').css({'display':'block'});
                     \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_mydocument");
        echo "\",
                        cache: \"false\",
                        dataType: \"html\",
                        success: function(result){
                        \$('.recharge').css({'display':'none'});
                        \$(\"#divMyDocument\").html(result); 
                         modification();
                         saveMyDocument();
                    }
                 }); 
                 
                });
                
                   function modification()
                    {
                       \$(\".modif\").click(function (e) {
                        //e.preventDefault();
                        \$('.ville, .hotel, .save').removeAttr('disabled');
                        \$('.ville').focus();
                               
                       });  
                    }
               
                     function saveMyDocument()
                    {
                       \$(\".myDoc\").submit(function (e) {
                            e.preventDefault();
                            \$('.recharge').css({'display':'block'});\$(\".results\").text('');
                            var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                
                                 \$.ajax({
                                    url: \"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_savemydocument");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$(\".results\").text(data);
                                   \$('.ville, .hotel, .save').attr('disabled','disabled');
                                 
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
                    }
                
 

//************** My Fees *************
        
             \$( \"#myFees\" ).click(function(e) {
                    // e.preventDefault();
                    \$('.recharge').css({'display':'block'});
                     \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("gm_projet_liste");
        echo "\",
                        cache: \"false\",
                        dataType: \"html\",
                        success: function(result){
                        \$('.recharge').css({'display':'none'});
                        \$(\"#divFees\").html(result); 
                        formFee();
                        piece();
                        formModifFee();
                    }
                 }); 
                 
                });    
               
             function formFee()
              {
                       \$(\".addFee\").click(function (e) {
                            e.preventDefault();
                            
                             \$('.recharge').css({'display':'block'});
                                 \$.ajax({
                                    url: \"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("gm_projet_ajout");
        echo "\",
                                    type: 'get'
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$('.formFee').css({'display':'block'});
                                   \$(\".formFee\").html(data); 
                                    addFee();
                                  
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
               }
                 
                 function addFee()
                    {
                       \$(\".formFee .addFee\").submit(function (e) {
                            e.preventDefault();var \$form = \$(this);
                            var \$form = \$(this);
                            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                            var data = (formdata !== null) ? formdata : \$form.serialize();
                             \$('.recharge').css({'display':'block'});
          
                               \$.ajax({
                                    url: \"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("gm_projet_ajout");
        echo "\",
                                    data: data,
                                    type: 'post',
                                    processData: false,
                                    contentType: false
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$(\".results\").text(data); 
                                   \$(\".btn-success\").attr('disabled','disabled');
                                    //addFee();
                                  
                                }).fail(function (data) {
                                   // erreur
                                });  
                        });  
                        
                                \$( \".fermer\" ).click(function() {
                                    \$('.formFee').css({'display':'none'});
                                });
                    }
                    
                  function piece ()
                  {
                    
                     \$(\".formPiece\").click(function (e) {
                        e.preventDefault();
                        var val=\$(this).find('[type=\"hidden\"]').val();
                        var param='uploads/brochures/'+val;  
                        \$('#popup').css({'display':'block'});
                        \$(\"#ressource\").html('<img src=\"'+param+'\" class=\"piece\">');
                      
                    });
                 }
                 
                 function formModifFee()
              {
                       \$(\".formModifFee\").click(function (e) {
                            e.preventDefault();
                            var data=\$(this).serialize();
                             \$('.recharge').css({'display':'block'});
                                 \$.ajax({
                                    url: \"";
        // line 226
        echo $this->env->getExtension('routing')->getPath("gm_projet_modification");
        echo "\",
                                    type: 'post',
                                    data: data
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$('.formFee').css({'display':'block'});
                                   \$(\".formFee\").html(data); 
                                   modifFee();
                                  
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
               }
                    
              function modifFee()
                    {
                       \$(\".formFee .modifFee\").submit(function (e) {
                            e.preventDefault();var \$form = \$(this);
                            var \$form = \$(this);
                            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                            var data = (formdata !== null) ? formdata : \$form.serialize();
                             \$('.recharge').css({'display':'block'});
          
                               \$.ajax({
                                    url: \"";
        // line 252
        echo $this->env->getExtension('routing')->getPath("gm_projet_modification");
        echo "\",
                                    data: data,
                                    type: 'post',
                                    processData: false,
                                    contentType: false
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$(\".results\").text(data); 
                                   \$(\".btn-success\").attr('disabled','disabled');
                                    //addFee();
                                  
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
                            \$( \".fermer\" ).click(function() {
                                \$('.formFee').css({'display':'none'});
                            });          
                    }     
        
    });
      </script>
";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:collaborateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 252,  285 => 226,  241 => 185,  213 => 160,  189 => 139,  162 => 115,  125 => 81,  105 => 64,  100 => 63,  97 => 62,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*       <!-- Menu -->*/
/*          {{ include("UtilisateursBundle:Default:menuCollaborateur.html.twig") }}*/
/*      */
/*     <!--   Corps  -->*/
/* */
/*   <div class="row corps">*/
/*         <div class="col-sm-10 col-sm-offset-1" >*/
/*             <h4 class="titre" style="text-align: right">My Profile </h4> <div class="ligne"> </div>*/
/*         </div>*/
/*       */
/*        <div class="col-sm-7 col-sm-offset-1">*/
/*            */
/*          <!-- My Profile -->*/
/*           <div id="divProfile" class="col-sm-12">*/
/*              My Profile*/
/*           </div>*/
/*             <div id="popup" class="col-sm-12">*/
/*                <button class="fermer"> Fermer</button> <br/> <br/>*/
/* */
/*                <div id="ressource">*/
/* */
/*                </div>*/
/*            </div>*/
/*            */
/*       <!-- My Document -->*/
/*           <div id="divMyDocument" class="col-sm-12">*/
/*              My Document*/
/*           </div>*/
/*       */
/*       <!-- My Fees -->*/
/*           <div id="divFees" class="col-sm-12">*/
/*              My Fees*/
/*           </div>*/
/*       */
/*        <!-- My Comments -->*/
/*           <div id="divMyComments" class="col-sm-12">*/
/*              My Comments*/
/*           </div>*/
/*       */
/*        </div>*/
/*         */
/*       <div class="col-sm-3">*/
/*             <div class="panel panel-default">*/
/*                <div class="panel-body"> Atos Images</div>*/
/*                */
/*             </div>*/
/*             <div class="panel panel-default">*/
/*                <div class="panel-body"> Atos </div>*/
/*                */
/*              </div>*/
/*       </div>*/
/* */
/*      */
/*    </div>*/
/*       */
/* {% endblock  body %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*      <script src="{{ asset('js/collaborateur.js') }}"></script>*/
/*       <script >*/
/*         $(function(){*/
/*            */
/*             collaborateur();*/
/*             $( ".fermer" ).click(function() {*/
/*                 $('#popup').css({'display':'none'});*/
/*             });          */
/*        */
/*         */
/*       //************** My Document **************/
/*         */
/*              $( "#myDocument" ).click(function(e) {*/
/*                     // e.preventDefault();*/
/*                     $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                         type: "GET",*/
/*                         url: "{{ path('gm_projet_suivi_mydocument') }}",*/
/*                         cache: "false",*/
/*                         dataType: "html",*/
/*                         success: function(result){*/
/*                         $('.recharge').css({'display':'none'});*/
/*                         $("#divMyDocument").html(result); */
/*                          modification();*/
/*                          saveMyDocument();*/
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*                 */
/*                    function modification()*/
/*                     {*/
/*                        $(".modif").click(function (e) {*/
/*                         //e.preventDefault();*/
/*                         $('.ville, .hotel, .save').removeAttr('disabled');*/
/*                         $('.ville').focus();*/
/*                                */
/*                        });  */
/*                     }*/
/*                */
/*                      function saveMyDocument()*/
/*                     {*/
/*                        $(".myDoc").submit(function (e) {*/
/*                             e.preventDefault();*/
/*                             $('.recharge').css({'display':'block'});$(".results").text('');*/
/*                             var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                 */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_suivi_savemydocument') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $(".results").text(data);*/
/*                                    $('.ville, .hotel, .save').attr('disabled','disabled');*/
/*                                  */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                     }*/
/*                 */
/*  */
/* */
/* //************** My Fees **************/
/*         */
/*              $( "#myFees" ).click(function(e) {*/
/*                     // e.preventDefault();*/
/*                     $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                         type: "GET",*/
/*                         url: "{{ path('gm_projet_liste') }}",*/
/*                         cache: "false",*/
/*                         dataType: "html",*/
/*                         success: function(result){*/
/*                         $('.recharge').css({'display':'none'});*/
/*                         $("#divFees").html(result); */
/*                         formFee();*/
/*                         piece();*/
/*                         formModifFee();*/
/*                     }*/
/*                  }); */
/*                  */
/*                 });    */
/*                */
/*              function formFee()*/
/*               {*/
/*                        $(".addFee").click(function (e) {*/
/*                             e.preventDefault();*/
/*                             */
/*                              $('.recharge').css({'display':'block'});*/
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_ajout') }}",*/
/*                                     type: 'get'*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $('.formFee').css({'display':'block'});*/
/*                                    $(".formFee").html(data); */
/*                                     addFee();*/
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                }*/
/*                  */
/*                  function addFee()*/
/*                     {*/
/*                        $(".formFee .addFee").submit(function (e) {*/
/*                             e.preventDefault();var $form = $(this);*/
/*                             var $form = $(this);*/
/*                             var formdata = (window.FormData) ? new FormData($form[0]) : null;*/
/*                             var data = (formdata !== null) ? formdata : $form.serialize();*/
/*                              $('.recharge').css({'display':'block'});*/
/*           */
/*                                $.ajax({*/
/*                                     url: "{{ path('gm_projet_ajout') }}",*/
/*                                     data: data,*/
/*                                     type: 'post',*/
/*                                     processData: false,*/
/*                                     contentType: false*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $(".results").text(data); */
/*                                    $(".btn-success").attr('disabled','disabled');*/
/*                                     //addFee();*/
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });  */
/*                         });  */
/*                         */
/*                                 $( ".fermer" ).click(function() {*/
/*                                     $('.formFee').css({'display':'none'});*/
/*                                 });*/
/*                     }*/
/*                     */
/*                   function piece ()*/
/*                   {*/
/*                     */
/*                      $(".formPiece").click(function (e) {*/
/*                         e.preventDefault();*/
/*                         var val=$(this).find('[type="hidden"]').val();*/
/*                         var param='uploads/brochures/'+val;  */
/*                         $('#popup').css({'display':'block'});*/
/*                         $("#ressource").html('<img src="'+param+'" class="piece">');*/
/*                       */
/*                     });*/
/*                  }*/
/*                  */
/*                  function formModifFee()*/
/*               {*/
/*                        $(".formModifFee").click(function (e) {*/
/*                             e.preventDefault();*/
/*                             var data=$(this).serialize();*/
/*                              $('.recharge').css({'display':'block'});*/
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_modification') }}",*/
/*                                     type: 'post',*/
/*                                     data: data*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $('.formFee').css({'display':'block'});*/
/*                                    $(".formFee").html(data); */
/*                                    modifFee();*/
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                }*/
/*                     */
/*               function modifFee()*/
/*                     {*/
/*                        $(".formFee .modifFee").submit(function (e) {*/
/*                             e.preventDefault();var $form = $(this);*/
/*                             var $form = $(this);*/
/*                             var formdata = (window.FormData) ? new FormData($form[0]) : null;*/
/*                             var data = (formdata !== null) ? formdata : $form.serialize();*/
/*                              $('.recharge').css({'display':'block'});*/
/*           */
/*                                $.ajax({*/
/*                                     url: "{{ path('gm_projet_modification') }}",*/
/*                                     data: data,*/
/*                                     type: 'post',*/
/*                                     processData: false,*/
/*                                     contentType: false*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $(".results").text(data); */
/*                                    $(".btn-success").attr('disabled','disabled');*/
/*                                     //addFee();*/
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                             $( ".fermer" ).click(function() {*/
/*                                 $('.formFee').css({'display':'none'});*/
/*                             });          */
/*                     }     */
/*         */
/*     });*/
/*       </script>*/
/* {% endblock %}*/
/* */
