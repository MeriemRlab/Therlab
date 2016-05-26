<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6edf15d7b85de71ec8b565549da3058ba9bf8803d94cdb88147f8f32bb2a1f8c extends Twig_Template
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
        $__internal_34b369ae81556c7d6a20c1b9222d6a446ad4ba3010647f036cb12e308aecd021 = $this->env->getExtension("native_profiler");
        $__internal_34b369ae81556c7d6a20c1b9222d6a446ad4ba3010647f036cb12e308aecd021->enter($__internal_34b369ae81556c7d6a20c1b9222d6a446ad4ba3010647f036cb12e308aecd021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_34b369ae81556c7d6a20c1b9222d6a446ad4ba3010647f036cb12e308aecd021->leave($__internal_34b369ae81556c7d6a20c1b9222d6a446ad4ba3010647f036cb12e308aecd021_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
