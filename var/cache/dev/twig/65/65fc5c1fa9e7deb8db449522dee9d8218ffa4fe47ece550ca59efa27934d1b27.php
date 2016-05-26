<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a4ada3f56c7f849228cdebd4d530294390040ef763d24d20e297b45b747b896d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b280cfd88219b4a524ee8691578e679a98e807f63969566126aa504bc03942c6 = $this->env->getExtension("native_profiler");
        $__internal_b280cfd88219b4a524ee8691578e679a98e807f63969566126aa504bc03942c6->enter($__internal_b280cfd88219b4a524ee8691578e679a98e807f63969566126aa504bc03942c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b280cfd88219b4a524ee8691578e679a98e807f63969566126aa504bc03942c6->leave($__internal_b280cfd88219b4a524ee8691578e679a98e807f63969566126aa504bc03942c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8501f63e895ea56a04046b9487ce0be12d57f7fa52d5d83f06376df05ed527c1 = $this->env->getExtension("native_profiler");
        $__internal_8501f63e895ea56a04046b9487ce0be12d57f7fa52d5d83f06376df05ed527c1->enter($__internal_8501f63e895ea56a04046b9487ce0be12d57f7fa52d5d83f06376df05ed527c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8501f63e895ea56a04046b9487ce0be12d57f7fa52d5d83f06376df05ed527c1->leave($__internal_8501f63e895ea56a04046b9487ce0be12d57f7fa52d5d83f06376df05ed527c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cfa3cb387faab483ad9ba0ca877472d5e133c2c5564667bf2ebfb5d408394626 = $this->env->getExtension("native_profiler");
        $__internal_cfa3cb387faab483ad9ba0ca877472d5e133c2c5564667bf2ebfb5d408394626->enter($__internal_cfa3cb387faab483ad9ba0ca877472d5e133c2c5564667bf2ebfb5d408394626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cfa3cb387faab483ad9ba0ca877472d5e133c2c5564667bf2ebfb5d408394626->leave($__internal_cfa3cb387faab483ad9ba0ca877472d5e133c2c5564667bf2ebfb5d408394626_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_265a9619f43eebf97441354910fcfb393e5ed543bd2f0cafb8653ca887934076 = $this->env->getExtension("native_profiler");
        $__internal_265a9619f43eebf97441354910fcfb393e5ed543bd2f0cafb8653ca887934076->enter($__internal_265a9619f43eebf97441354910fcfb393e5ed543bd2f0cafb8653ca887934076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_265a9619f43eebf97441354910fcfb393e5ed543bd2f0cafb8653ca887934076->leave($__internal_265a9619f43eebf97441354910fcfb393e5ed543bd2f0cafb8653ca887934076_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
