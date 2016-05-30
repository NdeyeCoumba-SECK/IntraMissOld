<?php

/* GMProjetBundle:Dsms:perdiem.html.twig */
class __TwigTemplate_325da193295b6a3cf0dd81a26881d1e173965e9192b336f94e1dde853e355ab0 extends Twig_Template
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
        $__internal_d8c58451dbc41f3c753d3d5faf3980f9f04f1ec432e320ea44a0f472b8f20180 = $this->env->getExtension("native_profiler");
        $__internal_d8c58451dbc41f3c753d3d5faf3980f9f04f1ec432e320ea44a0f472b8f20180->enter($__internal_d8c58451dbc41f3c753d3d5faf3980f9f04f1ec432e320ea44a0f472b8f20180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Dsms:perdiem.html.twig"));

        // line 1
        echo " <hr style=\"margin-top: 0px; margin-bottom: 11px\"/>
<section class=\"row\">
    <div class=\"col-sm-8\">
        <address> Etat des Perdiemes à la date du 
            <span style=\"color: #006666; font-size: medium\">";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y"), "html", null, true);
        echo " </span> 
        </address>
    </div>
    <div class=\"col-sm-4\">
        <form class=\"datePerdiem\" >
            <input type=\"date\" name=\"datePerdiem\" required=\"true\"> 
            <input type=\"submit\" value=\"ok\">
        </form>
    </div>
</section>
        <hr style=\"margin-top: 0px\"/>
 
<table class=\"table table-striped table-bordered table-hover table-condensed\">
              <tr> 
                  <th>DAS ID</th>  <th>Ref. Projet</th> <th>Ville</th> <th>Date Départ</th> <th>Unité</th>
                  <th>Jrs / Mois Courant</th> <th>Mnt / Mois Courant</th>
                  <th>Jours</th> <th>Montant</th>
                  <th>
                    <form class=\"formModifFee\" method=\"post\" action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("gm_projet_dsms_perdiem_export_tout");
        echo "\">
                         <input type=\"hidden\" name=\"date\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d-m-Y"), "html", null, true);
        echo "\">
                         <button class=\"btn tout\" type=\"submit\" title=\"Exporter tout Excel\" style=\"background-color: inherit\">
                           <i class=\"fa fa-download\" aria-hidden=\"true\"></i>
                         </button>
                    </form>
                 </th>
              </tr>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dossiers"]) ? $context["dossiers"] : $this->getContext($context, "dossiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            // line 32
            echo "                <tr>
                    <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "user", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "projet", array()), "reference", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["dossier"], "ville", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dossier"], "dateDepart", array()), "d-m-y"), "html", null, true);
            echo "</td>
                    <td> 40 &euro;</td>
                    <td align=\"center\"> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrjM"]) ? $context["nbrjM"] : $this->getContext($context, "nbrjM")), $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "id", array()), array(), "array"), "html", null, true);
            echo " </td>
                    <td align=\"center\"> ";
            // line 39
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["nbrjM"]) ? $context["nbrjM"] : $this->getContext($context, "nbrjM")), $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "id", array()), array(), "array") * 40), "html", null, true);
            echo " &euro;</td>
                    <td align=\"center\"> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrjT"]) ? $context["nbrjT"] : $this->getContext($context, "nbrjT")), $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "id", array()), array(), "array"), "html", null, true);
            echo "</td>
                    <td align=\"center\"> ";
            // line 41
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["nbrjT"]) ? $context["nbrjT"] : $this->getContext($context, "nbrjT")), $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "id", array()), array(), "array") * 40), "html", null, true);
            echo " &euro;</td>
                    <td>
                     <form class=\"\" method=\"post\" action=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("gm_projet_dsms_perdiem_export");
            echo "\">
                         <input type=\"hidden\" name=\"id\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["dossier"], "id", array()), "html", null, true);
            echo "\">
                         <input type=\"hidden\" name=\"nbrjT\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrjT"]) ? $context["nbrjT"] : $this->getContext($context, "nbrjT")), $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "id", array()), array(), "array"), "html", null, true);
            echo "\">
                         <input type=\"hidden\" name=\"nbrjM\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrjM"]) ? $context["nbrjM"] : $this->getContext($context, "nbrjM")), $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "id", array()), array(), "array"), "html", null, true);
            echo "\">
                         <input type=\"hidden\" name=\"date\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y"), "html", null, true);
            echo "\">
                         <button class=\"btn\" type=\"submit\" title=\"Exporter Excel\" style=\"background-color: inherit\">
                              <i class=\"fa fa-file-excel-o\" aria-hidden=\"true\"></i>
                         </button>
                     </form>
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  </table>
";
        
        $__internal_d8c58451dbc41f3c753d3d5faf3980f9f04f1ec432e320ea44a0f472b8f20180->leave($__internal_d8c58451dbc41f3c753d3d5faf3980f9f04f1ec432e320ea44a0f472b8f20180_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Dsms:perdiem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 55,  120 => 47,  116 => 46,  112 => 45,  108 => 44,  104 => 43,  99 => 41,  95 => 40,  91 => 39,  87 => 38,  82 => 36,  78 => 35,  74 => 34,  70 => 33,  67 => 32,  63 => 31,  53 => 24,  49 => 23,  28 => 5,  22 => 1,);
    }
}
/*  <hr style="margin-top: 0px; margin-bottom: 11px"/>*/
/* <section class="row">*/
/*     <div class="col-sm-8">*/
/*         <address> Etat des Perdiemes à la date du */
/*             <span style="color: #006666; font-size: medium">{{ date|date("d/m/Y") }} </span> */
/*         </address>*/
/*     </div>*/
/*     <div class="col-sm-4">*/
/*         <form class="datePerdiem" >*/
/*             <input type="date" name="datePerdiem" required="true"> */
/*             <input type="submit" value="ok">*/
/*         </form>*/
/*     </div>*/
/* </section>*/
/*         <hr style="margin-top: 0px"/>*/
/*  */
/* <table class="table table-striped table-bordered table-hover table-condensed">*/
/*               <tr> */
/*                   <th>DAS ID</th>  <th>Ref. Projet</th> <th>Ville</th> <th>Date Départ</th> <th>Unité</th>*/
/*                   <th>Jrs / Mois Courant</th> <th>Mnt / Mois Courant</th>*/
/*                   <th>Jours</th> <th>Montant</th>*/
/*                   <th>*/
/*                     <form class="formModifFee" method="post" action="{{ path('gm_projet_dsms_perdiem_export_tout') }}">*/
/*                          <input type="hidden" name="date" value="{{ date|date("d-m-Y") }}">*/
/*                          <button class="btn tout" type="submit" title="Exporter tout Excel" style="background-color: inherit">*/
/*                            <i class="fa fa-download" aria-hidden="true"></i>*/
/*                          </button>*/
/*                     </form>*/
/*                  </th>*/
/*               </tr>*/
/*             {% for dossier in dossiers%}*/
/*                 <tr>*/
/*                     <td> {{dossier.collaborateur.user}}</td>*/
/*                     <td> {{dossier.projet.reference}}</td>*/
/*                     <td> {{dossier.ville}}</td>*/
/*                     <td> {{dossier.dateDepart| date('d-m-y')}}</td>*/
/*                     <td> 40 &euro;</td>*/
/*                     <td align="center"> {{nbrjM[dossier.collaborateur.id]}} </td>*/
/*                     <td align="center"> {{nbrjM[dossier.collaborateur.id]*40}} &euro;</td>*/
/*                     <td align="center"> {{nbrjT[dossier.collaborateur.id]}}</td>*/
/*                     <td align="center"> {{nbrjT[dossier.collaborateur.id]*40}} &euro;</td>*/
/*                     <td>*/
/*                      <form class="" method="post" action="{{ path('gm_projet_dsms_perdiem_export') }}">*/
/*                          <input type="hidden" name="id" value="{{dossier.id}}">*/
/*                          <input type="hidden" name="nbrjT" value="{{nbrjT[dossier.collaborateur.id]}}">*/
/*                          <input type="hidden" name="nbrjM" value="{{nbrjM[dossier.collaborateur.id]}}">*/
/*                          <input type="hidden" name="date" value="{{ date|date("d/m/Y") }}">*/
/*                          <button class="btn" type="submit" title="Exporter Excel" style="background-color: inherit">*/
/*                               <i class="fa fa-file-excel-o" aria-hidden="true"></i>*/
/*                          </button>*/
/*                      </form>*/
/*                 </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*   </table>*/
/* */
