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

/* F:\website\slgamers/themes/slgamers/layouts/main.htm */
class __TwigTemplate_a86dd9a10fda9b277616edb074aadc887a89e21e66d13b1f8effa4bb7408aa1a extends \Twig\Template
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
<html lang=\"zxx\">
<head>
<title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</title>
<meta charset=\"UTF-8\">
<meta name=\"description\" content=\"Sri lankan Gamers - eSports Community\">
<meta name=\"keywords\" content=\"gaming, html\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<!-- Favicon -->
<link href=\"";
        // line 11
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png"), 60, 60]);
        echo "\" rel=\"shortcut icon\"/>

<!-- Google font -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap\" rel=\"stylesheet\">

<!-- Stylesheets -->
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.min.css");
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slicknav.min.css");
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/flip.css");
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/basic.css");
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/dropzone.css");
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/venobox.min.css");
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/hover-min.css");
        echo "\"/>


<!-- Main Stylesheets -->
<link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\"/>


<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id=\"preloder\">
<div class=\"loader text-warning\"></div>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id=\"fb-root\"></div>
<script>
window.fbAsyncInit = function() {
\tFB.init({
\t\txfbml            : true,
\t\tversion          : 'v7.0'
\t});
};

(function(d, s, id) {
\tvar js, fjs = d.getElementsByTagName(s)[0];
\tif (d.getElementById(id)) return;
\tjs = d.createElement(s); js.id = id;
\tjs.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
\tfjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class=\"fb-customerchat\"
attribution=setup_tool
page_id=\"159724108289019\"
logged_in_greeting=\"Hi! How can we help you? \"
logged_out_greeting=\"Hi! How can we help you? \">
</div>
<!-- Header section -->
<nav class=\"navbar navbar-expand-lg sticky-top navbar-dark bg-dark\">
<a class=\"navbar-brand\" href=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png"), 60, 60]);
        echo "\" alt=\"\"></a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
<span class=\"navbar-toggler-icon\"></span>
</button>
<div class=\"collapse navbar-collapse \" id=\"navbarNavDropdown\">
<ul class=\"navbar-nav\">
<li class=\"nav-item ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78) == "home")) {
            echo " active font-weight-bolder ";
        }
        echo "\">

<a class=\"nav-link\" href=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
</li>
<li class=\"nav-item ";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82) == "games")) {
            echo " active font-weight-bolder ";
        }
        echo "\">
<a class=\"nav-link\" href=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("games");
        echo "\">Games</a>
</li>
<li class=\"nav-item nav-item ";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85) == "tournament")) {
            echo " active font-weight-bolder ";
        }
        echo "\">
<a class=\"nav-link\" href=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tournament");
        echo "\">Tournaments</a>
</li>
<li class=\"nav-item nav-item ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88) == "video-gallery")) {
            echo " active font-weight-bolder ";
        }
        echo "\">
<a class=\"nav-link\" href=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("video-gallery");
        echo "\">Video Gallery</a>
</li>

</ul>
</div>
</nav>
<!-- Header section end -->
";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96) == "home")) {
            // line 97
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        } else {
            // line 99
            echo "<div style=\" margin-bottom: 0px; background: url(";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/banner-bg.jpg");
            echo ");\" class=\"jumbotron jumbotron-fluid\">
<div class=\"container-fluid\">
<div class=\"col-12 col-sm-12 text-left\">
<h2 style=\"text-shadow: black 2px 0px 2px;\" class=\" text-light font-weight-bolder\">";
            // line 102
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 102)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 102), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 102), "title", [], "any", false, false, false, 102), "html", null, true);
            }
            echo "</h2>
<p style=\"text-shadow: black 2px 0px 2px;\" class=\"lead text-light font-weight-bolder\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 103), "description", [], "any", false, false, false, 103), "html", null, true);
            echo "</p>
</div>

</div>
</div>
";
            // line 108
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        }
        // line 110
        echo "<!-- Footer section -->
<div class=\"footer-section\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-lg-3\">
<div class=\"footer-widget\">
<div class=\"about-widget\">
<img src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\">
<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. Morbi id dictum quam, ut commodo.</p>
</div>
</div>
</div>
<div class=\"col-lg-2 col-sm-6\">
<div class=\"footer-widget\">
<h2 class=\"fw-title\">Usfull Links</h2>
<ul>
<li><a href=\"\">Games</a></li>
<li><a href=\"\">testimonials</a></li>
<li><a href=\"\">Reviews</a></li>
<li><a href=\"\">Characters</a></li>
<li><a href=\"\">Latest news</a></li>
</ul>
</div>
</div>
<div class=\"col-lg-2 col-sm-6\">
<div class=\"footer-widget\">
<h2 class=\"fw-title\">Services</h2>
<ul>
<li><a href=\"\">About us</a></li>
<li><a href=\"\">Services</a></li>
<li><a href=\"\">Become a writer</a></li>
<li><a href=\"\">Jobs</a></li>
<li><a href=\"\">FAQ</a></li>
</ul>
</div>
</div>
<div class=\"col-lg-2 col-sm-6\">
<div class=\"footer-widget\">
<h2 class=\"fw-title\">Careeres</h2>
<ul>
<li><a href=\"\">Donate</a></li>
<li><a href=\"\">Services</a></li>
<li><a href=\"\">Subscriptions</a></li>
<li><a href=\"\">Careers</a></li>
<li><a href=\"\">Our team</a></li>
</ul>
</div>
</div>
<div class=\"col-lg-3 col-sm-6\">
<div class=\"footer-widget fw-latest-post\">
<h2 class=\"fw-title\">Usfull Links</h2>
<div class=\"latest-news-widget\">
<div class=\"ln-item\">
<div class=\"ln-text\">
<div class=\"ln-date\">April 1, 2019</div>
<h6>10 Amazing new games</h6>
<div class=\"ln-metas\">
<div class=\"ln-meta\">By Admin</div>
<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
<div class=\"ln-meta\">3 Comments</div>
</div>
</div>
</div>
<div class=\"ln-item\">
<div class=\"ln-text\">
<div class=\"ln-date\">April 1, 2019</div>
<h6>10 Amazing new games</h6>
<div class=\"ln-metas\">
<div class=\"ln-meta\">By Admin</div>
<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
<div class=\"ln-meta\">3 Comments</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<div class=\"social-links-warp\">
<div class=\"container\">
<div class=\"social-links\">
<a href=\"#\"><i class=\"fa fa-instagram\"></i><span>instagram</span></a>
<a href=\"#\"><i class=\"fa fa-pinterest\"></i><span>pinterest</span></a>
<a href=\"#\"><i class=\"fa fa-facebook\"></i><span>facebook</span></a>
<a href=\"#\"><i class=\"fa fa-twitter\"></i><span>twitter</span></a>
<a href=\"#\"><i class=\"fa fa-youtube\"></i><span>youtube</span></a>
<a href=\"#\"><i class=\"fa fa-tumblr-square\"></i><span>tumblr</span></a>
</div>
</div>
</div>
</div>
<!-- Footer section end -->

<!--====== Javascripts & Jquery ======-->
<script src=\"";
        // line 206
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
<script src=\"";
        // line 207
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 208
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.slicknav.js");
        echo "\"></script>
<script src=\"";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
<script src=\"";
        // line 210
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/circle-progress.min.js");
        echo "\"></script>
<script src=\"";
        // line 211
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>
<script src=\"";
        // line 212
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
<script src=\"";
        // line 213
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/dropzone.js");
        echo "\"></script>
<script src=\"";
        // line 214
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/venobox.min.js");
        echo "\"></script>
<script src=\"https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js\"></script>
<script src=\"https://kit.fontawesome.com/fa52e6fc3b.js\" crossorigin=\"anonymous\"></script>

<script>
\$(document).ready(function(){
\t\$('.venobox').venobox({

\t});
});
</script>
<script>
var \$grid = \$('.play').isotope({
\t\t  // options
\t\t  itemSelector: '.item',
\t\t  layoutMode: 'fitRows'
\t\t  
\t\t});
\$('.filter button').on(\"click\", function(){
\tvar value = \$(this).attr('data-name');
\t\t\t//console.log('value',value);
\t\t\t\$grid.isotope({
\t\t\t\tfilter: value
\t\t\t});\t\t
\t\t})
</script>
";
        // line 240
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
        // line 241
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 242
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "F:\\website\\slgamers/themes/slgamers/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 242,  418 => 241,  407 => 240,  378 => 214,  374 => 213,  370 => 212,  366 => 211,  362 => 210,  358 => 209,  354 => 208,  350 => 207,  346 => 206,  254 => 117,  245 => 110,  242 => 108,  234 => 103,  225 => 102,  218 => 99,  215 => 97,  213 => 96,  203 => 89,  197 => 88,  192 => 86,  186 => 85,  181 => 83,  175 => 82,  170 => 80,  163 => 78,  152 => 72,  108 => 31,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  52 => 11,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">
<head>
<title>{{this.page.title}}</title>
<meta charset=\"UTF-8\">
<meta name=\"description\" content=\"Sri lankan Gamers - eSports Community\">
<meta name=\"keywords\" content=\"gaming, html\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<!-- Favicon -->
<link href=\"{{'assets/img/logo.png'|theme|resize(60,60)}}\" rel=\"shortcut icon\"/>

<!-- Google font -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap\" rel=\"stylesheet\">

<!-- Stylesheets -->
<link rel=\"stylesheet\" href=\"{{'assets/css/bootstrap.min.css'|theme}}\"/>
<link rel=\"stylesheet\" href=\"{{'assets/css/font-awesome.min.css'|theme}}\"/>
<link rel=\"stylesheet\" href=\"{{'assets/css/magnific-popup.css'|theme}}\"/>
<link rel=\"stylesheet\" href=\"{{'assets/css/owl.carousel.min.css'|theme}}\"/>
<link rel=\"stylesheet\" href=\"{{'assets/css/animate.css'|theme}}\"/>
<link rel=\"stylesheet\" href=\"{{'assets/css/slicknav.min.css'|theme}}\"/>
<link rel=\"stylesheet\" href=\"{{'assets/css/flip.css'|theme}}\"/>
<link rel=\"stylesheet\" href=\"{{'assets/css/basic.css'|theme}}\"/>
<link rel=\"stylesheet\" href=\"{{'assets/css/dropzone.css'|theme}}\"/>
<link rel=\"stylesheet\" href=\"{{'assets/css/venobox.min.css'|theme}}\"/>
<link rel=\"stylesheet\" href=\"{{'assets/css/hover-min.css'|theme}}\"/>


<!-- Main Stylesheets -->
<link rel=\"stylesheet\" href=\"{{'assets/css/style.css'|theme}}\"/>


<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id=\"preloder\">
<div class=\"loader text-warning\"></div>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id=\"fb-root\"></div>
<script>
window.fbAsyncInit = function() {
\tFB.init({
\t\txfbml            : true,
\t\tversion          : 'v7.0'
\t});
};

(function(d, s, id) {
\tvar js, fjs = d.getElementsByTagName(s)[0];
\tif (d.getElementById(id)) return;
\tjs = d.createElement(s); js.id = id;
\tjs.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
\tfjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class=\"fb-customerchat\"
attribution=setup_tool
page_id=\"159724108289019\"
logged_in_greeting=\"Hi! How can we help you? \"
logged_out_greeting=\"Hi! How can we help you? \">
</div>
<!-- Header section -->
<nav class=\"navbar navbar-expand-lg sticky-top navbar-dark bg-dark\">
<a class=\"navbar-brand\" href=\"{{'home'|page}}\"><img src=\"{{'assets/img/logo.png'|theme|resize(60,60)}}\" alt=\"\"></a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
<span class=\"navbar-toggler-icon\"></span>
</button>
<div class=\"collapse navbar-collapse \" id=\"navbarNavDropdown\">
<ul class=\"navbar-nav\">
<li class=\"nav-item {% if this.page.id == 'home' %} active font-weight-bolder {% endif %}\">

<a class=\"nav-link\" href=\"{{'home'|page}}\">Home <span class=\"sr-only\">(current)</span></a>
</li>
<li class=\"nav-item {% if this.page.id == 'games' %} active font-weight-bolder {% endif %}\">
<a class=\"nav-link\" href=\"{{'games'|page}}\">Games</a>
</li>
<li class=\"nav-item nav-item {% if this.page.id == 'tournament' %} active font-weight-bolder {% endif %}\">
<a class=\"nav-link\" href=\"{{'tournament'|page}}\">Tournaments</a>
</li>
<li class=\"nav-item nav-item {% if this.page.id == 'video-gallery' %} active font-weight-bolder {% endif %}\">
<a class=\"nav-link\" href=\"{{'video-gallery'|page}}\">Video Gallery</a>
</li>

</ul>
</div>
</nav>
<!-- Header section end -->
{% if this.page.id == 'home' %}
{% page %}
{% else %}
<div style=\" margin-bottom: 0px; background: url({{'assets/img/banner-bg.jpg'|theme}});\" class=\"jumbotron jumbotron-fluid\">
<div class=\"container-fluid\">
<div class=\"col-12 col-sm-12 text-left\">
<h2 style=\"text-shadow: black 2px 0px 2px;\" class=\" text-light font-weight-bolder\">{%if record.title %}{{record.title}} {%else%}{{this.page.title}}{% endif %}</h2>
<p style=\"text-shadow: black 2px 0px 2px;\" class=\"lead text-light font-weight-bolder\">{{this.page.description}}</p>
</div>

</div>
</div>
{% page %}
{% endif %}
<!-- Footer section -->
<div class=\"footer-section\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-lg-3\">
<div class=\"footer-widget\">
<div class=\"about-widget\">
<img src=\"{{'assets/img/logo.png'|theme}}\" alt=\"\">
<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. Morbi id dictum quam, ut commodo.</p>
</div>
</div>
</div>
<div class=\"col-lg-2 col-sm-6\">
<div class=\"footer-widget\">
<h2 class=\"fw-title\">Usfull Links</h2>
<ul>
<li><a href=\"\">Games</a></li>
<li><a href=\"\">testimonials</a></li>
<li><a href=\"\">Reviews</a></li>
<li><a href=\"\">Characters</a></li>
<li><a href=\"\">Latest news</a></li>
</ul>
</div>
</div>
<div class=\"col-lg-2 col-sm-6\">
<div class=\"footer-widget\">
<h2 class=\"fw-title\">Services</h2>
<ul>
<li><a href=\"\">About us</a></li>
<li><a href=\"\">Services</a></li>
<li><a href=\"\">Become a writer</a></li>
<li><a href=\"\">Jobs</a></li>
<li><a href=\"\">FAQ</a></li>
</ul>
</div>
</div>
<div class=\"col-lg-2 col-sm-6\">
<div class=\"footer-widget\">
<h2 class=\"fw-title\">Careeres</h2>
<ul>
<li><a href=\"\">Donate</a></li>
<li><a href=\"\">Services</a></li>
<li><a href=\"\">Subscriptions</a></li>
<li><a href=\"\">Careers</a></li>
<li><a href=\"\">Our team</a></li>
</ul>
</div>
</div>
<div class=\"col-lg-3 col-sm-6\">
<div class=\"footer-widget fw-latest-post\">
<h2 class=\"fw-title\">Usfull Links</h2>
<div class=\"latest-news-widget\">
<div class=\"ln-item\">
<div class=\"ln-text\">
<div class=\"ln-date\">April 1, 2019</div>
<h6>10 Amazing new games</h6>
<div class=\"ln-metas\">
<div class=\"ln-meta\">By Admin</div>
<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
<div class=\"ln-meta\">3 Comments</div>
</div>
</div>
</div>
<div class=\"ln-item\">
<div class=\"ln-text\">
<div class=\"ln-date\">April 1, 2019</div>
<h6>10 Amazing new games</h6>
<div class=\"ln-metas\">
<div class=\"ln-meta\">By Admin</div>
<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
<div class=\"ln-meta\">3 Comments</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<div class=\"social-links-warp\">
<div class=\"container\">
<div class=\"social-links\">
<a href=\"#\"><i class=\"fa fa-instagram\"></i><span>instagram</span></a>
<a href=\"#\"><i class=\"fa fa-pinterest\"></i><span>pinterest</span></a>
<a href=\"#\"><i class=\"fa fa-facebook\"></i><span>facebook</span></a>
<a href=\"#\"><i class=\"fa fa-twitter\"></i><span>twitter</span></a>
<a href=\"#\"><i class=\"fa fa-youtube\"></i><span>youtube</span></a>
<a href=\"#\"><i class=\"fa fa-tumblr-square\"></i><span>tumblr</span></a>
</div>
</div>
</div>
</div>
<!-- Footer section end -->

<!--====== Javascripts & Jquery ======-->
<script src=\"{{'assets/js/jquery-3.2.1.min.js'|theme}}\"></script>
<script src=\"{{'assets/js/bootstrap.min.js'|theme}}\"></script>
<script src=\"{{'assets/js/jquery.slicknav.js'|theme}}\"></script>
<script src=\"{{'assets/js/owl.carousel.min.js'|theme}}\"></script>
<script src=\"{{'assets/js/circle-progress.min.js'|theme}}\"></script>
<script src=\"{{'assets/js/jquery.magnific-popup.min.js'|theme}}\"></script>
<script src=\"{{'assets/js/main.js'|theme}}\"></script>
<script src=\"{{'assets/js/dropzone.js'|theme}}\"></script>
<script src=\"{{'assets/js/venobox.min.js'|theme}}\"></script>
<script src=\"https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js\"></script>
<script src=\"https://kit.fontawesome.com/fa52e6fc3b.js\" crossorigin=\"anonymous\"></script>

<script>
\$(document).ready(function(){
\t\$('.venobox').venobox({

\t});
});
</script>
<script>
var \$grid = \$('.play').isotope({
\t\t  // options
\t\t  itemSelector: '.item',
\t\t  layoutMode: 'fitRows'
\t\t  
\t\t});
\$('.filter button').on(\"click\", function(){
\tvar value = \$(this).attr('data-name');
\t\t\t//console.log('value',value);
\t\t\t\$grid.isotope({
\t\t\t\tfilter: value
\t\t\t});\t\t
\t\t})
</script>
{% framework extras %}
{% scripts %}

</body>
</html>", "F:\\website\\slgamers/themes/slgamers/layouts/main.htm", "");
    }
}
