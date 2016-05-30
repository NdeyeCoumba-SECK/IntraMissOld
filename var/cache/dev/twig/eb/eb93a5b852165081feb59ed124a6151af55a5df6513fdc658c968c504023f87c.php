<?php

/* GMProjetBundle:Suivi:detailOnMission.html.twig */
class __TwigTemplate_79c02b1b525525a3688dbcb7e8632ef6960463eaa859813eeab2f209cf488f60 extends Twig_Template
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
        $__internal_2c5b25913c5263fe78cbecdc526c27b542a774eea2e6f4f309701e66efcbd1a2 = $this->env->getExtension("native_profiler");
        $__internal_2c5b25913c5263fe78cbecdc526c27b542a774eea2e6f4f309701e66efcbd1a2->enter($__internal_2c5b25913c5263fe78cbecdc526c27b542a774eea2e6f4f309701e66efcbd1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Suivi:detailOnMission.html.twig"));

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
          <legend>Collaborateur</legend>
          <table class=\"table table-striped table-condensed\">
            
             <tr> <th>DAS ID</th> <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "collaborateur", array()), "user", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Nom</th> <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "collaborateur", array()), "nom", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Prénom</th> <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "collaborateur", array()), "prenom", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>E-mail</th> <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "collaborateur", array()), "email", array()), "html", null, true);
        echo "</td> </tr>
 
          </table> 
       </div>
       <div class=\"col-sm-6 \">
           <legend>Mission</legend>
           <table class=\"table table-striped table-condensed\">
            
             <tr> <th>Date Depart</th> <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "dateDepart", array()), "d-m-y"), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Durée Mission</th> <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "duree", array()), "html", null, true);
        echo " mois</td> </tr>
             <tr> <th>Ville</th> <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "ville", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Hotel</th> <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "hotel", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Fonction</th> <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "fonction", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Chef Projet</th> <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "chefProjet", array()), "html", null, true);
        echo "</td> </tr>
 
          </table> 
       </div>
    </section> 
    
    ";
        
        $__internal_2c5b25913c5263fe78cbecdc526c27b542a774eea2e6f4f309701e66efcbd1a2->leave($__internal_2c5b25913c5263fe78cbecdc526c27b542a774eea2e6f4f309701e66efcbd1a2_prof);

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
        return array (  117 => 44,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  97 => 39,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  58 => 15,  54 => 14,  48 => 11,  44 => 10,  40 => 9,  34 => 6,  28 => 5,  22 => 1,);
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
/*              <tr> <th>Fonction</th> <td>{{dossier.fonction}}</td> </tr>*/
/*              <tr> <th>Chef Projet</th> <td>{{dossier.chefProjet}}</td> </tr>*/
/*  */
/*           </table> */
/*        </div>*/
/*     </section> */
/*     */
/*     */
