<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8b035fc7a890e994e87cc3eb0b761850d627d1192472a6747e97d33ea5579d66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df7826249154acba221e10f76404ac1c96b1da55c4c49562ef3006a69e29021c = $this->env->getExtension("native_profiler");
        $__internal_df7826249154acba221e10f76404ac1c96b1da55c4c49562ef3006a69e29021c->enter($__internal_df7826249154acba221e10f76404ac1c96b1da55c4c49562ef3006a69e29021c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df7826249154acba221e10f76404ac1c96b1da55c4c49562ef3006a69e29021c->leave($__internal_df7826249154acba221e10f76404ac1c96b1da55c4c49562ef3006a69e29021c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0afee346e190dca974ca00d6557c6327c233da9228532138bda65ad6f11117b3 = $this->env->getExtension("native_profiler");
        $__internal_0afee346e190dca974ca00d6557c6327c233da9228532138bda65ad6f11117b3->enter($__internal_0afee346e190dca974ca00d6557c6327c233da9228532138bda65ad6f11117b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0afee346e190dca974ca00d6557c6327c233da9228532138bda65ad6f11117b3->leave($__internal_0afee346e190dca974ca00d6557c6327c233da9228532138bda65ad6f11117b3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_65687224d46c09702bb25cc49118242b3e3bd5c4c1e1da0aafba752222f34043 = $this->env->getExtension("native_profiler");
        $__internal_65687224d46c09702bb25cc49118242b3e3bd5c4c1e1da0aafba752222f34043->enter($__internal_65687224d46c09702bb25cc49118242b3e3bd5c4c1e1da0aafba752222f34043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_65687224d46c09702bb25cc49118242b3e3bd5c4c1e1da0aafba752222f34043->leave($__internal_65687224d46c09702bb25cc49118242b3e3bd5c4c1e1da0aafba752222f34043_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7720d4c50247dd23400af077a3374de4b88d0c74e834692c138b59a1b77b062c = $this->env->getExtension("native_profiler");
        $__internal_7720d4c50247dd23400af077a3374de4b88d0c74e834692c138b59a1b77b062c->enter($__internal_7720d4c50247dd23400af077a3374de4b88d0c74e834692c138b59a1b77b062c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7720d4c50247dd23400af077a3374de4b88d0c74e834692c138b59a1b77b062c->leave($__internal_7720d4c50247dd23400af077a3374de4b88d0c74e834692c138b59a1b77b062c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
