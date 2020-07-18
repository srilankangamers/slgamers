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
      <div class=\"card bg-dark glow\" style=\"margin-bottom: 10px;\">
       <img class=\"card-img-top\" src=\"";
            // line 14
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14), 286, 180, ["mode" => "crop"]]);
            echo "\" alt=\"Card image cap\">
       <div class=\"card-body txt-glow\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "games", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
                // line 17
                echo "        <a class=\"txt-glow\" href=\"/game-single/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "slug", [], "any", false, false, false, 17), "html", null, true);
                echo "\"><h5 style=\"height: 3rem;\" class=\"card-title text-white fonttitle\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "tournament_title", [], "any", false, false, false, 17), "html", null, true);
                echo "</h5></a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      </div>
      <table class=\"table table-striped table-dark table-bordered fontsub\">
        <thead>
          <tr class=\"tb-glow\">
            <th scope=\"row\">Organized By</th>
            <td scope=\"col\"><a class=\"effect-shine text-nowrap txt-glow text-white\" target=\"_blank\" href=\"https://www.facebook.com/slgamerss/\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "organizer", [], "any", false, false, false, 24), "html", null, true);
            echo "</a><iframe src=\"https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fslgamerss&width=78&layout=button_count&action=like&size=small&share=false&height=21&appId\" width=\"78\" height=\"21\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe><script src=\"https://apis.google.com/js/platform.js\"></script>

              <div class=\"g-ytsubscribe\" data-channelid=\"UClhjTqSobY0Ovq3lUdLx4Yg\" data-layout=\"default\" data-theme=\"dark\" data-count=\"default\"></div></td>
            </tr>
          </thead>
          <tbody>
            <tr class=\"tb-glow\">
              <th scope=\"row\">Joined gamers</th>
              ";
            // line 32
            $context["total"] = 0;
            // line 33
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "regs", [], "any", false, false, false, 33));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["gamers"]) {
                // line 34
                echo "              ";
                $context["total"] = twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 34);
                // line 35
                echo "
              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gamers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "              <td class=\"text-right\" scope=\"col\"><h3 style=\"color: #6e7cff\"><i class=\"fas fa-users\"></i> ";
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "</h3></td>
            </tr>
            <tr class=\"tb-glow\">
              <th scope=\"row\">Type</th>
              <td class=\"text-right\" scope=\"col\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            </tr>
          </tbody>
        </table>
        <div class=\"card-body\">
          <a href=\"/registration/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 46), "html", null, true);
            echo "\" class=\"text-white card-link effect-shine fontsub btn float-right btn-outline-primary\">
            Register <i class=\"fas fa-user-edit\"></i>
          </a>
        </div>
      </div>    
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "  </div>
</div>";
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
        return array (  168 => 53,  155 => 46,  147 => 41,  139 => 37,  124 => 35,  121 => 34,  103 => 33,  101 => 32,  90 => 24,  83 => 19,  72 => 17,  68 => 16,  63 => 14,  59 => 12,  55 => 11,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
      <div class=\"card bg-dark glow\" style=\"margin-bottom: 10px;\">
       <img class=\"card-img-top\" src=\"{{record.poster.path|resize(286,180,{'mode':'crop'})}}\" alt=\"Card image cap\">
       <div class=\"card-body txt-glow\">
        {% for game in record.games %}
        <a class=\"txt-glow\" href=\"/game-single/{{game.slug}}\"><h5 style=\"height: 3rem;\" class=\"card-title text-white fonttitle\">{{record.tournament_title}}</h5></a>
        {% endfor %}
      </div>
      <table class=\"table table-striped table-dark table-bordered fontsub\">
        <thead>
          <tr class=\"tb-glow\">
            <th scope=\"row\">Organized By</th>
            <td scope=\"col\"><a class=\"effect-shine text-nowrap txt-glow text-white\" target=\"_blank\" href=\"https://www.facebook.com/slgamerss/\">{{record.organizer}}</a><iframe src=\"https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fslgamerss&width=78&layout=button_count&action=like&size=small&share=false&height=21&appId\" width=\"78\" height=\"21\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe><script src=\"https://apis.google.com/js/platform.js\"></script>

              <div class=\"g-ytsubscribe\" data-channelid=\"UClhjTqSobY0Ovq3lUdLx4Yg\" data-layout=\"default\" data-theme=\"dark\" data-count=\"default\"></div></td>
            </tr>
          </thead>
          <tbody>
            <tr class=\"tb-glow\">
              <th scope=\"row\">Joined gamers</th>
              {% set total = 0 %}
              {% for gamers in record.regs %}
              {% set total = loop.length %}

              {% endfor %}
              <td class=\"text-right\" scope=\"col\"><h3 style=\"color: #6e7cff\"><i class=\"fas fa-users\"></i> {{total}}</h3></td>
            </tr>
            <tr class=\"tb-glow\">
              <th scope=\"row\">Type</th>
              <td class=\"text-right\" scope=\"col\">{{record.type}}</td>
            </tr>
          </tbody>
        </table>
        <div class=\"card-body\">
          <a href=\"/registration/{{record.slug}}\" class=\"text-white card-link effect-shine fontsub btn float-right btn-outline-primary\">
            Register <i class=\"fas fa-user-edit\"></i>
          </a>
        </div>
      </div>    
    </div>
    {% endfor %}
  </div>
</div>", "F:\\website\\slgamers/themes/slgamers/pages/tournament.htm", "");
    }
}
