<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c4d35beff4818c525252308b7fb397ec2d8b772d1dd7f4282e75bbfa1a4b40f1 extends Twig_Template
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
        $__internal_b1b7ecd6a55fa29b565f10134b4b2e3ff33e1f6f79f09dcf99f063b11d30e023 = $this->env->getExtension("native_profiler");
        $__internal_b1b7ecd6a55fa29b565f10134b4b2e3ff33e1f6f79f09dcf99f063b11d30e023->enter($__internal_b1b7ecd6a55fa29b565f10134b4b2e3ff33e1f6f79f09dcf99f063b11d30e023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b1b7ecd6a55fa29b565f10134b4b2e3ff33e1f6f79f09dcf99f063b11d30e023->leave($__internal_b1b7ecd6a55fa29b565f10134b4b2e3ff33e1f6f79f09dcf99f063b11d30e023_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
