<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6adc9b58abc3e8292fd96b4ec630544240bfa1e692cc4a1aaf812509e2afb59c extends Twig_Template
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
        $__internal_2cab49f65f7f5bee2b0c9e3750a906a055d26235c8ae9ce808ff301141c48a89 = $this->env->getExtension("native_profiler");
        $__internal_2cab49f65f7f5bee2b0c9e3750a906a055d26235c8ae9ce808ff301141c48a89->enter($__internal_2cab49f65f7f5bee2b0c9e3750a906a055d26235c8ae9ce808ff301141c48a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2cab49f65f7f5bee2b0c9e3750a906a055d26235c8ae9ce808ff301141c48a89->leave($__internal_2cab49f65f7f5bee2b0c9e3750a906a055d26235c8ae9ce808ff301141c48a89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
