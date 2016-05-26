<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0d5246af88d5819e812a605c6d7960ee1e70a6919770c9f02d510e85ea097870 extends Twig_Template
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
        $__internal_d48e047dba84cc59422744bccf98be8162056fded5542bb5d71091ffb6bac4dc = $this->env->getExtension("native_profiler");
        $__internal_d48e047dba84cc59422744bccf98be8162056fded5542bb5d71091ffb6bac4dc->enter($__internal_d48e047dba84cc59422744bccf98be8162056fded5542bb5d71091ffb6bac4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d48e047dba84cc59422744bccf98be8162056fded5542bb5d71091ffb6bac4dc->leave($__internal_d48e047dba84cc59422744bccf98be8162056fded5542bb5d71091ffb6bac4dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
