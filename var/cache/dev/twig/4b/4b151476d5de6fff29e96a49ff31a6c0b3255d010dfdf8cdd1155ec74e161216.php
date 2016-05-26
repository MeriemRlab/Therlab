<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_33ee154fd83d4afdf15ed04cf4c1e9bab3277d030a6a0629c9f23ce698f990b9 extends Twig_Template
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
        $__internal_967be5575fee4aac860c7787fea2734d7916c69287566559001db55baef6309e = $this->env->getExtension("native_profiler");
        $__internal_967be5575fee4aac860c7787fea2734d7916c69287566559001db55baef6309e->enter($__internal_967be5575fee4aac860c7787fea2734d7916c69287566559001db55baef6309e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_967be5575fee4aac860c7787fea2734d7916c69287566559001db55baef6309e->leave($__internal_967be5575fee4aac860c7787fea2734d7916c69287566559001db55baef6309e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
