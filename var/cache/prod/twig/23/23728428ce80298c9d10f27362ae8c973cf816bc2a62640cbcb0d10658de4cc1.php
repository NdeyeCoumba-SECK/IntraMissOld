<?php

/* @GMProjet/Ressource/ressource.html.twig */
class __TwigTemplate_2177ce5698d15d8f6cef8e4e0a3a3710b74a8e51848052e8918e59bf19cc4f42 extends Twig_Template
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
        // line 1
        echo "    <legend> Projet : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "reference", array()), "html", null, true);
        echo " </legend>
    <legend> Affectation de ressources</legend> 
    <hr/>
    
     <section>
         
            <table border=\"1px\" width=\"80%\">
                <tr> <th>DAS ID</th> <th>Nom</th><th>Prénom</th><th>E-mail</th> <th>Action</th></tr>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaborateurs"]) ? $context["collaborateurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["collaborateur"]) {
            // line 10
            echo "                <tr>
                    <td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "user", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "nom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "email", array()), "html", null, true);
            echo "</td>
                  
                     <td align=\"center\">       
                         <form class=\"formRessource\" method=\"post\" action=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("gm_projet_ressource_affectation");
            echo "\">
                            <input type=\"hidden\" name=\"idProjet\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "id", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"idCollab\" value=\"";
            // line 19
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
        // line 25
        echo "            </table> 
            
        ";
        // line 27
        if (twig_test_empty((isset($context["collaborateurs"]) ? $context["collaborateurs"] : null))) {
            echo " 
           <div> Pas de ressources disponibles </div> 
        ";
        }
        // line 30
        echo "
    </section> 

                         
       ";
    }

    public function getTemplateName()
    {
        return "@GMProjet/Ressource/ressource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  80 => 27,  76 => 25,  64 => 19,  60 => 18,  56 => 17,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  35 => 10,  31 => 9,  19 => 1,);
    }
}
/*     <legend> Projet : {{projet.reference}} </legend>*/
/*     <legend> Affectation de ressources</legend> */
/*     <hr/>*/
/*     */
/*      <section>*/
/*          */
/*             <table border="1px" width="80%">*/
/*                 <tr> <th>DAS ID</th> <th>Nom</th><th>Prénom</th><th>E-mail</th> <th>Action</th></tr>*/
/*             {% for collaborateur in collaborateurs%}*/
/*                 <tr>*/
/*                     <td> {{collaborateur.user}}</td>*/
/*                     <td> {{collaborateur.nom}}</td>*/
/*                     <td> {{collaborateur.prenom}}</td>*/
/*                     <td> {{collaborateur.email}}</td>*/
/*                   */
/*                      <td align="center">       */
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
