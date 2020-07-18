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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "<!-- Hero section -->
<section class=\"hero-section\">
\t<div class=\"hero-slider owl-carousel\">
\t\t<div class=\"hero-item set-bg\" data-setbg=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/slider/1.jpg");
        echo "\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t\t<h2>Enter the Battle</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
\t\t\t\t\t\t<a href=\"#\" class=\"site-btn\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"hero-item set-bg\" data-setbg=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/slider/2.jpg");
        echo "\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t\t<h2>Enter the Battle</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
\t\t\t\t\t\t<a href=\"#\" class=\"site-btn\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Hero section end -->

<!-- Blog section -->
<section class=\"blog-section spad\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 blog-posts\">
\t\t\t\t<div class=\"blog-post featured-post\">
\t\t\t\t\t<div class=\"post-date\">April 1, 2019</div>
\t\t\t\t\t<h3>Sri lankan gamers Live Stream</h3>

\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t<img src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/2.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h4>The best games of 2019</h4>
\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t<img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/3.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h4>Tips to play a better game</h4>
\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t<img src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/4.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h4>The best games of 2019</h4>
\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t<img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/5.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h4>Tips to play a better game</h4>
\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 sidebar\">
\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t<h2 class=\"sb-title\">Follow Us On Social Media</h2>
\t\t\t\t\t<iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fslgamerss%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId\" width=\"340\" height=\"500\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>
\t\t\t\t\t<div>
\t\t\t\t\t\t<script src=\"https://apis.google.com/js/platform.js\"></script>
\t\t\t\t\t\t<div class=\"g-ytsubscribe\" data-channelid=\"UClhjTqSobY0Ovq3lUdLx4Yg\" data-layout=\"full\" data-count=\"default\" data-theme=\"dark\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t<h2 class=\"sb-title\">Latest News</h2>
\t\t\t\t\t<div class=\"latest-news-widget\">
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/1.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/2.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/3.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 154
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/4.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t<a href=\"#\" class=\"add\">
\t\t\t\t\t\t<img src=\"";
        // line 169
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/add-2.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t<h2 class=\"sb-title\">Latest Comments</h2>
\t\t\t\t\t<div class=\"latest-comments-widget\">
\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/author-thumbs/1.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/author-thumbs/2.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t<h6>Michael James<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 190
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/author-thumbs/3.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 197
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/author-thumbs/4.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t<h6>Michael James<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 204
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/author-thumbs/1.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Blog section end -->

<!-- Blog list section -->
<section class=\"blog-list-section spad\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"small-blog-list\">
\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t<img src=\"";
        // line 225
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/6.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t<img src=\"";
        // line 238
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/7.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t<img src=\"";
        // line 251
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/8.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t<img src=\"";
        // line 264
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/9.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t<h2 class=\"sb-title\">Top 5 this week</h2>
\t\t\t\t\t<div class=\"latest-news-widget top-five\">
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<div class=\"ln-index\">01</div>
\t\t\t\t\t\t\t<img src=\"";
        // line 284
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/1.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<div class=\"ln-index\">02</div>
\t\t\t\t\t\t\t<img src=\"";
        // line 297
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/2.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<div class=\"ln-index\">03</div>
\t\t\t\t\t\t\t<img src=\"";
        // line 310
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/3.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<div class=\"ln-index\">04</div>
\t\t\t\t\t\t\t<img src=\"";
        // line 323
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/4.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<div class=\"ln-index\">05</div>
\t\t\t\t\t\t\t<img src=\"";
        // line 336
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog-thumbs/5.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Blog list section end -->

<!-- Video section -->
<div class=\"video-section\">
\t<div class=\"container\">
\t\t<div class=\"video-logo\">
\t\t\t<img src=\"";
        // line 359
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-2.png");
        echo "\" alt=\"\">
\t\t\t<p>2018’s Best Game</p>
\t\t</div>
\t\t<div class=\"video-popup-warp\">
\t\t\t<img src=\"";
        // line 363
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/video-bg.jpg");
        echo "\" alt=\"\">
\t\t\t<a href=\"https://www.youtube.com/watch?v=xzCEdSKMkdU\" class=\"video-play\"><i class=\"fa fa-play\"></i></a>
\t\t</div>
\t</div>
</div>
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
        return array (  485 => 363,  478 => 359,  452 => 336,  436 => 323,  420 => 310,  404 => 297,  388 => 284,  365 => 264,  349 => 251,  333 => 238,  317 => 225,  293 => 204,  283 => 197,  273 => 190,  263 => 183,  253 => 176,  243 => 169,  225 => 154,  210 => 142,  195 => 130,  180 => 118,  150 => 91,  133 => 77,  116 => 63,  99 => 49,  68 => 21,  54 => 10,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}
<!-- Hero section -->
<section class=\"hero-section\">
\t<div class=\"hero-slider owl-carousel\">
\t\t<div class=\"hero-item set-bg\" data-setbg=\"{{'assets/img/slider/1.jpg'|theme}}\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t\t<h2>Enter the Battle</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
\t\t\t\t\t\t<a href=\"#\" class=\"site-btn\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"hero-item set-bg\" data-setbg=\"{{'assets/img/slider/2.jpg'|theme}}\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t\t<h2>Enter the Battle</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
\t\t\t\t\t\t<a href=\"#\" class=\"site-btn\">Read More</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Hero section end -->

<!-- Blog section -->
<section class=\"blog-section spad\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 blog-posts\">
\t\t\t\t<div class=\"blog-post featured-post\">
\t\t\t\t\t<div class=\"post-date\">April 1, 2019</div>
\t\t\t\t\t<h3>Sri lankan gamers Live Stream</h3>

\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog/2.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h4>The best games of 2019</h4>
\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog/3.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h4>Tips to play a better game</h4>
\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog/4.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h4>The best games of 2019</h4>
\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"blog-post\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog/5.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"post-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h4>Tips to play a better game</h4>
\t\t\t\t\t\t\t<div class=\"post-metas\">
\t\t\t\t\t\t\t\t<div class=\"post-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"post-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"read-more\">Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 sidebar\">
\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t<h2 class=\"sb-title\">Follow Us On Social Media</h2>
\t\t\t\t\t<iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fslgamerss%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId\" width=\"340\" height=\"500\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>
\t\t\t\t\t<div>
\t\t\t\t\t\t<script src=\"https://apis.google.com/js/platform.js\"></script>
\t\t\t\t\t\t<div class=\"g-ytsubscribe\" data-channelid=\"UClhjTqSobY0Ovq3lUdLx4Yg\" data-layout=\"full\" data-count=\"default\" data-theme=\"dark\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t<h2 class=\"sb-title\">Latest News</h2>
\t\t\t\t\t<div class=\"latest-news-widget\">
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/1.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/2.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/3.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/4.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t<a href=\"#\" class=\"add\">
\t\t\t\t\t\t<img src=\"{{'assets/img/add-2.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t<h2 class=\"sb-title\">Latest Comments</h2>
\t\t\t\t\t<div class=\"latest-comments-widget\">
\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-thumbs/1.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-thumbs/2.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t<h6>Michael James<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-thumbs/3.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-thumbs/4.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t<h6>Michael James<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"lc-item\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/author-thumbs/1.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"lc-text\">
\t\t\t\t\t\t\t\t<h6>Jane Smith<span> In </span><a href=\"\">The best 2019 Games</a></h6>
\t\t\t\t\t\t\t\t<div class=\"lc-date\">April 1,2019</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Blog section end -->

<!-- Blog list section -->
<section class=\"blog-list-section spad\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"small-blog-list\">
\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/6.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/7.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/8.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-item\">
\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/9.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t<div class=\"sb-text\">
\t\t\t\t\t\t\t<div class=\"sb-date\">April 1,2019</div>
\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t<div class=\"sb-metas\">
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">By Admin</div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t<div class=\"sb-meta\">3 Comments</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"sb-widget\">
\t\t\t\t\t<h2 class=\"sb-title\">Top 5 this week</h2>
\t\t\t\t\t<div class=\"latest-news-widget top-five\">
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<div class=\"ln-index\">01</div>
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/1.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<div class=\"ln-index\">02</div>
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/2.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<div class=\"ln-index\">03</div>
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/3.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<div class=\"ln-index\">04</div>
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/4.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ln-item\">
\t\t\t\t\t\t\t<div class=\"ln-index\">05</div>
\t\t\t\t\t\t\t<img src=\"{{'assets/img/blog-thumbs/5.jpg'|theme}}\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"ln-text\">
\t\t\t\t\t\t\t\t<div class=\"ln-date\">April 1, 2019</div>
\t\t\t\t\t\t\t\t<h6>10 Amazing new games</h6>
\t\t\t\t\t\t\t\t<div class=\"ln-metas\">
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">By Admin</div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">in <a href=\"#\">Games</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"ln-meta\">3 Comments</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Blog list section end -->

<!-- Video section -->
<div class=\"video-section\">
\t<div class=\"container\">
\t\t<div class=\"video-logo\">
\t\t\t<img src=\"{{'assets/img/logo-2.png'|theme}}\" alt=\"\">
\t\t\t<p>2018’s Best Game</p>
\t\t</div>
\t\t<div class=\"video-popup-warp\">
\t\t\t<img src=\"{{'assets/img/video-bg.jpg'|theme}}\" alt=\"\">
\t\t\t<a href=\"https://www.youtube.com/watch?v=xzCEdSKMkdU\" class=\"video-play\"><i class=\"fa fa-play\"></i></a>
\t\t</div>
\t</div>
</div>
\t<!-- Video section end -->", "F:\\website\\slgamers/themes/slgamers/pages/home.htm", "");
    }
}
