<?php

/* CoreSphereConsoleBundle:Console:result.json.twig */
class __TwigTemplate_cc2defa87c40a9104ef6656b6f6dbd10b9e05fca35de0589193f87ee3c723757 extends Twig_Template
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
        $__internal_d3f6f9ded6e7b8cde3c63bdd6d3f98bea13d5a29ae451f5d0caaa15458688a68 = $this->env->getExtension("native_profiler");
        $__internal_d3f6f9ded6e7b8cde3c63bdd6d3f98bea13d5a29ae451f5d0caaa15458688a68->enter($__internal_d3f6f9ded6e7b8cde3c63bdd6d3f98bea13d5a29ae451f5d0caaa15458688a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:result.json.twig"));

        // line 2
        echo "{\"results\" : [
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commands"]) ? $context["commands"] : $this->getContext($context, "commands")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
            // line 4
            echo "{
    \"command\" : ";
            // line 5
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute($context["command"], "input", array())));
            echo ",
    \"output\" : ";
            // line 6
            echo twig_jsonencode_filter($this->getAttribute($context["command"], "output", array()));
            echo ",
    \"environment\": ";
            // line 7
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute($context["command"], "environment", array())));
            echo ",
    \"error_code\": ";
            // line 8
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute($context["command"], "error_code", array())));
            echo "
}";
            // line 9
            echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "] }
";
        
        $__internal_d3f6f9ded6e7b8cde3c63bdd6d3f98bea13d5a29ae451f5d0caaa15458688a68->leave($__internal_d3f6f9ded6e7b8cde3c63bdd6d3f98bea13d5a29ae451f5d0caaa15458688a68_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:result.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  42 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% autoescape false %}*/
/* {"results" : [*/
/* {% for command in commands %}*/
/* {*/
/*     "command" : {{ command.input|escape|json_encode }},*/
/*     "output" : {{ command.output|json_encode }},*/
/*     "environment": {{ command.environment|escape|json_encode }},*/
/*     "error_code": {{ command.error_code|escape|json_encode }}*/
/* }{{ loop.last ? '' : ',' }}*/
/* {% endfor %}*/
/* ] }*/
/* {% endautoescape %}*/
/* */
