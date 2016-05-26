<?php

/* base.html.twig~ */
class __TwigTemplate_99f9d6ef607c9efc7e238853eeeb8e86e08c96066724847624a5c25d63bdd45b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("header.html.twig", "base.html.twig~", 31);
        // line 31
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
        $__internal_7ce0a59c81b15e4047d42825920258738af2a8042519a4e74d95e8277d71a9e2 = $this->env->getExtension("native_profiler");
        $__internal_7ce0a59c81b15e4047d42825920258738af2a8042519a4e74d95e8277d71a9e2->enter($__internal_7ce0a59c81b15e4047d42825920258738af2a8042519a4e74d95e8277d71a9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig~"));

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
        // line 26
        echo "\t</head>
\t
\t<body>
\t\t
\t\t";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
\t    <!-- Back to top -->
\t    <div id=\"back-to-top\" class=\"back-to-top\">
\t      <a href=\"#\" class=\"icon iline2-thin16 no-margin\"></a>
\t    </div>


\t    ";
        // line 44
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "

\t    <!-- Back to top end -->
\t    ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "\t</body>
</html>
";
        
        $__internal_7ce0a59c81b15e4047d42825920258738af2a8042519a4e74d95e8277d71a9e2->leave($__internal_7ce0a59c81b15e4047d42825920258738af2a8042519a4e74d95e8277d71a9e2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_dca4fda15859bdee8566f3efc0cb441d6fe04f11f98a777e59bdec0b8b92988a = $this->env->getExtension("native_profiler");
        $__internal_dca4fda15859bdee8566f3efc0cb441d6fe04f11f98a777e59bdec0b8b92988a->enter($__internal_dca4fda15859bdee8566f3efc0cb441d6fe04f11f98a777e59bdec0b8b92988a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_dca4fda15859bdee8566f3efc0cb441d6fe04f11f98a777e59bdec0b8b92988a->leave($__internal_dca4fda15859bdee8566f3efc0cb441d6fe04f11f98a777e59bdec0b8b92988a_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_f5cba5dd91d2b8393d8aedb41581340ef69c5ede2fc62de565f80bb716b613f0 = $this->env->getExtension("native_profiler");
        $__internal_f5cba5dd91d2b8393d8aedb41581340ef69c5ede2fc62de565f80bb716b613f0->enter($__internal_f5cba5dd91d2b8393d8aedb41581340ef69c5ede2fc62de565f80bb716b613f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "
\t\t<!-- Google Font -->
\t    \t<link href=\"http://fonts.googleapis.com/css?family=Lato:400,700\" rel=\"stylesheet\" type=\"text/css\">
\t    \t<link href=\"http://fonts.googleapis.com/css?family=Allerta+Stencil:400,700,900:normal\" rel=\"stylesheet\" type=\"text/css\">
\t    \t<!-- Bootstrap Core CSS -->
\t    \t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<!-- Plugins CSS -->
\t    \t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<!-- Main CSS -->
\t    \t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<!-- icons -->
\t    \t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/iline-icons.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t    \t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_f5cba5dd91d2b8393d8aedb41581340ef69c5ede2fc62de565f80bb716b613f0->leave($__internal_f5cba5dd91d2b8393d8aedb41581340ef69c5ede2fc62de565f80bb716b613f0_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cdff780ec9464b9d1bfe9da1f37afc5331d3939150dc1a9fa159fdd42a55d56 = $this->env->getExtension("native_profiler");
        $__internal_0cdff780ec9464b9d1bfe9da1f37afc5331d3939150dc1a9fa159fdd42a55d56->enter($__internal_0cdff780ec9464b9d1bfe9da1f37afc5331d3939150dc1a9fa159fdd42a55d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "\t\t\t";
        // line 32
        echo "\t\t\t";
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo " \t\t
\t\t";
        
        $__internal_0cdff780ec9464b9d1bfe9da1f37afc5331d3939150dc1a9fa159fdd42a55d56->leave($__internal_0cdff780ec9464b9d1bfe9da1f37afc5331d3939150dc1a9fa159fdd42a55d56_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_f0574e7b1d54f6122bf39e758a1d34e0c530a4b9d4b44fc32980922afffbe666 = $this->env->getExtension("native_profiler");
        $__internal_f0574e7b1d54f6122bf39e758a1d34e0c530a4b9d4b44fc32980922afffbe666->enter($__internal_f0574e7b1d54f6122bf39e758a1d34e0c530a4b9d4b44fc32980922afffbe666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "\t\t\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
\t\t\t";
        
        $__internal_f0574e7b1d54f6122bf39e758a1d34e0c530a4b9d4b44fc32980922afffbe666->leave($__internal_f0574e7b1d54f6122bf39e758a1d34e0c530a4b9d4b44fc32980922afffbe666_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb2210b05c9136e0f50b3074896042123e31513987d7178724f5328b9507c9b2 = $this->env->getExtension("native_profiler");
        $__internal_fb2210b05c9136e0f50b3074896042123e31513987d7178724f5328b9507c9b2->enter($__internal_fb2210b05c9136e0f50b3074896042123e31513987d7178724f5328b9507c9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "\t    <!-- Plugins JS -->
\t    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/imagesloaded.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/ParallaxScrolling.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery.mailchimp.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/wow.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery.fittext.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery.lettering.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery.textillate.js"), "html", null, true);
        echo "\"></script>

\t    <!-- Main JS -->
\t    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t    ";
        
        $__internal_fb2210b05c9136e0f50b3074896042123e31513987d7178724f5328b9507c9b2->leave($__internal_fb2210b05c9136e0f50b3074896042123e31513987d7178724f5328b9507c9b2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 64,  241 => 61,  237 => 60,  233 => 59,  229 => 58,  225 => 57,  221 => 56,  217 => 55,  213 => 54,  209 => 53,  205 => 52,  201 => 51,  197 => 50,  193 => 49,  190 => 48,  184 => 47,  174 => 33,  168 => 32,  160 => 35,  157 => 32,  155 => 31,  149 => 30,  140 => 24,  136 => 23,  131 => 21,  127 => 20,  122 => 18,  118 => 17,  113 => 15,  106 => 10,  100 => 9,  88 => 6,  79 => 66,  77 => 47,  71 => 44,  62 => 37,  60 => 30,  54 => 26,  52 => 9,  46 => 6,  39 => 1,  14 => 31,);
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
