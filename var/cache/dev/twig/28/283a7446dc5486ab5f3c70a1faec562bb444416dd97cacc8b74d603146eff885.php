<?php

/* newspic.html.twig */
class __TwigTemplate_3d35fed2b423f7b376067f0b1a1ce95a3e9e1cc72203e3c9fc6f39422b8024cc extends Twig_Template
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
        $__internal_a7f5abdbcfd37fb92f32cdb1e3a90fcf1ebceffb007806eabfa5a03a48dc5b5a = $this->env->getExtension("native_profiler");
        $__internal_a7f5abdbcfd37fb92f32cdb1e3a90fcf1ebceffb007806eabfa5a03a48dc5b5a->enter($__internal_a7f5abdbcfd37fb92f32cdb1e3a90fcf1ebceffb007806eabfa5a03a48dc5b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newspic.html.twig"));

        // line 2
        echo "

\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "link", array()), "html", null, true);
        echo "\" target=\"blank\" >
\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("" . $this->getAttribute($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "image", array()), "url", array()))), "html", null, true);
        echo "\" alt=\"\" class=\"img img-responsive\" />
\t</a>

";
        
        $__internal_a7f5abdbcfd37fb92f32cdb1e3a90fcf1ebceffb007806eabfa5a03a48dc5b5a->leave($__internal_a7f5abdbcfd37fb92f32cdb1e3a90fcf1ebceffb007806eabfa5a03a48dc5b5a_prof);

    }

    public function getTemplateName()
    {
        return "newspic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  26 => 4,  22 => 2,);
    }
}
/* {# newspic.html.twig #}*/
/* */
/* */
/* 	<a href="{{ new.link }}" target="blank" >*/
/* 		<img src="{{ asset("" ~ new.image.url  ) }}" alt="" class="img img-responsive" />*/
/* 	</a>*/
/* */
/* */
