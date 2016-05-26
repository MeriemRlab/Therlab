<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_001d6a89fb3e8654941b7cf4c3e3cae2148030c8adbac9a2fb3161e736f2093f extends Twig_Template
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
        $__internal_7e5ab76d17f7a41611b1a5d6a4d38187c30f410e97fd3b06b46826a55c4e9681 = $this->env->getExtension("native_profiler");
        $__internal_7e5ab76d17f7a41611b1a5d6a4d38187c30f410e97fd3b06b46826a55c4e9681->enter($__internal_7e5ab76d17f7a41611b1a5d6a4d38187c30f410e97fd3b06b46826a55c4e9681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7e5ab76d17f7a41611b1a5d6a4d38187c30f410e97fd3b06b46826a55c4e9681->leave($__internal_7e5ab76d17f7a41611b1a5d6a4d38187c30f410e97fd3b06b46826a55c4e9681_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
