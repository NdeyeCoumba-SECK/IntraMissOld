<?php

/* GMProjetBundle:Depense:liste.html.twig */
class __TwigTemplate_1ef471d5c91ecdea5888c7b463b8c39e34d268bfae9b43c2d4a20713062bbd4d extends Twig_Template
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
        $__internal_e12f3feeffd5698517dc1d8261c4f3daad3263bbbd10caa9d6c97f31a015b4d2 = $this->env->getExtension("native_profiler");
        $__internal_e12f3feeffd5698517dc1d8261c4f3daad3263bbbd10caa9d6c97f31a015b4d2->enter($__internal_e12f3feeffd5698517dc1d8261c4f3daad3263bbbd10caa9d6c97f31a015b4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Depense:liste.html.twig"));

        // line 1
        echo "    <section>
            <legend align=\"right\">
                <a href=\"#\" class=\"addFee\" title=\"Add Fee\"> <i class=\"fa fa-plus-square-o\" aria-hidden=\"true\"></i> </a>
           </legend>
        
       <div class=\"panel panel-default formFee\" style=\"height: 210px\">
          Foemulaire Ajout
       </div>
      
    </section> 

    <section>
        <table class=\"table table-striped table-condensed\">
            <thead>
               <th>Désignation</th><th>Montant</th><th>Unité</th><th>Date</th><th>info Complémentaire</th><th></th><th></th></tr>
            </thead>
            
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Frais"]) ? $context["Frais"] : $this->getContext($context, "Frais")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 19
            echo "            <tr>
                <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "designation", array()), "html", null, true);
            echo "</td>
                <td align=\"center\">  ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "montant", array()), "html", null, true);
            echo " </td>
                <td align=\"center\"> ";
            // line 22
            if (($this->getAttribute($context["f"], "unite", array()) == "euro")) {
                echo "&euro; ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "unite", array()), "html", null, true);
                echo " ";
            }
            echo " </td>
                <td> ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "date", array()), "d-m-y"), "html", null, true);
            echo "</td>
                <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "infoCom", array()), "html", null, true);
            echo "</td>
                <td>
                    <form class=\"formPiece\">
                         <input type=\"hidden\" name=\"piece\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "piece", array()), "html", null, true);
            echo "\">
                         <button class=\"btn\" type=\"submit\" title=\"Piece\" style=\"background-color: inherit\">
                              <i class=\"fa fa-paperclip\" aria-hidden=\"true\"></i>
                         </button>
                     </form>
                </td>
                 <td align=\"center\" style=\"vertical-align: middle\">
                    ";
            // line 34
            if (($this->getAttribute($context["f"], "etat", array()) == "oui")) {
                echo " 
                        <i class=\"fa fa-check fa-1x\"  aria-hidden=\"true\" style=\"color:green\"></i> 
                    ";
            } else {
                // line 37
                echo "                     <form class=\"formModifFee\" method=\"post\" action=\"";
                echo $this->env->getExtension('routing')->getPath("gm_projet_modification");
                echo "\">
                         <input type=\"hidden\" name=\"id\" value=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\">
                         <button class=\"btn\" type=\"submit\" title=\"Modifier\" style=\"background-color: inherit\">
                              <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                         </button>
                     </form>
                    ";
            }
            // line 44
            echo "                </td>
            
            </tr>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </table> 
    </section> 

";
        
        $__internal_e12f3feeffd5698517dc1d8261c4f3daad3263bbbd10caa9d6c97f31a015b4d2->leave($__internal_e12f3feeffd5698517dc1d8261c4f3daad3263bbbd10caa9d6c97f31a015b4d2_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Depense:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 49,  106 => 44,  97 => 38,  92 => 37,  86 => 34,  76 => 27,  70 => 24,  66 => 23,  56 => 22,  52 => 21,  48 => 20,  45 => 19,  41 => 18,  22 => 1,);
    }
}
/*     <section>*/
/*             <legend align="right">*/
/*                 <a href="#" class="addFee" title="Add Fee"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> </a>*/
/*            </legend>*/
/*         */
/*        <div class="panel panel-default formFee" style="height: 210px">*/
/*           Foemulaire Ajout*/
/*        </div>*/
/*       */
/*     </section> */
/* */
/*     <section>*/
/*         <table class="table table-striped table-condensed">*/
/*             <thead>*/
/*                <th>Désignation</th><th>Montant</th><th>Unité</th><th>Date</th><th>info Complémentaire</th><th></th><th></th></tr>*/
/*             </thead>*/
/*             */
/*         {% for f in Frais %}*/
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
/*                  <td align="center" style="vertical-align: middle">*/
/*                     {% if (f.etat=='oui')%} */
/*                         <i class="fa fa-check fa-1x"  aria-hidden="true" style="color:green"></i> */
/*                     {%else %}*/
/*                      <form class="formModifFee" method="post" action="{{ path('gm_projet_modification') }}">*/
/*                          <input type="hidden" name="id" value="{{f.id}}">*/
/*                          <button class="btn" type="submit" title="Modifier" style="background-color: inherit">*/
/*                               <i class="fa fa-pencil" aria-hidden="true"></i>*/
/*                          </button>*/
/*                      </form>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             */
/*             </tr>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </table> */
/*     </section> */
/* */
/* */
