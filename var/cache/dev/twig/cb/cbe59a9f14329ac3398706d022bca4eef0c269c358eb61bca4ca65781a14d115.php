<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e4d3b57812a1725f77b42233b095ba55009e8af194f3d39c6e6dc39ea22d5184 extends Twig_Template
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
        $__internal_fea25511a39d81eb3c4a1fa2bd72c5137a99fd0a19caa27e32455190465e3cd5 = $this->env->getExtension("native_profiler");
        $__internal_fea25511a39d81eb3c4a1fa2bd72c5137a99fd0a19caa27e32455190465e3cd5->enter($__internal_fea25511a39d81eb3c4a1fa2bd72c5137a99fd0a19caa27e32455190465e3cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fea25511a39d81eb3c4a1fa2bd72c5137a99fd0a19caa27e32455190465e3cd5->leave($__internal_fea25511a39d81eb3c4a1fa2bd72c5137a99fd0a19caa27e32455190465e3cd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
