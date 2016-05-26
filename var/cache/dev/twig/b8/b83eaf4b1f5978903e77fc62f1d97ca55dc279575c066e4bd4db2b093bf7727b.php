<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_66f32d5671a111442d7876f5d970dd3ab3e0e00322b636235cc9f6cf7b6ee4bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96c6da31aacf2e2649c1f185797e1ecb0a8e7f02f6ff0ea6691cc29ee4c03960 = $this->env->getExtension("native_profiler");
        $__internal_96c6da31aacf2e2649c1f185797e1ecb0a8e7f02f6ff0ea6691cc29ee4c03960->enter($__internal_96c6da31aacf2e2649c1f185797e1ecb0a8e7f02f6ff0ea6691cc29ee4c03960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96c6da31aacf2e2649c1f185797e1ecb0a8e7f02f6ff0ea6691cc29ee4c03960->leave($__internal_96c6da31aacf2e2649c1f185797e1ecb0a8e7f02f6ff0ea6691cc29ee4c03960_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b21727a06a00f46fd3bdf2a90bf913abb1d85ba87400edef06f4164760cbb72d = $this->env->getExtension("native_profiler");
        $__internal_b21727a06a00f46fd3bdf2a90bf913abb1d85ba87400edef06f4164760cbb72d->enter($__internal_b21727a06a00f46fd3bdf2a90bf913abb1d85ba87400edef06f4164760cbb72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_b21727a06a00f46fd3bdf2a90bf913abb1d85ba87400edef06f4164760cbb72d->leave($__internal_b21727a06a00f46fd3bdf2a90bf913abb1d85ba87400edef06f4164760cbb72d_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_cef97c7acd50c5f974df2bc0c7d35823555971c5c66fa612bbd5ef30453f30ff = $this->env->getExtension("native_profiler");
        $__internal_cef97c7acd50c5f974df2bc0c7d35823555971c5c66fa612bbd5ef30453f30ff->enter($__internal_cef97c7acd50c5f974df2bc0c7d35823555971c5c66fa612bbd5ef30453f30ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "ERROR";
        
        $__internal_cef97c7acd50c5f974df2bc0c7d35823555971c5c66fa612bbd5ef30453f30ff->leave($__internal_cef97c7acd50c5f974df2bc0c7d35823555971c5c66fa612bbd5ef30453f30ff_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ddd98f5ec5fcab72f298ebeff4715bfcff80076b295dd305dbbf6af9c7c42f08 = $this->env->getExtension("native_profiler");
        $__internal_ddd98f5ec5fcab72f298ebeff4715bfcff80076b295dd305dbbf6af9c7c42f08->enter($__internal_ddd98f5ec5fcab72f298ebeff4715bfcff80076b295dd305dbbf6af9c7c42f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1>Error</h1>

            <div class=\"error-message\">
                <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "safeMessage", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </section>
";
        
        $__internal_ddd98f5ec5fcab72f298ebeff4715bfcff80076b295dd305dbbf6af9c7c42f08->leave($__internal_ddd98f5ec5fcab72f298ebeff4715bfcff80076b295dd305dbbf6af9c7c42f08_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  68 => 12,  62 => 11,  50 => 9,  38 => 8,  31 => 3,  29 => 1,  20 => 3,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% extends [*/
/*     _entity_config.templates.layout|default(''),*/
/*     easyadmin_config('design.templates.layout'),*/
/*     '@EasyAdmin/default/layout.html.twig'*/
/* ] %}*/
/* */
/* {% block body_class 'error' %}*/
/* {% block page_title 'ERROR' %}*/
/* */
/* {% block content %}*/
/*     <section id="main" class="content">*/
/*         <div class="error-description">*/
/*             <h1>Error</h1>*/
/* */
/*             <div class="error-message">*/
/*                 <p>{{ exception.safeMessage }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
