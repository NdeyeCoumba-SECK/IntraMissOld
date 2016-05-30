<?php

/* @GMProjet/Suivi/myDocument.html.twig */
class __TwigTemplate_15faa45bebfe9664f85f50a33ce516cb6795705155946afc3b54bc32b29dd23c extends Twig_Template
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
        echo "  <section>
      <legend>Projet</legend>
      <table class=\"table table-striped table-condensed\">
         <tr>
             <th>Reference : </th> <td> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "projet", array()), "reference", array()), "html", null, true);
        echo "</td> <th>Annonceur : </th> <td> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "projet", array()), "annonceur", array()), "html", null, true);
        echo "</td>
             <th>Intitulé : </th> <td> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "projet", array()), "intitule", array()), "html", null, true);
        echo "</td> 
         </tr>
         <tr>
             <th>Lieu : </th> <td> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "projet", array()), "lieu", array()), "html", null, true);
        echo "</td>
             <th>Date de publication : </th> <td> ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "projet", array()), "datePublication", array()), "d-m-y"), "html", null, true);
        echo "</td>
             <th>Durrée : </th> <td> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "projet", array()), "duree", array()), "html", null, true);
        echo "</td>
         </tr>
         <tr>
             <th>Profile : </th> <td> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "projet", array()), "profil", array()), "html", null, true);
        echo "</td> 
             <th>Description : </th> <td colspan=\"3\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "projet", array()), "description", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "dateDepart", array()), "d-m-y"), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Durée Mission</th> <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "duree", array()), "html", null, true);
        echo " mois</td> </tr>
          </table> 
       </div>
       <div class=\"col-sm-6 \">
           <form method=\"post\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_savemydocument");
        echo "\" class=\"myDoc\">
           <input type=\"hidden\" name=\"idDossier\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "id", array()), "html", null, true);
        echo "\">
           
           <legend align=\"right\">
               <a href=\"#\" class=\"modif\"> <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> </a>
           </legend>
           <table class=\"table table-striped table-condensed\">
            
            
             <tr> 
                 <th>Ville</th>
                 <td> <input type=\"text\" name=\"ville\" disabled=\"true\" class=\"form-control ville\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "ville", array()), "html", null, true);
        echo "\"> </td> 
             </tr>
             <tr>
                 <th>Hotel</th> 
                 <td> <input type=\"text\" name=\"hotel\" disabled=\"true\" class=\"form-control hotel\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "hotel", array()), "html", null, true);
        echo "\"></td> 
             </tr>
             
              <tr> 
                  <td colspan=\"2\">
                      <input type=\"submit\" value=\"Save\" class=\"btn btn-success save\" disabled=\"true\" />
                      <span class=\"results\"> </span>
                 </td> 
             </tr>
           </table> 
        </form>
       </div>
    </section> 


       ";
    }

    public function getTemplateName()
    {
        return "@GMProjet/Suivi/myDocument.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 45,  96 => 41,  83 => 31,  79 => 30,  72 => 26,  68 => 25,  55 => 15,  51 => 14,  45 => 11,  41 => 10,  37 => 9,  31 => 6,  25 => 5,  19 => 1,);
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
/*        <div class="col-sm-6 ">*/
/*            <form method="post" action="{{ path('gm_projet_suivi_savemydocument') }}" class="myDoc">*/
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
/*                  <td> <input type="text" name="ville" disabled="true" class="form-control ville" value="{{dossier.ville}}"> </td> */
/*              </tr>*/
/*              <tr>*/
/*                  <th>Hotel</th> */
/*                  <td> <input type="text" name="hotel" disabled="true" class="form-control hotel" value="{{dossier.hotel}}"></td> */
/*              </tr>*/
/*              */
/*               <tr> */
/*                   <td colspan="2">*/
/*                       <input type="submit" value="Save" class="btn btn-success save" disabled="true" />*/
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
