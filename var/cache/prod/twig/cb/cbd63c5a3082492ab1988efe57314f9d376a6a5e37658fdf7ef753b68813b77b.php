<?php

/* GMProjetBundle:Ressource:detailProjet.html.twig */
class __TwigTemplate_cff3f81f5a18253092b37b8da112ea0e35d43cb966456ac9c8fefdbf48197267 extends Twig_Template
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
      <legend> Detail Projet</legend>
      <hr/>
      <table border=\"0\" width=\"80%\">
         <tr>
             <th>Reference : </th> <td> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "reference", array()), "html", null, true);
        echo "</td> <th>Annonceur : </th> <td> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "annonceur", array()), "html", null, true);
        echo "</td>
             <th>Intitulé : </th> <td> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "intitule", array()), "html", null, true);
        echo "</td> 
         </tr>
         <tr>
             <th>Lieu : </th> <td> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "lieu", array()), "html", null, true);
        echo "</td>
             <th>Date de publication : </th> <td> ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "datePublication", array()), "d-m-y"), "html", null, true);
        echo "</td>
             <th>Durrée : </th> <td> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "duree", array()), "html", null, true);
        echo "</td>
         </tr>
         <tr>
             <th>Profile : </th> <td> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "profil", array()), "html", null, true);
        echo "</td> 
             <th>Description : </th> <td colspan=\"3\"> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "description", array()), "html", null, true);
        echo "</td>
         </tr> 
        </table> 
    </section> 
    
         
    <hr/>
    
     <section>
       
          <table border=\"1px\" width=\"80%\">
              <tr> <th>DAS ID</th> <th>Nom</th>  <th>Prénom</th> <th>E-mail</th> </tr>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaborateurs"]) ? $context["collaborateurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["collaborateur"]) {
            // line 30
            echo "                <tr>
                    <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "user", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "nom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "email", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "          </table> 
        
       ";
        // line 39
        if (twig_test_empty((isset($context["collaborateurs"]) ? $context["collaborateurs"] : null))) {
            echo " 
           <div> Aucune ressource affectée </div> 
       ";
        }
        // line 42
        echo "    </section> 

                         
       ";
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
        return array (  110 => 42,  104 => 39,  100 => 37,  91 => 34,  87 => 33,  83 => 32,  79 => 31,  76 => 30,  72 => 29,  57 => 17,  53 => 16,  47 => 13,  43 => 12,  39 => 11,  33 => 8,  27 => 7,  19 => 1,);
    }
}
/* */
/*     <section>*/
/*       <legend> Detail Projet</legend>*/
/*       <hr/>*/
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
/*           <table border="1px" width="80%">*/
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
