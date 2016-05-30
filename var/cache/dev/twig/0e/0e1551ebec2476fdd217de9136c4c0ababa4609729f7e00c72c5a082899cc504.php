<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_22047b770e4edbcabd9def62fca983fe93498c65efc0dc53415de4df7228a54d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b3f4a9af7bb546c2662e41c4b081cfc9b30ba3ea126cfad62708299553c410c = $this->env->getExtension("native_profiler");
        $__internal_1b3f4a9af7bb546c2662e41c4b081cfc9b30ba3ea126cfad62708299553c410c->enter($__internal_1b3f4a9af7bb546c2662e41c4b081cfc9b30ba3ea126cfad62708299553c410c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b3f4a9af7bb546c2662e41c4b081cfc9b30ba3ea126cfad62708299553c410c->leave($__internal_1b3f4a9af7bb546c2662e41c4b081cfc9b30ba3ea126cfad62708299553c410c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e8766db35899f3a7d45ea496c92a878ffc2cf9f0df4e6af8404f2ccb7ff6cd2f = $this->env->getExtension("native_profiler");
        $__internal_e8766db35899f3a7d45ea496c92a878ffc2cf9f0df4e6af8404f2ccb7ff6cd2f->enter($__internal_e8766db35899f3a7d45ea496c92a878ffc2cf9f0df4e6af8404f2ccb7ff6cd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8766db35899f3a7d45ea496c92a878ffc2cf9f0df4e6af8404f2ccb7ff6cd2f->leave($__internal_e8766db35899f3a7d45ea496c92a878ffc2cf9f0df4e6af8404f2ccb7ff6cd2f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_adc8ab1c5e539d9d6bb41b30bae909ba4f481c5c644b1b368f9464f7429aeb30 = $this->env->getExtension("native_profiler");
        $__internal_adc8ab1c5e539d9d6bb41b30bae909ba4f481c5c644b1b368f9464f7429aeb30->enter($__internal_adc8ab1c5e539d9d6bb41b30bae909ba4f481c5c644b1b368f9464f7429aeb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_adc8ab1c5e539d9d6bb41b30bae909ba4f481c5c644b1b368f9464f7429aeb30->leave($__internal_adc8ab1c5e539d9d6bb41b30bae909ba4f481c5c644b1b368f9464f7429aeb30_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd69d97a6fa54b5a2f9231eb7f63e2ca7263bef9f4c61a9b1e0f1db4e606343b = $this->env->getExtension("native_profiler");
        $__internal_fd69d97a6fa54b5a2f9231eb7f63e2ca7263bef9f4c61a9b1e0f1db4e606343b->enter($__internal_fd69d97a6fa54b5a2f9231eb7f63e2ca7263bef9f4c61a9b1e0f1db4e606343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd69d97a6fa54b5a2f9231eb7f63e2ca7263bef9f4c61a9b1e0f1db4e606343b->leave($__internal_fd69d97a6fa54b5a2f9231eb7f63e2ca7263bef9f4c61a9b1e0f1db4e606343b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
