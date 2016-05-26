<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3964aaaade0a2a7c2c509e51c94130b3cb18f4f0200cceb15a11f1bfa5a79a40 extends Twig_Template
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
        $__internal_41613bfb4554e68c90db45b8f85a90c3cdb0ec4c20757189379562394ef34e4d = $this->env->getExtension("native_profiler");
        $__internal_41613bfb4554e68c90db45b8f85a90c3cdb0ec4c20757189379562394ef34e4d->enter($__internal_41613bfb4554e68c90db45b8f85a90c3cdb0ec4c20757189379562394ef34e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_41613bfb4554e68c90db45b8f85a90c3cdb0ec4c20757189379562394ef34e4d->leave($__internal_41613bfb4554e68c90db45b8f85a90c3cdb0ec4c20757189379562394ef34e4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
