<?php

/* UtilisateursBundle:Default:assistantRH.html.twig */
class __TwigTemplate_0452044a331c74087ac999c781cb581f572f44bcd09d7a8506546955a1980f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:assistantRH.html.twig", 1);
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
        $__internal_6a9458f2356aef79f9201168e54a156515781dfad60df3ac0d52190c26f4ed09 = $this->env->getExtension("native_profiler");
        $__internal_6a9458f2356aef79f9201168e54a156515781dfad60df3ac0d52190c26f4ed09->enter($__internal_6a9458f2356aef79f9201168e54a156515781dfad60df3ac0d52190c26f4ed09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:assistantRH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a9458f2356aef79f9201168e54a156515781dfad60df3ac0d52190c26f4ed09->leave($__internal_6a9458f2356aef79f9201168e54a156515781dfad60df3ac0d52190c26f4ed09_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_982366c9db1b0d985782bf61ef657595175728dac47d1f2f53fd57e07be71daa = $this->env->getExtension("native_profiler");
        $__internal_982366c9db1b0d985782bf61ef657595175728dac47d1f2f53fd57e07be71daa->enter($__internal_982366c9db1b0d985782bf61ef657595175728dac47d1f2f53fd57e07be71daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
      <!-- Menu -->
         ";
        // line 6
        echo twig_include($this->env, $context, "UtilisateursBundle:Default:menuARH.html.twig");
        echo "
     
    <!--   Corps  -->

  <div class=\"row corps\">
        <div class=\"col-sm-10 col-sm-offset-1\" >
            <h4 class=\"titre\" style=\"text-align: right\">Projects Status </h4> <div class=\"ligne\"> </div>
        </div>
      
       <div class=\"col-sm-7 col-sm-offset-1\">
           
        <!-- Project Status -->
            <div id=\"divProjectStatus\" class=\"col-sm-12\" style=\"display: block\">
               Projects Status
            </div>
           <div id=\"popup\" class=\"col-sm-12\">
               <div class=\"row\">
                <div class=\"col-sm-1 col-sm-offset-11\"> 
                    <button class=\"fermer\" title=\"Fermer\"> <i class=\"fa fa-close\" aria-hidden=\"true\"></i></button> 
                </div>
               </div>

               <div id=\"ressource\">

               </div>
           </div>
           
      <!-- Assist Collaborator -->
          <div id=\"divAssist\" class=\"col-sm-12\">
             Assist Collaborators
          </div>
      
      <!-- Collaboratos on Mission -->
          <div id=\"divColabMission\" class=\"col-sm-12\">
             Collaborators on Mission
          </div>
      
      <!-- Collaborators Fees -->
          <div id=\"divFees\" class=\"col-sm-12\">
              <div class=\"divFraisColabs\"> </div>
              <div class=\"divFraisParColab\"> </div>
          </div>
      
      <!-- Perdieme -->
          <div id=\"divPerdieme\" class=\"col-sm-12\">
             Perdieme
          </div>
      
      <!-- My Profile -->
          <div id=\"divProfile\" class=\"col-sm-12\">
             My Profile
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
        
        $__internal_982366c9db1b0d985782bf61ef657595175728dac47d1f2f53fd57e07be71daa->leave($__internal_982366c9db1b0d985782bf61ef657595175728dac47d1f2f53fd57e07be71daa_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_faddbe29dd1ff2045b680a8e68b98f880d74a40b5304cd70123421e1b7be3f4d = $this->env->getExtension("native_profiler");
        $__internal_faddbe29dd1ff2045b680a8e68b98f880d74a40b5304cd70123421e1b7be3f4d->enter($__internal_faddbe29dd1ff2045b680a8e68b98f880d74a40b5304cd70123421e1b7be3f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/arh.js"), "html", null, true);
        echo "\"></script>
      <script >
        \$(function(){
           
            arh();
            \$( \".fermer\" ).click(function() {
                \$('#popup').css({'display':'none'});
            });          
   
                      
        //************** Projects Status *************
              
               \$( \"#projectStatus\" ).click(function(e) {
                    // e.preventDefault();
                    \$('.recharge').css({'display':'block'});
                     \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("gm_projet_project_status");
        echo "\",
                        cache: \"false\",
                        dataType: \"html\",
                        success: function(result){
                        \$('.recharge').css({'display':'none'});
                        \$(\"#divProjectStatus\").html(result); 
                        ressource();
                        detailProjet();
                    }
                 }); 
                 
                });
                
              //************* Affectation Ressource *****************  
                  function ressource()
                    {
                       \$(\"#divProjectStatus .formRess\").submit(function (e) {
                            e.preventDefault();
                            \$('.recharge').css({'display':'block'});
                            var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                
                                 \$.ajax({
                                    url: \"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("gm_projet_ressource_project");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                   \$('#popup').css({'display':'block'});
                                   \$('.recharge').css({'display':'none'});
                                   \$(\"#ressource\").html(data); 
                                    affectation();
                                  
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
                    }
                    
                   function affectation(){
                    \$( \"#ressource .formRessource\" ).submit(function(e) {
                     e.preventDefault();
                     \$('.recharge').css({'display':'block'});
                    
                     var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                    
                                });
                                
                                \$(this).find('[type=\"submit\"]').attr('class','voir');
                                
                                 \$.ajax({
                                    url: \"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("gm_projet_ressource_affectation");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                     \$('.recharge').css({'display':'none'});
                                     \$(\".voir\").attr('disabled','disabled').css({'border':'none', 'background-color':'inherit'});
                                     \$(\".voir\").html('<i class=\"fa fa-check fa-1x\"  aria-hidden=\"true\" style=\"color:green\"></i>');
                                  
                                }).fail(function (data) {
                                   // erreur
                                });
      
                        });
                   }
    
                   
             //************* Detail Projet *****************  
                  function detailProjet()
                    {
                       \$(\"#divProjectStatus .formDetail\").submit(function (e) {
                            e.preventDefault();
                            \$('.recharge').css({'display':'block'});
                            var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                 \$.ajax({
                                    url: \"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("gm_projet_detail_project");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$('#popup').css({'display':'block'}); 
                                   \$(\"#ressource\").html(data); 
                                   
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
                    }
                    
                 
                               
   //************** Assist Collaborators *************
              
               \$( \"#assistCollaboratos\" ).click(function(e) {
                    // e.preventDefault();
                    \$('.recharge').css({'display':'block'});
                     \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_assist");
        echo "\",
                        cache: \"false\",
                        dataType: \"html\",
                        success: function(result){
                        \$('.recharge').css({'display':'none'});
                        \$(\"#divAssist\").html(result); 
                        infoCollaborateur();
                    }
                 }); 
                 
                });
                
               
                 function infoCollaborateur()
                    {
                       \$(\"#divAssist .formInfo\").submit(function (e) {
                            e.preventDefault();
                            \$('.recharge').css({'display':'block'});
                            var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                
                                 \$.ajax({
                                    url: \"";
        // line 226
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_infoColab");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                   \$('#popup').css({'display':'block'});
                                   \$('.recharge').css({'display':'none'});
                                   \$(\"#ressource\").html(data); 
                                    verifie();
                                    candidature();
                                 
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
                    }
                
                function verifie(){
                       \$( \".choix\" ).change(function(e) {
                          if(\$(\".choix\" ).val()===\"non\")
                          {\$('.c1').attr({'disabled':'disabled'}); \$('.c2').attr({'disabled':'disabled'});}
                          else
                            {\$('.c1').removeAttr('disabled'); \$('.c2').removeAttr('disabled');}  
                       });
                  }
                  
                     function candidature()
                    {
                       \$(\".cand\").submit(function (e) {
                            e.preventDefault();
                            \$('.recharge').css({'display':'block'});
                            var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                
                                 \$.ajax({
                                    url: \"";
        // line 263
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_candidature");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                   \$('#popup').css({'display':'block'});
                                   \$('.recharge').css({'display':'none'});
                                   \$(\".results\").html(data); 
                                 
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
                    }
                
                
  //************** Collaborators On Mission *************
        
             \$( \"#collaborateursMission\" ).click(function(e) {
                    // e.preventDefault();
                    \$('.recharge').css({'display':'block'});
                     \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 286
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_on_mission");
        echo "\",
                        cache: \"false\",
                        dataType: \"html\",
                        success: function(result){
                        \$('.recharge').css({'display':'none'});
                        \$(\"#divColabMission\").html(result); 
                         dtailOnMission();
                        //detailProjet();
                    }
                 }); 
                 
                });
                
                   function dtailOnMission()
                    {
                       \$(\".formDetail\").submit(function (e) {
                            e.preventDefault();
                            \$('.recharge').css({'display':'block'});
                            var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                
                                 \$.ajax({
                                    url: \"";
        // line 310
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_on_mission_detail");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                   \$('#popup').css({'display':'block'});
                                   \$('.recharge').css({'display':'none'});
                                   \$(\"#ressource\").html(data); 
                                 
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
                    }
     
    
//************** Collaborators Fees *************
        
             \$( \"#frais\" ).click(function(e) {
                    // e.preventDefault();
                    \$('.recharge').css({'display':'block'});
                     \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 333
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_frais_colabs");
        echo "\",
                        cache: \"false\",
                        dataType: \"html\",
                        success: function(result){
                        \$('.recharge, .divFraisParColab').css({'display':'none'});
                        \$('.divFraisColabs').css({'display':'block'});
                        \$(\".divFraisColabs\").html(result); 
                         fraisParColab();
                    }
                 }); 
                 
                });
             
                function fraisParColab()
                    {
                       \$(\".formFrais\").submit(function (e) {
                            e.preventDefault();
                            \$('.recharge').css({'display':'block'});
                            var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                
                                 \$.ajax({
                                    url: \"";
        // line 357
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_frais_colab");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                   \$('.recharge, .divFraisColabs').css({'display':'none'});
                                   \$('.divFraisParColab').css({'display':'block'});
                                   \$(\".divFraisParColab\").html(data); 
                                   piece();
                                   validerFrais();
                                }).fail(function (data) {
                                   // erreur
                                });       
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
                    
                    \$(\".retour\" ).click(function() {
                                \$('.divFraisParColab').css({'display':'none'});
                                 \$('.divFraisColabs').css({'display':'block'});
                      }); 
                 }
              
           function validerFrais(){
                    \$( \".formValidFee\" ).submit(function(e) {
                     e.preventDefault();
                     \$('.recharge').css({'display':'block'});
                    
                     var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                    
                                });
                                
                          \$(this).find('[type=\"submit\"]').attr('class','voir');
                          \$(\".voir\").parent().parent().attr('class','courant');
   
                                \$.ajax({
                                    url: \"";
        // line 406
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_frais_valider");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                     \$('.recharge').css({'display':'none'});
                                     \$(\".voir\").attr('disabled','disabled').css({'border':'none', 'background-color':'inherit'});
                                     \$(\".voir\").removeAttr('title');
                                     \$(\".voir\").html('<i class=\"fa fa-check fa-1x\"  aria-hidden=\"true\" style=\"color:green\"></i>');
                                     \$(\".courant + td button\").removeAttr('disabled');
                                     \$(\".tout\").removeAttr('disabled');
                                  
                                }).fail(function (data) {
                                   
                                });
      
                        });
                   }
       
   //************** Perdiem *************
        
             \$( \"#perdiem\" ).click(function(e) {
                    // e.preventDefault();
                    \$('.recharge').css({'display':'block'});
                     \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 431
        echo $this->env->getExtension('routing')->getPath("gm_projet_dsms_perdiem");
        echo "\",
                        cache: \"false\",
                        dataType: \"html\",
                        success: function(result){
                        \$('.recharge').css({'display':'none'});
                        \$('#divPerdieme').css({'display':'block'});
                        \$(\"#divPerdieme\").html(result); 
                         datePerdiem();
                    }
                 }); 
                 
                });
                
                        function datePerdiem()
                    {
                       \$(\".datePerdiem\").submit(function (e) {
                            e.preventDefault(); 
                            \$('.recharge').css({'display':'block'});
                            var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                
                                 \$.ajax({
                                    url: \"";
        // line 455
        echo $this->env->getExtension('routing')->getPath("gm_projet_dsms_perdiem");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$(\"#divPerdieme\").html(data);  
                                   datePerdiem();
                                   //validerFrais();
                                }).fail(function (data) {
                                   // erreur
                                });       
                        }); 

                    }
                    
                
        
    });
      </script>
";
        
        $__internal_faddbe29dd1ff2045b680a8e68b98f880d74a40b5304cd70123421e1b7be3f4d->leave($__internal_faddbe29dd1ff2045b680a8e68b98f880d74a40b5304cd70123421e1b7be3f4d_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:assistantRH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 455,  526 => 431,  498 => 406,  446 => 357,  419 => 333,  393 => 310,  366 => 286,  340 => 263,  300 => 226,  273 => 202,  246 => 178,  216 => 151,  183 => 121,  155 => 96,  135 => 79,  130 => 78,  124 => 77,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*       <!-- Menu -->*/
/*          {{ include("UtilisateursBundle:Default:menuARH.html.twig") }}*/
/*      */
/*     <!--   Corps  -->*/
/* */
/*   <div class="row corps">*/
/*         <div class="col-sm-10 col-sm-offset-1" >*/
/*             <h4 class="titre" style="text-align: right">Projects Status </h4> <div class="ligne"> </div>*/
/*         </div>*/
/*       */
/*        <div class="col-sm-7 col-sm-offset-1">*/
/*            */
/*         <!-- Project Status -->*/
/*             <div id="divProjectStatus" class="col-sm-12" style="display: block">*/
/*                Projects Status*/
/*             </div>*/
/*            <div id="popup" class="col-sm-12">*/
/*                <div class="row">*/
/*                 <div class="col-sm-1 col-sm-offset-11"> */
/*                     <button class="fermer" title="Fermer"> <i class="fa fa-close" aria-hidden="true"></i></button> */
/*                 </div>*/
/*                </div>*/
/* */
/*                <div id="ressource">*/
/* */
/*                </div>*/
/*            </div>*/
/*            */
/*       <!-- Assist Collaborator -->*/
/*           <div id="divAssist" class="col-sm-12">*/
/*              Assist Collaborators*/
/*           </div>*/
/*       */
/*       <!-- Collaboratos on Mission -->*/
/*           <div id="divColabMission" class="col-sm-12">*/
/*              Collaborators on Mission*/
/*           </div>*/
/*       */
/*       <!-- Collaborators Fees -->*/
/*           <div id="divFees" class="col-sm-12">*/
/*               <div class="divFraisColabs"> </div>*/
/*               <div class="divFraisParColab"> </div>*/
/*           </div>*/
/*       */
/*       <!-- Perdieme -->*/
/*           <div id="divPerdieme" class="col-sm-12">*/
/*              Perdieme*/
/*           </div>*/
/*       */
/*       <!-- My Profile -->*/
/*           <div id="divProfile" class="col-sm-12">*/
/*              My Profile*/
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
/*      <script src="{{ asset('js/arh.js') }}"></script>*/
/*       <script >*/
/*         $(function(){*/
/*            */
/*             arh();*/
/*             $( ".fermer" ).click(function() {*/
/*                 $('#popup').css({'display':'none'});*/
/*             });          */
/*    */
/*                       */
/*         //************** Projects Status **************/
/*               */
/*                $( "#projectStatus" ).click(function(e) {*/
/*                     // e.preventDefault();*/
/*                     $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                         type: "GET",*/
/*                         url: "{{ path('gm_projet_project_status') }}",*/
/*                         cache: "false",*/
/*                         dataType: "html",*/
/*                         success: function(result){*/
/*                         $('.recharge').css({'display':'none'});*/
/*                         $("#divProjectStatus").html(result); */
/*                         ressource();*/
/*                         detailProjet();*/
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*                 */
/*               //************* Affectation Ressource *****************  */
/*                   function ressource()*/
/*                     {*/
/*                        $("#divProjectStatus .formRess").submit(function (e) {*/
/*                             e.preventDefault();*/
/*                             $('.recharge').css({'display':'block'});*/
/*                             var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                 */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_ressource_project') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                    $('#popup').css({'display':'block'});*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $("#ressource").html(data); */
/*                                     affectation();*/
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                     }*/
/*                     */
/*                    function affectation(){*/
/*                     $( "#ressource .formRessource" ).submit(function(e) {*/
/*                      e.preventDefault();*/
/*                      $('.recharge').css({'display':'block'});*/
/*                     */
/*                      var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                     */
/*                                 });*/
/*                                 */
/*                                 $(this).find('[type="submit"]').attr('class','voir');*/
/*                                 */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_ressource_affectation') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                      $('.recharge').css({'display':'none'});*/
/*                                      $(".voir").attr('disabled','disabled').css({'border':'none', 'background-color':'inherit'});*/
/*                                      $(".voir").html('<i class="fa fa-check fa-1x"  aria-hidden="true" style="color:green"></i>');*/
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*       */
/*                         });*/
/*                    }*/
/*     */
/*                    */
/*              //************* Detail Projet *****************  */
/*                   function detailProjet()*/
/*                     {*/
/*                        $("#divProjectStatus .formDetail").submit(function (e) {*/
/*                             e.preventDefault();*/
/*                             $('.recharge').css({'display':'block'});*/
/*                             var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_detail_project') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $('#popup').css({'display':'block'}); */
/*                                    $("#ressource").html(data); */
/*                                    */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                     }*/
/*                     */
/*                  */
/*                                */
/*    //************** Assist Collaborators **************/
/*               */
/*                $( "#assistCollaboratos" ).click(function(e) {*/
/*                     // e.preventDefault();*/
/*                     $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                         type: "GET",*/
/*                         url: "{{ path('gm_projet_suivi_assist') }}",*/
/*                         cache: "false",*/
/*                         dataType: "html",*/
/*                         success: function(result){*/
/*                         $('.recharge').css({'display':'none'});*/
/*                         $("#divAssist").html(result); */
/*                         infoCollaborateur();*/
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*                 */
/*                */
/*                  function infoCollaborateur()*/
/*                     {*/
/*                        $("#divAssist .formInfo").submit(function (e) {*/
/*                             e.preventDefault();*/
/*                             $('.recharge').css({'display':'block'});*/
/*                             var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                 */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_suivi_infoColab') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                    $('#popup').css({'display':'block'});*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $("#ressource").html(data); */
/*                                     verifie();*/
/*                                     candidature();*/
/*                                  */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                     }*/
/*                 */
/*                 function verifie(){*/
/*                        $( ".choix" ).change(function(e) {*/
/*                           if($(".choix" ).val()==="non")*/
/*                           {$('.c1').attr({'disabled':'disabled'}); $('.c2').attr({'disabled':'disabled'});}*/
/*                           else*/
/*                             {$('.c1').removeAttr('disabled'); $('.c2').removeAttr('disabled');}  */
/*                        });*/
/*                   }*/
/*                   */
/*                      function candidature()*/
/*                     {*/
/*                        $(".cand").submit(function (e) {*/
/*                             e.preventDefault();*/
/*                             $('.recharge').css({'display':'block'});*/
/*                             var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                 */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_suivi_candidature') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                    $('#popup').css({'display':'block'});*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $(".results").html(data); */
/*                                  */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                     }*/
/*                 */
/*                 */
/*   //************** Collaborators On Mission **************/
/*         */
/*              $( "#collaborateursMission" ).click(function(e) {*/
/*                     // e.preventDefault();*/
/*                     $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                         type: "GET",*/
/*                         url: "{{ path('gm_projet_suivi_on_mission') }}",*/
/*                         cache: "false",*/
/*                         dataType: "html",*/
/*                         success: function(result){*/
/*                         $('.recharge').css({'display':'none'});*/
/*                         $("#divColabMission").html(result); */
/*                          dtailOnMission();*/
/*                         //detailProjet();*/
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*                 */
/*                    function dtailOnMission()*/
/*                     {*/
/*                        $(".formDetail").submit(function (e) {*/
/*                             e.preventDefault();*/
/*                             $('.recharge').css({'display':'block'});*/
/*                             var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                 */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_suivi_on_mission_detail') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                    $('#popup').css({'display':'block'});*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $("#ressource").html(data); */
/*                                  */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                     }*/
/*      */
/*     */
/* //************** Collaborators Fees **************/
/*         */
/*              $( "#frais" ).click(function(e) {*/
/*                     // e.preventDefault();*/
/*                     $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                         type: "GET",*/
/*                         url: "{{ path('gm_projet_suivi_frais_colabs') }}",*/
/*                         cache: "false",*/
/*                         dataType: "html",*/
/*                         success: function(result){*/
/*                         $('.recharge, .divFraisParColab').css({'display':'none'});*/
/*                         $('.divFraisColabs').css({'display':'block'});*/
/*                         $(".divFraisColabs").html(result); */
/*                          fraisParColab();*/
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*              */
/*                 function fraisParColab()*/
/*                     {*/
/*                        $(".formFrais").submit(function (e) {*/
/*                             e.preventDefault();*/
/*                             $('.recharge').css({'display':'block'});*/
/*                             var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                 */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_suivi_frais_colab') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge, .divFraisColabs').css({'display':'none'});*/
/*                                    $('.divFraisParColab').css({'display':'block'});*/
/*                                    $(".divFraisParColab").html(data); */
/*                                    piece();*/
/*                                    validerFrais();*/
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });       */
/*                         }); */
/* */
/*                     }*/
/*                     */
/*                  function piece ()*/
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
/*                     */
/*                     $(".retour" ).click(function() {*/
/*                                 $('.divFraisParColab').css({'display':'none'});*/
/*                                  $('.divFraisColabs').css({'display':'block'});*/
/*                       }); */
/*                  }*/
/*               */
/*            function validerFrais(){*/
/*                     $( ".formValidFee" ).submit(function(e) {*/
/*                      e.preventDefault();*/
/*                      $('.recharge').css({'display':'block'});*/
/*                     */
/*                      var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                     */
/*                                 });*/
/*                                 */
/*                           $(this).find('[type="submit"]').attr('class','voir');*/
/*                           $(".voir").parent().parent().attr('class','courant');*/
/*    */
/*                                 $.ajax({*/
/*                                     url: "{{ path('gm_projet_suivi_frais_valider') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                      $('.recharge').css({'display':'none'});*/
/*                                      $(".voir").attr('disabled','disabled').css({'border':'none', 'background-color':'inherit'});*/
/*                                      $(".voir").removeAttr('title');*/
/*                                      $(".voir").html('<i class="fa fa-check fa-1x"  aria-hidden="true" style="color:green"></i>');*/
/*                                      $(".courant + td button").removeAttr('disabled');*/
/*                                      $(".tout").removeAttr('disabled');*/
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    */
/*                                 });*/
/*       */
/*                         });*/
/*                    }*/
/*        */
/*    //************** Perdiem **************/
/*         */
/*              $( "#perdiem" ).click(function(e) {*/
/*                     // e.preventDefault();*/
/*                     $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                         type: "GET",*/
/*                         url: "{{ path('gm_projet_dsms_perdiem') }}",*/
/*                         cache: "false",*/
/*                         dataType: "html",*/
/*                         success: function(result){*/
/*                         $('.recharge').css({'display':'none'});*/
/*                         $('#divPerdieme').css({'display':'block'});*/
/*                         $("#divPerdieme").html(result); */
/*                          datePerdiem();*/
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*                 */
/*                         function datePerdiem()*/
/*                     {*/
/*                        $(".datePerdiem").submit(function (e) {*/
/*                             e.preventDefault(); */
/*                             $('.recharge').css({'display':'block'});*/
/*                             var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                 */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_dsms_perdiem') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $("#divPerdieme").html(data);  */
/*                                    datePerdiem();*/
/*                                    //validerFrais();*/
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });       */
/*                         }); */
/* */
/*                     }*/
/*                     */
/*                 */
/*         */
/*     });*/
/*       </script>*/
/* {% endblock %}*/
/* */
