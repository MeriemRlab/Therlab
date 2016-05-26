<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fc063531f71711796304feb6e3950da7ff7678e801ee61f4289579626bfd1ddd extends Twig_Template
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
        $__internal_07f6216eeaf58f9a5694d9d95f70a4b576d469cd0dc8c6adbe04684cbedd3b3c = $this->env->getExtension("native_profiler");
        $__internal_07f6216eeaf58f9a5694d9d95f70a4b576d469cd0dc8c6adbe04684cbedd3b3c->enter($__internal_07f6216eeaf58f9a5694d9d95f70a4b576d469cd0dc8c6adbe04684cbedd3b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_07f6216eeaf58f9a5694d9d95f70a4b576d469cd0dc8c6adbe04684cbedd3b3c->leave($__internal_07f6216eeaf58f9a5694d9d95f70a4b576d469cd0dc8c6adbe04684cbedd3b3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
