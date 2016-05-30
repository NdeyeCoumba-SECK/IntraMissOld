<?php

/* @Utilisateurs/Default/admin.html.twig */
class __TwigTemplate_1f06c4e2654471d63f4a8268e101e6976a2c475482792d04064cc49d1a6eb063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "@Utilisateurs/Default/admin.html.twig", 1);
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
    <h2> Espace Administrateur </h2>
    <a href=\"#\" id=\"profile\"> My Profile</a> &nbsp;&nbsp;&nbsp;
    <a href=\"#\" id=\"newUser\"> New User </a>  &nbsp;&nbsp;&nbsp;
    <a href=\"#\" id=\"manage\"> Manage Account </a>

    <div id=\"divProfile\">

        ";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Profile:edit"));
        echo "
          <div class=\"results\"> </div> 
          <hr/>
        ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:ChangePassword:changePassword"));
        echo "
        <span class=\"passwordResult\"> </span>
    </div>
    
    <div id=\"divNewUser\">

        ";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:register"));
        echo "
         <div class=\"results\"> </div>  
    </div>
        
    <div id=\"divAutre\">
       
    </div>    
";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     
      <script >
        \$(function(){
              
                     \$( \"#newUser\" ).click(function() {

                        \$('#divNewUser').css({'display':'block'}); 
                        \$('#divProfile').css({'display':'none'}); 
                         \$('#divAutre').css({'display':'none'});
                     });
                     
                     \$( \"#manage\" ).click(function() {

                        \$('#divNewUser').css({'display':'none'}); 
                        \$('#divProfile').css({'display':'none'}); 
                        \$('#divAutre').css({'display':'block'}); 
                     });
              
              //************** Users list *************
              
               \$( \"#manage\" ).click(function(e) {
                     e.preventDefault();
                     \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("utilisateurs_users");
        echo "\",
                    cache: \"false\",
                    dataType: \"html\",
                    success: function(result){
                    \$(\"#divAutre\").html(result); 
                    }
                 }); 
                 
                });
                
                
              //************* Registration *****************  
                    
                \$(\".fos_user_registration_register\").submit(function (e) {
                e.preventDefault();
                var values = {};
                \$('.fos_user_registration_register').serializeArray().forEach(function (field) {
                    values[field.name] = field.value;
                });
                \$.ajax({
                    url: \"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\",
                    data: values,
                    type: 'post'
                }).done(function (data) {
                    \$(\".results\").html(\"<h3>You are successfully registered.</h3>\");
                    /*setTimeout(function () {
                        window.location.reload(1);
                    }, 2000);*/
                }).fail(function (data) {
                    var newHTML = \$.map(data.responseJSON.message, function (value) {
                        return ('<li>' + value + '</li>');
                    });
                    \$(\".results\").html(newHTML);
                });
            });
            
                //************** Users Enabled *************
       
                
                   
                 
         });
      </script>
";
    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 76,  103 => 56,  74 => 31,  71 => 30,  59 => 21,  50 => 15,  44 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*     <h2> Espace Administrateur </h2>*/
/*     <a href="#" id="profile"> My Profile</a> &nbsp;&nbsp;&nbsp;*/
/*     <a href="#" id="newUser"> New User </a>  &nbsp;&nbsp;&nbsp;*/
/*     <a href="#" id="manage"> Manage Account </a>*/
/* */
/*     <div id="divProfile">*/
/* */
/*         {{ render(controller('FOSUserBundle:Profile:edit'))}}*/
/*           <div class="results"> </div> */
/*           <hr/>*/
/*         {{ render(controller('FOSUserBundle:ChangePassword:changePassword'))}}*/
/*         <span class="passwordResult"> </span>*/
/*     </div>*/
/*     */
/*     <div id="divNewUser">*/
/* */
/*         {{ render(controller('FOSUserBundle:Registration:register'))}}*/
/*          <div class="results"> </div>  */
/*     </div>*/
/*         */
/*     <div id="divAutre">*/
/*        */
/*     </div>    */
/* {%endblock  body %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*      */
/*       <script >*/
/*         $(function(){*/
/*               */
/*                      $( "#newUser" ).click(function() {*/
/* */
/*                         $('#divNewUser').css({'display':'block'}); */
/*                         $('#divProfile').css({'display':'none'}); */
/*                          $('#divAutre').css({'display':'none'});*/
/*                      });*/
/*                      */
/*                      $( "#manage" ).click(function() {*/
/* */
/*                         $('#divNewUser').css({'display':'none'}); */
/*                         $('#divProfile').css({'display':'none'}); */
/*                         $('#divAutre').css({'display':'block'}); */
/*                      });*/
/*               */
/*               //************** Users list **************/
/*               */
/*                $( "#manage" ).click(function(e) {*/
/*                      e.preventDefault();*/
/*                      $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{ path('utilisateurs_users') }}",*/
/*                     cache: "false",*/
/*                     dataType: "html",*/
/*                     success: function(result){*/
/*                     $("#divAutre").html(result); */
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*                 */
/*                 */
/*               //************* Registration *****************  */
/*                     */
/*                 $(".fos_user_registration_register").submit(function (e) {*/
/*                 e.preventDefault();*/
/*                 var values = {};*/
/*                 $('.fos_user_registration_register').serializeArray().forEach(function (field) {*/
/*                     values[field.name] = field.value;*/
/*                 });*/
/*                 $.ajax({*/
/*                     url: "{{ path('fos_user_registration_register') }}",*/
/*                     data: values,*/
/*                     type: 'post'*/
/*                 }).done(function (data) {*/
/*                     $(".results").html("<h3>You are successfully registered.</h3>");*/
/*                     /*setTimeout(function () {*/
/*                         window.location.reload(1);*/
/*                     }, 2000);*//* */
/*                 }).fail(function (data) {*/
/*                     var newHTML = $.map(data.responseJSON.message, function (value) {*/
/*                         return ('<li>' + value + '</li>');*/
/*                     });*/
/*                     $(".results").html(newHTML);*/
/*                 });*/
/*             });*/
/*             */
/*                 //************** Users Enabled **************/
/*        */
/*                 */
/*                    */
/*                  */
/*          });*/
/*       </script>*/
/* {% endblock %}*/
/* */
/* */
