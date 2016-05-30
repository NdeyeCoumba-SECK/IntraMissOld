<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_3d8580b40e9f6343c1761ec6d9763ce7935e3bd849193e1b4210c1412200b305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::principale.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::principale.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9748884656f134bce6f094e6f6f88150bd690de8d1fbefcaac492f1ddfc07274 = $this->env->getExtension("native_profiler");
        $__internal_9748884656f134bce6f094e6f6f88150bd690de8d1fbefcaac492f1ddfc07274->enter($__internal_9748884656f134bce6f094e6f6f88150bd690de8d1fbefcaac492f1ddfc07274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9748884656f134bce6f094e6f6f88150bd690de8d1fbefcaac492f1ddfc07274->leave($__internal_9748884656f134bce6f094e6f6f88150bd690de8d1fbefcaac492f1ddfc07274_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b0915c3b837430cecaf38cf8b45780da1536e8e6edd1d22ac2bc431ce16b3f7 = $this->env->getExtension("native_profiler");
        $__internal_0b0915c3b837430cecaf38cf8b45780da1536e8e6edd1d22ac2bc431ce16b3f7->enter($__internal_0b0915c3b837430cecaf38cf8b45780da1536e8e6edd1d22ac2bc431ce16b3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 5
            echo "   ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "   <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
        ";
                // line 7
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
   </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "

 ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "
";
        
        $__internal_0b0915c3b837430cecaf38cf8b45780da1536e8e6edd1d22ac2bc431ce16b3f7->leave($__internal_0b0915c3b837430cecaf38cf8b45780da1536e8e6edd1d22ac2bc431ce16b3f7_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68e281cdd7f2dcfd965ba697e65fb38170200b27505e458491e329a0d176da7b = $this->env->getExtension("native_profiler");
        $__internal_68e281cdd7f2dcfd965ba697e65fb38170200b27505e458491e329a0d176da7b->enter($__internal_68e281cdd7f2dcfd965ba697e65fb38170200b27505e458491e329a0d176da7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo " ";
        
        $__internal_68e281cdd7f2dcfd965ba697e65fb38170200b27505e458491e329a0d176da7b->leave($__internal_68e281cdd7f2dcfd965ba697e65fb38170200b27505e458491e329a0d176da7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  82 => 13,  74 => 15,  72 => 13,  68 => 11,  55 => 7,  50 => 6,  45 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::principale.html.twig" %}*/
/*             */
/* {%block body %}*/
/* {% for type, messages in app.session.flashbag.all() %}*/
/*    {% for message in messages %}*/
/*    <div class="flash-{{ type }}">*/
/*         {{ message }}*/
/*    </div>*/
/*     {% endfor %}*/
/* {% endfor %}*/
/* */
/* */
/*  {% block fos_user_content %}*/
/*  {% endblock fos_user_content %}*/
/* */
/* {% endblock body %}*/
/*    */
