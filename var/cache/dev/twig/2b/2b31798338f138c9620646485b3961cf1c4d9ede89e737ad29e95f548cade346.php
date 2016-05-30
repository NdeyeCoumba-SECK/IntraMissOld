<?php

/* GMProjetBundle:Ressource:detailProjet.html.twig */
class __TwigTemplate_8ea9b0d59126bff27af26a8352a635604c332d4a9cd44b2082b04aa9d9bf113d extends Twig_Template
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
        $__internal_d2e984e061539d7cdbc82353fda5e2f7dc33b7e5588da846d152c94af4a65aef = $this->env->getExtension("native_profiler");
        $__internal_d2e984e061539d7cdbc82353fda5e2f7dc33b7e5588da846d152c94af4a65aef->enter($__internal_d2e984e061539d7cdbc82353fda5e2f7dc33b7e5588da846d152c94af4a65aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Ressource:detailProjet.html.twig"));

        // line 1
        echo "
    <section>
      <legend> Detail Projet</legend>
      <table border=\"0\" width=\"80%\">
         <tr>
             <th>Reference : </th> <td> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "reference", array()), "html", null, true);
        echo "</td> <th>Annonceur : </th> <td> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "annonceur", array()), "html", null, true);
        echo "</td>
             <th>Intitulé : </th> <td> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "intitule", array()), "html", null, true);
        echo "</td> 
         </tr>
         <tr>
             <th>Lieu : </th> <td> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "lieu", array()), "html", null, true);
        echo "</td>
             <th>Date de publication : </th> <td> ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "datePublication", array()), "d-m-y"), "html", null, true);
        echo "</td>
             <th>Durrée : </th> <td> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "duree", array()), "html", null, true);
        echo "</td>
         </tr>
         <tr>
             <th>Profile : </th> <td> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "profil", array()), "html", null, true);
        echo "</td> 
             <th>Description : </th> <td colspan=\"3\"> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "description", array()), "html", null, true);
        echo "</td>
         </tr> 
        </table> 
    </section> 
    
         
    <hr/>
    
     <section>
       
          <table class=\"table table-striped table-bordered table-condensed\">
              <tr> <th>DAS ID</th> <th>Nom</th>  <th>Prénom</th> <th>E-mail</th> </tr>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaborateurs"]) ? $context["collaborateurs"] : $this->getContext($context, "collaborateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["collaborateur"]) {
            // line 29
            echo "                <tr>
                    <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "user", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "nom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "email", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "          </table> 
        
       ";
        // line 38
        if (twig_test_empty((isset($context["collaborateurs"]) ? $context["collaborateurs"] : $this->getContext($context, "collaborateurs")))) {
            echo " 
           <div> Aucune ressource affectée </div> 
       ";
        }
        // line 41
        echo "    </section> 

                         
       ";
        
        $__internal_d2e984e061539d7cdbc82353fda5e2f7dc33b7e5588da846d152c94af4a65aef->leave($__internal_d2e984e061539d7cdbc82353fda5e2f7dc33b7e5588da846d152c94af4a65aef_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Ressource:detailProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  106 => 38,  102 => 36,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  78 => 29,  74 => 28,  59 => 16,  55 => 15,  49 => 12,  45 => 11,  41 => 10,  35 => 7,  29 => 6,  22 => 1,);
    }
}
/* */
/*     <section>*/
/*       <legend> Detail Projet</legend>*/
/*       <table border="0" width="80%">*/
/*          <tr>*/
/*              <th>Reference : </th> <td> {{projet.reference}}</td> <th>Annonceur : </th> <td> {{projet.annonceur}}</td>*/
/*              <th>Intitulé : </th> <td> {{projet.intitule}}</td> */
/*          </tr>*/
/*          <tr>*/
/*              <th>Lieu : </th> <td> {{projet.lieu}}</td>*/
/*              <th>Date de publication : </th> <td> {{projet.datePublication | date('d-m-y')}}</td>*/
/*              <th>Durrée : </th> <td> {{projet.duree}}</td>*/
/*          </tr>*/
/*          <tr>*/
/*              <th>Profile : </th> <td> {{projet.profil}}</td> */
/*              <th>Description : </th> <td colspan="3"> {{projet.description}}</td>*/
/*          </tr> */
/*         </table> */
/*     </section> */
/*     */
/*          */
/*     <hr/>*/
/*     */
/*      <section>*/
/*        */
/*           <table class="table table-striped table-bordered table-condensed">*/
/*               <tr> <th>DAS ID</th> <th>Nom</th>  <th>Prénom</th> <th>E-mail</th> </tr>*/
/*             {% for collaborateur in collaborateurs%}*/
/*                 <tr>*/
/*                     <td> {{collaborateur.user}}</td>*/
/*                     <td> {{collaborateur.nom}}</td>*/
/*                     <td> {{collaborateur.prenom}}</td>*/
/*                     <td> {{collaborateur.email}}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*           </table> */
/*         */
/*        {% if collaborateurs is empty %} */
/*            <div> Aucune ressource affectée </div> */
/*        {% endif %}*/
/*     </section> */
/* */
/*                          */
/*        */
