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

/* F:\website\slgamers/themes/slgamers/pages/home.htm */
class __TwigTemplate_717307e7cb9c6311f7ad100de71705a49dcc03c5a772c699fa9e6403a811ac27 extends \Twig\Template
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
        echo "<!-- Hero section -->
\t<section class=\"hero-section\">
\t\t<div class=\"hero-slider owl-carousel\">
\t\t\t<div class=\"hero-item set-bg\" data-setbg=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/slider/1.jpg");
        echo "\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t\t\t<h2>Enter the Battle</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"site-btn\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"hero-item set-bg\" data-setbg=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/slider/2.jpg");
        echo "\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t\t\t<h2>Enter the Battle</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"site-btn\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Hero section end -->

\t<!-- Blog section -->
\t<section class=\"blog-section spad\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 blog-posts\">
\t\t\t\t\t<div class=\"blog-post featured-post\">
\t\t\t\t\t\t<img src=\"img/blog/1.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"post-date\">April 1, 2019</div>
\t\t\t\t\t\t<h3>The best games of 2019</h3>
\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Morbi id dictum quam, ut commodo lorem. In at nisi nec arcu porttitor aliquet vitae at dui. </p>
\t\t\t\t\t\t<a href=\"#\" class=\"site-btn\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/2.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h4>The best games of 2019</h4>
\t\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/3.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h4>Tips to play a better game</h4>
\t\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/4.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h4>The best games of 2019</h4>
\t\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/5.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h4>Tips to play a better game</h4>
\t\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 sidebar\">
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<form class=\"sb-search\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<h2 class=\"sb-title\">Categories</h2>
\t\t\t\t\t\t<ul class=\"sb-cata-list\">
\t\t\t\t\t\t\t<li><a href=\"\">Games<span>20</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Gaming Tips & Tricks<span>23</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Online Games<span>25</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Team Games<span>17</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Community<span>15</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Uncategorized<span>22</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<h2 class=\"sb-title\">Latest News</h2>
\t\t\t\t\t\t<div class=\"latest-news-widget\">
\t\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/1.jpg");
        echo "\" alt=\"\">
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
\t\t\t\t\t\t\t\t<img src=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/2.jpg");
        echo "\" alt=\"\">
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
\t\t\t\t\t\t\t\t<img src=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/3.jpg");
        echo "\" alt=\"\">
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
\t\t\t\t\t\t\t\t<img src=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/4.jpg");
        echo "\" alt=\"\">
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
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<a href=\"#\" class=\"add\">
\t\t\t\t\t\t\t<img src=\"";
        // line 178
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/add-2.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<h2 class=\"sb-title\">Latest Comments</h2>
\t\t\t\t\t\t<div class=\"latest-comments-widget\">
\t\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 185
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/author-thumbs/1.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 192
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/author-thumbs/2.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t\t<h6>Michael James<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 199
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/author-thumbs/3.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 206
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/author-thumbs/4.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t\t<h6>Michael James<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 213
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/author-thumbs/1.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Blog section end -->

\t<!-- Blog list section -->
\t<section class=\"blog-list-section spad\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"small-blog-list\">
\t\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 234
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/6.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 247
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/7.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 260
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/8.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 273
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/9.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<h2 class=\"sb-title\">Top 5 this week</h2>
\t\t\t\t\t\t<div class=\"latest-news-widget top-five\">
\t\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t\t<div class=\"ln-index\">01</div>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 293
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/1.jpg");
        echo "\" alt=\"\">
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
\t\t\t\t\t\t\t\t<div class=\"ln-index\">02</div>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 306
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/2.jpg");
        echo "\" alt=\"\">
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
\t\t\t\t\t\t\t\t<div class=\"ln-index\">03</div>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 319
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/3.jpg");
        echo "\" alt=\"\">
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
\t\t\t\t\t\t\t\t<div class=\"ln-index\">04</div>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 332
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/4.jpg");
        echo "\" alt=\"\">
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
\t\t\t\t\t\t\t\t<div class=\"ln-index\">05</div>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 345
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/5.jpg");
        echo "\" alt=\"\">
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
\t</section>
\t<!-- Blog list section end -->

\t<!-- Video section -->
\t<div class=\"video-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"video-logo\">
\t\t\t\t<img src=\"";
        // line 368
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-2.png");
        echo "\" alt=\"\">
\t\t\t\t<p>2018’s Best Game</p>
\t\t\t</div>
\t\t\t<div class=\"video-popup-warp\">
\t\t\t\t<img src=\"";
        // line 372
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/video-bg.jpg");
        echo "\" alt=\"\">
\t\t\t\t<a href=\"https://www.youtube.com/watch?v=xzCEdSKMkdU\" class=\"video-play\"><i class=\"fa fa-play\"></i></a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Video section end -->";
    }

    public function getTemplateName()
    {
        return "F:\\website\\slgamers/themes/slgamers/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 372,  481 => 368,  455 => 345,  439 => 332,  423 => 319,  407 => 306,  391 => 293,  368 => 273,  352 => 260,  336 => 247,  320 => 234,  296 => 213,  286 => 206,  276 => 199,  266 => 192,  256 => 185,  246 => 178,  228 => 163,  213 => 151,  198 => 139,  183 => 127,  145 => 92,  128 => 78,  111 => 64,  94 => 50,  56 => 15,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Hero section -->
\t<section class=\"hero-section\">
\t\t<div class=\"hero-slider owl-carousel\">
\t\t\t<div class=\"hero-item set-bg\" data-setbg=\"{{'assets/img/slider/1.jpg'|theme}}\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t\t\t<h2>Enter the Battle</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"site-btn\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"hero-item set-bg\" data-setbg=\"{{'assets/img/slider/2.jpg'|theme}}\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t\t\t<h2>Enter the Battle</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"site-btn\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Hero section end -->

\t<!-- Blog section -->
\t<section class=\"blog-section spad\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 blog-posts\">
\t\t\t\t\t<div class=\"blog-post featured-post\">
\t\t\t\t\t\t<img src=\"img/blog/1.jpg\" alt=\"\">
\t\t\t\t\t\t<div class=\"post-date\">April 1, 2019</div>
\t\t\t\t\t\t<h3>The best games of 2019</h3>
\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Morbi id dictum quam, ut commodo lorem. In at nisi nec arcu porttitor aliquet vitae at dui. </p>
\t\t\t\t\t\t<a href=\"#\" class=\"site-btn\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog/2.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h4>The best games of 2019</h4>
\t\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog/3.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h4>Tips to play a better game</h4>
\t\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog/4.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h4>The best games of 2019</h4>
\t\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog/5.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h4>Tips to play a better game</h4>
\t\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 sidebar\">
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<form class=\"sb-search\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<h2 class=\"sb-title\">Categories</h2>
\t\t\t\t\t\t<ul class=\"sb-cata-list\">
\t\t\t\t\t\t\t<li><a href=\"\">Games<span>20</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Gaming Tips & Tricks<span>23</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Online Games<span>25</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Team Games<span>17</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Community<span>15</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Uncategorized<span>22</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<h2 class=\"sb-title\">Latest News</h2>
\t\t\t\t\t\t<div class=\"latest-news-widget\">
\t\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/1.jpg'|theme}}\" alt=\"\">
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
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/2.jpg'|theme}}\" alt=\"\">
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
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/3.jpg'|theme}}\" alt=\"\">
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
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/4.jpg'|theme}}\" alt=\"\">
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
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<a href=\"#\" class=\"add\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/add-2.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<h2 class=\"sb-title\">Latest Comments</h2>
\t\t\t\t\t\t<div class=\"latest-comments-widget\">
\t\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-thumbs/1.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-thumbs/2.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t\t<h6>Michael James<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-thumbs/3.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-thumbs/4.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t\t<h6>Michael James<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-thumbs/1.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Blog section end -->

\t<!-- Blog list section -->
\t<section class=\"blog-list-section spad\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"small-blog-list\">
\t\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/6.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/7.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/8.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/9.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t\t<h2 class=\"sb-title\">Top 5 this week</h2>
\t\t\t\t\t\t<div class=\"latest-news-widget top-five\">
\t\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t\t<div class=\"ln-index\">01</div>
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/1.jpg'|theme}}\" alt=\"\">
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
\t\t\t\t\t\t\t\t<div class=\"ln-index\">02</div>
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/2.jpg'|theme}}\" alt=\"\">
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
\t\t\t\t\t\t\t\t<div class=\"ln-index\">03</div>
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/3.jpg'|theme}}\" alt=\"\">
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
\t\t\t\t\t\t\t\t<div class=\"ln-index\">04</div>
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/4.jpg'|theme}}\" alt=\"\">
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
\t\t\t\t\t\t\t\t<div class=\"ln-index\">05</div>
\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/5.jpg'|theme}}\" alt=\"\">
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
\t</section>
\t<!-- Blog list section end -->

\t<!-- Video section -->
\t<div class=\"video-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"video-logo\">
\t\t\t\t<img src=\"{{'assets/img/logo-2.png'|theme}}\" alt=\"\">
\t\t\t\t<p>2018’s Best Game</p>
\t\t\t</div>
\t\t\t<div class=\"video-popup-warp\">
\t\t\t\t<img src=\"{{'assets/img/video-bg.jpg'|theme}}\" alt=\"\">
\t\t\t\t<a href=\"https://www.youtube.com/watch?v=xzCEdSKMkdU\" class=\"video-play\"><i class=\"fa fa-play\"></i></a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Video section end -->", "F:\\website\\slgamers/themes/slgamers/pages/home.htm", "");
    }
}
