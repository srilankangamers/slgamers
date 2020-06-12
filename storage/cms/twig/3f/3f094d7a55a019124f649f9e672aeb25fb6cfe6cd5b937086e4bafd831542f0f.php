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

/* F:\website\slgamers/themes/slgamers/pages/game-single.htm */
class __TwigTemplate_9d63581f666f33e7436a128b8877289ae65986daa0d4dc9ca4a48ec10df18697 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "


";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournaments", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["tmnt"]) {
            // line 8
            echo "
<!-- Page top section -->
<section class=\"page-top-section set-bg\" data-setbg=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tmnt"], "poster", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
  <div style=\"margin-top: -150px;\" class=\"container\">
    <h2>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "tournament_title", [], "any", false, false, false, 12), "html", null, true);
            echo "</h2>
  </div>
</section>
<!-- Page top section end -->

<!-- Blog section -->
<section class=\"blog-section spad\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <div class=\"blog-post single-post\">
          <img src=\"img/blog/1.jpg\" alt=\"\">
          <h3>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "tournament_title", [], "any", false, false, false, 24), "html", null, true);
            echo "</h3>
          <p style=\"display: inline-block; margin-right: 10px;\">Tournament Date</p><div class=\"post-date\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "end_date", [], "any", false, false, false, 25), "html", null, true);
            echo "</div>
          ";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["tmnt"], "description", [], "any", false, false, false, 26);
            echo "
        </div>
      </div>
      <div class=\"col-lg-4 sidebar\">
        <div class=\"sb-widget\">
          <form class=\"sb-search\">
            <input type=\"text\" placeholder=\"Search\">
          </form>
        </div>
        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-gamepad\" aria-hidden=\"true\"></i> Other Games</h2>
          <ul class=\"sb-cata-list list-group\">
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 39
                echo "            <li class=\"list-group-item ";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 39) == (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 39)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["slug"] ?? null) : null))) {
                    echo " list-group-item-action active ";
                }
                echo "\"><a style=\"color: black;\" href=\"/game-single/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 39), "html", null, true);
                echo "\">";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 39) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 39)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["slug"] ?? null) : null))) {
                    echo " <i class=\"fa fa-arrow-right\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 39), "html", null, true);
                    echo "</a> ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 39), "html", null, true);
                    echo "</a> ";
                }
                echo "</li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "          </ul>
        </div>
        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Cash Prizes</h2>
          <ul class=\"list-group\">
            <li class=\"text-uppercase font-weight-bold list-group-item bg-warning\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 1st place Rs ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "first_place", [], "any", false, false, false, 46), "html", null, true);
            echo "</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-success\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 2nd place Rs ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "second_place", [], "any", false, false, false, 47), "html", null, true);
            echo "</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-info\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 3rd place Rs ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "third_place", [], "any", false, false, false, 48), "html", null, true);
            echo "</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-light\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 4th to 10th place Rs ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "four_to_ten", [], "any", false, false, false, 49), "html", null, true);
            echo "</li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!-- Blog section end -->

    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmnt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "F:\\website\\slgamers/themes/slgamers/pages/game-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 49,  141 => 48,  137 => 47,  133 => 46,  126 => 41,  103 => 39,  99 => 38,  84 => 26,  80 => 25,  76 => 24,  61 => 12,  56 => 10,  52 => 8,  48 => 7,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}



{% for tmnt in record.tournaments %}

<!-- Page top section -->
<section class=\"page-top-section set-bg\" data-setbg=\"{{tmnt.poster.path}}\">
  <div style=\"margin-top: -150px;\" class=\"container\">
    <h2>{{tmnt.tournament_title}}</h2>
  </div>
</section>
<!-- Page top section end -->

<!-- Blog section -->
<section class=\"blog-section spad\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <div class=\"blog-post single-post\">
          <img src=\"img/blog/1.jpg\" alt=\"\">
          <h3>{{tmnt.tournament_title}}</h3>
          <p style=\"display: inline-block; margin-right: 10px;\">Tournament Date</p><div class=\"post-date\">{{tmnt.end_date}}</div>
          {{tmnt.description|raw}}
        </div>
      </div>
      <div class=\"col-lg-4 sidebar\">
        <div class=\"sb-widget\">
          <form class=\"sb-search\">
            <input type=\"text\" placeholder=\"Search\">
          </form>
        </div>
        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-gamepad\" aria-hidden=\"true\"></i> Other Games</h2>
          <ul class=\"sb-cata-list list-group\">
            {% for record in records %}
            <li class=\"list-group-item {% if record.slug == this.param['slug'] %} list-group-item-action active {% endif %}\"><a style=\"color: black;\" href=\"/game-single/{{record.slug}}\">{% if record.slug == this.param['slug'] %} <i class=\"fa fa-arrow-right\"></i> {{record.title}}</a> {% else %} {{record.title}}</a> {% endif %}</li>
              {% endfor %}
          </ul>
        </div>
        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Cash Prizes</h2>
          <ul class=\"list-group\">
            <li class=\"text-uppercase font-weight-bold list-group-item bg-warning\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 1st place Rs {{tmnt.first_place}}</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-success\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 2nd place Rs {{tmnt.second_place}}</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-info\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 3rd place Rs {{tmnt.third_place}}</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-light\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 4th to 10th place Rs {{tmnt.four_to_ten}}</li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!-- Blog section end -->

    
{% endfor %}", "F:\\website\\slgamers/themes/slgamers/pages/game-single.htm", "");
    }
}
