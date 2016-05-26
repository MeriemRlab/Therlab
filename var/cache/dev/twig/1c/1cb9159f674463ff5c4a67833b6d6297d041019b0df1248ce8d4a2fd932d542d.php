<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1b75b1d1af9f87b88a7a0487e5362339f77d71b0a523a4eb4560052d484511ae extends Twig_Template
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
        $__internal_6da62640a2fc8a6534ab75ab1e04d657f6ec54c59b043d9d03b0337d9eaf2bfe = $this->env->getExtension("native_profiler");
        $__internal_6da62640a2fc8a6534ab75ab1e04d657f6ec54c59b043d9d03b0337d9eaf2bfe->enter($__internal_6da62640a2fc8a6534ab75ab1e04d657f6ec54c59b043d9d03b0337d9eaf2bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6da62640a2fc8a6534ab75ab1e04d657f6ec54c59b043d9d03b0337d9eaf2bfe->leave($__internal_6da62640a2fc8a6534ab75ab1e04d657f6ec54c59b043d9d03b0337d9eaf2bfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
