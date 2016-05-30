<?php

/* ::principale.html.twig */
class __TwigTemplate_264a66b1e6cd0646590cb409fe03518da3466e84c35bf7f382c5f77dcc698303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a58ee25a81b6d4bbd1e58433152f5390b1d89e4c9148e10ab2800160d159b784 = $this->env->getExtension("native_profiler");
        $__internal_a58ee25a81b6d4bbd1e58433152f5390b1d89e4c9148e10ab2800160d159b784->enter($__internal_a58ee25a81b6d4bbd1e58433152f5390b1d89e4c9148e10ab2800160d159b784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::principale.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_a58ee25a81b6d4bbd1e58433152f5390b1d89e4c9148e10ab2800160d159b784->leave($__internal_a58ee25a81b6d4bbd1e58433152f5390b1d89e4c9148e10ab2800160d159b784_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ed8f6c7e31dcf942178c746a16e6f5ab5e02584e8d545f8b468af9d38ce15fd = $this->env->getExtension("native_profiler");
        $__internal_0ed8f6c7e31dcf942178c746a16e6f5ab5e02584e8d545f8b468af9d38ce15fd->enter($__internal_0ed8f6c7e31dcf942178c746a16e6f5ab5e02584e8d545f8b468af9d38ce15fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0ed8f6c7e31dcf942178c746a16e6f5ab5e02584e8d545f8b468af9d38ce15fd->leave($__internal_0ed8f6c7e31dcf942178c746a16e6f5ab5e02584e8d545f8b468af9d38ce15fd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4a70198a470f64f454bec5a04df01f4c3893df33f09ce4f76434bc99e44cbc8 = $this->env->getExtension("native_profiler");
        $__internal_b4a70198a470f64f454bec5a04df01f4c3893df33f09ce4f76434bc99e44cbc8->enter($__internal_b4a70198a470f64f454bec5a04df01f4c3893df33f09ce4f76434bc99e44cbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "           <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
           <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
           <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_b4a70198a470f64f454bec5a04df01f4c3893df33f09ce4f76434bc99e44cbc8->leave($__internal_b4a70198a470f64f454bec5a04df01f4c3893df33f09ce4f76434bc99e44cbc8_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_881ea1a66b2fc0e2dd603d37ef703aa6b9ced5bc3844a7ec2603125dffa63f85 = $this->env->getExtension("native_profiler");
        $__internal_881ea1a66b2fc0e2dd603d37ef703aa6b9ced5bc3844a7ec2603125dffa63f85->enter($__internal_881ea1a66b2fc0e2dd603d37ef703aa6b9ced5bc3844a7ec2603125dffa63f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_881ea1a66b2fc0e2dd603d37ef703aa6b9ced5bc3844a7ec2603125dffa63f85->leave($__internal_881ea1a66b2fc0e2dd603d37ef703aa6b9ced5bc3844a7ec2603125dffa63f85_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf04b089092776f37c75fbed8a8ca8bc0ecb32e2f3a94e59ceb963b5f772370a = $this->env->getExtension("native_profiler");
        $__internal_bf04b089092776f37c75fbed8a8ca8bc0ecb32e2f3a94e59ceb963b5f772370a->enter($__internal_bf04b089092776f37c75fbed8a8ca8bc0ecb32e2f3a94e59ceb963b5f772370a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_bf04b089092776f37c75fbed8a8ca8bc0ecb32e2f3a94e59ceb963b5f772370a->leave($__internal_bf04b089092776f37c75fbed8a8ca8bc0ecb32e2f3a94e59ceb963b5f772370a_prof);

    }

    public function getTemplateName()
    {
        return "::principale.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 16,  109 => 15,  103 => 14,  92 => 13,  83 => 9,  79 => 8,  74 => 7,  68 => 6,  56 => 5,  47 => 18,  44 => 14,  42 => 13,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*            <link href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*            <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" />*/
/*            <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*          <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*          <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
