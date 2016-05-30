<?php

/* GMProjetBundle:Suivi:detailOnMission.html.twig */
class __TwigTemplate_a22e5ca02183666e3893d3f2fee1a58f8b0dda5d6aad6891ece67b1696110b39 extends Twig_Template
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
          <legend>Collaborateur</legend>
          <table class=\"table table-striped table-condensed\">
            
             <tr> <th>DAS ID</th> <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "collaborateur", array()), "user", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Nom</th> <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "collaborateur", array()), "nom", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Prénom</th> <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "collaborateur", array()), "prenom", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>E-mail</th> <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "collaborateur", array()), "email", array()), "html", null, true);
        echo "</td> </tr>
 
          </table> 
       </div>
       <div class=\"col-sm-6 \">
           <legend>Mission</legend>
           <table class=\"table table-striped table-condensed\">
            
             <tr> <th>Date Depart</th> <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "dateDepart", array()), "d-m-y"), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Durée Mission</th> <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "duree", array()), "html", null, true);
        echo " mois</td> </tr>
             <tr> <th>Ville</th> <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "ville", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Hotel</th> <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "hotel", array()), "html", null, true);
        echo "</td> </tr>
 
          </table> 
       </div>
    </section> 
    
    ";
    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Suivi:detailOnMission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 42,  102 => 41,  98 => 40,  94 => 39,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  55 => 15,  51 => 14,  45 => 11,  41 => 10,  37 => 9,  31 => 6,  25 => 5,  19 => 1,);
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
/*   */
/*    */
/*   <section class="row" style="margin-top: 50px">*/
/*        */
/*        <div class="col-sm-5">*/
/*           <legend>Collaborateur</legend>*/
/*           <table class="table table-striped table-condensed">*/
/*             */
/*              <tr> <th>DAS ID</th> <td>{{dossier.collaborateur.user}}</td> </tr>*/
/*              <tr> <th>Nom</th> <td>{{dossier.collaborateur.nom}}</td> </tr>*/
/*              <tr> <th>Prénom</th> <td>{{dossier.collaborateur.prenom}}</td> </tr>*/
/*              <tr> <th>E-mail</th> <td>{{dossier.collaborateur.email}}</td> </tr>*/
/*  */
/*           </table> */
/*        </div>*/
/*        <div class="col-sm-6 ">*/
/*            <legend>Mission</legend>*/
/*            <table class="table table-striped table-condensed">*/
/*             */
/*              <tr> <th>Date Depart</th> <td>{{dossier.dateDepart | date('d-m-y')}}</td> </tr>*/
/*              <tr> <th>Durée Mission</th> <td>{{dossier.duree}} mois</td> </tr>*/
/*              <tr> <th>Ville</th> <td>{{dossier.ville}}</td> </tr>*/
/*              <tr> <th>Hotel</th> <td>{{dossier.hotel}}</td> </tr>*/
/*  */
/*           </table> */
/*        </div>*/
/*     </section> */
/*     */
/*     */
