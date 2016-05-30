<?php

/* GMProjetBundle:Suivi:assist.html.twig */
class __TwigTemplate_4f7d0f0c03a145836174bb4a9e900e93b5b45cb0f1ce8f45ea15e1b621390106 extends Twig_Template
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
        echo "     
     <section>
       
         <table  class=\"table table-striped table-hover table-condensed\">
              <tr> <th>DAS ID</th> <th>Nom</th>  <th>Prénom</th> <th>E-mail</th> <th>Ref. Projet</th> <th>Candidature</th> </tr>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dossierMissions"]) ? $context["dossierMissions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            // line 7
            echo "                <tr>
                    <td> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "user", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "nom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "prenom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "email", array()), "html", null, true);
            echo "</td>
                    <td>
                       ";
            // line 13
            $context["idProjet"] = $this->getAttribute($this->getAttribute($context["dossier"], "projet", array()), "id", array());
            // line 14
            echo "                       ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "projet", array()), "reference", array()), "html", null, true);
            echo "
                       
                    </td>
                    <td align=\"center\"> 
                     <form class=\"formInfo\" method=\"post\"  action =\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_infoColab");
            echo "\">
                            <input type=\"hidden\" name=\"idProjet\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "projet", array()), "id", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"idCollab\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "id", array()), "html", null, true);
            echo "\">
                            <button class=\"btn\" type=\"submit\"> <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> </button>
                      </form>
                    </td>
                   
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "          </table> 
        
     
    </section> 


       ";
    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Suivi:assist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  68 => 20,  64 => 19,  60 => 18,  52 => 14,  50 => 13,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/*      */
/*      <section>*/
/*        */
/*          <table  class="table table-striped table-hover table-condensed">*/
/*               <tr> <th>DAS ID</th> <th>Nom</th>  <th>Prénom</th> <th>E-mail</th> <th>Ref. Projet</th> <th>Candidature</th> </tr>*/
/*             {% for dossier in dossierMissions%}*/
/*                 <tr>*/
/*                     <td> {{dossier.collaborateur.user}}</td>*/
/*                     <td> {{dossier.collaborateur.nom}}</td>*/
/*                     <td> {{dossier.collaborateur.prenom}}</td>*/
/*                     <td> {{dossier.collaborateur.email}}</td>*/
/*                     <td>*/
/*                        {% set idProjet = dossier.projet.id %}*/
/*                        {{dossier.projet.reference}}*/
/*                        */
/*                     </td>*/
/*                     <td align="center"> */
/*                      <form class="formInfo" method="post"  action ="{{ path('gm_projet_suivi_infoColab') }}">*/
/*                             <input type="hidden" name="idProjet" value="{{dossier.projet.id}}">*/
/*                             <input type="hidden" name="idCollab" value="{{dossier.collaborateur.id}}">*/
/*                             <button class="btn" type="submit"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button>*/
/*                       </form>*/
/*                     </td>*/
/*                    */
/*                 </tr>*/
/*             {% endfor %}*/
/*           </table> */
/*         */
/*      */
/*     </section> */
/* */
/* */
/*        */
