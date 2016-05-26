<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_14c337b11bbb37336978aecf2d5f9ad06606eed8dd658e486a4cf5f1749110ef extends Twig_Template
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
        $__internal_f32841bcf463921e6569e8fa214c5a4e51e32ac2c2ae94c6fbc2ffa40c5c0623 = $this->env->getExtension("native_profiler");
        $__internal_f32841bcf463921e6569e8fa214c5a4e51e32ac2c2ae94c6fbc2ffa40c5c0623->enter($__internal_f32841bcf463921e6569e8fa214c5a4e51e32ac2c2ae94c6fbc2ffa40c5c0623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f32841bcf463921e6569e8fa214c5a4e51e32ac2c2ae94c6fbc2ffa40c5c0623->leave($__internal_f32841bcf463921e6569e8fa214c5a4e51e32ac2c2ae94c6fbc2ffa40c5c0623_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
