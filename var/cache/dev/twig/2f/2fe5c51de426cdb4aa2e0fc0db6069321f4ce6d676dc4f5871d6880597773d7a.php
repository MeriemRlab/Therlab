<?php

/* newspic.html.twig~ */
class __TwigTemplate_f413612782c374799d2443f458c2f0e8ce08f664f5d6fea1c387319654438060 extends Twig_Template
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
        $__internal_d02077efac8cc41c20b26122faea9960dc4df5315004c2d225cee8c110271fe6 = $this->env->getExtension("native_profiler");
        $__internal_d02077efac8cc41c20b26122faea9960dc4df5315004c2d225cee8c110271fe6->enter($__internal_d02077efac8cc41c20b26122faea9960dc4df5315004c2d225cee8c110271fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newspic.html.twig~"));

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
        
        $__internal_d02077efac8cc41c20b26122faea9960dc4df5315004c2d225cee8c110271fe6->leave($__internal_d02077efac8cc41c20b26122faea9960dc4df5315004c2d225cee8c110271fe6_prof);

    }

    public function getTemplateName()
    {
        return "newspic.html.twig~";
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
