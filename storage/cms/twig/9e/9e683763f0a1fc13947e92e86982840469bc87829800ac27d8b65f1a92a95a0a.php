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

/* F:\website\slgamers/themes/slgamers/pages/video-gallery.htm */
class __TwigTemplate_677919a72f7b6609d3cbf216e7055155d1724490d72c9c64ed59383da2b21552 extends \Twig\Template
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
        echo "<div class=\"container-fluid\">
\t<br>
\t<div class=\"container-fluid\">
\t\t<div class=\"filter\">
\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t<button type=\"button\" data-name=\"*\"  class=\"bg-primary btn btn-secondary\">All</button>
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 14
            echo "
\t\t\t\t<button type=\"button\" data-name=\".";
            // line 15
            echo call_user_func_array($this->env->getFilter('lowercase')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["cat"], "category", [], "any", false, false, false, 15)]);
            echo "\"  class=\"bg-primary btn btn-secondary\">";
            echo call_user_func_array($this->env->getFilter('ucfirst')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["cat"], "category", [], "any", false, false, false, 15)]);
            echo "</button>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<hr class=\"mt-2 mb-5\">

\t<div class=\"row play text-center text-lg-left\">
\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["yt"]) {
            // line 26
            echo "\t\t<div class=\"item col-lg-3 col-md-4 col-6 cont ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["yt"], "categories", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                echo call_user_func_array($this->env->getFilter('lowercase')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["cat"], "category", [], "any", false, false, false, 26)]);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
\t\t\t<div class=\"card-img-overlay text-white\"><p style=\"text-shadow: 10px 0px 10px black; font-size: 1.5vw;\">";
            // line 27
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["yt"], "title", [], "any", false, false, false, 27), 50]);
            echo "</p></div>
\t\t\t<img src=\"https://img.youtube.com/vi/";
            // line 28
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["yt"], "path", [], "any", false, false, false, 28), ["https://youtu.be/" => ""]), "html", null, true);
            echo "/hqdefault.jpg\" alt=\"Avatar\" class=\"image\" style=\"width:100%\">
\t\t\t<div class=\"middle\">
\t\t\t\t<a class=\"venobox\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["yt"], "path", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"text\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t


\t</div>
\t<nav aria-label=\"Page navigation example\">
\t\t";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 42) > 1)) {
            // line 43
            echo "\t\t<ul style=\"justify-content: center\" class=\"pagination\">
\t\t\t";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 44) > 1)) {
                // line 45
                echo "\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 45), "baseFileName", [], "any", false, false, false, 45), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 45) - 1)]);
                echo "\"><i class=\"fas fa-chevron-circle-left hvr-backward\"></i></a></li>
\t\t\t";
            }
            // line 47
            echo "
\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 48)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 49
                echo "\t\t\t<li class=\" page-item ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 49) == $context["page"])) ? ("active") : (null));
                echo "\">
\t\t\t\t<a class=\"page-link hvr-pop\" href=\"";
                // line 50
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "baseFileName", [], "any", false, false, false, 50), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
\t\t\t";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 54) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 54))) {
                // line 55
                echo "\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 55), "baseFileName", [], "any", false, false, false, 55), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 55) + 1)]);
                echo "\"><i class=\"fas fa-chevron-circle-right hvr-forward\"></i></a></li>
\t\t\t";
            }
            // line 57
            echo "\t\t</ul>
\t\t";
        }
        // line 59
        echo "\t</nav>
</div>

<!-- /.container -->";
    }

    public function getTemplateName()
    {
        return "F:\\website\\slgamers/themes/slgamers/pages/video-gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 59,  177 => 57,  171 => 55,  169 => 54,  166 => 53,  155 => 50,  150 => 49,  146 => 48,  143 => 47,  137 => 45,  135 => 44,  132 => 43,  130 => 42,  123 => 37,  110 => 30,  105 => 28,  101 => 27,  88 => 26,  84 => 25,  75 => 18,  64 => 15,  61 => 14,  57 => 13,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}
<div class=\"container-fluid\">
\t<br>
\t<div class=\"container-fluid\">
\t\t<div class=\"filter\">
\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t<button type=\"button\" data-name=\"*\"  class=\"bg-primary btn btn-secondary\">All</button>
\t\t\t\t{% for cat in cc %}

\t\t\t\t<button type=\"button\" data-name=\".{{cat.category|lowercase}}\"  class=\"bg-primary btn btn-secondary\">{{cat.category|ucfirst}}</button>

\t\t\t\t{% endfor %}

\t\t\t</div>
\t\t</div>
\t</div>
\t<hr class=\"mt-2 mb-5\">

\t<div class=\"row play text-center text-lg-left\">
\t\t{% for yt in records %}
\t\t<div class=\"item col-lg-3 col-md-4 col-6 cont {% for cat in yt.categories %}{{cat.category|lowercase}} {% endfor %}\">
\t\t\t<div class=\"card-img-overlay text-white\"><p style=\"text-shadow: 10px 0px 10px black; font-size: 1.5vw;\">{{html_limit(yt.title,50)}}</p></div>
\t\t\t<img src=\"https://img.youtube.com/vi/{{yt.path|replace({'https://youtu.be/':''})}}/hqdefault.jpg\" alt=\"Avatar\" class=\"image\" style=\"width:100%\">
\t\t\t<div class=\"middle\">
\t\t\t\t<a class=\"venobox\" data-autoplay=\"true\" data-vbtype=\"video\" href=\"{{yt.path}}\">
\t\t\t\t\t<div class=\"text\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t{% endfor %}
\t\t


\t</div>
\t<nav aria-label=\"Page navigation example\">
\t\t{% if records.lastPage > 1 %}
\t\t<ul style=\"justify-content: center\" class=\"pagination\">
\t\t\t{% if records.currentPage > 1 %}
\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\"><i class=\"fas fa-chevron-circle-left hvr-backward\"></i></a></li>
\t\t\t{% endif %}

\t\t\t{% for page in 1..records.lastPage %}
\t\t\t<li class=\" page-item {{ records.currentPage == page ? 'active' : null }}\">
\t\t\t\t<a class=\"page-link hvr-pop\" href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
\t\t\t</li>
\t\t\t{% endfor %}

\t\t\t{% if records.lastPage > records.currentPage %}
\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\"><i class=\"fas fa-chevron-circle-right hvr-forward\"></i></a></li>
\t\t\t{% endif %}
\t\t</ul>
\t\t{% endif %}
\t</nav>
</div>

<!-- /.container -->", "F:\\website\\slgamers/themes/slgamers/pages/video-gallery.htm", "");
    }
}
