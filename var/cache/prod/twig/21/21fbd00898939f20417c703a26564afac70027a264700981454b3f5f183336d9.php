<?php

/* @GMProjet/Ressource/newProject.html.twig */
class __TwigTemplate_c3a4ecb42f7be4d1eb5acdffe4147843f60f7c2bdbbc6201e72ba3bee776e876 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("gm_projet_new_project"), "attr" => array("class" => "gm_projet_new_project form-horizontal")));
        echo "
 
    <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"reference\" class=\"col-sm-2 control-label\"> ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reference", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reference", array()), 'widget', array("attr" => array("class" => "form-control focus", "autofocus" => "autofocus")));
        echo "
          </div>
        </div>
    </div>
          
    
    <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"intitule\" class=\"col-sm-2 control-label\"> ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "intitule", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "intitule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"annonceur\" class=\"col-sm-2 control-label\"> ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "annonceur", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "annonceur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
    </div>
    
     <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"lieu\" class=\"col-sm-2 control-label\"> ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lieu", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"duree\" class=\"col-sm-2 control-label\"> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "duree", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
    </div>
    
     <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"profil\" class=\"col-sm-2 control-label\"> ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profil", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profil", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>
    </div>
    
     <div class=\"row\">
        <div class=\"form-group\">
          <label for=\"description\" class=\"col-sm-2 control-label\"> ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'label');
        echo "</label>
          <div class=\"col-sm-9\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "@GMProjet/Ressource/newProject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 73,  122 => 62,  117 => 60,  107 => 53,  102 => 51,  92 => 44,  87 => 42,  77 => 35,  72 => 33,  62 => 26,  57 => 24,  47 => 17,  42 => 15,  31 => 7,  26 => 5,  19 => 1,);
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
