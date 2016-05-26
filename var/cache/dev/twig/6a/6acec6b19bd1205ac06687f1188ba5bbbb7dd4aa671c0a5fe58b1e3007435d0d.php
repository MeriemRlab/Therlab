<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ff081fa4493aa04494d35f2f3c7c9d749b5f035996c87be6342de520b8060aa8 extends Twig_Template
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
        $__internal_cb9223c69acfd66b17609e853d71d1a629ec1be066cd74d80d91c5a73c02a14d = $this->env->getExtension("native_profiler");
        $__internal_cb9223c69acfd66b17609e853d71d1a629ec1be066cd74d80d91c5a73c02a14d->enter($__internal_cb9223c69acfd66b17609e853d71d1a629ec1be066cd74d80d91c5a73c02a14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cb9223c69acfd66b17609e853d71d1a629ec1be066cd74d80d91c5a73c02a14d->leave($__internal_cb9223c69acfd66b17609e853d71d1a629ec1be066cd74d80d91c5a73c02a14d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
