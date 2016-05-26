<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4cd79549c8b67bcc5844bf50ef99930156a01af28c27e70447de3327641d2525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_690e1c7eb1afaf01810dde38b955eea27cf72d205a6446c421f0832bb292aa5a = $this->env->getExtension("native_profiler");
        $__internal_690e1c7eb1afaf01810dde38b955eea27cf72d205a6446c421f0832bb292aa5a->enter($__internal_690e1c7eb1afaf01810dde38b955eea27cf72d205a6446c421f0832bb292aa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_690e1c7eb1afaf01810dde38b955eea27cf72d205a6446c421f0832bb292aa5a->leave($__internal_690e1c7eb1afaf01810dde38b955eea27cf72d205a6446c421f0832bb292aa5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f235f6e908e4ec02c2fa404c61f20bb40882b5f4b293e6ce4146679d0087fecb = $this->env->getExtension("native_profiler");
        $__internal_f235f6e908e4ec02c2fa404c61f20bb40882b5f4b293e6ce4146679d0087fecb->enter($__internal_f235f6e908e4ec02c2fa404c61f20bb40882b5f4b293e6ce4146679d0087fecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f235f6e908e4ec02c2fa404c61f20bb40882b5f4b293e6ce4146679d0087fecb->leave($__internal_f235f6e908e4ec02c2fa404c61f20bb40882b5f4b293e6ce4146679d0087fecb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c74c9c3bd8268160b42ea4f0e18919d8edce8ff501ddc1332a63d569fa9a9046 = $this->env->getExtension("native_profiler");
        $__internal_c74c9c3bd8268160b42ea4f0e18919d8edce8ff501ddc1332a63d569fa9a9046->enter($__internal_c74c9c3bd8268160b42ea4f0e18919d8edce8ff501ddc1332a63d569fa9a9046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c74c9c3bd8268160b42ea4f0e18919d8edce8ff501ddc1332a63d569fa9a9046->leave($__internal_c74c9c3bd8268160b42ea4f0e18919d8edce8ff501ddc1332a63d569fa9a9046_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b7faeeec0cbc62791f8eebcf0b5fd5d20d8a3222f7b0b230f97079ce9dc61fc = $this->env->getExtension("native_profiler");
        $__internal_5b7faeeec0cbc62791f8eebcf0b5fd5d20d8a3222f7b0b230f97079ce9dc61fc->enter($__internal_5b7faeeec0cbc62791f8eebcf0b5fd5d20d8a3222f7b0b230f97079ce9dc61fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5b7faeeec0cbc62791f8eebcf0b5fd5d20d8a3222f7b0b230f97079ce9dc61fc->leave($__internal_5b7faeeec0cbc62791f8eebcf0b5fd5d20d8a3222f7b0b230f97079ce9dc61fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
