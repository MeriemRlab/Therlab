<?php

/* base.html.twig */
class __TwigTemplate_e7c775277d628de792e6b86a5faf0297e7fdcb2b688f54d107b576928bff32fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("header.html.twig", "base.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."header.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'css' => array($this, 'block_css'),
                'body' => array($this, 'block_body'),
                'header' => array($this, 'block_header'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bdda4c62968b5e8e0e3164662e31e360bf6b15079d81a216fd7c80f2d9c8daf = $this->env->getExtension("native_profiler");
        $__internal_8bdda4c62968b5e8e0e3164662e31e360bf6b15079d81a216fd7c80f2d9c8daf->enter($__internal_8bdda4c62968b5e8e0e3164662e31e360bf6b15079d81a216fd7c80f2d9c8daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
\t<head>
\t   \t<meta charset=\"UTF-8\" />
\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>\t
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\">
\t\t
\t\t";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 27
        echo "\t</head>
\t
\t<body>
\t\t
\t\t";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
\t    <!-- Back to top -->
\t    <div id=\"back-to-top\" class=\"back-to-top\">
\t      <a href=\"#\" class=\"icon iline2-thin16 no-margin\"></a>
\t    </div>


\t    ";
        // line 45
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "

\t    <!-- Back to top end -->
\t    ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "\t</body>
</html>
";
        
        $__internal_8bdda4c62968b5e8e0e3164662e31e360bf6b15079d81a216fd7c80f2d9c8daf->leave($__internal_8bdda4c62968b5e8e0e3164662e31e360bf6b15079d81a216fd7c80f2d9c8daf_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e4d84146eca4fdb56a79907bd83e22940e8bb89f2ae9e42da4540c54b3d6a7e = $this->env->getExtension("native_profiler");
        $__internal_9e4d84146eca4fdb56a79907bd83e22940e8bb89f2ae9e42da4540c54b3d6a7e->enter($__internal_9e4d84146eca4fdb56a79907bd83e22940e8bb89f2ae9e42da4540c54b3d6a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_9e4d84146eca4fdb56a79907bd83e22940e8bb89f2ae9e42da4540c54b3d6a7e->leave($__internal_9e4d84146eca4fdb56a79907bd83e22940e8bb89f2ae9e42da4540c54b3d6a7e_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_91df82da37545c359f5916acaf89c5bf609d274620384e2c294c2cba3eb90884 = $this->env->getExtension("native_profiler");
        $__internal_91df82da37545c359f5916acaf89c5bf609d274620384e2c294c2cba3eb90884->enter($__internal_91df82da37545c359f5916acaf89c5bf609d274620384e2c294c2cba3eb90884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "
\t\t<!-- Google Font -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
\t    \t<link href=\"http://fonts.googleapis.com/css?family=Lato:400,700\" rel=\"stylesheet\" type=\"text/css\">
\t    \t<link href=\"http://fonts.googleapis.com/css?family=Allerta+Stencil:400,700,900:normal\" rel=\"stylesheet\" type=\"text/css\">
\t    \t<!-- Bootstrap Core CSS -->
\t    \t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<!-- Plugins CSS -->
\t    \t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<!-- Main CSS -->
\t    \t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<!-- icons -->
\t    \t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/iline-icons.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_91df82da37545c359f5916acaf89c5bf609d274620384e2c294c2cba3eb90884->leave($__internal_91df82da37545c359f5916acaf89c5bf609d274620384e2c294c2cba3eb90884_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_728d8702d7afa51c2ae9e99894e11a2d2020e8177798835e2ab63fcca68ab7e9 = $this->env->getExtension("native_profiler");
        $__internal_728d8702d7afa51c2ae9e99894e11a2d2020e8177798835e2ab63fcca68ab7e9->enter($__internal_728d8702d7afa51c2ae9e99894e11a2d2020e8177798835e2ab63fcca68ab7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "\t\t\t";
        // line 33
        echo "\t\t\t";
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo " \t\t
\t\t";
        
        $__internal_728d8702d7afa51c2ae9e99894e11a2d2020e8177798835e2ab63fcca68ab7e9->leave($__internal_728d8702d7afa51c2ae9e99894e11a2d2020e8177798835e2ab63fcca68ab7e9_prof);

    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        $__internal_bb97d04c271020783a6a4dcba8c091fad0060e9717bbaeba1161f45e9fd5ed9f = $this->env->getExtension("native_profiler");
        $__internal_bb97d04c271020783a6a4dcba8c091fad0060e9717bbaeba1161f45e9fd5ed9f->enter($__internal_bb97d04c271020783a6a4dcba8c091fad0060e9717bbaeba1161f45e9fd5ed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 34
        echo "\t\t\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
\t\t\t";
        
        $__internal_bb97d04c271020783a6a4dcba8c091fad0060e9717bbaeba1161f45e9fd5ed9f->leave($__internal_bb97d04c271020783a6a4dcba8c091fad0060e9717bbaeba1161f45e9fd5ed9f_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19d007a5d0403a0f0d51264e417b880d603a80bb2eaecf375e92f450c6bd66e2 = $this->env->getExtension("native_profiler");
        $__internal_19d007a5d0403a0f0d51264e417b880d603a80bb2eaecf375e92f450c6bd66e2->enter($__internal_19d007a5d0403a0f0d51264e417b880d603a80bb2eaecf375e92f450c6bd66e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "\t    <!-- Plugins JS -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
\t    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/imagesloaded.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/ParallaxScrolling.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery.mailchimp.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/wow.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery.fittext.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery.lettering.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery.textillate.js"), "html", null, true);
        echo "\"></script>

\t    <!-- Main JS -->
\t    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t    ";
        
        $__internal_19d007a5d0403a0f0d51264e417b880d603a80bb2eaecf375e92f450c6bd66e2->leave($__internal_19d007a5d0403a0f0d51264e417b880d603a80bb2eaecf375e92f450c6bd66e2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 66,  243 => 63,  239 => 62,  235 => 61,  231 => 60,  227 => 59,  223 => 58,  219 => 57,  215 => 56,  211 => 55,  207 => 54,  203 => 53,  199 => 52,  195 => 51,  191 => 49,  185 => 48,  175 => 34,  169 => 33,  161 => 36,  158 => 33,  156 => 32,  150 => 31,  141 => 25,  137 => 24,  132 => 22,  128 => 21,  123 => 19,  119 => 18,  114 => 16,  106 => 10,  100 => 9,  88 => 6,  79 => 68,  77 => 48,  71 => 45,  62 => 38,  60 => 31,  54 => 27,  52 => 9,  46 => 6,  39 => 1,  14 => 32,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* 	<head>*/
/* 	   	<meta charset="UTF-8" />*/
/* 		<title>{% block title %} {% endblock %}</title>	*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">*/
/* 		*/
/* 		{% block css %}*/
/* */
/* 		<!-- Google Font -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/* 	    	<link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">*/
/* 	    	<link href="http://fonts.googleapis.com/css?family=Allerta+Stencil:400,700,900:normal" rel="stylesheet" type="text/css">*/
/* 	    	<!-- Bootstrap Core CSS -->*/
/* 	    	<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/* 	    	<!-- Plugins CSS -->*/
/* 	    	<link href="{{ asset('css/normalize.css') }}" type="text/css" rel="stylesheet" />*/
/* 	    	<link href="{{ asset('css/animate.css') }}" type="text/css" rel="stylesheet" />*/
/* 	    	<!-- Main CSS -->*/
/* 	    	<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />*/
/* 	    	<link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet" />*/
/* 	    	<!-- icons -->*/
/* 	    	<link href="{{ asset('css/iline-icons.css') }}" type="text/css" rel="stylesheet" />*/
/* 	    	<link href="{{ asset('css/magnific-popup.css') }}" type="text/css" rel="stylesheet" />*/
/* 		{% endblock %}*/
/* 	</head>*/
/* 	*/
/* 	<body>*/
/* 		*/
/* 		{% block body%}*/
/* 			{% use "header.html.twig" %}*/
/* 			{% block header %}*/
/* 			{{ parent()}}*/
/* 			{% endblock %}*/
/*  		*/
/* 		{% endblock %}*/
/* */
/* 	    <!-- Back to top -->*/
/* 	    <div id="back-to-top" class="back-to-top">*/
/* 	      <a href="#" class="icon iline2-thin16 no-margin"></a>*/
/* 	    </div>*/
/* */
/* */
/* 	    {{ include ('footer.html.twig')}}*/
/* */
/* 	    <!-- Back to top end -->*/
/* 	    {% block javascripts %}*/
/* 	    <!-- Plugins JS -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* 	    <script src="{{ asset('js/libs/jquery-1.11.2.min.js') }}"></script>*/
/* 	    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/* 	    <script src="{{ asset('js/libs/jqBootstrapValidation.js') }}"></script>*/
/* 	    <script src="{{ asset('js/libs/imagesloaded.pkgd.min.js') }}"></script>*/
/* 	    <script src="{{ asset('js/libs/imagesloaded.js') }}"></script>*/
/* 	    <script src="{{ asset('js/libs/jquery.magnific-popup.min.js') }}"></script>*/
/* 	    <script src="{{ asset('js/libs/isotope.pkgd.min.js') }}"></script>*/
/* 	    <script src="{{ asset('js/libs/ParallaxScrolling.js') }}"></script>*/
/* 	    <script src="{{ asset('js/libs/jquery.mailchimp.js') }}"></script>*/
/* 	    <script src="{{ asset('js/libs/wow.min.js') }}"></script>*/
/* 	    <script src="{{ asset('js/libs/jquery.fittext.js') }}"></script>*/
/* 	    <script src="{{ asset('js/libs/jquery.lettering.js') }}"></script>*/
/* 	    <script src="{{ asset('js/libs/jquery.textillate.js') }}"></script>*/
/* */
/* 	    <!-- Main JS -->*/
/* 	    <script src="{{ asset('js/main.js') }}"></script>*/
/* 	    {% endblock %}*/
/* 	</body>*/
/* </html>*/
/* */
