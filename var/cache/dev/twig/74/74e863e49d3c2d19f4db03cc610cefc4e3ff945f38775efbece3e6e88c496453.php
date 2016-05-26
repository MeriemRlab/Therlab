<?php

/* EasyAdminBundle:css:easyadmin.css.twig */
class __TwigTemplate_c59d4dd28585e98d487dbb0d691c04dc4e06ccc53f3d015e58de25fbc3c7afc8 extends Twig_Template
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
        $__internal_206adfa0ea9bf456fa6d6f0bff308e0c3a37e91a66d42f1cc96780e5de853692 = $this->env->getExtension("native_profiler");
        $__internal_206adfa0ea9bf456fa6d6f0bff308e0c3a37e91a66d42f1cc96780e5de853692->enter($__internal_206adfa0ea9bf456fa6d6f0bff308e0c3a37e91a66d42f1cc96780e5de853692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:css:easyadmin.css.twig"));

        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = $this->getAttribute((isset($context["color_schemes"]) ? $context["color_schemes"] : $this->getContext($context, "color_schemes")), (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")), array(), "array");
        // line 45
        echo "
";
        // line 52
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 60
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 66
        echo "a        { color: ";
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "link", array());
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 77
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 81
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 90
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 108
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 112
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    color: ";
        // line 113
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 116
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 117
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 126
        echo ".label:not([class*=label-]) {
    background: ";
        // line 127
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 130
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 139
        echo "    background: ";
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo " !important;
}
.label-danger {
    ";
        // line 143
        echo "    background: ";
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo " !iportant;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 149
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    padding: 4px 8px;
}

";
        // line 154
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 161
        echo ".toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    background: ";
        // line 185
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    border-color: ";
        // line 186
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    color: ";
        // line 187
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    background: ";
        // line 196
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    border-color: ";
        // line 197
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 198
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 206
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 222
        echo "span.badge {
    background-color: ";
        // line 223
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}

";
        // line 228
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 245
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 246
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 247
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 248
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 250
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 253
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 267
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    border-color: transparent;
    color: ";
        // line 269
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 284
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 286
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 294
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 296
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}

";
        // line 300
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 306
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 334
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 339
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 341
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 342
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 344
        echo "    color: ";
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 349
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 350
            echo "    border-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 352
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 353
            echo "    border-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 355
        echo "}

.has-error .error-block {
    color: ";
        // line 358
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 374
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text_muted", array());
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 384
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 385
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 386
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 387
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 388
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 389
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 391
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 393
        if (((array_key_exists("kernel_debug", $context)) ? (_twig_default_filter((isset($context["kernel_debug"]) ? $context["kernel_debug"] : $this->getContext($context, "kernel_debug")), false)) : (false))) {
            // line 394
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 397
        echo "}

";
        // line 401
        echo "form:not(.form-horizontal) .field-checkbox label {
    padding-top: 23px;
}

";
        // line 407
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 414
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 418
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 421
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 429
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 436
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 440
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 443
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 446
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 452
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 465
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 466
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 467
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 480
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 490
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 491
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 492
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

";
        // line 514
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 522
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 523
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    margin-top: 1.5em;
}

";
        // line 530
        echo "
";
        // line 533
        echo ".content-wrapper {
    background: ";
        // line 534
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "page_background", array());
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 542
        echo ".main-header {
    background: ";
        // line 543
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}
.main-header .logo {
    background: rgba(0, 0, 0, 0.15);
    color: ";
        // line 547
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 549
        echo "    font-weight: bold;
    height: 40px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header .logo-mini {
    font-weight: bold;
    text-align: center;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header > img {
    margin-top: -2px;
    max-height: 26px;
    max-width: 94%;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
";
        // line 574
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 575
            echo "    background-color: ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
    color: ";
            // line 576
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 577
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 578
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
    color: ";
            // line 579
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 581
        echo "    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
";
        // line 585
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 586
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 587
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 588
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text_muted", array());
            echo ";
";
        }
        // line 590
        echo "    padding: 10px;
}
.main-header .navbar .sidebar-toggle:hover {
    background: rgba(0, 0, 0, 0.15);
}

.navbar-custom-menu .user-menu {
";
        // line 597
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 598
            echo "    color: rgba(255, 255, 255, 0.8);
";
        } elseif (("light" ==         // line 599
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 600
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text_muted", array());
            echo ";
";
        }
        // line 602
        echo "    font-size: 13px;
    font-weight: bold;
    padding: 10px;
}

";
        // line 609
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 625
        echo ".main-sidebar,
.wrapper {
";
        // line 627
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 628
            echo "    background-color: rgb(34, 34, 34);
";
        } elseif (("light" ==         // line 629
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 630
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        }
        // line 632
        echo "}
.main-sidebar {
    padding-top: 40px;
}

.sidebar-menu li.header {
";
        // line 638
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 639
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 640
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 641
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "black", array());
            echo ";
";
        }
        // line 643
        echo "    font-size: 12px;
    font-weight: bold;
    opacity: 0.4;
    text-transform: uppercase;
}
.treeview-menu > li.header {
    padding-left: 28px;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 654
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 655
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
    opacity: 0.8;
";
        } elseif (("light" ==         // line 657
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 658
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 660
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
}
.sidebar-menu .treeview-menu > li > a {
    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu .treeview-menu > li.active > a {
";
        // line 672
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 673
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
    background: rgb(15, 15, 15);
    border-left-color: rgb(115, 115, 115);
";
        } elseif (("light" ==         // line 676
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 677
            echo "    background: rgb(200, 200, 200);
    border-left-color: rgb(128, 128, 128);
";
        }
        // line 680
        echo "    opacity: 1;
}

.sidebar-menu > li > a > .fa {
    width: 22px;
}

.sidebar-menu .treeview-menu {
";
        // line 688
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 689
            echo "    background: rgb(60, 60, 60);
";
        } elseif (("light" ==         // line 690
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 691
            echo "    background: rgb(220, 220, 220);
";
        }
        // line 693
        echo "    margin: 0;
    padding: 0;
}

";
        // line 698
        echo ".sidebar-menu > li.active.submenu-active > a {
";
        // line 699
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 700
            echo "    background: rgb(34, 34, 34);
";
        } elseif (("light" ==         // line 701
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 702
            echo "    background: rgb(220, 220, 220);
";
        }
        // line 704
        echo "    border-left-color: transparent;
}
";
        // line 707
        echo ".sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
";
        // line 712
        echo ".sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}
";
        // line 717
        echo ".sidebar-collapse .sidebar-menu > li > a > .fa {
    width: 28px;
}

";
        // line 724
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

";
        // line 731
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 767
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 780
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
";
        // line 781
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 782
            echo "    border: 1px solid ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 783
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 784
            echo "    border: 1px solid ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 786
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 790
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
    border-top: 0;
    display: block;
    text-align: right;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 825
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 838
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 845
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 846
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 847
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 848
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 850
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 852
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    border-color: ";
        // line 853
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 855
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 858
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    color: ";
        // line 859
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 871
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 879
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 881
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-size: 16px;
    position: absolute;
}

";
        // line 889
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 911
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 933
        echo "body.show .form-control {
";
        // line 934
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 935
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 936
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 937
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        }
        // line 939
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 953
        echo "body.error .error-description {
    background: ";
        // line 954
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    border: 1px solid ";
        // line 955
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 956
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    margin: 2em auto 2em;
    max-width: 90%;
    min-height: 150px;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 963
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 964
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin-top: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 15px;
}

";
        // line 979
        echo "
";
        // line 983
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .main-header .logo {
        text-align: left;
        height: 50px;
    }
    .main-header .logo img {
        max-height: 48px;
    }

    .main-header .navbar .sidebar-toggle {
        padding: 15px;
    }
    .navbar-custom-menu .user-menu {
        padding: 17px 15px 13px;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-sidebar {
        padding-top: 50px;
    }

    ";
        // line 1014
        echo "    body.list table {
        background: ";
        // line 1015
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
        border: 1px solid ";
        // line 1016
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1022
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1026
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1031
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1037
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1042
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1043
            echo "        background: ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
        color: ";
            // line 1044
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        }
        // line 1046
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1049
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1050
            echo "        color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1051
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1052
            echo "        color: ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 1054
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1062
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1065
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    }
    ";
        // line 1068
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1069
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1070
            echo "        border-left: 1px solid ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
        border-top: 1px solid ";
            // line 1071
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 1073
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1075
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1084
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
        display: table-cell;
        text-align: left;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1093
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1094
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1097
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 70%;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }
}
";
        
        $__internal_206adfa0ea9bf456fa6d6f0bff308e0c3a37e91a66d42f1cc96780e5de853692->leave($__internal_206adfa0ea9bf456fa6d6f0bff308e0c3a37e91a66d42f1cc96780e5de853692_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:css:easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1518 => 1097,  1512 => 1094,  1508 => 1093,  1496 => 1084,  1484 => 1075,  1480 => 1073,  1475 => 1071,  1470 => 1070,  1468 => 1069,  1465 => 1068,  1460 => 1065,  1454 => 1062,  1444 => 1054,  1438 => 1052,  1436 => 1051,  1431 => 1050,  1429 => 1049,  1424 => 1046,  1419 => 1044,  1414 => 1043,  1412 => 1042,  1404 => 1037,  1395 => 1031,  1387 => 1026,  1380 => 1022,  1371 => 1016,  1367 => 1015,  1364 => 1014,  1332 => 983,  1329 => 979,  1314 => 964,  1310 => 963,  1300 => 956,  1296 => 955,  1292 => 954,  1289 => 953,  1276 => 939,  1270 => 937,  1268 => 936,  1263 => 935,  1261 => 934,  1258 => 933,  1237 => 911,  1216 => 889,  1208 => 881,  1204 => 879,  1197 => 871,  1185 => 859,  1181 => 858,  1175 => 855,  1170 => 853,  1166 => 852,  1162 => 850,  1156 => 848,  1154 => 847,  1149 => 846,  1147 => 845,  1138 => 838,  1125 => 825,  1089 => 790,  1083 => 786,  1077 => 784,  1075 => 783,  1070 => 782,  1068 => 781,  1064 => 780,  1049 => 767,  1013 => 731,  1007 => 724,  1001 => 717,  995 => 712,  989 => 707,  985 => 704,  981 => 702,  979 => 701,  976 => 700,  974 => 699,  971 => 698,  965 => 693,  961 => 691,  959 => 690,  956 => 689,  954 => 688,  944 => 680,  939 => 677,  937 => 676,  930 => 673,  928 => 672,  914 => 660,  908 => 658,  906 => 657,  900 => 655,  898 => 654,  885 => 643,  879 => 641,  877 => 640,  872 => 639,  870 => 638,  862 => 632,  856 => 630,  854 => 629,  851 => 628,  849 => 627,  845 => 625,  829 => 609,  822 => 602,  816 => 600,  814 => 599,  811 => 598,  809 => 597,  800 => 590,  794 => 588,  792 => 587,  787 => 586,  785 => 585,  779 => 581,  774 => 579,  769 => 578,  767 => 577,  763 => 576,  758 => 575,  756 => 574,  729 => 549,  725 => 547,  718 => 543,  715 => 542,  706 => 534,  703 => 533,  700 => 530,  693 => 523,  689 => 522,  679 => 514,  656 => 492,  652 => 491,  649 => 490,  639 => 480,  624 => 467,  620 => 466,  617 => 465,  603 => 452,  594 => 446,  588 => 443,  582 => 440,  575 => 436,  565 => 429,  554 => 421,  548 => 418,  542 => 414,  536 => 407,  530 => 401,  526 => 397,  521 => 394,  519 => 393,  515 => 391,  510 => 389,  505 => 388,  503 => 387,  499 => 386,  494 => 385,  492 => 384,  479 => 374,  460 => 358,  455 => 355,  449 => 353,  447 => 352,  441 => 350,  439 => 349,  430 => 344,  426 => 342,  424 => 341,  419 => 339,  412 => 334,  383 => 306,  375 => 300,  369 => 296,  364 => 294,  353 => 286,  348 => 284,  330 => 269,  325 => 267,  308 => 253,  303 => 250,  297 => 248,  295 => 247,  290 => 246,  288 => 245,  269 => 228,  263 => 223,  260 => 222,  243 => 206,  232 => 198,  228 => 197,  224 => 196,  212 => 187,  208 => 186,  204 => 185,  178 => 161,  171 => 154,  164 => 149,  154 => 143,  147 => 139,  136 => 130,  130 => 127,  127 => 126,  118 => 117,  114 => 116,  108 => 113,  104 => 112,  98 => 108,  80 => 90,  70 => 81,  63 => 77,  48 => 66,  42 => 60,  35 => 52,  32 => 45,  30 => 44,  27 => 43,  25 => 5,  22 => 4,);
    }
}
/* {#  ========================================================================*/
/*     EasyAdmin Default Theme | (c) 2015 Javier Eguiluz | MIT License*/
/*     ======================================================================== #}*/
/* */
/* {% set color_schemes = {*/
/*     'dark': {*/
/*         danger: '#D42124',*/
/*         success: '#006B2E',*/
/*         text: '#222222',*/
/*         text_muted: '#737373',*/
/*         link: '#205081',*/
/*         black: '#111111',*/
/*         white: '#FFFFFF',*/
/*         gray_darker: '#252525',*/
/*         gray_dark: '#444',*/
/*         gray: '#AAA',*/
/*         gray_light: '#CCC',*/
/*         gray_lighter: '#F5F5F5',*/
/*         page_background: '#F5F5F5',*/
/*         table_header: '#EEE',*/
/*         table_border: '#CCC',*/
/*         table_row_border: '#DDD',*/
/*     },*/
/*     'light': {*/
/*         danger: '#D42124',*/
/*         success: '#006B2E',*/
/*         text: '#444444',*/
/*         text_muted: '#737373',*/
/*         link: '#205081',*/
/*         black: '#333333',*/
/*         white: '#FFFFFF',*/
/*         gray_darker: '#444',*/
/*         gray_dark: '#AAA',*/
/*         gray: '#CCC',*/
/*         gray_light: '#F5F5F5',*/
/*         gray_lighter: '#FAFAFA',*/
/*         page_background: '#FFFFFF',*/
/*         table_header: '#FAFAFA',*/
/*         table_border: '#FFFFFF',*/
/*         table_row_border: '#E5E5E5',*/
/*     }*/
/* } %}*/
/* */
/* {% set colors = color_schemes[color_scheme] %}*/
/* */
/* {% autoescape false %}*/
/* {# -------------------------------------------------------------------------*/
/*    RESET STYLES*/
/*    ------------------------------------------------------------------------- #}*/
/* {# make the Symfony Web Toolbar look nice by neutralizing the aliasing applied*/
/*    globally by the AdminLTE template styles #}*/
/* .sf-toolbarreset {*/
/*     -webkit-font-smoothing: subpixel-antialiased;*/
/*     -moz-osx-font-smoothing: auto;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    BASIC STYLES*/
/*    ------------------------------------------------------------------------- #}*/
/* body {*/
/*     font-family: Helvetica, "Helvetica Neue", Arial, sans-serif;*/
/* }*/
/* */
/* {# Links*/
/*    ------------------------------------------------------------------------- #}*/
/* a        { color: {{ colors.link }}; }*/
/* a:hover  { opacity: 0.9; }*/
/* a:active { outline: 0; }*/
/* */
/* #main a:active {*/
/*     position: relative;*/
/*     top: 1px;*/
/* }*/
/* */
/* a.text-primary,*/
/* a.text-primary:focus {*/
/*     color: {{ colors.link }};*/
/* }*/
/* a.text-danger,*/
/* a.text-danger:focus {*/
/*     color: {{ colors.danger }};*/
/* }*/
/* a.text-primary:hover,*/
/* a.text-danger:hover {*/
/*     opacity: 0.9;*/
/* }*/
/* */
/* {# Lists*/
/*    ------------------------------------------------------------------------- #}*/
/* ul, ol {*/
/*     margin: 1em 0 1em 1em;*/
/*     padding: 0;*/
/* }*/
/* li {*/
/*     margin-bottom: 1em;*/
/* }*/
/* */
/* ul.inline {*/
/*     list-style: none;*/
/*     margin: 0;*/
/* }*/
/* ul.inline li {*/
/*     margin: 0;*/
/* }*/
/* */
/* {# Flash messages*/
/*    ------------------------------------------------------------------------- #}*/
/* div.flash {*/
/*     padding: .5em;*/
/* }*/
/* div.flash-success {*/
/*     background: {{ colors.success }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* div.flash-error {*/
/*     background: {{ colors.danger }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* div.flash-error strong {*/
/*     padding-right: .5em;*/
/* }*/
/* */
/* {# Labels*/
/*    ------------------------------------------------------------------------- #}*/
/* {# this prevents overriding default styles for labels (label-info, label-primary, etc.) #}*/
/* .label:not([class*=label-]) {*/
/*     background: {{ colors.gray_darker }};*/
/* }*/
/* .label {*/
/*     color: {{ colors.white }};*/
/*     display: inline-block;*/
/*     font-size: 11px;*/
/*     padding: 4px;*/
/*     text-transform: uppercase;*/
/* }*/
/* */
/* .label-success {*/
/*     {# !important is required to override AdminLTE styles #}*/
/*     background: {{ colors.success }} !important;*/
/* }*/
/* .label-danger {*/
/*     {# !important is required to override AdminLTE styles #}*/
/*     background: {{ colors.danger }} !iportant;*/
/* }*/
/* .label-empty {*/
/*     background: transparent;*/
/*     border: 2px dotted;*/
/*     border-radius: 4px;*/
/*     color: {{ colors.gray_light }};*/
/*     padding: 4px 8px;*/
/* }*/
/* */
/* {# this makes boolean labels to be of the same width for most languages #}*/
/* .boolean .label,*/
/* .toggle .label {*/
/*     min-width: 33px;*/
/* }*/
/* */
/* {# Switches / toggles*/
/*    ------------------------------------------------------------------------- #}*/
/* .toggle.btn-xs {*/
/*  width: 44px;*/
/* }*/
/* .toggle-group .btn,*/
/* .toggle-group .btn:hover {*/
/*    border-radius: 3px;*/
/*    font-size: 10px;*/
/*    font-weight: bold;*/
/*    text-transform: uppercase;*/
/* }*/
/* .toggle-group .btn {*/
/*    padding: 4px 6px;*/
/* }*/
/* .toggle-group .btn:hover {*/
/*     border: 0;*/
/* }*/
/* .toggle-group .btn + .btn {*/
/*     margin-left: 0;*/
/* }*/
/* .toggle-group .toggle-on,*/
/* .toggle-group .toggle-on.btn-xs,*/
/* .toggle-group .toggle-on:hover,*/
/* .toggle-group .toggle-on:active,*/
/* .toggle-group .toggle-on:active:hover {*/
/*     background: {{ colors.success }};*/
/*     border-color: {{ colors.success }};*/
/*     color: {{ colors.white }};*/
/*     padding: 4px 5px 4px 0;*/
/*     border: 0;*/
/* }*/
/* .toggle-group .toggle-off,*/
/* .toggle-group .toggle-off.btn-xs,*/
/* .toggle-group .toggle-off:hover,*/
/* .toggle-group .toggle-off:active,*/
/* .toggle-group .toggle-off:active:hover {*/
/*     background: {{ colors.danger }};*/
/*     border-color: {{ colors.danger }};*/
/*     color: {{ colors.white }};*/
/*     padding: 4px 0 4px 5px;*/
/*     border: 0;*/
/* }*/
/* .toggle-group .toggle-handle,*/
/* .toggle-group .toggle-handle:hover,*/
/* .toggle-group .toggle-handle:active,*/
/* .toggle-group .toggle-handle:active:hover {*/
/*     background: {{ colors.gray_lighter }};*/
/*     border: 0;*/
/*     border-radius: 2px;*/
/*     height: 19px;*/
/*     margin-top: 2px;*/
/*     padding: 5px;*/
/* }*/
/* .toggle .btn-success .toggle-handle {*/
/*     box-shadow: -2px 0 1px rgba(0, 0, 0, .2);*/
/* }*/
/* .toggle .btn-danger .toggle-handle {*/
/*     box-shadow: 2px 0 1px rgba(0, 0, 0, .2);*/
/* }*/
/* */
/* {# Badges*/
/*    ------------------------------------------------------------------------- #}*/
/* span.badge {*/
/*     background-color: {{ brand_color }};*/
/* }*/
/* */
/* {# Buttons*/
/*    ------------------------------------------------------------------------- #}*/
/* .btn:focus {*/
/*     outline: none;*/
/* }*/
/* .btn + .btn {*/
/*     margin-left: 5px;*/
/* }*/
/* */
/* button.btn:active {*/
/*     position: relative;*/
/*     top: 1px;*/
/* }*/
/* */
/* .btn,*/
/* .btn:hover,*/
/* .btn:active,*/
/* .btn:focus,*/
/* .btn:active:hover  {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: {{ colors.gray_light }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: {{ colors.gray }};*/
/* {% endif %}*/
/*     border: 1px solid transparent;*/
/*     border-radius: 4px;*/
/*     box-shadow: none;*/
/*     color: {{ colors.text }};*/
/*     display: inline-block;*/
/*     line-height: 1.42857143;*/
/*     opacity: 1;*/
/*     outline: none;*/
/*     padding: 6px 12px;*/
/*     text-align: center;*/
/* }*/
/* */
/* .btn-primary,*/
/* .btn-primary:hover,*/
/* .btn-primary:active,*/
/* .btn-primary:focus,*/
/* .btn-primary:active:hover {*/
/*     background-color: {{ brand_color }};*/
/*     border-color: transparent;*/
/*     color: {{ colors.white }};*/
/* }*/
/* .btn-default,*/
/* .btn-default:hover,*/
/* .btn-default:active,*/
/* .btn-default:focus,*/
/* .btn-default:active:hover {*/
/*     border-color: transparent;*/
/* }*/
/* */
/* .btn-danger,*/
/* .btn-danger:hover,*/
/* .btn-danger:active,*/
/* .btn-danger:focus,*/
/* .btn-danger:active:hover {*/
/*     background-color: {{ colors.danger }};*/
/*     border-color: transparent;*/
/*     color: {{ colors.white }};*/
/* }*/
/* */
/* .btn-success,*/
/* .btn-success:hover,*/
/* .btn-success:active,*/
/* .btn-success:focus,*/
/* .btn-success:active:hover {*/
/*     background-color: {{ colors.success }};*/
/*     border-color: transparent;*/
/*     color: {{ colors.white }};*/
/* }*/
/* */
/* {# .bnt-secondary is for 'buttons' displayed as text links #}*/
/* .btn-secondary,*/
/* .btn-secondary:hover,*/
/* .btn-secondary:active,*/
/* .btn-secondary:focus,*/
/* .btn-secondary:active:hover {*/
/*     background: transparent;*/
/*     color: {{ brand_color }};*/
/*     text-decoration: underline;*/
/* }*/
/* .btn-secondary:hover {*/
/*     text-decoration: none;*/
/* }*/
/* */
/* .btn-primary,*/
/* .btn-danger,*/
/* .btn-success {*/
/*     font-weight: bold;*/
/* }*/
/* */
/* .btn i {*/
/*     font-size: 16px;*/
/*     margin-right: 2px;*/
/* }*/
/* */
/* .btn-flat,*/
/* .btn-flat:hover,*/
/* .btn-flat:active,*/
/* .btn-flat:focus,*/
/* .btn-flat:active:hover {*/
/*     border-radius: 0;*/
/* }*/
/* */
/* {# Forms*/
/*    ------------------------------------------------------------------------- #}*/
/* .form-inline .form-control {*/
/*     margin-bottom: 5px;*/
/* }*/
/* .form-control,*/
/* .form-inline .form-control {*/
/*     border: 1px solid {{ colors.gray }};*/
/*     border-radius: 0;*/
/* {% if 'dark' == color_scheme %}*/
/*     box-shadow: 0 0 3px rgba(0, 0, 0, .15);*/
/* {% endif %}*/
/*     color: {{ colors.text }};*/
/*     -webkit-transition: none;*/
/*     transition: none;*/
/* }*/
/* .form-control:focus {*/
/* {% if 'dark' == color_scheme %}*/
/*     border-color: {{ colors.gray_dark }};*/
/*     box-shadow: 0 0 3px rgba(0, 0, 0, .15);*/
/* {% elseif 'light' == color_scheme %}*/
/*     border-color: {{ colors.gray_darker }};*/
/* {% endif %}*/
/* }*/
/* */
/* .has-error .error-block {*/
/*     color: {{ colors.danger }};*/
/*     font-weight: bold;*/
/*     padding-top: 5px;*/
/* }*/
/* .has-error .error-block .label-danger {*/
/*     margin-right: 3px;*/
/* }*/
/* .has-error .error-block ul {*/
/*     margin: .5em 0 .5em 1.5em;*/
/* }*/
/* .has-error .error-block ul li {*/
/*     margin-bottom: .5em;*/
/* }*/
/* */
/* .help-block,*/
/* .has-error .help-block {*/
/*     color: {{ colors.text_muted }};*/
/*     font-size: 13px;*/
/* }*/
/* .nullable-control {*/
/*    padding-top: 5px;*/
/* }*/
/* */
/* .form-actions.stuck {*/
/*     bottom: 0;*/
/*     position: fixed;*/
/* {% if 'dark' == color_scheme %}*/
/*     background-color: {{ colors.gray_lighter }};*/
/*     box-shadow: 0 -1px 4px {{ colors.gray_light }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     background-color: {{ colors.gray_light }};*/
/*     box-shadow: 0 -1px 4px {{ colors.gray }};*/
/* {% endif %}*/
/*     height: 52px;*/
/*     padding-top: 10px;*/
/* {% if kernel_debug|default(false) %}*/
/*     height: 85px;*/
/*     padding-bottom: 45px;*/
/* {% endif %}*/
/* }*/
/* */
/* {# Field: checkbox*/
/*    ------------------------------------------------------------------------- #}*/
/* form:not(.form-horizontal) .field-checkbox label {*/
/*     padding-top: 23px;*/
/* }*/
/* */
/* {# Field: collection*/
/*    ------------------------------------------------------------------------- #}*/
/* .field-collection .collection-empty {*/
/*     margin: .5em 0;*/
/* }*/
/* */
/* {# Select2 widget*/
/*    ------------------------------------------------------------------------- #}*/
/* {# these styles must be applied after loading the default select2 styles #}*/
/* .select2-container {*/
/*     width: 100% !important;*/
/* }*/
/* .select2-container--bootstrap .select2-selection {*/
/*     border: 1px solid {{ colors.gray }};*/
/*     border-radius: 0;*/
/*     box-shadow: 0 0 3px rgba(0, 0, 0, .15);*/
/*     color: {{ colors.text }};*/
/*     -webkit-transition: none;*/
/*     transition: none;*/
/* }*/
/* .select2-container--bootstrap .select2-selection .select2-search--inline {*/
/*     margin: 0;*/
/* }*/
/* .select2-container--bootstrap .select2-selection--single .select2-selection__rendered {*/
/*     color: {{ colors.text }};*/
/*     padding-top: 4px;*/
/* }*/
/* .select2-container--bootstrap .select2-results__option {*/
/*     margin-bottom: 0;*/
/* }*/
/* .select2-container--bootstrap .select2-results__option[aria-selected=true] {*/
/*     background-color: {{ colors.gray_light }};*/
/*     font-weight: bold;*/
/* }*/
/* .select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {*/
/*     background-color: {{ brand_color }};*/
/* }*/
/* .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {*/
/*     color: {{ colors.text }};*/
/* }*/
/* .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {*/
/*     color: {{ colors.danger }};*/
/*     font-weight: bold;*/
/*     position: relative;*/
/*     top: -1px;*/
/* }*/
/* .select2-container--bootstrap .select2-search--dropdown .select2-search__field {*/
/*     border: 1px solid {{ colors.gray_dark }};*/
/*     border-radius: 0;*/
/*     margin: 5px 10px;*/
/*     padding: 6px;*/
/*     width: 96%;*/
/* }*/
/* .select2-search--inline .select2-search__field:focus {*/
/*     outline: 0;*/
/*     border: 0;*/
/* }*/
/* */
/* {# VichUploaderBundle files and images*/
/*    ------------------------------------------------------------------------- #}*/
/* .easyadmin-vich-image img {*/
/*     border: 3px solid {{ colors.white }};*/
/*     box-shadow: 0 0 3px {{ colors.gray }};*/
/*     max-height: 300px;*/
/*     max-width: 400px;*/
/* }*/
/* .easyadmin-vich-image input[type="file"],*/
/* .easyadmin-vich-file input[type="file"] {*/
/*     padding-top: 7px;*/
/* }*/
/* .easyadmin-vich-file a {*/
/*     display: inline-block;*/
/*     padding-top: 7px;*/
/* }*/
/* {# the checkbox to delete the image/file #}*/
/* .easyadmin-vich-file .field-checkbox {*/
/*     margin-bottom: 0;*/
/* }*/
/* .easyadmin-vich-file .field-checkbox .col-sm-2,*/
/* .easyadmin-vich-image .field-checkbox .col-sm-2 {*/
/*     display: none;*/
/* }*/
/* */
/* {# Thumbnails and image lightbox*/
/*    ------------------------------------------------------------------------- #}*/
/* .easyadmin-thumbnail img {*/
/*     border: 3px solid {{ colors.white }};*/
/*     box-shadow: 0 0 3px {{ colors.gray }};*/
/*     max-height: 100px;*/
/*     max-width: 100%;*/
/* }*/
/* .easyadmin-thumbnail img:hover {*/
/*     cursor: zoom-in;*/
/* }*/
/* .featherlight .easyadmin-lightbox:hover {*/
/*     cursor: zoom-out;*/
/* }*/
/* .easyadmin-lightbox {*/
/*     display: none;*/
/* }*/
/* .featherlight .easyadmin-lightbox {*/
/*     display: block;*/
/* }*/
/* .easyadmin-lightbox img {*/
/*     max-width: 100%;*/
/* }*/
/* */
/* {# Modal windows*/
/*    ------------------------------------------------------------------------- #}*/
/* .modal-dialog .modal-content {*/
/*     border-radius: 0;*/
/* }*/
/* .modal-dialog .modal-content .modal-body h4 {*/
/*     font-size: 21px;*/
/*     margin: .5em 0;*/
/* }*/
/* .modal-dialog .modal-footer {*/
/*     background: {{ colors.gray_lighter }};*/
/*     border-top: 1px solid {{ colors.gray_light }};*/
/*     margin-top: 1.5em;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    LAYOUT*/
/*    ------------------------------------------------------------------------- #}*/
/* */
/* {# Wrapper*/
/*    ------------------------------------------------------------------------- #}*/
/* .content-wrapper {*/
/*     background: {{ colors.page_background }};*/
/* }*/
/* .fixed .content-wrapper {*/
/*     padding-top: 50px;*/
/* }*/
/* */
/* {# Header*/
/*    ------------------------------------------------------------------------- #}*/
/* .main-header {*/
/*     background: {{ brand_color }};*/
/* }*/
/* .main-header .logo {*/
/*     background: rgba(0, 0, 0, 0.15);*/
/*     color: {{ colors.white }};*/
/*     font-family: Helvetica, "Helvetica Neue", Arial, sans-serif; {# needed to override AdminLTE styles #}*/
/*     font-weight: bold;*/
/*     height: 40px;*/
/* }*/
/* .main-header .logo-lg {*/
/*     overflow: hidden;*/
/*     text-overflow: ellipsis;*/
/*     white-space: nowrap;*/
/* }*/
/* .main-header .logo-mini {*/
/*     font-weight: bold;*/
/*     text-align: center;*/
/* }*/
/* .main-header .logo-long .logo-lg {*/
/*     font-size: 16px;*/
/* }*/
/* .main-header > img {*/
/*     margin-top: -2px;*/
/*     max-height: 26px;*/
/*     max-width: 94%;*/
/* }*/
/* .main-header li {*/
/*     margin-bottom: 0;*/
/* }*/
/* */
/* .main-header > .navbar {*/
/* {% if 'dark' == color_scheme %}*/
/*     background-color: {{ brand_color }};*/
/*     color: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     background-color: {{ colors.gray_light }};*/
/*     color: {{ brand_color }};*/
/* {% endif %}*/
/*     min-height: 40px;*/
/* }*/
/* */
/* .main-header .navbar .sidebar-toggle {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.text_muted }};*/
/* {% endif %}*/
/*     padding: 10px;*/
/* }*/
/* .main-header .navbar .sidebar-toggle:hover {*/
/*     background: rgba(0, 0, 0, 0.15);*/
/* }*/
/* */
/* .navbar-custom-menu .user-menu {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: rgba(255, 255, 255, 0.8);*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.text_muted }};*/
/* {% endif %}*/
/*     font-size: 13px;*/
/*     font-weight: bold;*/
/*     padding: 10px;*/
/* }*/
/* */
/* {# Main body*/
/*    ------------------------------------------------------------------------- #}*/
/* #content #main {*/
/*     padding-bottom: 3em;*/
/* }*/
/* .content {*/
/*     padding-top: 10px;*/
/* }*/
/* .content-header {*/
/*     padding: 12px 15px 0 15px;*/
/* }*/
/* .content-header h1 {*/
/*     margin: 0;*/
/*     font-size: 24px;*/
/* }*/
/* */
/* {# Sidebar*/
/*    ------------------------------------------------------------------------- #}*/
/* .main-sidebar,*/
/* .wrapper {*/
/* {% if 'dark' == color_scheme %}*/
/*     background-color: rgb(34, 34, 34);*/
/* {% elseif 'light' == color_scheme %}*/
/*     background-color: {{ colors.gray_light }};*/
/* {% endif %}*/
/* }*/
/* .main-sidebar {*/
/*     padding-top: 40px;*/
/* }*/
/* */
/* .sidebar-menu li.header {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.black }};*/
/* {% endif %}*/
/*     font-size: 12px;*/
/*     font-weight: bold;*/
/*     opacity: 0.4;*/
/*     text-transform: uppercase;*/
/* }*/
/* .treeview-menu > li.header {*/
/*     padding-left: 28px;*/
/* }*/
/* */
/* .sidebar-menu > li > a,*/
/* .sidebar-menu .treeview-menu > li > a {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.white }};*/
/*     opacity: 0.8;*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.gray_darker }};*/
/* {% endif %}*/
/*     border-left: 3px solid transparent;*/
/*     display: block;*/
/*     font-weight: bold;*/
/* }*/
/* .sidebar-menu .treeview-menu > li > a {*/
/*     font-size: 13px;*/
/*     padding: 8px 5px 8px 25px;*/
/* }*/
/* .sidebar-menu > li:hover > a,*/
/* .sidebar-menu > li.active > a,*/
/* .sidebar-menu .treeview-menu > li:hover > a,*/
/* .sidebar-menu .treeview-menu > li.active > a {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.white }};*/
/*     background: rgb(15, 15, 15);*/
/*     border-left-color: rgb(115, 115, 115);*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: rgb(200, 200, 200);*/
/*     border-left-color: rgb(128, 128, 128);*/
/* {% endif %}*/
/*     opacity: 1;*/
/* }*/
/* */
/* .sidebar-menu > li > a > .fa {*/
/*     width: 22px;*/
/* }*/
/* */
/* .sidebar-menu .treeview-menu {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: rgb(60, 60, 60);*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: rgb(220, 220, 220);*/
/* {% endif %}*/
/*     margin: 0;*/
/*     padding: 0;*/
/* }*/
/* */
/* {# applied to the menu item which is active and has its submenu revealed #}*/
/* .sidebar-menu > li.active.submenu-active > a {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: rgb(34, 34, 34);*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: rgb(220, 220, 220);*/
/* {% endif %}*/
/*     border-left-color: transparent;*/
/* }*/
/* {# icon displayed for collapsed submenus #}*/
/* .sidebar-menu li > a > .pull-right {*/
/*     font-weight: bold;*/
/*     text-align: right;*/
/* }*/
/* {# icon displayed for revealed submenus #}*/
/* .sidebar-menu li.active > a > .fa-angle-left {*/
/*     top: 30px;*/
/*     right: 0;*/
/* }*/
/* {# when the sidebar is collapsed, make the icons wider to just display them and not the labels #}*/
/* .sidebar-collapse .sidebar-menu > li > a > .fa {*/
/*     width: 28px;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    COMMON ADMIN PAGES*/
/*    ------------------------------------------------------------------------- #}*/
/* body.easyadmin h1.title {*/
/*     margin-bottom: 10px;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    LIST PAGE*/
/*    ------------------------------------------------------------------------- #}*/
/* */
/* body.list .global-actions {*/
/*     display: table;*/
/*     width: 100%;*/
/* }*/
/* body.list .global-actions .button-action {*/
/*     display: table-cell;*/
/*     padding-left: 10px;*/
/*     vertical-align: middle;*/
/*     width: 120px;*/
/* }*/
/* body.list .global-actions .button-action a {*/
/*     float: right;*/
/* }*/
/* body.list .global-actions .form-action {*/
/*     display: table-cell;*/
/*     width: 100%;*/
/* }*/
/* body.list .global-actions .form-action .input-group {*/
/*     width: 100%;*/
/* }*/
/* */
/* body.list .global-actions .form-control {*/
/*     box-shadow: none;*/
/* }*/
/* body.list .global-actions .input-group-btn > button.btn:not(:last-child) {*/
/*     border-bottom-right-radius: 3px;*/
/*     border-top-right-radius: 3px;*/
/* }*/
/* body.list .global-actions .input-group-btn a.btn {*/
/*     border-radius: 3px;*/
/*     margin-left: 10px;*/
/* }*/
/* */
/* {# Responsive tables*/
/*    ------------------------------------------------------------------------- #}*/
/* body.list .table-responsive,*/
/* body.list table {*/
/*     background: transparent;*/
/*     border: 0;*/
/* }*/
/* body.list table thead {*/
/*     display: none;*/
/* }*/
/* body.list .table tbody {*/
/*     background: transparent;*/
/*     border: 0;*/
/* }*/
/* body.list table tbody tr {*/
/*     background: {{ colors.white }};*/
/* {% if 'dark' == color_scheme %}*/
/*     border: 1px solid {{ colors.gray_light }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     border: 1px solid {{ colors.gray }};*/
/* {% endif %}*/
/*     display: block;*/
/*     margin-bottom: 1em;*/
/* }*/
/* body.list table tbody td {*/
/*     border-bottom: 1px solid {{ colors.table_row_border }};*/
/*     border-top: 0;*/
/*     display: block;*/
/*     text-align: right;*/
/*     vertical-align: middle;*/
/* }*/
/* body.list table tbody td:last-child {*/
/*     border-bottom: 0;*/
/* }*/
/* table td:before {*/
/*     content: attr(data-label);*/
/*     float: left;*/
/*     font-weight: bold;*/
/* }*/
/* table td:after {*/
/*     clear: both;*/
/*     content: "";*/
/*     display: block;*/
/* }*/
/* */
/* body.list table tbody td.image .easyadmin-thumbnail img {*/
/*     border-width: 2px;*/
/*     max-height: 50px;*/
/*     max-width: 150px;*/
/* }*/
/* body.list table tbody td.association .badge {*/
/*     font-size: 13px;*/
/* }*/
/* body.list table tbody td.actions a {*/
/*     font-weight: bold;*/
/*     margin-left: 10px;*/
/* }*/
/* */
/* {# Search results*/
/*    ------------------------------------------------------------------------- #}*/
/* body.list .table tbody span.highlight {*/
/*     background: #FF9;*/
/*     border-radius: 2px;*/
/*     padding: 1px;*/
/* }*/
/* body.list .table tbody .no-results span.highlight,*/
/* body.list .table tbody .actions span.highlight {*/
/*     background: 0;*/
/*     border-radius: 0;*/
/* }*/
/* */
/* {# Pagination*/
/*    ------------------------------------------------------------------------- #}*/
/* body.list .pagination {*/
/*     float: right;*/
/*     margin: 0;*/
/* }*/
/* body.list .pagination > .disabled > span {*/
/*     background: transparent;*/
/*     border: 1px solid transparent;*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.text_muted }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.gray }};*/
/* {% endif %}*/
/* }*/
/* body.list .pagination > li > a {*/
/*     background: {{ colors.white }};*/
/*     border-color: {{ colors.gray_light }};*/
/*     border-radius: 0;*/
/*     color: {{ colors.text }};*/
/* }*/
/* body.list .pagination > li > a:hover {*/
/*     background: {{ brand_color }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* .pagination > li > a,*/
/* .pagination > li > span {*/
/*     padding: 6px 8px;*/
/* }*/
/* body.list .pagination > li i {*/
/*     padding: 0 3px;*/
/* }*/
/* {# this hack is needed to avoid the last pagination page from showing wrong*/
/*    borders for the second pagination element (we need to put this element above*/
/*    the third element) #}*/
/* body.list .pagination.last-page li:nth-child(2) {*/
/*     position: relative;*/
/*     z-index: 1;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    FORM PAGE*/
/*    ------------------------------------------------------------------------- #}*/
/* form label.control-label.required:after {*/
/*     content: "\00a0*";*/
/*     color: {{ colors.danger }};*/
/*     font-size: 16px;*/
/*     position: absolute;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    NEW PAGE*/
/*    ------------------------------------------------------------------------- #}*/
/* body.new textarea {*/
/*     min-height: 250px;*/
/* }*/
/* body.new .field-collection-action {*/
/*     margin: -15px 0 10px;*/
/* }*/
/* body.new .field-collection-item-action {*/
/*     margin: 5px 0 0;*/
/* }*/
/* */
/* body.new #form-actions-row button,*/
/* body.new #form-actions-row a.btn {*/
/*     margin-bottom: 10px;*/
/* }*/
/* body.new .form-horizontal #form-actions-row {*/
/*     padding-left: 15px;*/
/*     padding-right: 15px;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    EDIT PAGE*/
/*    ------------------------------------------------------------------------- #}*/
/* body.edit textarea {*/
/*     min-height: 250px;*/
/* }*/
/* body.edit .field-collection-action {*/
/*     margin: -15px 0 10px;*/
/* }*/
/* body.edit .field-collection-item-action {*/
/*     margin: 5px 0 0;*/
/* }*/
/* */
/* body.edit #form-actions-row button,*/
/* body.edit #form-actions-row a.btn {*/
/*     margin-bottom: 10px;*/
/* }*/
/* body.edit .form-horizontal #form-actions-row {*/
/*     padding-left: 15px;*/
/*     padding-right: 15px;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    SHOW PAGE*/
/*    ------------------------------------------------------------------------- #}*/
/* body.show .form-control {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: {{ colors.gray_lighter }};*/
/* {% endif %}*/
/*     border: 0;*/
/*     border-radius: 0;*/
/*     box-shadow: none;*/
/*     height: auto;*/
/* }*/
/* body.show .form-control.text {*/
/*     min-height: 34px;*/
/*     max-height: 250px;*/
/*     overflow-y: auto;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    ERROR PAGES*/
/*    ------------------------------------------------------------------------- #}*/
/* body.error .error-description {*/
/*     background: {{ colors.white }};*/
/*     border: 1px solid {{ colors.gray_lighter }};*/
/*     box-shadow: 0 0 3px {{ colors.gray_light }};*/
/*     margin: 2em auto 2em;*/
/*     max-width: 90%;*/
/*     min-height: 150px;*/
/*     padding: 0;*/
/* }*/
/* body.error .error-description h1 {*/
/*     background: {{ colors.danger }};*/
/*     color: {{ colors.white }};*/
/*     font-size: 18px;*/
/*     font-weight: bold;*/
/*     margin-top: 0;*/
/*     padding: 10px;*/
/*     text-transform: uppercase;*/
/* }*/
/* body.error .error-message {*/
/*     font-size: 16px;*/
/*     padding: 15px;*/
/* }*/
/* */
/* {# =========================================================================*/
/*    RESPONSIVE*/
/*    ========================================================================= #}*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    VERTICAL TABLETS and LANDSCAPE SMARTPHONES*/
/*    ------------------------------------------------------------------------- #}*/
/* @media (min-width: 768px) {*/
/*     ul, ol {*/
/*         margin-left: 2em;*/
/*     }*/
/* */
/*     .main-header > .navbar {*/
/*       min-height: 50px;*/
/*     }*/
/*     .main-header .logo {*/
/*         text-align: left;*/
/*         height: 50px;*/
/*     }*/
/*     .main-header .logo img {*/
/*         max-height: 48px;*/
/*     }*/
/* */
/*     .main-header .navbar .sidebar-toggle {*/
/*         padding: 15px;*/
/*     }*/
/*     .navbar-custom-menu .user-menu {*/
/*         padding: 17px 15px 13px;*/
/*     }*/
/*     .navbar-custom-menu .user-menu i {*/
/*         padding-right: 4px;*/
/*     }*/
/* */
/*     .main-sidebar {*/
/*         padding-top: 50px;*/
/*     }*/
/* */
/*     {# these table styles are needed to override the "responsive tables" styles #}*/
/*     body.list table {*/
/*         background: {{ colors.white }};*/
/*         border: 1px solid {{ colors.table_border }};*/
/*     }*/
/*     body.list table thead {*/
/*         display: table-header-group;*/
/*     }*/
/*     body.list table thead th {*/
/*         background: {{ colors.table_header }};*/
/*         padding: 0;*/
/*     }*/
/*     body.list table thead th i {*/
/*         color: {{ colors.gray }};*/
/*         padding: 0 3px;*/
/*     }*/
/*     body.list table thead th a,*/
/*     body.list table thead th span {*/
/*         color: {{ colors.text }};*/
/*         display: block;*/
/*         padding: 10px 6px;*/
/*         white-space: nowrap;*/
/*     }*/
/*     body.list table thead th a:hover {*/
/*         background: {{ colors.gray_light }};*/
/*         text-decoration: none;*/
/*     }*/
/*     body.list table thead th.sorted,*/
/*     body.list table thead th.sorted a {*/
/* {% if 'dark' == color_scheme %}*/
/*         background: {{ brand_color }};*/
/*         color: {{ colors.white }};*/
/* {% endif %}*/
/*     }*/
/*     body.list table thead th.sorted a:hover i,*/
/*     body.list table thead th.sorted i {*/
/* {% if 'dark' == color_scheme %}*/
/*         color: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*         color: {{ brand_color }};*/
/* {% endif %}*/
/*     }*/
/*     body.list th.boolean, body.list td.boolean,*/
/*     body.list th.toggle, body.list td.toggle,*/
/*     body.list td.image {*/
/*         text-align: center;*/
/*     }*/
/* */
/*     body.list .table thead tr th {*/
/*         border-bottom: 2px solid {{ colors.gray_light }};*/
/*     }*/
/*     body.list .table thead tr th.sorted {*/
/*         border-bottom: 2px outset {{ brand_color }};*/
/*     }*/
/*     {# these styles are needed to fix some visual glitches when the sort field is the first column #}*/
/*     body.list .table thead tr th:first-child.sorted {*/
/* {% if 'dark' == color_scheme %}*/
/*         border-left: 1px solid {{ brand_color }};*/
/*         border-top: 1px solid {{ brand_color }};*/
/* {% endif %}*/
/*     }*/
/*     body.list .table tbody {*/
/*         border-bottom: 2px double {{ colors.gray_light }};*/
/*     }*/
/*     body.list table tbody tr {*/
/*         border: 0;*/
/*         display: table-row;*/
/*         margin-bottom: 0;*/
/*     }*/
/*     body.list table tbody td {*/
/*         border-bottom: 0;*/
/*         border-top: 1px solid {{ colors.table_row_border }};*/
/*         display: table-cell;*/
/*         text-align: left;*/
/*     }*/
/*     table td:before {*/
/*         content: none;*/
/*         float: none;*/
/*     }*/
/*     body.list table tbody td.sorted {*/
/*         background: {{ colors.gray_lighter }};*/
/*         border-color: {{ colors.table_row_border }};*/
/*     }*/
/*     body.list .table tbody tr:hover td {*/
/*         background: {{ colors.gray_lighter }};*/
/*     }*/
/*     body.list table tbody td.actions a {*/
/*         margin-left: 0;*/
/*         margin-right: 10px;*/
/*     }*/
/* */
/*     .field-date select + select,*/
/*     .field-time select + select,*/
/*     .field-datetime select + select {*/
/*         margin-left: 2px;*/
/*     }*/
/* */
/*     body.error .error-description {*/
/*         max-width: 70%;*/
/*     }*/
/* */
/*     .pagination > li > a,*/
/*     .pagination > li > span {*/
/*         padding: 6px 12px;*/
/*     }*/
/* */
/*     .form-inline .form-control {*/
/*         margin-bottom: 0;*/
/*     }*/
/* */
/*     body.new .form-horizontal #form-actions-row {*/
/*         margin-left: 16.66666667%;*/
/*     }*/
/* */
/*     body.edit .form-horizontal #form-actions-row {*/
/*         margin-left: 16.66666667%;*/
/*     }*/
/* }*/
/* {% endautoescape %}*/
/* */
