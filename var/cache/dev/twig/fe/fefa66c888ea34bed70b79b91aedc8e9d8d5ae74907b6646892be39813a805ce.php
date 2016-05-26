<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d62f0252aec35885724e28ff6899683f893b0653265efb7183fe06aa21d68ad8 extends Twig_Template
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
        $__internal_66663f8d953335d4ad76b1d53fd93e3daae4681280ecff81e4fd78f2109a3279 = $this->env->getExtension("native_profiler");
        $__internal_66663f8d953335d4ad76b1d53fd93e3daae4681280ecff81e4fd78f2109a3279->enter($__internal_66663f8d953335d4ad76b1d53fd93e3daae4681280ecff81e4fd78f2109a3279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_66663f8d953335d4ad76b1d53fd93e3daae4681280ecff81e4fd78f2109a3279->leave($__internal_66663f8d953335d4ad76b1d53fd93e3daae4681280ecff81e4fd78f2109a3279_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
