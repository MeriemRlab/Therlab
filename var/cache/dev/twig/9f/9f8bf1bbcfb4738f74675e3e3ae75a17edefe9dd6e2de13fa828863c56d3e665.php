<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_49d43d65daf596099c7a020e332c1f009e62e1c197f7b60ed9ad0c14a22edeca extends Twig_Template
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
        $__internal_d6cf20100f30e974dcb5e4ccabfcac40a1c6d2524d44c3a014367895af3ed909 = $this->env->getExtension("native_profiler");
        $__internal_d6cf20100f30e974dcb5e4ccabfcac40a1c6d2524d44c3a014367895af3ed909->enter($__internal_d6cf20100f30e974dcb5e4ccabfcac40a1c6d2524d44c3a014367895af3ed909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d6cf20100f30e974dcb5e4ccabfcac40a1c6d2524d44c3a014367895af3ed909->leave($__internal_d6cf20100f30e974dcb5e4ccabfcac40a1c6d2524d44c3a014367895af3ed909_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
