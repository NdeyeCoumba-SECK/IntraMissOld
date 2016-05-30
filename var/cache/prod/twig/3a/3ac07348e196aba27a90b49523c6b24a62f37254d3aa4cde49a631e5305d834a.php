<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a101fe118db95c14f6b4584ba1a9d18b71e8d9a86381b6dfc42f65b5c66c461d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
      <section class=\"row\">
          <div class=\"col-sm-4 col-sm-offset-4 connexion\" >
           <section class=\"row\">
                <div class=\"logoAtos col-sm-12\">
                    <section class=\"row\">
                        <div class=\"col-sm-4\" style=\"height: 60px\"> <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"> </div>
                        <div class=\"col-sm-8\" style=\"height: 60px;\"> <h4>Landeds <br/>Ressources </h4> </div>
                    </section>
                </div>
                

                <div class=\"forms col-sm-12\">
                    <h4> Log in to your account</h4>
                    ";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 21
            echo "                       <div class=\"erreurs col-sm-12\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 23
        echo "                    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
                        
                        <div class=\"form-group\">
                           <div class=\"input-group\">
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"DAS-ID or e-mail\" class=\"form-control\"/> 
                             <span class=\"input-group-addon\" ><i  class=\"fa fa-user\" aria-hidden=\"true\"></i> </span>
                           </div>
                         </div>
                       <!-- <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot Password</a>-->
                        <div class=\"form-group\">
                            <div class=\"input-group\">                          
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\" class=\"form-control\"/>
                            <span class=\"input-group-addon\" ><i  class=\"fa fa-lock\" aria-hidden=\"true\"></i> </span>
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                         <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control btn btn-primary\"/>
                         </div>
                    </form>

                 </div>
            </section>
          </div>
      </section>
    </div>    
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 41,  77 => 32,  70 => 28,  63 => 24,  58 => 23,  52 => 21,  50 => 20,  39 => 12,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*  {% block fos_user_content %}*/
/*     <div class="container">*/
/*       <section class="row">*/
/*           <div class="col-sm-4 col-sm-offset-4 connexion" >*/
/*            <section class="row">*/
/*                 <div class="logoAtos col-sm-12">*/
/*                     <section class="row">*/
/*                         <div class="col-sm-4" style="height: 60px"> <img src="{{ asset('images/logo.png') }}"> </div>*/
/*                         <div class="col-sm-8" style="height: 60px;"> <h4>Landeds <br/>Ressources </h4> </div>*/
/*                     </section>*/
/*                 </div>*/
/*                 */
/* */
/*                 <div class="forms col-sm-12">*/
/*                     <h4> Log in to your account</h4>*/
/*                     {% if error %}*/
/*                        <div class="erreurs col-sm-12">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                     {% endif %}*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                         */
/*                         <div class="form-group">*/
/*                            <div class="input-group">*/
/*                             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="DAS-ID or e-mail" class="form-control"/> */
/*                              <span class="input-group-addon" ><i  class="fa fa-user" aria-hidden="true"></i> </span>*/
/*                            </div>*/
/*                          </div>*/
/*                        <!-- <a href="{{path('fos_user_resetting_request')}}">Forgot Password</a>-->*/
/*                         <div class="form-group">*/
/*                             <div class="input-group">                          */
/*                             <input type="password" id="password" name="_password" required="required" placeholder="Password" class="form-control"/>*/
/*                             <span class="input-group-addon" ><i  class="fa fa-lock" aria-hidden="true"></i> </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                          <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="form-control btn btn-primary"/>*/
/*                          </div>*/
/*                     </form>*/
/* */
/*                  </div>*/
/*             </section>*/
/*           </div>*/
/*       </section>*/
/*     </div>    */
/* {% endblock fos_user_content %}*/
