<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_07d027c8e447ddba911975bda455fcfcc8a1c2029ded44bebd3b7e87216c0155 extends Twig_Template
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
        $__internal_efb63d8b1098707fb8a581d22a6cb2659e036f00a55a2ae19ea276bc54943b1b = $this->env->getExtension("native_profiler");
        $__internal_efb63d8b1098707fb8a581d22a6cb2659e036f00a55a2ae19ea276bc54943b1b->enter($__internal_efb63d8b1098707fb8a581d22a6cb2659e036f00a55a2ae19ea276bc54943b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_efb63d8b1098707fb8a581d22a6cb2659e036f00a55a2ae19ea276bc54943b1b->leave($__internal_efb63d8b1098707fb8a581d22a6cb2659e036f00a55a2ae19ea276bc54943b1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
