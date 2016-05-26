<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a6587ab259dc16ed3c9839974df48162f5799341706d420266fb384b92204f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_612526c35a2f7a9968b5c5cbfd7864f2c06991ce03d12d5a716a3f703314d564 = $this->env->getExtension("native_profiler");
        $__internal_612526c35a2f7a9968b5c5cbfd7864f2c06991ce03d12d5a716a3f703314d564->enter($__internal_612526c35a2f7a9968b5c5cbfd7864f2c06991ce03d12d5a716a3f703314d564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_612526c35a2f7a9968b5c5cbfd7864f2c06991ce03d12d5a716a3f703314d564->leave($__internal_612526c35a2f7a9968b5c5cbfd7864f2c06991ce03d12d5a716a3f703314d564_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5963200f5a1e94d26b894b93f6777a04b1ba8fc7eadcfee9f3a231b6c3f3e92 = $this->env->getExtension("native_profiler");
        $__internal_e5963200f5a1e94d26b894b93f6777a04b1ba8fc7eadcfee9f3a231b6c3f3e92->enter($__internal_e5963200f5a1e94d26b894b93f6777a04b1ba8fc7eadcfee9f3a231b6c3f3e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<section class=\"pattern-3\">
        <!-- Login area -->
        <!-- .container -->
        <div class=\"container\">
<div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
<form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"mar-top-lg error wow fadeInUp\">
<div class=\"form-group control-group\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <div class=\"form-group control-group\">
        <label for=\"username\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input class=\"form-control input-lg\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>

    <div class=\"form-group control-group\">
        <label for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input class=\"form-control input-lg\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>

    <div class=\"checkbox control-group\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>
</div>
    <input type=\"submit\"
           class=\"btn btn-primary btn-full btn-lg\"
           id=\"_submit\"
           name=\"_submit\"
           value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
</div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
</div>
        <!-- /.container -->
        <!--/ Login area -->
      </section>
";
        
        $__internal_e5963200f5a1e94d26b894b93f6777a04b1ba8fc7eadcfee9f3a231b6c3f3e92->leave($__internal_e5963200f5a1e94d26b894b93f6777a04b1ba8fc7eadcfee9f3a231b6c3f3e92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  89 => 33,  80 => 27,  73 => 23,  69 => 22,  63 => 19,  58 => 17,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <section class="pattern-3">*/
/*         <!-- Login area -->*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/* <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/* <form action="{{ path("fos_user_security_check") }}" method="post" class="mar-top-lg error wow fadeInUp">*/
/* <div class="form-group control-group">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <div class="form-group control-group">*/
/*         <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*         <input class="form-control input-lg" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*     </div>*/
/* */
/*     <div class="form-group control-group">*/
/*         <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*         <input class="form-control input-lg" type="password" id="password" name="_password" required="required" />*/
/*     </div>*/
/* */
/*     <div class="checkbox control-group">*/
/*         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*     </div>*/
/* </div>*/
/*     <input type="submit"*/
/*            class="btn btn-primary btn-full btn-lg"*/
/*            id="_submit"*/
/*            name="_submit"*/
/*            value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/* </div>*/
/*         <!-- /.container -->*/
/*         <!--/ Login area -->*/
/*       </section>*/
/* {% endblock fos_user_content %}*/
/* */
