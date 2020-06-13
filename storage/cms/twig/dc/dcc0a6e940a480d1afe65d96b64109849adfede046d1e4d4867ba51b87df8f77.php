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
\t<title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"description\" content=\"Sri lankan Gamers - eSports Community\">
\t<meta name=\"keywords\" content=\"gaming, html\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t
\t<!-- Favicon -->
\t<link href=\"img/favicon.ico\" rel=\"shortcut icon\"/>

\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap\" rel=\"stylesheet\">

\t<!-- Stylesheets -->
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.min.css");
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slicknav.min.css");
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/flip.css");
        echo "\"/>

\t<!-- Main Stylesheets -->
\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\"/>


\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->

</head>
<body>
\t<!-- Page Preloder -->
\t<div id=\"preloder\">
\t\t<div class=\"loader\"></div>
\t</div>

\t<!-- Header section -->
\t<div class=\"clearfix\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark float\">
\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 44
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.jpg"), 60, 60]);
        echo "\" alt=\"\"></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t  <span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse \" id=\"navbarNavDropdown\">
\t\t\t  <ul class=\"navbar-nav \">
\t\t\t\t<li class=\"nav-item ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50) == "home")) {
            echo " active font-weight-bolder ";
        }
        echo "\">
\t\t\t\t
\t\t\t\t  <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54) == "games")) {
            echo " active font-weight-bolder ";
        }
        echo "\">
\t\t\t\t  <a class=\"nav-link\" href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("games");
        echo "\">Games</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item nav-item ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57) == "tournament")) {
            echo " active font-weight-bolder ";
        }
        echo "\">
\t\t\t\t  <a class=\"nav-link\" href=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tournament");
        echo "\">Tournamets</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t  </ul>
\t\t\t</div>
\t\t  </nav>
\t</div>
\t<!-- Header section end -->
";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66) == "home")) {
            // line 67
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        } else {
            // line 69
            echo "<div style=\"background: url(";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/banner-bg.jpg");
            echo ");\" class=\"jumbotron jumbotron-fluid\">
\t<div class=\"container\">
\t\t<h1 class=\"display-3\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 71), "title", [], "any", false, false, false, 71), "html", null, true);
            echo "</h1>
\t\t<p class=\"lead\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 72), "description", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
\t\t
\t</div>
</div>
";
            // line 76
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        }
        // line 78
        echo "\t<!-- Footer section -->
\t<div class=\"footer-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<div class=\"about-widget\">
\t\t\t\t\t\t\t<img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. Morbi id dictum quam, ut commodo.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2 class=\"fw-title\">Usfull Links</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"\">Games</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">testimonials</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Reviews</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Characters</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Latest news</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2 class=\"fw-title\">Services</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"\">About us</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Services</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Become a writer</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Jobs</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">FAQ</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2 class=\"fw-title\">Careeres</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"\">Donate</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Services</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Subscriptions</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Careers</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Our team</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget fw-latest-post\">
\t\t\t\t\t\t<h2 class=\"fw-title\">Usfull Links</h2>
\t\t\t\t\t\t<div class=\"latest-news-widget\">
\t\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"social-links-warp\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-instagram\"></i><span>instagram</span></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-pinterest\"></i><span>pinterest</span></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i><span>facebook</span></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i><span>twitter</span></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-youtube\"></i><span>youtube</span></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-tumblr-square\"></i><span>tumblr</span></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Footer section end -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t<!--====== Javascripts & Jquery ======-->
\t<script src=\"";
        // line 174
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 175
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.slicknav.js");
        echo "\"></script>
\t<script src=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 178
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/circle-progress.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 179
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
\t</body>
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
        return array (  308 => 180,  304 => 179,  300 => 178,  296 => 177,  292 => 176,  288 => 175,  284 => 174,  192 => 85,  183 => 78,  180 => 76,  173 => 72,  169 => 71,  163 => 69,  160 => 67,  158 => 66,  147 => 58,  141 => 57,  136 => 55,  130 => 54,  125 => 52,  118 => 50,  109 => 44,  88 => 26,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">
<head>
\t<title>{{this.page.title}}</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"description\" content=\"Sri lankan Gamers - eSports Community\">
\t<meta name=\"keywords\" content=\"gaming, html\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t
\t<!-- Favicon -->
\t<link href=\"img/favicon.ico\" rel=\"shortcut icon\"/>

\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap\" rel=\"stylesheet\">

\t<!-- Stylesheets -->
\t<link rel=\"stylesheet\" href=\"{{'assets/css/bootstrap.min.css'|theme}}\"/>
\t<link rel=\"stylesheet\" href=\"{{'assets/css/font-awesome.min.css'|theme}}\"/>
\t<link rel=\"stylesheet\" href=\"{{'assets/css/magnific-popup.css'|theme}}\"/>
\t<link rel=\"stylesheet\" href=\"{{'assets/css/owl.carousel.min.css'|theme}}\"/>
\t<link rel=\"stylesheet\" href=\"{{'assets/css/animate.css'|theme}}\"/>
\t<link rel=\"stylesheet\" href=\"{{'assets/css/slicknav.min.css'|theme}}\"/>
\t<link rel=\"stylesheet\" href=\"{{'assets/css/flip.css'|theme}}\"/>

\t<!-- Main Stylesheets -->
\t<link rel=\"stylesheet\" href=\"{{'assets/css/style.css'|theme}}\"/>


\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->

</head>
<body>
\t<!-- Page Preloder -->
\t<div id=\"preloder\">
\t\t<div class=\"loader\"></div>
\t</div>

\t<!-- Header section -->
\t<div class=\"clearfix\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark float\">
\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"{{'assets/img/logo.jpg'|theme|resize(60,60)}}\" alt=\"\"></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t  <span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse \" id=\"navbarNavDropdown\">
\t\t\t  <ul class=\"navbar-nav \">
\t\t\t\t<li class=\"nav-item {% if this.page.id == 'home' %} active font-weight-bolder {% endif %}\">
\t\t\t\t
\t\t\t\t  <a class=\"nav-link\" href=\"{{'home'|page}}\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item {% if this.page.id == 'games' %} active font-weight-bolder {% endif %}\">
\t\t\t\t  <a class=\"nav-link\" href=\"{{'games'|page}}\">Games</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item nav-item {% if this.page.id == 'tournament' %} active font-weight-bolder {% endif %}\">
\t\t\t\t  <a class=\"nav-link\" href=\"{{'tournament'|page}}\">Tournamets</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t  </ul>
\t\t\t</div>
\t\t  </nav>
\t</div>
\t<!-- Header section end -->
{% if this.page.id == 'home' %}
{% page %}
{% else %}
<div style=\"background: url({{'assets/img/banner-bg.jpg'|theme}});\" class=\"jumbotron jumbotron-fluid\">
\t<div class=\"container\">
\t\t<h1 class=\"display-3\">{{this.page.title}}</h1>
\t\t<p class=\"lead\">{{this.page.description}}</p>
\t\t
\t</div>
</div>
{% page %}
{% endif %}
\t<!-- Footer section -->
\t<div class=\"footer-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<div class=\"about-widget\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/logo.png'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. Morbi id dictum quam, ut commodo.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2 class=\"fw-title\">Usfull Links</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"\">Games</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">testimonials</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Reviews</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Characters</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Latest news</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2 class=\"fw-title\">Services</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"\">About us</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Services</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Become a writer</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Jobs</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">FAQ</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2 class=\"fw-title\">Careeres</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"\">Donate</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Services</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Subscriptions</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Careers</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Our team</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget fw-latest-post\">
\t\t\t\t\t\t<h2 class=\"fw-title\">Usfull Links</h2>
\t\t\t\t\t\t<div class=\"latest-news-widget\">
\t\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"social-links-warp\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-instagram\"></i><span>instagram</span></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-pinterest\"></i><span>pinterest</span></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i><span>facebook</span></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i><span>twitter</span></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-youtube\"></i><span>youtube</span></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-tumblr-square\"></i><span>tumblr</span></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Footer section end -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t<!--====== Javascripts & Jquery ======-->
\t<script src=\"{{'assets/js/jquery-3.2.1.min.js'|theme}}\"></script>
\t<script src=\"{{'assets/js/bootstrap.min.js'|theme}}\"></script>
\t<script src=\"{{'assets/js/jquery.slicknav.js'|theme}}\"></script>
\t<script src=\"{{'assets/js/owl.carousel.min.js'|theme}}\"></script>
\t<script src=\"{{'assets/js/circle-progress.min.js'|theme}}\"></script>
\t<script src=\"{{'assets/js/jquery.magnific-popup.min.js'|theme}}\"></script>
\t<script src=\"{{'assets/js/main.js'|theme}}\"></script>
\t</body>
</html>", "F:\\website\\slgamers/themes/slgamers/layouts/main.htm", "");
    }
}
