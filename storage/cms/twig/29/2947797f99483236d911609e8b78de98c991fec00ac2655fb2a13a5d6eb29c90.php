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

/* F:\website\slgamers/themes/slgamers/pages/tournament.htm */
class __TwigTemplate_7ead6ca2711a2184b75e64cf83870926286660caea5647ca4096162b4345198a extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"accordion\" id=\"accordionExample\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "        <div class=\"card\">
              <div class=\"card-header\" id=\"heading";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
                <h2 class=\"mb-0\">
                  <button class=\"btn btn-link btn-block text-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
                    ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "availability", [], "any", false, false, false, 14) == 0)) {
                echo "<img style=\"width: 50px; height: 54px;\" src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/soon.png");
                echo "\" alt=\"\">";
            } else {
                echo "<img style=\"width: 50px; height: 54px;\" src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/register.png");
                echo "\" alt=\"\">";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "tournament_title", [], "any", false, false, false, 14), "html", null, true);
            echo "
                  </button>
                </h2>
              </div> 
          
              <div id=\"collapse";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"collapse hide\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                   <div class=\"float-left\"><img style=\"width: 300px; height: 300px; margin-right: 10px;\" src=\"";
            // line 21
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 21), "path", [], "any", false, false, false, 21), 300, 300, ["mode" => "crop"]]);
            echo "\" alt=\"\"></div> 
                   <div>";
            // line 22
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 22), 1000]);
            echo "</div> 
                </div>
              </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        
        </div>
</div>
";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 30) > 1)) {
            // line 31
            echo "    <ul class=\"pagination\">
        ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 32) > 1)) {
                // line 33
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 33), "baseFileName", [], "any", false, false, false, 33), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 33) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 35
            echo "
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 36)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 37
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 37) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 38
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 38), "baseFileName", [], "any", false, false, false, 38), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
        ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 42) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 42))) {
                // line 43
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 43), "baseFileName", [], "any", false, false, false, 43), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 43) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 45
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "F:\\website\\slgamers/themes/slgamers/pages/tournament.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 45,  156 => 43,  154 => 42,  151 => 41,  140 => 38,  135 => 37,  131 => 36,  128 => 35,  122 => 33,  120 => 32,  117 => 31,  115 => 30,  110 => 27,  99 => 22,  95 => 21,  88 => 19,  71 => 14,  65 => 13,  60 => 11,  57 => 10,  53 => 9,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}
<div class=\"container\">
    <div class=\"accordion\" id=\"accordionExample\">
        {% for record in records %}
        <div class=\"card\">
              <div class=\"card-header\" id=\"heading{{record.id}}\">
                <h2 class=\"mb-0\">
                  <button class=\"btn btn-link btn-block text-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse{{record.id}}\" aria-expanded=\"true\" aria-controls=\"collapse{{record.id}}\">
                    {% if record.availability == 0 %}<img style=\"width: 50px; height: 54px;\" src=\"{{'assets/img/soon.png'|theme}}\" alt=\"\">{% else %}<img style=\"width: 50px; height: 54px;\" src=\"{{'assets/img/register.png'|theme}}\" alt=\"\">{% endif %}{{record.tournament_title}}
                  </button>
                </h2>
              </div> 
          
              <div id=\"collapse{{record.id}}\" class=\"collapse hide\" aria-labelledby=\"heading{{record.id}}\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                   <div class=\"float-left\"><img style=\"width: 300px; height: 300px; margin-right: 10px;\" src=\"{{record.poster.path|resize(300,300,{mode:'crop'})}}\" alt=\"\"></div> 
                   <div>{{ html_limit(record.description,1000)|raw}}</div> 
                </div>
              </div>
            </div>
        {% endfor %}
        
        </div>
</div>
{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "F:\\website\\slgamers/themes/slgamers/pages/tournament.htm", "");
    }
}
