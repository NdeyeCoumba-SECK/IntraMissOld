<?php

/* @GMProjet/Suivi/fraisParColab.html.twig */
class __TwigTemplate_190d1606be3751064f02cfedc33a12e018062e8ed7433123c5e7d8a71ebe65dd extends Twig_Template
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
        echo "<section >
         <button class=\"btn retour\" style=\"background-color: inherit\" title=\"Retour\"> 
           <i class=\"fa fa-reply\" aria-hidden=\"true\"></i>
         </button>
         <table  class=\"table table-striped table-condensed\">
              <tr> <th>DAS ID</th> <th>Nom</th>  <th>Prénom</th>  <th>Ref. Projet</th> <th>Date Depart</th> <th>Ville</th> <th>Hotel</th></tr>
                <tr>
                    <td> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "collaborateur", array()), "user", array()), "html", null, true);
        echo " </td>
                    <td> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "collaborateur", array()), "nom", array()), "html", null, true);
        echo " </td>
                    <td> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "collaborateur", array()), "prenom", array()), "html", null, true);
        echo " </td>
                    <td> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "projet", array()), "reference", array()), "html", null, true);
        echo " </td>
                    <td> ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "dateDepart", array()), "d-m-y"), "html", null, true);
        echo "</td>
                    <td> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "ville", array()), "html", null, true);
        echo "</td>
                    <td> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "hotel", array()), "html", null, true);
        echo "</td>
                </tr>
          </table>  
</section> 
 
  ";
        // line 19
        $context["val"] = "";
        // line 20
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frais"]) ? $context["frais"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 21
            echo "     ";
            if (($this->getAttribute($context["f"], "etat", array()) == "oui")) {
                echo " ";
                $context["val"] = "ok";
                echo " ";
            }
            // line 22
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "<section>
        <table class=\"table table-striped table-condensed\">
            <legend> Frais </legend>

           <tr><th>Désignation</th><th>Montant</th><th>Date</th><th> Description </th><th></th><th></th> 
               <th>
                <form class=\"formModifFee\" method=\"post\" action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_export_tout");
        echo "\">
                     <input type=\"hidden\" name=\"idCollab\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "collaborateur", array()), "id", array()), "html", null, true);
        echo "\">
                     <input type=\"hidden\" name=\"idProjet\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : null), "projet", array()), "id", array()), "html", null, true);
        echo "\">
                     <button class=\"btn tout\" type=\"submit\" title=\"Exporter tout Excel\" style=\"background-color: inherit\" ";
        // line 32
        if (((isset($context["val"]) ? $context["val"] : null) != "ok")) {
            echo " disabled=\"true\" ";
        }
        echo ">
                       <i class=\"fa fa-download\" aria-hidden=\"true\"></i>
                     </button>
                </form>
               </th>
           </tr>
            
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frais"]) ? $context["frais"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 40
            echo "            <tr>
                <td> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "designation", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "montant", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "date", array()), "d-m-y"), "html", null, true);
            echo "</td>
                <td> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "infoCom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "projet", array()), "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <form class=\"formPiece\">
                         <input type=\"hidden\" name=\"piece\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "piece", array()), "html", null, true);
            echo "\">
                         <button class=\"btn\" type=\"submit\" title=\"Piece\" style=\"background-color: inherit\">
                              <i class=\"fa fa-paperclip\" aria-hidden=\"true\"></i>
                         </button>
                     </form>
                </td>
                <td align=\"center\" style=\"vertical-align: middle\">
                    ";
            // line 54
            if (($this->getAttribute($context["f"], "etat", array()) == "oui")) {
                echo " 
                        <i class=\"fa fa-check fa-1x\"  aria-hidden=\"true\" style=\"color:green\"></i> 
                    ";
            } else {
                // line 57
                echo "                     <form class=\"formValidFee\" method=\"post\" action=\"";
                echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_frais_valider");
                echo "\">
                         <input type=\"hidden\" name=\"id\" value=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\">
                         <button class=\"btn\" type=\"submit\" title=\"Valider\" style=\"background-color: inherit\">
                              <i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>
                         </button>
                     </form>
                    ";
            }
            // line 64
            echo "                </td>
                <td>
                     <form class=\"formModifFee\" method=\"post\" action=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_export");
            echo "\">
                         <input type=\"hidden\" name=\"id\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "\">
                         <button class=\"btn\" type=\"submit\" title=\"Exporter Excel\" style=\"background-color: inherit\" ";
            // line 68
            if (($this->getAttribute($context["f"], "etat", array()) != "oui")) {
                echo " disabled=\"true\" ";
            }
            echo ">
                              <i class=\"fa fa-file-excel-o\" aria-hidden=\"true\"></i>
                         </button>
                     </form>
                </td>
            </tr>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </table> 
    </section> ";
    }

    public function getTemplateName()
    {
        return "@GMProjet/Suivi/fraisParColab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 76,  181 => 68,  177 => 67,  173 => 66,  169 => 64,  160 => 58,  155 => 57,  149 => 54,  139 => 47,  131 => 44,  127 => 43,  123 => 42,  119 => 41,  116 => 40,  112 => 39,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  80 => 23,  74 => 22,  67 => 21,  62 => 20,  60 => 19,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <section >*/
/*          <button class="btn retour" style="background-color: inherit" title="Retour"> */
/*            <i class="fa fa-reply" aria-hidden="true"></i>*/
/*          </button>*/
/*          <table  class="table table-striped table-condensed">*/
/*               <tr> <th>DAS ID</th> <th>Nom</th>  <th>Prénom</th>  <th>Ref. Projet</th> <th>Date Depart</th> <th>Ville</th> <th>Hotel</th></tr>*/
/*                 <tr>*/
/*                     <td> {{dossier.collaborateur.user}} </td>*/
/*                     <td> {{dossier.collaborateur.nom}} </td>*/
/*                     <td> {{dossier.collaborateur.prenom}} </td>*/
/*                     <td> {{dossier.projet.reference}} </td>*/
/*                     <td> {{dossier.dateDepart | date('d-m-y')}}</td>*/
/*                     <td> {{dossier.ville}}</td>*/
/*                     <td> {{dossier.hotel}}</td>*/
/*                 </tr>*/
/*           </table>  */
/* </section> */
/*  */
/*   {% set val='' %}*/
/*  {% for f in frais %}*/
/*      {%if (f.etat=='oui')%} {% set val='ok' %} {%endif%}*/
/*  {% endfor %}*/
/* <section>*/
/*         <table class="table table-striped table-condensed">*/
/*             <legend> Frais </legend>*/
/* */
/*            <tr><th>Désignation</th><th>Montant</th><th>Date</th><th> Description </th><th></th><th></th> */
/*                <th>*/
/*                 <form class="formModifFee" method="post" action="{{ path('gm_projet_suivi_export_tout') }}">*/
/*                      <input type="hidden" name="idCollab" value="{{dossier.collaborateur.id}}">*/
/*                      <input type="hidden" name="idProjet" value="{{dossier.projet.id}}">*/
/*                      <button class="btn tout" type="submit" title="Exporter tout Excel" style="background-color: inherit" {%if (val!='ok')%} disabled="true" {%endif%}>*/
/*                        <i class="fa fa-download" aria-hidden="true"></i>*/
/*                      </button>*/
/*                 </form>*/
/*                </th>*/
/*            </tr>*/
/*             */
/*         {% for f in frais %}*/
/*             <tr>*/
/*                 <td> {{f.designation}}</td>*/
/*                 <td> {{f.montant}}</td>*/
/*                 <td> {{f.date | date('d-m-y')}}</td>*/
/*                 <td> {{f.infoCom}} {{f.projet.id}}</td>*/
/*                 <td>*/
/*                     <form class="formPiece">*/
/*                          <input type="hidden" name="piece" value="{{f.piece}}">*/
/*                          <button class="btn" type="submit" title="Piece" style="background-color: inherit">*/
/*                               <i class="fa fa-paperclip" aria-hidden="true"></i>*/
/*                          </button>*/
/*                      </form>*/
/*                 </td>*/
/*                 <td align="center" style="vertical-align: middle">*/
/*                     {% if (f.etat=='oui')%} */
/*                         <i class="fa fa-check fa-1x"  aria-hidden="true" style="color:green"></i> */
/*                     {%else %}*/
/*                      <form class="formValidFee" method="post" action="{{ path('gm_projet_suivi_frais_valider') }}">*/
/*                          <input type="hidden" name="id" value="{{f.id}}">*/
/*                          <button class="btn" type="submit" title="Valider" style="background-color: inherit">*/
/*                               <i class="fa fa-check-square-o" aria-hidden="true"></i>*/
/*                          </button>*/
/*                      </form>*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td>*/
/*                      <form class="formModifFee" method="post" action="{{ path('gm_projet_suivi_export') }}">*/
/*                          <input type="hidden" name="id" value="{{f.id}}">*/
/*                          <button class="btn" type="submit" title="Exporter Excel" style="background-color: inherit" {%if (f.etat!='oui')%} disabled="true" {%endif%}>*/
/*                               <i class="fa fa-file-excel-o" aria-hidden="true"></i>*/
/*                          </button>*/
/*                      </form>*/
/*                 </td>*/
/*             </tr>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </table> */
/*     </section> */
