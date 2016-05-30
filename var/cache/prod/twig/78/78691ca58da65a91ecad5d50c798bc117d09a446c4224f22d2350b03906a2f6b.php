<?php

/* @GMProjet/Depense/liste.html.twig */
class __TwigTemplate_8475967b84df898ca8e436ffef38421f9e2b79559c6eccb975080d89547dd81b extends Twig_Template
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
               <th>Désignation</th><th>Montant</th><th>Date</th><th>info Complémentaire</th><th></th><th></th></tr>
            </thead>
            
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Frais"]) ? $context["Frais"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 19
            echo "            <tr>
                <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "designation", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "montant", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "date", array()), "d-m-y"), "html", null, true);
            echo "</td>
                <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "infoCom", array()), "html", null, true);
            echo "</td>
                <td>
                    <form class=\"formPiece\">
                         <input type=\"hidden\" name=\"piece\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "piece", array()), "html", null, true);
            echo "\">
                         <button class=\"btn\" type=\"submit\" title=\"Piece\" style=\"background-color: inherit\">
                              <i class=\"fa fa-paperclip\" aria-hidden=\"true\"></i>
                         </button>
                     </form>
                </td>
                 <td>
                     <form class=\"formModifFee\" method=\"post\" action=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("gm_projet_modification");
            echo "\">
                         <input type=\"hidden\" name=\"id\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "\">
                         <button class=\"btn\" type=\"submit\" title=\"Modifier\" style=\"background-color: inherit\">
                              <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
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
        // line 44
        echo "        </table> 
    </section> 

";
    }

    public function getTemplateName()
    {
        return "@GMProjet/Depense/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 44,  77 => 34,  73 => 33,  63 => 26,  57 => 23,  53 => 22,  49 => 21,  45 => 20,  42 => 19,  38 => 18,  19 => 1,);
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
/*                <th>Désignation</th><th>Montant</th><th>Date</th><th>info Complémentaire</th><th></th><th></th></tr>*/
/*             </thead>*/
/*             */
/*         {% for f in Frais %}*/
/*             <tr>*/
/*                 <td> {{f.designation}}</td>*/
/*                 <td> {{f.montant}}</td>*/
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
/*                  <td>*/
/*                      <form class="formModifFee" method="post" action="{{ path('gm_projet_modification') }}">*/
/*                          <input type="hidden" name="id" value="{{f.id}}">*/
/*                          <button class="btn" type="submit" title="Modifier" style="background-color: inherit">*/
/*                               <i class="fa fa-pencil" aria-hidden="true"></i>*/
/*                          </button>*/
/*                      </form>*/
/*                 </td>*/
/*             */
/*             </tr>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </table> */
/*     </section> */
/* */
/* */
