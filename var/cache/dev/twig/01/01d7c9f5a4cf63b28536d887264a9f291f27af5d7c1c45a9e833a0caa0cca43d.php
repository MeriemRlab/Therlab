<?php

/* therlab/footer.html.twig~ */
class __TwigTemplate_40428dce72cda7ade1905aadb9a31efc7e0f6185005b68720ef65ffde1164a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca17a89741fcc96bb5df6ffde6fa60ef3b0adc621cd3695bfc39df913a8b1bbd = $this->env->getExtension("native_profiler");
        $__internal_ca17a89741fcc96bb5df6ffde6fa60ef3b0adc621cd3695bfc39df913a8b1bbd->enter($__internal_ca17a89741fcc96bb5df6ffde6fa60ef3b0adc621cd3695bfc39df913a8b1bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/footer.html.twig~"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_ca17a89741fcc96bb5df6ffde6fa60ef3b0adc621cd3695bfc39df913a8b1bbd->leave($__internal_ca17a89741fcc96bb5df6ffde6fa60ef3b0adc621cd3695bfc39df913a8b1bbd_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_7c49c86dfaa5b26ba92ea82c394f86ce59171ea70e2771d5d96c291a3077f3ae = $this->env->getExtension("native_profiler");
        $__internal_7c49c86dfaa5b26ba92ea82c394f86ce59171ea70e2771d5d96c291a3077f3ae->enter($__internal_7c49c86dfaa5b26ba92ea82c394f86ce59171ea70e2771d5d96c291a3077f3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 4
        echo "\t<!-- BEGIN FOOTER -->
      <footer class=\"page-footer\">
        <!-- FOOTER CONTENT -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <!-- .row -->
              <div class=\"row\">
                <aside class=\"col-md-4 col-sm-6 col-xs-12 text-left\">
                  <h3  class=\"uppercase\">Newsletter</h3>
                  <span class=\"line-sep-gray\"></span>
                  <p>
                    Subscribe to our weekly Newsletter and stay tuned 
                    to all our updates.
                  </p>
                  <!-- Newsletter form -->
                  <form action=\"#\" id=\"mailchimp-form\" method=\"post\" class=\"subscription\" data-url=\"http://appdevfolio.us10.list-manage.com/subscribe/post?u=a024d704e715c033b405711a3&amp;id=de4c3fd5b0\">
                    <div class=\"form-group\">
                      <div class=\"input-group\">
                        <input type=\"email\" class=\"form-control input-lg\" placeholder=\"Your email address\" id=\"mailchimp-email\" name=\"EMAIL\">
                        <span class=\"input-group-btn\">
                          <button type=\"submit\" class=\"btn   btn-lg\">
                            <i class=\"iline2-paper41\"></i> Signup
                          </button>
                        </span>
                      </div>
                    </div>
                    <label for=\"mailchimp-email\" class=\"text-danger text-center mailchimp-label\"></label>
                  </form>
                  <!-- /Newsletter Registration Form -->
                </aside>
                <aside class=\"col-md-4 col-sm-6 col-xs-12 text-left\">
                  <!-- Copyright Informations -->
                  <h3  class=\"uppercase\">Copyright</h3>
                  <span class=\"line-sep-gray\"></span>
                  <p>
                    2016 The \"R\" Lab All rights reserved
                  </p>
                </aside>
                <aside class=\"col-md-4 col-sm-6 col-xs-12\">
                  <h3  class=\"uppercase\">Visit Us</h3>
                  <span class=\"line-sep-gray\"></span>
                  <!-- address -->
                  <address>
                    <strong>The \"R\" Laboratory</strong><br/>
                    UCD Conway Institute<br/>
                    University College Dublin<br/>
                    Belfield, Dublin<br/>
                    (+353) 1716 2260<br/>
                    <a href=\"mailto:#\">emmanuel.reynaud@ucd.ie </a><br/>
                  </address>
                  <!-- /address -->
                </aside>
              </div>
              <!-- /.row -->
              <div class=\"row\">
                <div class=\"col-md-12 text-center mar-top-sm\">
                  <!-- .social -->
                  <ul class=\"social\">
                    <li><a href=\"https://www.linkedin.com/in/emmanuel-reynaud-68a4638b\" class=\"icon-xl iline3-linked3\"></a></li>
                    <li><a target=\"_blank\" href=\"https://vimeo.com/therlab\" class=\"icon-xl iline3-vimeo11\"></a></li>
                  </ul>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- FOOTER CONTENT -->
      </footer>
      <!-- FOOTER END -->
";
        
        $__internal_7c49c86dfaa5b26ba92ea82c394f86ce59171ea70e2771d5d96c291a3077f3ae->leave($__internal_7c49c86dfaa5b26ba92ea82c394f86ce59171ea70e2771d5d96c291a3077f3ae_prof);

    }

    public function getTemplateName()
    {
        return "therlab/footer.html.twig~";
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {# footer.html.twig #}*/
/* */
/* {% block footer %}*/
/* 	<!-- BEGIN FOOTER -->*/
/*       <footer class="page-footer">*/
/*         <!-- FOOTER CONTENT -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 <aside class="col-md-4 col-sm-6 col-xs-12 text-left">*/
/*                   <h3  class="uppercase">Newsletter</h3>*/
/*                   <span class="line-sep-gray"></span>*/
/*                   <p>*/
/*                     Subscribe to our weekly Newsletter and stay tuned */
/*                     to all our updates.*/
/*                   </p>*/
/*                   <!-- Newsletter form -->*/
/*                   <form action="#" id="mailchimp-form" method="post" class="subscription" data-url="http://appdevfolio.us10.list-manage.com/subscribe/post?u=a024d704e715c033b405711a3&amp;id=de4c3fd5b0">*/
/*                     <div class="form-group">*/
/*                       <div class="input-group">*/
/*                         <input type="email" class="form-control input-lg" placeholder="Your email address" id="mailchimp-email" name="EMAIL">*/
/*                         <span class="input-group-btn">*/
/*                           <button type="submit" class="btn   btn-lg">*/
/*                             <i class="iline2-paper41"></i> Signup*/
/*                           </button>*/
/*                         </span>*/
/*                       </div>*/
/*                     </div>*/
/*                     <label for="mailchimp-email" class="text-danger text-center mailchimp-label"></label>*/
/*                   </form>*/
/*                   <!-- /Newsletter Registration Form -->*/
/*                 </aside>*/
/*                 <aside class="col-md-4 col-sm-6 col-xs-12 text-left">*/
/*                   <!-- Copyright Informations -->*/
/*                   <h3  class="uppercase">Copyright</h3>*/
/*                   <span class="line-sep-gray"></span>*/
/*                   <p>*/
/*                     2016 The "R" Lab All rights reserved*/
/*                   </p>*/
/*                 </aside>*/
/*                 <aside class="col-md-4 col-sm-6 col-xs-12">*/
/*                   <h3  class="uppercase">Visit Us</h3>*/
/*                   <span class="line-sep-gray"></span>*/
/*                   <!-- address -->*/
/*                   <address>*/
/*                     <strong>The "R" Laboratory</strong><br/>*/
/*                     UCD Conway Institute<br/>*/
/*                     University College Dublin<br/>*/
/*                     Belfield, Dublin<br/>*/
/*                     (+353) 1716 2260<br/>*/
/*                     <a href="mailto:#">emmanuel.reynaud@ucd.ie </a><br/>*/
/*                   </address>*/
/*                   <!-- /address -->*/
/*                 </aside>*/
/*               </div>*/
/*               <!-- /.row -->*/
/*               <div class="row">*/
/*                 <div class="col-md-12 text-center mar-top-sm">*/
/*                   <!-- .social -->*/
/*                   <ul class="social">*/
/*                     <li><a href="https://www.linkedin.com/in/emmanuel-reynaud-68a4638b" class="icon-xl iline3-linked3"></a></li>*/
/*                     <li><a target="_blank" href="https://vimeo.com/therlab" class="icon-xl iline3-vimeo11"></a></li>*/
/*                   </ul>*/
/*                   <!-- /.social -->*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.row -->*/
/*             </div>*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*         <!-- FOOTER CONTENT -->*/
/*       </footer>*/
/*       <!-- FOOTER END -->*/
/* {% endblock %}*/
/* */
