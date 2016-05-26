<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b0e1790e9ab0251a051868ab45e6d786bf216d5a0bfef099588a6ee1e719f7f1 extends Twig_Template
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
        $__internal_2c6b42d8211799dfab33a940c57b6c6843dd7742ba0ca584b1131cbd70f18865 = $this->env->getExtension("native_profiler");
        $__internal_2c6b42d8211799dfab33a940c57b6c6843dd7742ba0ca584b1131cbd70f18865->enter($__internal_2c6b42d8211799dfab33a940c57b6c6843dd7742ba0ca584b1131cbd70f18865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2c6b42d8211799dfab33a940c57b6c6843dd7742ba0ca584b1131cbd70f18865->leave($__internal_2c6b42d8211799dfab33a940c57b6c6843dd7742ba0ca584b1131cbd70f18865_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
