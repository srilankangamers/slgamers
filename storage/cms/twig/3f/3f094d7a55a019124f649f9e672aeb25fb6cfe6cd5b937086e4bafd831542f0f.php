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
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournaments", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["tmnt"]) {
            // line 7
            echo "
    <div class=\"container\" style=\"margin-top: 30px;\">
        <div class=\"card mb-3\" style=\"max-width: 540px;\">
            <div class=\"row no-gutters\">
              <div class=\"col-md-4\">
                <img src=\"";
            // line 12
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tmnt"], "poster", [], "any", false, false, false, 12), 200, 300, ["mode" => "crop", "quality" => "80", "extension" => "png"]]);
            echo "\" class=\"card-img\" alt=\"...\">
                <div class=\"card-img-overlay\">
                    <span class=\"badge badge-success\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "platform", [], "any", false, false, false, 14), "html", null, true);
            echo "</span>
                </div>
            </div>
              <div class=\"col-md-8\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "tournament_title", [], "any", false, false, false, 19), "html", null, true);
            echo "</h5>
                  <p class=\"card-text\">";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["tmnt"], "description", [], "any", false, false, false, 20);
            echo "</p>
                  <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>
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
        return array (  75 => 20,  71 => 19,  63 => 14,  58 => 12,  51 => 7,  47 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}


{% for tmnt in record.tournaments %}

    <div class=\"container\" style=\"margin-top: 30px;\">
        <div class=\"card mb-3\" style=\"max-width: 540px;\">
            <div class=\"row no-gutters\">
              <div class=\"col-md-4\">
                <img src=\"{{ tmnt.poster | resize(200, 300, { mode: 'crop', quality: '80', extension: 'png' }) }}\" class=\"card-img\" alt=\"...\">
                <div class=\"card-img-overlay\">
                    <span class=\"badge badge-success\">{{tmnt.platform}}</span>
                </div>
            </div>
              <div class=\"col-md-8\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">{{tmnt.tournament_title}}</h5>
                  <p class=\"card-text\">{{tmnt.description|raw}}</p>
                  <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>
{% endfor %}", "F:\\website\\slgamers/themes/slgamers/pages/game-single.htm", "");
    }
}
