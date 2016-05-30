<?php

/* GMProjetBundle:Ressource:listeProjet.html.twig */
class __TwigTemplate_0ba52835bf6750c4b120753b7e2432d96aef2c47a941a45c7b73254e620e3525 extends Twig_Template
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
        $__internal_eb3f5e4206f0ccaea8bfc06e143da00fa872512569755697ed7634dbf30abe2a = $this->env->getExtension("native_profiler");
        $__internal_eb3f5e4206f0ccaea8bfc06e143da00fa872512569755697ed7634dbf30abe2a->enter($__internal_eb3f5e4206f0ccaea8bfc06e143da00fa872512569755697ed7634dbf30abe2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Ressource:listeProjet.html.twig"));

        // line 1
        echo "
    <section>
        <table  class=\"table table-striped table-bordered table-hover table-condensed\">
            <tr><th>Reference</th><th>Annonceur</th><th>Intitulé</th><th>Lieu</th><th>Durrée</th><th>Profile</th><th>Description</th><th>Date de publication</th> <th> Etat Actuel</th></tr>
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
                <td ";
            // line 15
            if ($this->getAttribute($context["projet"], "etat", array())) {
                echo " class=\"info\" ";
            } else {
                echo " class=\"danger\"  ";
            }
            echo "> 
                    ";
            // line 16
            if ($this->getAttribute($context["projet"], "etat", array())) {
                // line 17
                echo "                     ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "etat", array()), "html", null, true);
                echo "
                     
                      ";
            } else {
                // line 20
                echo "                       Non traité
                     ";
            }
            // line 22
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </table> 
    </section> 
";
        
        $__internal_eb3f5e4206f0ccaea8bfc06e143da00fa872512569755697ed7634dbf30abe2a->leave($__internal_eb3f5e4206f0ccaea8bfc06e143da00fa872512569755697ed7634dbf30abe2a_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Ressource:listeProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  88 => 22,  84 => 20,  77 => 17,  75 => 16,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* */
/*     <section>*/
/*         <table  class="table table-striped table-bordered table-hover table-condensed">*/
/*             <tr><th>Reference</th><th>Annonceur</th><th>Intitulé</th><th>Lieu</th><th>Durrée</th><th>Profile</th><th>Description</th><th>Date de publication</th> <th> Etat Actuel</th></tr>*/
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
/*                 <td {% if (projet.etat)%} class="info" {% else %} class="danger"  {% endif %}> */
/*                     {% if (projet.etat)%}*/
/*                      {{projet.etat}}*/
/*                      */
/*                       {% else %}*/
/*                        Non traité*/
/*                      {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </table> */
/*     </section> */
/* */
