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
        echo "
<div class=\"container-fluid\">
  <hr class=\"mt-2 mb-5\">
  <div class=\"row text-center text-lg-left\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 12
            echo "    <div class=\"col-lg-3 col-md-4 col-6=12\">
      <div class=\"card bg-db glow\" style=\"margin-bottom: 10px;\">
       <img class=\"card-img-top\" src=\"";
            // line 14
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14), 286, 180, ["mode" => "crop"]]);
            echo "\" alt=\"Card image cap\">
       <div class=\"card-body\">
        <h5 style=\"height: 3rem;\" class=\"card-title text-white fonttitle\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "tournament_title", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
        <p class=\"card-text fontsub\">";
            // line 17
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 17), 50]);
            echo "</p>
      </div>
      <table class=\"table table-striped table-dark fontsub\">
        <thead>
          <tr>
            <th scope=\"col\">Organized By</th>
            <th scope=\"col\"><a class=\"effect-shine text-white\" target=\"_blank\" href=\"https://www.facebook.com/slgamerss/\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "organizer", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            ";
            // line 29
            echo "          </tr>
        </tbody>
      </table>
      <div class=\"card-body\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "games", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
                // line 34
                echo "            <a href=\"/game-single/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "slug", [], "any", false, false, false, 34), "html", null, true);
                echo "\" class=\"text-white card-link effect-shine fontsub btn float-right btn-outline-primary\">Register <i class=\"fas fa-user-edit\"></i></a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </div>
    </div>    
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>
</div>

<!-- /.container -->";
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
        return array (  117 => 40,  108 => 36,  99 => 34,  95 => 33,  89 => 29,  81 => 23,  72 => 17,  68 => 16,  63 => 14,  59 => 12,  55 => 11,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
  <hr class=\"mt-2 mb-5\">
  <div class=\"row text-center text-lg-left\">
    {% for record in records %}
    <div class=\"col-lg-3 col-md-4 col-6=12\">
      <div class=\"card bg-db glow\" style=\"margin-bottom: 10px;\">
       <img class=\"card-img-top\" src=\"{{record.poster.path|resize(286,180,{'mode':'crop'})}}\" alt=\"Card image cap\">
       <div class=\"card-body\">
        <h5 style=\"height: 3rem;\" class=\"card-title text-white fonttitle\">{{record.tournament_title}}</h5>
        <p class=\"card-text fontsub\">{{html_limit(record.description,50)}}</p>
      </div>
      <table class=\"table table-striped table-dark fontsub\">
        <thead>
          <tr>
            <th scope=\"col\">Organized By</th>
            <th scope=\"col\"><a class=\"effect-shine text-white\" target=\"_blank\" href=\"https://www.facebook.com/slgamerss/\">{{record.organizer}}</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            {# second table content #}
          </tr>
        </tbody>
      </table>
      <div class=\"card-body\">
        {% for game in record.games %}
            <a href=\"/game-single/{{game.slug}}\" class=\"text-white card-link effect-shine fontsub btn float-right btn-outline-primary\">Register <i class=\"fas fa-user-edit\"></i></a>
        {% endfor %}
      </div>
    </div>    
  </div>
  {% endfor %}
</div>
</div>

<!-- /.container -->", "F:\\website\\slgamers/themes/slgamers/pages/tournament.htm", "");
    }
}
