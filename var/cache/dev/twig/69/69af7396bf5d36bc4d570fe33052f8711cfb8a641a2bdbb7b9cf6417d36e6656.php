<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_005fe87a6514fde159d23286de6bbb957af8852cd58f21f2c645ee11c8540bc9 extends Twig_Template
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
        $__internal_ce51715dd2bf57295215ea40492dec349b595142f841fa2d0386e5872beb37e6 = $this->env->getExtension("native_profiler");
        $__internal_ce51715dd2bf57295215ea40492dec349b595142f841fa2d0386e5872beb37e6->enter($__internal_ce51715dd2bf57295215ea40492dec349b595142f841fa2d0386e5872beb37e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ce51715dd2bf57295215ea40492dec349b595142f841fa2d0386e5872beb37e6->leave($__internal_ce51715dd2bf57295215ea40492dec349b595142f841fa2d0386e5872beb37e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
