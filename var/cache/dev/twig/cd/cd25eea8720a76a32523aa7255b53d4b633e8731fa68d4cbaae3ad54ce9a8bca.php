<?php

/* GMProjetBundle:Ressource:ressource.html.twig */
class __TwigTemplate_99518656d228b8ddcd373ecbe2d44115189ee4d0035e4851d676df80d9cd3f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10071b7ac05f2eefaccfa01f090cefcfa2a6e52fd58cd2a3335361105f0e2864 = $this->env->getExtension("native_profiler");
        $__internal_10071b7ac05f2eefaccfa01f090cefcfa2a6e52fd58cd2a3335361105f0e2864->enter($__internal_10071b7ac05f2eefaccfa01f090cefcfa2a6e52fd58cd2a3335361105f0e2864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Ressource:ressource.html.twig"));

        // line 1
        echo "    <legend> Projet : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "reference", array()), "html", null, true);
        echo " </legend>
    <legend> Affectation de ressources</legend> 
    
     <section>
         
            <table class=\"table table-striped table-condensed\">
                <tr> <th>DAS ID</th> <th>Nom</th><th>Prénom</th><th>E-mail</th> <th>Action</th></tr>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaborateurs"]) ? $context["collaborateurs"] : $this->getContext($context, "collaborateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["collaborateur"]) {
            // line 9
            echo "                <tr>
                    <td> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "user", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "nom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "email", array()), "html", null, true);
            echo "</td>
                  
                     <td >       
                         <form class=\"formRessource\" method=\"post\" action=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("gm_projet_ressource_affectation");
            echo "\">
                            <input type=\"hidden\" name=\"idProjet\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"idCollab\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "id", array()), "html", null, true);
            echo "\">
                            <button class=\"btn\" type=\"submit\"> Add </button>
                         </form>
                     </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </table> 
            
        ";
        // line 26
        if (twig_test_empty((isset($context["collaborateurs"]) ? $context["collaborateurs"] : $this->getContext($context, "collaborateurs")))) {
            echo " 
           <div> Pas de ressources disponibles </div> 
        ";
        }
        // line 29
        echo "
    </section> 

                         
       ";
        
        $__internal_10071b7ac05f2eefaccfa01f090cefcfa2a6e52fd58cd2a3335361105f0e2864->leave($__internal_10071b7ac05f2eefaccfa01f090cefcfa2a6e52fd58cd2a3335361105f0e2864_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Ressource:ressource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  82 => 26,  78 => 24,  66 => 18,  62 => 17,  58 => 16,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  37 => 9,  33 => 8,  22 => 1,);
    }
}
/*     <legend> Projet : {{projet.reference}} </legend>*/
/*     <legend> Affectation de ressources</legend> */
/*     */
/*      <section>*/
/*          */
/*             <table class="table table-striped table-condensed">*/
/*                 <tr> <th>DAS ID</th> <th>Nom</th><th>Prénom</th><th>E-mail</th> <th>Action</th></tr>*/
/*             {% for collaborateur in collaborateurs%}*/
/*                 <tr>*/
/*                     <td> {{collaborateur.user}}</td>*/
/*                     <td> {{collaborateur.nom}}</td>*/
/*                     <td> {{collaborateur.prenom}}</td>*/
/*                     <td> {{collaborateur.email}}</td>*/
/*                   */
/*                      <td >       */
/*                          <form class="formRessource" method="post" action="{{ path('gm_projet_ressource_affectation') }}">*/
/*                             <input type="hidden" name="idProjet" value="{{projet.id}}">*/
/*                             <input type="hidden" name="idCollab" value="{{collaborateur.id}}">*/
/*                             <button class="btn" type="submit"> Add </button>*/
/*                          </form>*/
/*                      </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </table> */
/*             */
/*         {% if collaborateurs is empty %} */
/*            <div> Pas de ressources disponibles </div> */
/*         {% endif %}*/
/* */
/*     </section> */
/* */
/*                          */
/*        */
