<?php

/* :security:login.html.twig */
class __TwigTemplate_064de5159d9bc6daad81917f2e4d41c26f9910f841db5e366d58ea75c3146935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b74cdb3b891e0b1655d8aca4b86e112f46d888ffdfdc4610a27883c9bb403d78 = $this->env->getExtension("native_profiler");
        $__internal_b74cdb3b891e0b1655d8aca4b86e112f46d888ffdfdc4610a27883c9bb403d78->enter($__internal_b74cdb3b891e0b1655d8aca4b86e112f46d888ffdfdc4610a27883c9bb403d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b74cdb3b891e0b1655d8aca4b86e112f46d888ffdfdc4610a27883c9bb403d78->leave($__internal_b74cdb3b891e0b1655d8aca4b86e112f46d888ffdfdc4610a27883c9bb403d78_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_55e97ca659d80b63c50348aa6aaa7e570312b1351a4cd7cc2791af165495d25d = $this->env->getExtension("native_profiler");
        $__internal_55e97ca659d80b63c50348aa6aaa7e570312b1351a4cd7cc2791af165495d25d->enter($__internal_55e97ca659d80b63c50348aa6aaa7e570312b1351a4cd7cc2791af165495d25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  ";
        // line 7
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 10
        echo "
  ";
        // line 12
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

";
        
        $__internal_55e97ca659d80b63c50348aa6aaa7e570312b1351a4cd7cc2791af165495d25d->leave($__internal_55e97ca659d80b63c50348aa6aaa7e570312b1351a4cd7cc2791af165495d25d_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 12,  52 => 10,  46 => 8,  43 => 7,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/security/login.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/*   {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*   <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Login :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
