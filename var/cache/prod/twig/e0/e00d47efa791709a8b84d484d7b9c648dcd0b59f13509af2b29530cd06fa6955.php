<?php

/* UtilisateursBundle:Default:users.html.twig */
class __TwigTemplate_8bfb29badf87273d3dbef1a40d65942375dac7230358b7375cd4a3a2e737408e extends Twig_Template
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
        echo "<p>Users List!</p>
    <section>
       
        <table border=\"2\" width=\"40%\">
            <tr><th>DAS ID</th><th>Nom</th><th>Prénom</th><th>E-mail</th><th>Roles</th><th>Status</th><th>Action</th></tr>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 7
            echo "            <tr>
                <td> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                 <td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                  <td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array"), "html", null, true);
            echo "</td>
                 <td> 
                     ";
            // line 14
            if ($this->getAttribute($context["user"], "enabled", array())) {
                // line 15
                echo "                      Enabled
                      
                      ";
            } else {
                // line 18
                echo "                       Disabled
                     ";
            }
            // line 20
            echo "                 </td>
                 <td align=\"center\"> 
                     <form method=\"post\" action=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("utilisateurs_enable_user");
            echo "\">
                         <input type=\"hidden\" name=\"id\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
                         <input type=\"checkbox\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "enabled", array()), "html", null, true);
            echo "\" name=\"choix\" ";
            if ($this->getAttribute($context["user"], "enabled", array())) {
                echo "checked";
            }
            echo ">
                        <input type=\"submit\" class=\"enabledForm\">
                     </form>
                 </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </table> 
    </section> 
";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  77 => 24,  73 => 23,  69 => 22,  65 => 20,  61 => 18,  56 => 15,  54 => 14,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <p>Users List!</p>*/
/*     <section>*/
/*        */
/*         <table border="2" width="40%">*/
/*             <tr><th>DAS ID</th><th>Nom</th><th>Prénom</th><th>E-mail</th><th>Roles</th><th>Status</th><th>Action</th></tr>*/
/*         {% for user in users%}*/
/*             <tr>*/
/*                 <td> {{user.username}}</td>*/
/*                 <td> {{user.nom}}</td>*/
/*                 <td> {{user.prenom}}</td>*/
/*                  <td> {{user.email}}</td>*/
/*                   <td> {{user.roles[0]}}</td>*/
/*                  <td> */
/*                      {% if (user.enabled)%}*/
/*                       Enabled*/
/*                       */
/*                       {% else %}*/
/*                        Disabled*/
/*                      {% endif %}*/
/*                  </td>*/
/*                  <td align="center"> */
/*                      <form method="post" action="{{ path('utilisateurs_enable_user') }}">*/
/*                          <input type="hidden" name="id" value="{{user.id}}">*/
/*                          <input type="checkbox" value="{{user.enabled}}" name="choix" {% if (user.enabled)%}checked{% endif %}>*/
/*                         <input type="submit" class="enabledForm">*/
/*                      </form>*/
/*                  </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </table> */
/*     </section> */
/* */
