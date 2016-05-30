<?php

/* GMProjetBundle:Ressource:receivedProject.html.twig */
class __TwigTemplate_f98b93279f0e631029dcfd97624977d96a57c84b584ce6966f5627a72504b30d extends Twig_Template
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
        $__internal_ed0f57509e70e1cdefec4bf627d33e1e78a788fb4f085b2d845bc77e0516e433 = $this->env->getExtension("native_profiler");
        $__internal_ed0f57509e70e1cdefec4bf627d33e1e78a788fb4f085b2d845bc77e0516e433->enter($__internal_ed0f57509e70e1cdefec4bf627d33e1e78a788fb4f085b2d845bc77e0516e433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Ressource:receivedProject.html.twig"));

        // line 1
        echo "
    <section>
        <table class=\"table table-striped table-bordered table-hover table-condensed\">
            <tr><th>Reference</th><th>Annonceur</th><th>Intitulé</th><th>Lieu</th><th>Durrée</th><th>Profile</th><th>Description</th><th>Date de publication</th> <th> Action</th></tr>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 6
            echo "            <tr>
                <td> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "reference", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "annonceur", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "intitule", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "lieu", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "duree", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "profil", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "datePublication", array()), "d-m-y"), "html", null, true);
            echo "</td>
                <td style=\"vertical-align:middle;\" align=\"center\"> 
                   <form class=\"gm_projet_positioned_project\">
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn\" type=\"submit\"> valider </button>
                   </form>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </table> 
    </section> 
";
        
        $__internal_ed0f57509e70e1cdefec4bf627d33e1e78a788fb4f085b2d845bc77e0516e433->leave($__internal_ed0f57509e70e1cdefec4bf627d33e1e78a788fb4f085b2d845bc77e0516e433_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Ressource:receivedProject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  69 => 17,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* */
/*     <section>*/
/*         <table class="table table-striped table-bordered table-hover table-condensed">*/
/*             <tr><th>Reference</th><th>Annonceur</th><th>Intitulé</th><th>Lieu</th><th>Durrée</th><th>Profile</th><th>Description</th><th>Date de publication</th> <th> Action</th></tr>*/
/*         {% for projet in projets %}*/
/*             <tr>*/
/*                 <td> {{projet.reference}}</td>*/
/*                 <td> {{projet.annonceur}}</td>*/
/*                 <td> {{projet.intitule}}</td>*/
/*                 <td> {{projet.lieu}}</td>*/
/*                 <td> {{projet.duree}}</td>*/
/*                 <td> {{projet.profil}}</td>*/
/*                 <td> {{projet.description}}</td>*/
/*                 <td> {{projet.datePublication | date('d-m-y')}}</td>*/
/*                 <td style="vertical-align:middle;" align="center"> */
/*                    <form class="gm_projet_positioned_project">*/
/*                         <input type="hidden" name="id" value="{{projet.id}}">*/
/*                         <button class="btn" type="submit"> valider </button>*/
/*                    </form>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </table> */
/*     </section> */
/* */
