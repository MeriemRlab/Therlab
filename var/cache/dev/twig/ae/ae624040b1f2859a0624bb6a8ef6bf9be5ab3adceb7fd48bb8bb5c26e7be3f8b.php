<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_03628568bcc3667abbba183abe134bd84c9754f6106695025d8764608ad34cab extends Twig_Template
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
        $__internal_ea5bc076a8150e1c578a6fe98699a17da73a59e04783228b206cedf0b1b8e8b2 = $this->env->getExtension("native_profiler");
        $__internal_ea5bc076a8150e1c578a6fe98699a17da73a59e04783228b206cedf0b1b8e8b2->enter($__internal_ea5bc076a8150e1c578a6fe98699a17da73a59e04783228b206cedf0b1b8e8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ea5bc076a8150e1c578a6fe98699a17da73a59e04783228b206cedf0b1b8e8b2->leave($__internal_ea5bc076a8150e1c578a6fe98699a17da73a59e04783228b206cedf0b1b8e8b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
