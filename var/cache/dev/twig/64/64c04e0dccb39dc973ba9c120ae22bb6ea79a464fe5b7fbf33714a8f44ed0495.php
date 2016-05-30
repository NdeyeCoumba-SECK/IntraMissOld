<?php

/* GMProjetBundle:Suivi:fraisParColab.html.twig */
class __TwigTemplate_46daaae4bb21627e6a443d85c67e3683d8800b643941e8fc032fdb4b33a228a0 extends Twig_Template
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
        $__internal_f2e4ead15588d96d25b669f090e32d9a11a5dbb1bd9b1ba875eb8ba2c34d28a5 = $this->env->getExtension("native_profiler");
        $__internal_f2e4ead15588d96d25b669f090e32d9a11a5dbb1bd9b1ba875eb8ba2c34d28a5->enter($__internal_f2e4ead15588d96d25b669f090e32d9a11a5dbb1bd9b1ba875eb8ba2c34d28a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Suivi:fraisParColab.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "collaborateur", array()), "user", array()), "html", null, true);
        echo " </td>
                    <td> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "collaborateur", array()), "nom", array()), "html", null, true);
        echo " </td>
                    <td> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "collaborateur", array()), "prenom", array()), "html", null, true);
        echo " </td>
                    <td> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "projet", array()), "reference", array()), "html", null, true);
        echo " </td>
                    <td> ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "dateDepart", array()), "d-m-y"), "html", null, true);
        echo "</td>
                    <td> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "ville", array()), "html", null, true);
        echo "</td>
                    <td> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "hotel", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["frais"]) ? $context["frais"] : $this->getContext($context, "frais")));
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

           <tr><th>Désignation</th><th>Montant</th><th>Unité</th><th>Date</th><th> Description </th><th></th><th></th> 
               <th>
                <form class=\"formModifFee\" method=\"post\" action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_export_tout");
        echo "\">
                     <input type=\"hidden\" name=\"idCollab\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "collaborateur", array()), "id", array()), "html", null, true);
        echo "\">
                     <input type=\"hidden\" name=\"idProjet\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "projet", array()), "id", array()), "html", null, true);
        echo "\">
                     <button class=\"btn tout\" type=\"submit\" title=\"Exporter tout Excel\" style=\"background-color: inherit\" ";
        // line 32
        if (((isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")) != "ok")) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["frais"]) ? $context["frais"] : $this->getContext($context, "frais")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 40
            echo "            <tr>
                <td> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "designation", array()), "html", null, true);
            echo "</td>
                <td align=\"center\">  ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "montant", array()), "html", null, true);
            echo " </td>
                <td align=\"center\"> ";
            // line 43
            if (($this->getAttribute($context["f"], "unite", array()) == "euro")) {
                echo "&euro; ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "unite", array()), "html", null, true);
                echo " ";
            }
            echo " </td>
                <td> ";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "date", array()), "d-m-y"), "html", null, true);
            echo "</td>
                <td> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "infoCom", array()), "html", null, true);
            echo "</td>
                <td>
                    <form class=\"formPiece\">
                         <input type=\"hidden\" name=\"piece\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "piece", array()), "html", null, true);
            echo "\">
                         <button class=\"btn\" type=\"submit\" title=\"Piece\" style=\"background-color: inherit\">
                              <i class=\"fa fa-paperclip\" aria-hidden=\"true\"></i>
                         </button>
                     </form>
                </td>
                <td align=\"center\" style=\"vertical-align: middle\">
                    ";
            // line 55
            if (($this->getAttribute($context["f"], "etat", array()) == "oui")) {
                echo " 
                        <i class=\"fa fa-check fa-1x\"  aria-hidden=\"true\" style=\"color:green\"></i> 
                    ";
            } else {
                // line 58
                echo "                     <form class=\"formValidFee\" method=\"post\" action=\"";
                echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_frais_valider");
                echo "\">
                         <input type=\"hidden\" name=\"id\" value=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\">
                         <button class=\"btn\" type=\"submit\" title=\"Valider\" style=\"background-color: inherit\">
                              <i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>
                         </button>
                     </form>
                    ";
            }
            // line 65
            echo "                </td>
                <td>
                     <form class=\"formModifFee\" method=\"post\" action=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_export");
            echo "\">
                         <input type=\"hidden\" name=\"id\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "\">
                         <button class=\"btn\" type=\"submit\" title=\"Exporter Excel\" style=\"background-color: inherit\" ";
            // line 69
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
        // line 77
        echo "        </table> 
    </section> ";
        
        $__internal_f2e4ead15588d96d25b669f090e32d9a11a5dbb1bd9b1ba875eb8ba2c34d28a5->leave($__internal_f2e4ead15588d96d25b669f090e32d9a11a5dbb1bd9b1ba875eb8ba2c34d28a5_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Suivi:fraisParColab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 77,  192 => 69,  188 => 68,  184 => 67,  180 => 65,  171 => 59,  166 => 58,  160 => 55,  150 => 48,  144 => 45,  140 => 44,  130 => 43,  126 => 42,  122 => 41,  119 => 40,  115 => 39,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  83 => 23,  77 => 22,  70 => 21,  65 => 20,  63 => 19,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
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
/*  {% set val='' %}*/
/*  {% for f in frais %}*/
/*      {%if (f.etat=='oui')%} {% set val='ok' %} {%endif%}*/
/*  {% endfor %}*/
/* <section>*/
/*         <table class="table table-striped table-condensed">*/
/*             <legend> Frais </legend>*/
/* */
/*            <tr><th>Désignation</th><th>Montant</th><th>Unité</th><th>Date</th><th> Description </th><th></th><th></th> */
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
/*                 <td align="center">  {{f.montant}} </td>*/
/*                 <td align="center"> {%if f.unite=='euro'%}&euro; {%else%} {{f.unite}} {%endif%} </td>*/
/*                 <td> {{f.date | date('d-m-y')}}</td>*/
/*                 <td> {{f.infoCom}}</td>*/
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
