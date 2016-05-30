<?php

/* GMProjetBundle:Suivi:infoCollaborateur.html.twig */
class __TwigTemplate_34cc63aac76f78c2ed76c3ac97b8b8e3c31e5887dab23ec8ca8a6c220e12f173 extends Twig_Template
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
        $__internal_37469e4d518d9f6f93a2d5c2a283945f5618df857d406fb3798f81317653e6d1 = $this->env->getExtension("native_profiler");
        $__internal_37469e4d518d9f6f93a2d5c2a283945f5618df857d406fb3798f81317653e6d1->enter($__internal_37469e4d518d9f6f93a2d5c2a283945f5618df857d406fb3798f81317653e6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Suivi:infoCollaborateur.html.twig"));

        // line 1
        echo "  <section>
      <legend>Projet</legend>
      <table class=\"table table-striped table-condensed\">
         <tr>
             <th>Reference : </th> <td> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "reference", array()), "html", null, true);
        echo "</td> <th>Annonceur : </th> <td> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "annonceur", array()), "html", null, true);
        echo "</td>
             <th>Intitulé : </th> <td> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "intitule", array()), "html", null, true);
        echo "</td> 
         </tr>
         <tr>
             <th>Lieu : </th> <td> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "lieu", array()), "html", null, true);
        echo "</td>
             <th>Date de publication : </th> <td> ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "datePublication", array()), "d-m-y"), "html", null, true);
        echo "</td>
             <th>Durrée : </th> <td> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "duree", array()), "html", null, true);
        echo "</td>
         </tr>
         <tr>
             <th>Profile : </th> <td> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "profil", array()), "html", null, true);
        echo "</td> 
             <th>Description : </th> <td colspan=\"3\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "description", array()), "html", null, true);
        echo "</td>
         </tr> 
        </table> 
    </section> 
    
  
   
         <section class=\"row\" style=\"margin-top: 25px\">
       
       <div class=\"col-sm-5\">
          <legend>Collaborateur</legend>
          <table class=\"table table-striped table-condensed\">
            
             <tr> <th>DAS ID</th> <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : $this->getContext($context, "collaborateur")), "user", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Nom</th> <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : $this->getContext($context, "collaborateur")), "nom", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>Prénom</th> <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : $this->getContext($context, "collaborateur")), "prenom", array()), "html", null, true);
        echo "</td> </tr>
             <tr> <th>E-mail</th> <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : $this->getContext($context, "collaborateur")), "email", array()), "html", null, true);
        echo "</td> </tr>
 
          </table> 
       </div>
       <div class=\"col-sm-6\">
           <div class=\"panel panel-default\" style=\"height: 210px\">
          <div class=\"panel-body\" > 
                   
           ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("gm_projet_suivi_candidature"), "attr" => array("class" => "form-horizontal cand")));
        echo "
                <div class=\"row\">
                    <div class=\"form-group\">
                      <label for=\"candidature\" class=\"col-sm-3 control-label\"> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "candidature", array()), 'label');
        echo "</label>
                      <div class=\"col-sm-8\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "candidature", array()), 'widget', array("attr" => array("class" => "form-control choix", "name" => "essai")));
        echo "
                      </div>
                    </div>
                </div>
                      
                 <div class=\"row\">
                    <div class=\"form-group\">
                      <label for=\"date depart\" class=\"col-sm-3 control-label\"> ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDepart", array()), 'label');
        echo "</label>
                      <div class=\"col-sm-8\">
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDepart", array()), 'widget', array("attr" => array("class" => "form-control c1")));
        echo "
                      </div>
                    </div>
                </div>
                      
                 <div class=\"row\">
                    <div class=\"form-group\">
                      <label for=\"duree\" class=\"col-sm-3 control-label\"> ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'label');
        echo "</label>
                      <div class=\"col-sm-8\">
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'widget', array("attr" => array("class" => "form-control c2")));
        echo "
                      </div>
                    </div>
                </div>
                
                <div class=\"row\">
                       <div class=\"col-sm-8 results\"> </div>
                       <div class=\"col-sm-3 \">
                         <input type=\"submit\" value=\"Valider\" class=\"form-control btn btn-success\" />
                       </div>
                 </div>
                <input type=\"hidden\" name=\"idProjet\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"idCollab\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : $this->getContext($context, "collaborateur")), "id", array()), "html", null, true);
        echo "\">
             ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
          
          </div>      
         </div>
       </div>
    </section> 
    
    ";
        
        $__internal_37469e4d518d9f6f93a2d5c2a283945f5618df857d406fb3798f81317653e6d1->leave($__internal_37469e4d518d9f6f93a2d5c2a283945f5618df857d406fb3798f81317653e6d1_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Suivi:infoCollaborateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 75,  156 => 74,  152 => 73,  138 => 62,  133 => 60,  123 => 53,  118 => 51,  108 => 44,  103 => 42,  97 => 39,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  58 => 15,  54 => 14,  48 => 11,  44 => 10,  40 => 9,  34 => 6,  28 => 5,  22 => 1,);
    }
}
/*   <section>*/
/*       <legend>Projet</legend>*/
/*       <table class="table table-striped table-condensed">*/
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
/*   */
/*    */
/*          <section class="row" style="margin-top: 25px">*/
/*        */
/*        <div class="col-sm-5">*/
/*           <legend>Collaborateur</legend>*/
/*           <table class="table table-striped table-condensed">*/
/*             */
/*              <tr> <th>DAS ID</th> <td>{{collaborateur.user}}</td> </tr>*/
/*              <tr> <th>Nom</th> <td>{{collaborateur.nom}}</td> </tr>*/
/*              <tr> <th>Prénom</th> <td>{{collaborateur.prenom}}</td> </tr>*/
/*              <tr> <th>E-mail</th> <td>{{collaborateur.email}}</td> </tr>*/
/*  */
/*           </table> */
/*        </div>*/
/*        <div class="col-sm-6">*/
/*            <div class="panel panel-default" style="height: 210px">*/
/*           <div class="panel-body" > */
/*                    */
/*            {{ form_start(form, {'method': 'post', 'action': path('gm_projet_suivi_candidature'), 'attr': { 'class': 'form-horizontal cand' } }) }}*/
/*                 <div class="row">*/
/*                     <div class="form-group">*/
/*                       <label for="candidature" class="col-sm-3 control-label"> {{form_label(form.candidature)}}</label>*/
/*                       <div class="col-sm-8">*/
/*                         {{ form_widget(form.candidature , {'attr': {'class': 'form-control choix', 'name':'essai'} } )}}*/
/*                       </div>*/
/*                     </div>*/
/*                 </div>*/
/*                       */
/*                  <div class="row">*/
/*                     <div class="form-group">*/
/*                       <label for="date depart" class="col-sm-3 control-label"> {{form_label(form.dateDepart)}}</label>*/
/*                       <div class="col-sm-8">*/
/*                         {{ form_widget(form.dateDepart , {'attr': {'class': 'form-control c1'} })}}*/
/*                       </div>*/
/*                     </div>*/
/*                 </div>*/
/*                       */
/*                  <div class="row">*/
/*                     <div class="form-group">*/
/*                       <label for="duree" class="col-sm-3 control-label"> {{form_label(form.duree)}}</label>*/
/*                       <div class="col-sm-8">*/
/*                         {{ form_widget(form.duree , {'attr': {'class': 'form-control c2'} } )}}*/
/*                       </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="row">*/
/*                        <div class="col-sm-8 results"> </div>*/
/*                        <div class="col-sm-3 ">*/
/*                          <input type="submit" value="Valider" class="form-control btn btn-success" />*/
/*                        </div>*/
/*                  </div>*/
/*                 <input type="hidden" name="idProjet" value="{{projet.id}}">*/
/*                 <input type="hidden" name="idCollab" value="{{collaborateur.id}}">*/
/*              {{ form_end(form) }}*/
/*           */
/*           </div>      */
/*          </div>*/
/*        </div>*/
/*     </section> */
/*     */
/*     */
