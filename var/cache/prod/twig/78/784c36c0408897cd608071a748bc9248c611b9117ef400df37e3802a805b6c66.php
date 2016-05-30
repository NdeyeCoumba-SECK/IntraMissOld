<?php

/* @GMProjet/Ressource/projectStatus.html.twig */
class __TwigTemplate_c2826b438545a3bc7e40fc2bcf2c7e077bf0ac229a699a2bcce51eeb6865a72e extends Twig_Template
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
        echo "
    <section>
        <table class=\"table table-striped table-bordered table-hover table-condensed\">
            <tr><th>Reference</th><th>Annonceur</th><th>Intitulé</th><th>Lieu</th><th>Profile Recherché</th><th>Date de publication</th> <th> Etat Actuel</th> <th> Detail</th> <th> Ressource</th> </tr>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 6
            echo "            <tr>
                <td ";
            // line 7
            if ($this->getAttribute($context["projet"], "etat", array())) {
                echo " class=\"info\" ";
            } else {
                echo " class=\"danger\"  ";
            }
            echo "> ";
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "profil", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "datePublication", array()), "d-m-y"), "html", null, true);
            echo "</td>
                <td ";
            // line 13
            if ($this->getAttribute($context["projet"], "etat", array())) {
                echo " ";
            } else {
                echo " class=\"danger\"  ";
            }
            echo "> 
                    ";
            // line 14
            if ($this->getAttribute($context["projet"], "etat", array())) {
                // line 15
                echo "                     ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "etat", array()), "html", null, true);
                echo "
                     
                      ";
            } else {
                // line 18
                echo "                       Non traité
                     ";
            }
            // line 20
            echo "                </td>
                
                <td> 
                    <form class=\"formDetail\">
                         <input type=\"hidden\" name=\"id\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\">
                        <!-- <input type=\"submit\" ";
            // line 25
            if (($this->getAttribute($context["projet"], "etat", array()) == null)) {
                echo "disabled";
            }
            echo " value=\"Plus\"> -->
                         <button class=\"btn\" type=\"submit\" ";
            // line 26
            if (($this->getAttribute($context["projet"], "etat", array()) == null)) {
                echo "disabled";
            }
            echo " title=\"Info\">
                              <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
                         </button>
                     </form>
                     
                </td>
                
                <td align=\"center\"> 
                    <form class=\"formRess\">
                         <input type=\"hidden\" name=\"id\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\">
                        <!-- <input type=\"submit\" ";
            // line 36
            if (($this->getAttribute($context["projet"], "etat", array()) == null)) {
                echo "disabled";
            }
            echo " value=\"Ressource\"> -->
                         <button class=\"btn\" type=\"submit\" ";
            // line 37
            if (($this->getAttribute($context["projet"], "etat", array()) == null)) {
                echo "disabled";
            }
            echo " title=\"Add Ressource\"> 
                             <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
                         </button>
                     </form>
                </td>
                
                
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </table> 
    </section> 
";
    }

    public function getTemplateName()
    {
        return "@GMProjet/Ressource/projectStatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 47,  123 => 37,  117 => 36,  113 => 35,  99 => 26,  93 => 25,  89 => 24,  83 => 20,  79 => 18,  72 => 15,  70 => 14,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* */
/*     <section>*/
/*         <table class="table table-striped table-bordered table-hover table-condensed">*/
/*             <tr><th>Reference</th><th>Annonceur</th><th>Intitulé</th><th>Lieu</th><th>Profile Recherché</th><th>Date de publication</th> <th> Etat Actuel</th> <th> Detail</th> <th> Ressource</th> </tr>*/
/*         {% for projet in projets %}*/
/*             <tr>*/
/*                 <td {% if (projet.etat)%} class="info" {% else %} class="danger"  {% endif %}> {{projet.reference}}</td>*/
/*                 <td> {{projet.annonceur}}</td>*/
/*                 <td> {{projet.intitule}}</td>*/
/*                 <td> {{projet.lieu}}</td>*/
/*                 <td> {{projet.profil}}</td>*/
/*                 <td> {{projet.datePublication | date('d-m-y')}}</td>*/
/*                 <td {% if (projet.etat)%} {% else %} class="danger"  {% endif %}> */
/*                     {% if (projet.etat)%}*/
/*                      {{projet.etat}}*/
/*                      */
/*                       {% else %}*/
/*                        Non traité*/
/*                      {% endif %}*/
/*                 </td>*/
/*                 */
/*                 <td> */
/*                     <form class="formDetail">*/
/*                          <input type="hidden" name="id" value="{{projet.id}}">*/
/*                         <!-- <input type="submit" {% if (projet.etat==null)%}disabled{% endif %} value="Plus"> -->*/
/*                          <button class="btn" type="submit" {% if (projet.etat==null)%}disabled{% endif %} title="Info">*/
/*                               <i class="fa fa-info-circle" aria-hidden="true"></i>*/
/*                          </button>*/
/*                      </form>*/
/*                      */
/*                 </td>*/
/*                 */
/*                 <td align="center"> */
/*                     <form class="formRess">*/
/*                          <input type="hidden" name="id" value="{{projet.id}}">*/
/*                         <!-- <input type="submit" {% if (projet.etat==null)%}disabled{% endif %} value="Ressource"> -->*/
/*                          <button class="btn" type="submit" {% if (projet.etat==null)%}disabled{% endif %} title="Add Ressource"> */
/*                              <i class="fa fa-user-plus" aria-hidden="true"></i>*/
/*                          </button>*/
/*                      </form>*/
/*                 </td>*/
/*                 */
/*                 */
/*                 */
/*             </tr>*/
/*         {% endfor %}*/
/*         </table> */
/*     </section> */
/* */
