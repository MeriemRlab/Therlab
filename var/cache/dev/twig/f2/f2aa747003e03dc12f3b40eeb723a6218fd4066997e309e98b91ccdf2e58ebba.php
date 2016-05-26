<?php

/* header.html.twig */
class __TwigTemplate_e1a34f12cc8345fd41e39753f511e84d7ce88e40a8d81ea61ff278621f47ee16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d7d7200835980a7f356e8b9bced9b59d0cfc08b18e2ffbc4d3356c4bdb590d0 = $this->env->getExtension("native_profiler");
        $__internal_2d7d7200835980a7f356e8b9bced9b59d0cfc08b18e2ffbc4d3356c4bdb590d0->enter($__internal_2d7d7200835980a7f356e8b9bced9b59d0cfc08b18e2ffbc4d3356c4bdb590d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_2d7d7200835980a7f356e8b9bced9b59d0cfc08b18e2ffbc4d3356c4bdb590d0->leave($__internal_2d7d7200835980a7f356e8b9bced9b59d0cfc08b18e2ffbc4d3356c4bdb590d0_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_db290bc23ca0137d3fb95487fb00f4981d4bbe366835902d46f822c25cd6bd50 = $this->env->getExtension("native_profiler");
        $__internal_db290bc23ca0137d3fb95487fb00f4981d4bbe366835902d46f822c25cd6bd50->enter($__internal_db290bc23ca0137d3fb95487fb00f4981d4bbe366835902d46f822c25cd6bd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "<!-- NAVIGATION START -->
    <header class=\"fallone-navbar\" data-id=\"default-navbar\">
      <nav class=\"navbar navbar-default\">
        <div class=\"container\">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-expanded=\"false\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">
              <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"The R lab logo\" class=\"img-responsive\" />
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
              <li ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "platform_home")) {
            echo "class=\"active\"";
        }
        echo "><a  href=\"";
        echo $this->env->getExtension('routing')->getPath("platform_home");
        echo "\">Home</a></li>
              <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Projects<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <a  href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("platform_projects");
        echo "\">
                      Current
                    </a>
                  </li>
                  <li>
                    <a  href=\"#\">
                      Past
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Members<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <a  href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("platform_members");
        echo "\">
                      Current
                    </a>
                  </li>
                  <li>
                    <a  href=\"#\">
                      Past
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Science and Society<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
\t\t\t\t<li>
                    <a  href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("platform_art-science");
        echo "\">
                      Art & Science
                    </a>
                  </li>
                  <li>
                    <a  href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("platform_consulting");
        echo "\">
                      Consulting
                    </a>
                  </li>
                  <li>
                    <a  href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("platform_ngos");
        echo "\">
                      NGOs
                    </a>
                  </li>
                  <li>
                    <a  href=\"#\">
                      Others
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Datasets <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li>
                    <a  href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("platform_publications");
        echo "\">
                      Publications
                    </a>
                  </li>
                  <li>
                    <a  href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("platform_3D-Models");
        echo "\">
                      3D Models
                    </a>
                  </li>
                  <li>
                    <a  href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("platform_blaschka");
        echo "\">
                      Blaschka
                    </a>
                  </li>
                  <li>
                    <a  href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("platform_light-sheet");
        echo "\">
                      Light Sheet
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">More <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a  href=\"https://vimeo.com/therlab\" target=\"_blank\">Video wall</a></li>
                  <li><a class=\"text-primary\" href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("platform_posts");
        echo "\">Blog</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!-- NAVIGATION END -->
";
        
        $__internal_db290bc23ca0137d3fb95487fb00f4981d4bbe366835902d46f822c25cd6bd50->leave($__internal_db290bc23ca0137d3fb95487fb00f4981d4bbe366835902d46f822c25cd6bd50_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 111,  169 => 99,  161 => 94,  153 => 89,  145 => 84,  127 => 69,  119 => 64,  111 => 59,  93 => 44,  75 => 29,  63 => 24,  53 => 17,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {# header.html.twig #}*/
/* */
/* {% block header %}*/
/* <!-- NAVIGATION START -->*/
/*     <header class="fallone-navbar" data-id="default-navbar">*/
/*       <nav class="navbar navbar-default">*/
/*         <div class="container">*/
/*           <!-- Brand and toggle get grouped for better mobile display -->*/
/*           <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">*/
/*               <span class="sr-only">Toggle navigation</span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/">*/
/*               <img src="{{ asset('images/logo.png') }}" alt="The R lab logo" class="img-responsive" />*/
/*             </a>*/
/*           </div>*/
/* */
/*           <!-- Collect the nav links, forms, and other content for toggling -->*/
/*           <div class="collapse navbar-collapse" id="navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*               <li {% if app.request.attributes.get('_route') == 'platform_home' %}class="active"{% endif %}><a  href="{{ path('platform_home') }}">Home</a></li>*/
/*               <li class="dropdown">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projects<span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li>*/
/*                     <a  href="{{ path('platform_projects') }}">*/
/*                       Current*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a  href="#">*/
/*                       Past*/
/*                     </a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <li class="dropdown">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Members<span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li>*/
/*                     <a  href="{{ path('platform_members') }}">*/
/*                       Current*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a  href="#">*/
/*                       Past*/
/*                     </a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <li class="dropdown">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Science and Society<span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/* 				<li>*/
/*                     <a  href="{{ path('platform_art-science') }}">*/
/*                       Art & Science*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a  href="{{ path('platform_consulting') }}">*/
/*                       Consulting*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a  href="{{ path('platform_ngos') }}">*/
/*                       NGOs*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a  href="#">*/
/*                       Others*/
/*                     </a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <li class="dropdown">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Datasets <span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li>*/
/*                     <a  href="{{ path('platform_publications') }}">*/
/*                       Publications*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a  href="{{ path('platform_3D-Models') }}">*/
/*                       3D Models*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a  href="{{ path('platform_blaschka') }}">*/
/*                       Blaschka*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a  href="{{ path('platform_light-sheet') }}">*/
/*                       Light Sheet*/
/*                     </a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*               <li class="dropdown">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More <span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li><a  href="https://vimeo.com/therlab" target="_blank">Video wall</a></li>*/
/*                   <li><a class="text-primary" href="{{ path('platform_posts') }}">Blog</a></li>*/
/*                 </ul>*/
/*               </li>*/
/*             </ul>*/
/*           </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container -->*/
/*       </nav>*/
/*     </header>*/
/*     <!-- NAVIGATION END -->*/
/* {% endblock %}*/
/* */
