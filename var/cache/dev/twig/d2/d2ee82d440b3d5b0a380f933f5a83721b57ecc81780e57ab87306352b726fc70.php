<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8d4785859a620650054640ed251c9f978bba35ab3e8f0d3b08fe0aef48224bb4 extends Twig_Template
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
        $__internal_9ecc638aad377e3604a1389e517f582c393fe57353f1aca559b7ec5114f23190 = $this->env->getExtension("native_profiler");
        $__internal_9ecc638aad377e3604a1389e517f582c393fe57353f1aca559b7ec5114f23190->enter($__internal_9ecc638aad377e3604a1389e517f582c393fe57353f1aca559b7ec5114f23190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9ecc638aad377e3604a1389e517f582c393fe57353f1aca559b7ec5114f23190->leave($__internal_9ecc638aad377e3604a1389e517f582c393fe57353f1aca559b7ec5114f23190_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
