<?php

/* GMProjetBundle:Suivi:myDocument.html.twig */
class __TwigTemplate_6e5b1de9043440b96099a2613c6fbbfe3832c0cff66260aa0f0779ca6c7ad39a extends Twig_Template
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
        $__internal_646ef250ae8cc7f677282324ba84353454883300eb0a0329b875ab61b44ecb35 = $this->env->getExtension("native_profiler");
        $__internal_646ef250ae8cc7f677282324ba84353454883300eb0a0329b875ab61b44ecb35->enter($__internal_646ef250ae8cc7f677282324ba84353454883300eb0a0329b875ab61b44ecb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Suivi:myDocument.html.twig"));

        // line 1
        echo "  <section>
      <legend>Projet</legend>
      <table class=\"table table-striped table-condensed\">
         <tr>
             <th>Reference : </th> <td> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "projet", array()), "reference", array()), "html", null, true);
        echo "</td> <th>Annonceur : </th> <td> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "projet", array()), "annonceur", array()), "html", null, true);
        echo "</td>
             <th>Intitulé : </th> <td> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "projet", array()), "intitule", array()), "html", null, true);
        echo "</td> 
         </tr>
         <tr>
             <th>Lieu : </th> <td> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "projet", array()), "lieu", array()), "html", null, true);
        echo "</td>
             <th>Date de publication : </th> <td> ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "projet", array()), "datePublication", array()), "d-m-y"), "html", null, true);
        echo "</td>
             <th>Durrée : </th> <td> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "projet", array()), "duree", array()), "html", null, true);
        echo "</td>
         </tr>
         <tr>
             <th>Profile : </th> <td> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "projet", array()), "profil", array()), "html", null, true);
        echo "</td> 
             <th>Description : </th> <td colspan=\"3\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "projet", array()), "description", array()), "html", null, true);
        echo "</td>
         </tr> 
        </table> 
    </section> 
    
 <section class=\"row\" style=\"margin-top: 50px\">
       
       <div class=\"col-sm-5\">
          <legend>Mission</legend>
          <table class=\"table table-striped table-condensed\">
             <tr> <th>Date Depart</th> <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "dateDepart", array()), "d-m-y"), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Durée Mission</th> <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "duree", array()), "html", null, true);
        echo " mois</td> </tr>
          </table> 
       </div>
          
       <div class=\"col-sm-6 \">
         <form method=\"post\" action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_savemydocument");
        echo "\" class=\"myDoc\">
           <input type=\"hidden\" name=\"idDossier\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "id", array()), "html", null, true);
        echo "\">
           
           <legend align=\"right\">
               <a href=\"#\" class=\"modif\"> <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> </a>
           </legend>
           <table class=\"table table-striped table-condensed\">
            
            
             <tr> 
                 <th>Ville</th>
                 <td> <input type=\"text\" name=\"ville\" disabled=\"true\" class=\"form-control champ ville\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "ville", array()), "html", null, true);
        echo "\"> </td> 
             </tr>
             <tr>
                 <th>Hotel</th> 
                 <td> <input type=\"text\" name=\"hotel\" disabled=\"true\" class=\"form-control champ\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "hotel", array()), "html", null, true);
        echo "\"></td> 
             </tr>
             
              <tr>
                 <th>Fonction</th> 
                 <td> <input type=\"text\" name=\"fonction\" disabled=\"true\" class=\"form-control champ\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "fonction", array()), "html", null, true);
        echo "\"></td> 
             </tr>
             
             <tr>
                 <th>Chef Projet</th> 
                 <td> <input type=\"text\" name=\"chefProjet\" disabled=\"true\" class=\"form-control champ\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "chefProjet", array()), "html", null, true);
        echo "\"></td> 
             </tr>
              <tr> 
                  <td colspan=\"2\">
                      <input type=\"submit\" value=\"Save\" class=\"btn btn-success champ\" disabled=\"true\" />
                      <span class=\"results\"> </span>
                 </td> 
             </tr>
           </table> 
        </form>
       </div>
    </section> 


       ";
        
        $__internal_646ef250ae8cc7f677282324ba84353454883300eb0a0329b875ab61b44ecb35->leave($__internal_646ef250ae8cc7f677282324ba84353454883300eb0a0329b875ab61b44ecb35_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Suivi:myDocument.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 56,  115 => 51,  107 => 46,  100 => 42,  87 => 32,  83 => 31,  75 => 26,  71 => 25,  58 => 15,  54 => 14,  48 => 11,  44 => 10,  40 => 9,  34 => 6,  28 => 5,  22 => 1,);
    }
}
/*   <section>*/
/*       <legend>Projet</legend>*/
/*       <table class="table table-striped table-condensed">*/
/*          <tr>*/
/*              <th>Reference : </th> <td> {{dossier.projet.reference}}</td> <th>Annonceur : </th> <td> {{dossier.projet.annonceur}}</td>*/
/*              <th>Intitulé : </th> <td> {{dossier.projet.intitule}}</td> */
/*          </tr>*/
/*          <tr>*/
/*              <th>Lieu : </th> <td> {{dossier.projet.lieu}}</td>*/
/*              <th>Date de publication : </th> <td> {{dossier.projet.datePublication | date('d-m-y')}}</td>*/
/*              <th>Durrée : </th> <td> {{dossier.projet.duree}}</td>*/
/*          </tr>*/
/*          <tr>*/
/*              <th>Profile : </th> <td> {{dossier.projet.profil}}</td> */
/*              <th>Description : </th> <td colspan="3"> {{dossier.projet.description}}</td>*/
/*          </tr> */
/*         </table> */
/*     </section> */
/*     */
/*  <section class="row" style="margin-top: 50px">*/
/*        */
/*        <div class="col-sm-5">*/
/*           <legend>Mission</legend>*/
/*           <table class="table table-striped table-condensed">*/
/*              <tr> <th>Date Depart</th> <td>{{dossier.dateDepart | date('d-m-y')}}</td> </tr>*/
/*              <tr> <th>Durée Mission</th> <td>{{dossier.duree}} mois</td> </tr>*/
/*           </table> */
/*        </div>*/
/*           */
/*        <div class="col-sm-6 ">*/
/*          <form method="post" action="{{ path('gm_projet_suivi_savemydocument') }}" class="myDoc">*/
/*            <input type="hidden" name="idDossier" value="{{dossier.id}}">*/
/*            */
/*            <legend align="right">*/
/*                <a href="#" class="modif"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>*/
/*            </legend>*/
/*            <table class="table table-striped table-condensed">*/
/*             */
/*             */
/*              <tr> */
/*                  <th>Ville</th>*/
/*                  <td> <input type="text" name="ville" disabled="true" class="form-control champ ville" value="{{dossier.ville}}"> </td> */
/*              </tr>*/
/*              <tr>*/
/*                  <th>Hotel</th> */
/*                  <td> <input type="text" name="hotel" disabled="true" class="form-control champ" value="{{dossier.hotel}}"></td> */
/*              </tr>*/
/*              */
/*               <tr>*/
/*                  <th>Fonction</th> */
/*                  <td> <input type="text" name="fonction" disabled="true" class="form-control champ" value="{{dossier.fonction}}"></td> */
/*              </tr>*/
/*              */
/*              <tr>*/
/*                  <th>Chef Projet</th> */
/*                  <td> <input type="text" name="chefProjet" disabled="true" class="form-control champ" value="{{dossier.chefProjet}}"></td> */
/*              </tr>*/
/*               <tr> */
/*                   <td colspan="2">*/
/*                       <input type="submit" value="Save" class="btn btn-success champ" disabled="true" />*/
/*                       <span class="results"> </span>*/
/*                  </td> */
/*              </tr>*/
/*            </table> */
/*         </form>*/
/*        </div>*/
/*     </section> */
/* */
/* */
/*        */
