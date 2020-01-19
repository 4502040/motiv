<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/motiv/themes/motiv/layouts/default.htm */
class __TwigTemplate_85e05aa350021119c0035a6056fc77f15fda2ddc9b39f8e94ce53009dbb8c401 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Motiv.fun - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Motiv.Fun\">
        <meta name=\"generator\" content=\"Motiv.fun\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/open-iconic-bootstrap.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.theme.default.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/aos.css");
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/ionicons.min.css");
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap-datepicker.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery.timepicker.css");
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/flaticon.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/icomoon.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">

        ";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 36
        echo "    </head>
    <body>

    <nav id=\"colorlib-main-nav\" role=\"navigation\">
        <a href=\"#\" class=\"js-colorlib-nav-toggle colorlib-nav-toggle active\"><i></i></a>
        <div class=\"js-fullheight colorlib-table\">
            <div class=\"colorlib-table-cell js-fullheight\">
                <div class=\"row d-flex justify-content-end\">
                    <div class=\"col-md-12 px-5\">
                        <ul class=\"mb-5\">
                            <li class=\"active\"><a href=\"index.html\"><span>Home</span></a></li>
                            <li><a href=\"fashion.html\"><span>Fashion</span></a></li>
                            <li><a href=\"model.html\"><span>Model</span></a></li>
                            <li><a href=\"travel.html\"><span>Travel</span></a></li>
                            <li><a href=\"about.html\"><span>About us</span></a></li>
                            <li><a href=\"contact.html\"><span>Contact</span></a></li>
                        </ul>
                    </div>
                    <div class=\"col px-5 copyright\">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br> | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id=\"colorlib-page\">
        <header>
            <div class=\"container-fluid\">
                <div class=\"row no-gutters\">
                    <div class=\"col-md-12\">
                        <div class=\"colorlib-navbar-brand\">
                            <a class=\"colorlib-logo\" href=\"index.html\">Libro</a>
                        </div>
                        <a href=\"#\" class=\"js-colorlib-nav-toggle colorlib-nav-toggle\"><i></i></a>
                    </div>
                </div>
            </div>
        </header>

        <section class=\"ftco-fixed clearfix\">
            <div class=\"image js-fullheight float-left\">
                <div class=\"home-slider owl-carousel js-fullheight\">
                    <div class=\"slider-item js-fullheight\" style=\"background-image:  url(";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg_1.jpg");
        echo ");\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row slider-text align-items-end\" data-scrollax-parent=\"true\">
                                <div class=\"col-md-10 col-sm-12 ftco-animate\" data-scrollax=\" properties: { translateY: '70%' }\">
                                    <p class=\"cat\"><span>Fashion</span></p>
                                    <h1 class=\"mb-3\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Popular Lifestyle with Fashion &amp; Modeling</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"slider-item js-fullheight\" style=\"background-image: url(";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg_2.jpg");
        echo ");\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row slider-text align-items-end\" data-scrollax-parent=\"true\">
                                <div class=\"col-md-10 col-sm-12 ftco-animate\" data-scrollax=\" properties: { translateY: '70%' }\">
                                    <p class=\"cat\"><span>Model</span></p>
                                    <h1 class=\"mb-3\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Canadian Girl make your world go round</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"page-container float-right\">
                ";
        // line 105
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 106
        echo "            </div><!-- end: page-container-->
        </section>

        <!-- loader -->
        <div id=\"ftco-loader\" class=\"show fullscreen\">
            <svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg>
        </div>

    </div>

    <script src=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-migrate-3.0.1.min.js");
        echo "\"></script>
    <script src=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
    <script src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.easing.1.3.js");
        echo "\"></script>
    <script src=\"";
        // line 121
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.waypoints.min.js");
        echo "\"></script>
    <script src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.stellar.min.js");
        echo "\"></script>
    <script src=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 124
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/aos.js");
        echo "\"></script>
    <script src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.animateNumber.min.js");
        echo "\"></script>
    <script src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scrollax.min.js");
        echo "\"></script>
    <script src=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap-datepicker.js");
        echo "\"></script>
    <script src=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.timepicker.min.js");
        echo "\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"";
        // line 131
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/google-map.js");
        echo "\"></script>
    <script src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>


    ";
        // line 135
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 136
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 137
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/motiv/themes/motiv/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 137,  293 => 136,  282 => 135,  276 => 132,  272 => 131,  267 => 129,  263 => 128,  259 => 127,  255 => 126,  251 => 125,  247 => 124,  243 => 123,  239 => 122,  235 => 121,  231 => 120,  227 => 119,  223 => 118,  219 => 117,  215 => 116,  203 => 106,  201 => 105,  184 => 91,  169 => 79,  124 => 36,  121 => 35,  116 => 33,  112 => 32,  108 => 31,  103 => 29,  99 => 28,  94 => 26,  89 => 24,  84 => 22,  80 => 21,  76 => 20,  71 => 18,  67 => 17,  57 => 10,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Motiv.fun - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Motiv.Fun\">
        <meta name=\"generator\" content=\"Motiv.fun\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"{{ 'assets/css/open-iconic-bootstrap.min.css'|theme}}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css'|theme}}\">

        <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel.min.css'|theme}}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.theme.default.min.css'|theme}}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/magnific-popup.css'|theme}}\">

        <link rel=\"stylesheet\" href=\"{{ 'assets/css/aos.css'|theme}}\">

        <link rel=\"stylesheet\" href=\"{{ 'assets/css/ionicons.min.css'|theme}}\">

        <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap-datepicker.css'|theme}}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/jquery.timepicker.css'|theme}}\">

        <link rel=\"stylesheet\" href=\"{{ 'assets/css/flaticon.css'|theme}}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/icomoon.css'|theme}}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme}}\">

        {% styles %}
    </head>
    <body>

    <nav id=\"colorlib-main-nav\" role=\"navigation\">
        <a href=\"#\" class=\"js-colorlib-nav-toggle colorlib-nav-toggle active\"><i></i></a>
        <div class=\"js-fullheight colorlib-table\">
            <div class=\"colorlib-table-cell js-fullheight\">
                <div class=\"row d-flex justify-content-end\">
                    <div class=\"col-md-12 px-5\">
                        <ul class=\"mb-5\">
                            <li class=\"active\"><a href=\"index.html\"><span>Home</span></a></li>
                            <li><a href=\"fashion.html\"><span>Fashion</span></a></li>
                            <li><a href=\"model.html\"><span>Model</span></a></li>
                            <li><a href=\"travel.html\"><span>Travel</span></a></li>
                            <li><a href=\"about.html\"><span>About us</span></a></li>
                            <li><a href=\"contact.html\"><span>Contact</span></a></li>
                        </ul>
                    </div>
                    <div class=\"col px-5 copyright\">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br> | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id=\"colorlib-page\">
        <header>
            <div class=\"container-fluid\">
                <div class=\"row no-gutters\">
                    <div class=\"col-md-12\">
                        <div class=\"colorlib-navbar-brand\">
                            <a class=\"colorlib-logo\" href=\"index.html\">Libro</a>
                        </div>
                        <a href=\"#\" class=\"js-colorlib-nav-toggle colorlib-nav-toggle\"><i></i></a>
                    </div>
                </div>
            </div>
        </header>

        <section class=\"ftco-fixed clearfix\">
            <div class=\"image js-fullheight float-left\">
                <div class=\"home-slider owl-carousel js-fullheight\">
                    <div class=\"slider-item js-fullheight\" style=\"background-image:  url({{'assets/images/bg_1.jpg'|theme}});\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row slider-text align-items-end\" data-scrollax-parent=\"true\">
                                <div class=\"col-md-10 col-sm-12 ftco-animate\" data-scrollax=\" properties: { translateY: '70%' }\">
                                    <p class=\"cat\"><span>Fashion</span></p>
                                    <h1 class=\"mb-3\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Popular Lifestyle with Fashion &amp; Modeling</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"slider-item js-fullheight\" style=\"background-image: url({{'assets/images/bg_2.jpg'|theme}});\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row slider-text align-items-end\" data-scrollax-parent=\"true\">
                                <div class=\"col-md-10 col-sm-12 ftco-animate\" data-scrollax=\" properties: { translateY: '70%' }\">
                                    <p class=\"cat\"><span>Model</span></p>
                                    <h1 class=\"mb-3\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Canadian Girl make your world go round</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"page-container float-right\">
                {% page %}
            </div><!-- end: page-container-->
        </section>

        <!-- loader -->
        <div id=\"ftco-loader\" class=\"show fullscreen\">
            <svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg>
        </div>

    </div>

    <script src=\"{{ 'assets/js/jquery.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery-migrate-3.0.1.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/popper.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.easing.1.3.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.waypoints.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.stellar.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.magnific-popup.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/aos.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.animateNumber.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/scrollax.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/bootstrap-datepicker.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.timepicker.min.js'|theme }}\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"{{ 'assets/js/google-map.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>


    {% framework extras %}
    {% scripts %}

    </body>
</html>", "/var/www/motiv/themes/motiv/layouts/default.htm", "");
    }
}
