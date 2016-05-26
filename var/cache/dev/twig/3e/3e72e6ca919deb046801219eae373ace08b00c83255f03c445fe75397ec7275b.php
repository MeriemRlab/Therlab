<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_26d179ef5e3df69883cad33d62febfa6af08a098bc6a878df3b46ed78b1d2610 extends Twig_Template
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
        $__internal_1be2761d5098ac9567cf6fbaceb1e233691091a33784cd820adfcbb63d8b1bc4 = $this->env->getExtension("native_profiler");
        $__internal_1be2761d5098ac9567cf6fbaceb1e233691091a33784cd820adfcbb63d8b1bc4->enter($__internal_1be2761d5098ac9567cf6fbaceb1e233691091a33784cd820adfcbb63d8b1bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1be2761d5098ac9567cf6fbaceb1e233691091a33784cd820adfcbb63d8b1bc4->leave($__internal_1be2761d5098ac9567cf6fbaceb1e233691091a33784cd820adfcbb63d8b1bc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
