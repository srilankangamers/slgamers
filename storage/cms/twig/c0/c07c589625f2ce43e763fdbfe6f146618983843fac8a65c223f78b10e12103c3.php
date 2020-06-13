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

/* F:\website\slgamers/themes/slgamers/pages/games.htm */
class __TwigTemplate_a414e2e408f6160959fe3f1d7b6d9a36343915ef4d13b3acf4f0ef3c3cc427bf extends \Twig\Template
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
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            echo "<div class=\"flip-card\">
  <div class=\"flip-card-inner\">
    ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 13)) {
                // line 14
                echo "    <div class=\"flip-card-front\">
      <img src=\"";
                // line 15
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15), 300, 300, ["mode" => "crop"]]);
                echo "\" alt=\"Avatar\" style=\"width:300px;height:300px;\">
    </div>
    ";
            } else {
                // line 18
                echo "    <div class=\"flip-card-front\">
      <img src=\"";
                // line 19
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/no image.png");
                echo "\" alt=\"Avatar\" style=\"width:300px;height:300px;\">
    </div>
    ";
            }
            // line 22
            echo "    <div class=\"flip-card-back\">
      <a href=\"/game-single/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 23), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</h3></a>
      <p>";
            // line 24
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 24), 100]);
            echo "</p>
      <p>";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "status", [], "any", false, false, false, 25) == "1")) {
                echo "Register Now! ";
            } else {
                echo " Coming Soon! ";
            }
            echo "</p>
    </div>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "F:\\website\\slgamers/themes/slgamers/pages/games.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  95 => 25,  91 => 24,  85 => 23,  82 => 22,  76 => 19,  73 => 18,  67 => 15,  64 => 14,  62 => 13,  58 => 11,  54 => 10,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
  {% for record in records %}
<div class=\"flip-card\">
  <div class=\"flip-card-inner\">
    {% if record.poster %}
    <div class=\"flip-card-front\">
      <img src=\"{{record.poster.path|resize(300,300,{mode : 'crop'})}}\" alt=\"Avatar\" style=\"width:300px;height:300px;\">
    </div>
    {% else%}
    <div class=\"flip-card-front\">
      <img src=\"{{'assets/img/no image.png'|theme}}\" alt=\"Avatar\" style=\"width:300px;height:300px;\">
    </div>
    {% endif %}
    <div class=\"flip-card-back\">
      <a href=\"/game-single/{{record.slug}}\"><h3>{{record.title}}</h3></a>
      <p>{{html_limit(record.description,100)|raw}}</p>
      <p>{% if record.status == '1' %}Register Now! {% else %} Coming Soon! {% endif %}</p>
    </div>
  </div>
</div>
{% endfor %}
</div>", "F:\\website\\slgamers/themes/slgamers/pages/games.htm", "");
    }
}
