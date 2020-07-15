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
        echo "<div class=\"container-fluid\">
  <hr class=\"mt-2 mb-5\">
  <div class=\"row text-center text-lg-left\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            echo "    <div class=\"col-lg-3 col-md-4 col-12\">
      <div class=\"card glow bg-dark\" style=\"margin-bottom: 20px; height: 28rem;\">
        <img class=\"card-img-top\" src=\"";
            // line 13
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 13), "path", [], "any", false, false, false, 13), 286, 180, ["mode" => "crop"]]);
            echo "\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">";
            // line 15
            echo call_user_func_array($this->env->getFilter('ucfirst')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 15)]);
            echo "</h5>
          <p class=\"card-text\">";
            // line 16
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 16), 100]);
            echo "</p>
        </div>
        <div class=\"card-body\">
          <a href=\"/game-single/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"btn btn-primary float-right\">Read More <i class=\"fas fa-angle-double-right hvr-forward\"></i></a>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>


</div>
<!-- /.container -->";
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
        return array (  88 => 24,  77 => 19,  71 => 16,  67 => 15,  62 => 13,  58 => 11,  54 => 10,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
    <div class=\"col-lg-3 col-md-4 col-12\">
      <div class=\"card glow bg-dark\" style=\"margin-bottom: 20px; height: 28rem;\">
        <img class=\"card-img-top\" src=\"{{record.poster.path|resize(286,180,{'mode':'crop'})}}\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">{{record.title|ucfirst}}</h5>
          <p class=\"card-text\">{{html_limit(record.description|raw,100)}}</p>
        </div>
        <div class=\"card-body\">
          <a href=\"/game-single/{{record.slug}}\" class=\"btn btn-primary float-right\">Read More <i class=\"fas fa-angle-double-right hvr-forward\"></i></a>
        </div>
      </div>
    </div>
    {% endfor %}
  </div>


</div>
<!-- /.container -->", "F:\\website\\slgamers/themes/slgamers/pages/games.htm", "");
    }
}
