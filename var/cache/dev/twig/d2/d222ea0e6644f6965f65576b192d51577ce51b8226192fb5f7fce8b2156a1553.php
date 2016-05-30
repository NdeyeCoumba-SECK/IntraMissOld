<?php

/* GMProjetBundle:Ressource:newProject.html.twig */
class __TwigTemplate_2efebf05cdf4dd5d713dbe38a340c83192a4cf7677ee1ebc40c07b16ccb084ff extends Twig_Template
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
        $__internal_0669377150e57b97a575c8d70083ded88ceb449477c2a6113b72f0eaef969217 = $this->env->getExtension("native_profiler");
        $__internal_0669377150e57b97a575c8d70083ded88ceb449477c2a6113b72f0eaef969217->enter($__internal_0669377150e57b97a575c8d70083ded88ceb449477c2a6113b72f0eaef969217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Ressource:newProject.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("gm_projet_new_project"), "attr" => array("class" => "gm_projet_new_project form-horizontal")));
        echo "
 
    <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"reference\" class=\"col-sm-2 control-label\"> ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference", array()), 'widget', array("attr" => array("class" => "form-control focus", "autofocus" => "autofocus")));
        echo "
          </div>
        </div>
    </div>
          
    
    <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"intitule\" class=\"col-sm-2 control-label\"> ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"annonceur\" class=\"col-sm-2 control-label\"> ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annonceur", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annonceur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
    </div>
    
     <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"lieu\" class=\"col-sm-2 control-label\"> ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"duree\" class=\"col-sm-2 control-label\"> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
    </div>
    
     <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"profil\" class=\"col-sm-2 control-label\"> ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profil", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profil", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
    </div>
    
     <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"description\" class=\"col-sm-2 control-label\"> ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
    </div>
   
    <div class=\"row\">
         <div class=\"col-sm-7 col-sm-offset-2 results\"> </div>
         <div class=\"col-sm-2 col-sm-offset-9\">
           <input type=\"submit\" value=\"Post\" class=\"form-control btn btn-success\" />
         </div>
   </div>
";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_0669377150e57b97a575c8d70083ded88ceb449477c2a6113b72f0eaef969217->leave($__internal_0669377150e57b97a575c8d70083ded88ceb449477c2a6113b72f0eaef969217_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Ressource:newProject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 73,  125 => 62,  120 => 60,  110 => 53,  105 => 51,  95 => 44,  90 => 42,  80 => 35,  75 => 33,  65 => 26,  60 => 24,  50 => 17,  45 => 15,  34 => 7,  29 => 5,  22 => 1,);
    }
}
/* {{ form_start(form, {'method': 'post', 'action': path('gm_projet_new_project'), 'attr': { 'class': 'gm_projet_new_project form-horizontal' } }) }}*/
/*  */
/*     <div class="row">*/
/*         <div class="form-group">*/
/*           <label for="reference" class="col-sm-2 control-label"> {{form_label(form.reference)}}</label>*/
/*           <div class="col-sm-9">*/
/*             {{ form_widget(form.reference , {'attr': {'class': 'form-control focus', 'autofocus':'autofocus'} } )}}*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/*           */
/*     */
/*     <div class="row">*/
/*         <div class="form-group">*/
/*           <label for="intitule" class="col-sm-2 control-label"> {{form_label(form.intitule)}}</label>*/
/*           <div class="col-sm-9">*/
/*             {{ form_widget(form.intitule , {'attr': {'class': 'form-control'} } )}}*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <div class="row">*/
/*         <div class="form-group">*/
/*           <label for="annonceur" class="col-sm-2 control-label"> {{form_label(form.annonceur)}}</label>*/
/*           <div class="col-sm-9">*/
/*             {{ form_widget(form.annonceur , {'attr': {'class': 'form-control'} })}}*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*      <div class="row">*/
/*         <div class="form-group">*/
/*           <label for="lieu" class="col-sm-2 control-label"> {{form_label(form.lieu)}}</label>*/
/*           <div class="col-sm-9">*/
/*             {{ form_widget(form.lieu , {'attr': {'class': 'form-control'} } )}}*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <div class="row">*/
/*         <div class="form-group">*/
/*           <label for="duree" class="col-sm-2 control-label"> {{form_label(form.duree)}}</label>*/
/*           <div class="col-sm-9">*/
/*             {{ form_widget(form.duree , {'attr': {'class': 'form-control'} } )}}*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*      <div class="row">*/
/*         <div class="form-group">*/
/*           <label for="profil" class="col-sm-2 control-label"> {{form_label(form.profil)}}</label>*/
/*           <div class="col-sm-9">*/
/*             {{ form_widget(form.profil , {'attr': {'class': 'form-control'} } )}}*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*      <div class="row">*/
/*         <div class="form-group">*/
/*           <label for="description" class="col-sm-2 control-label"> {{form_label(form.description)}}</label>*/
/*           <div class="col-sm-9">*/
/*             {{ form_widget(form.description , {'attr': {'class': 'form-control'} } )}}*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/*    */
/*     <div class="row">*/
/*          <div class="col-sm-7 col-sm-offset-2 results"> </div>*/
/*          <div class="col-sm-2 col-sm-offset-9">*/
/*            <input type="submit" value="Post" class="form-control btn btn-success" />*/
/*          </div>*/
/*    </div>*/
/* {{ form_end(form) }}*/
/* */
/* */
