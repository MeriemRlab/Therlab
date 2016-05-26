<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6dce5dfeee06bf9ce2cb6d9c945baf28313898497bc9b35a323ed76a8ae24a7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44a924439556c3fcdf774942ebea1787bb3b7434ea08d8111c503006c63aa23c = $this->env->getExtension("native_profiler");
        $__internal_44a924439556c3fcdf774942ebea1787bb3b7434ea08d8111c503006c63aa23c->enter($__internal_44a924439556c3fcdf774942ebea1787bb3b7434ea08d8111c503006c63aa23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a924439556c3fcdf774942ebea1787bb3b7434ea08d8111c503006c63aa23c->leave($__internal_44a924439556c3fcdf774942ebea1787bb3b7434ea08d8111c503006c63aa23c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7629f3bf78b4e341a10cc9464100a9ea7aa309653fc0e1cac75b831f8ae17935 = $this->env->getExtension("native_profiler");
        $__internal_7629f3bf78b4e341a10cc9464100a9ea7aa309653fc0e1cac75b831f8ae17935->enter($__internal_7629f3bf78b4e341a10cc9464100a9ea7aa309653fc0e1cac75b831f8ae17935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7629f3bf78b4e341a10cc9464100a9ea7aa309653fc0e1cac75b831f8ae17935->leave($__internal_7629f3bf78b4e341a10cc9464100a9ea7aa309653fc0e1cac75b831f8ae17935_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_25a695cea9c52ef93e3fea797280a7df7e5d210bf81bf55b2e12e509168c9ef1 = $this->env->getExtension("native_profiler");
        $__internal_25a695cea9c52ef93e3fea797280a7df7e5d210bf81bf55b2e12e509168c9ef1->enter($__internal_25a695cea9c52ef93e3fea797280a7df7e5d210bf81bf55b2e12e509168c9ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_25a695cea9c52ef93e3fea797280a7df7e5d210bf81bf55b2e12e509168c9ef1->leave($__internal_25a695cea9c52ef93e3fea797280a7df7e5d210bf81bf55b2e12e509168c9ef1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
