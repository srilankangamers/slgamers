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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournaments", [], "any", false, false, false, 4));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tmnt"]) {
            // line 5
            echo "<!-- Page top section -->

<!-- Page top section end -->

<!-- Blog section -->
<section class=\"blog-section spad\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <div class=\"blog-post single-post\">
          <img src=\"img/blog/1.jpg\" alt=\"\">
          <div>
            <img style=\"margin-right: 10px;\" src=\"";
            // line 17
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tmnt"], "poster", [], "any", false, false, false, 17), "path", [], "any", false, false, false, 17), 60, 60, ["mode" => "crop"]]);
            echo "\" class=\"rounded float-left\">
            <h3>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "tournament_title", [], "any", false, false, false, 18), "html", null, true);
            echo "</h3>
          </div>
          <p style=\"display: inline-block; margin-right: 10px;\">Tournament Date</p><div class=\"post-date\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "end_date", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
          ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tmnt"], "maps", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["map"]) {
                // line 22
                echo "          <div>
            <h3>Playing Map</h3>
            <div style=\"width: 200px; height: 200px;\" class=\"card bg-transparent text-white\">
              <img src=\"";
                // line 25
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["map"], "map_img", [], "any", false, false, false, 25), 200, 200, ["mode" => "crop"]]);
                echo "\" class=\"rounded\" alt=\"...\">
              <div class=\"card-img-overlay\">
                <h3 class=\"card-title text-center effect-shine-still\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["map"], "name", [], "any", false, false, false, 27), "html", null, true);
                echo "</h3>
              </div>
            </div>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['map'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "          <div class=\"text-white\">";
            echo twig_get_attribute($this->env, $this->source, $context["tmnt"], "description", [], "any", false, false, false, 32);
            echo "</div>
        </div>
        <div class=\"container text-white\"  id=\"register\">
  <div class=\"row\">
    <div class=\"col-lg-12 col-md-4\" style=\"overflow-y: scroll; height: 600px;\">
      <h2>RULES</h2>
      <br>
      ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 40
                echo "      ";
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "gen_rules", [], "any", false, false, false, 40);
                echo "
      <br>
      ";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "game_rules", [], "any", false, false, false, 42);
                echo "
      <br>
      ";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "tec", [], "any", false, false, false, 44);
                echo "
      <br>
      ";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "bans", [], "any", false, false, false, 46);
                echo "
      <br>
      ";
                // line 48
                if ((twig_get_attribute($this->env, $this->source, $context["tmnt"], "type", [], "any", false, false, false, 48) == "Paid")) {
                    // line 49
                    echo "      <h2>Bank Details For Payment</h2>
      <p>Bank Name</p> ";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "bank_name", [], "any", false, false, false, 50), "html", null, true);
                    echo "<br>
      <p>Bank Account Holder Name</p> ";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "bank_user_name", [], "any", false, false, false, 51), "html", null, true);
                    echo "<br>
      <p>Bank Account Number</p> ";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "bank_user_acc", [], "any", false, false, false, 52), "html", null, true);
                    echo "<br>

      ";
                }
                // line 55
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </div>
  </div>
</div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "<div style=\"background-color: darkblue; padding: 50px; margin: 50px;\" class=\"container glow text-center text-white\">
  <h1>No Tournament</h1>
  <h3>No active Tournament for this game.</h3>
  <br>
  <a class=\"btn btn-outline-primary\" href=\"/games\">Go Back</a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmnt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "      </div>
      <div class=\"col-lg-4 sidebar\">
        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-gamepad\" aria-hidden=\"true\"></i> Other Games</h2>
          <ul class=\"sb-cata-list list-group glow\">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 73
            echo "            <li class=\" list-group-item bg-transparent ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 73) == (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 73)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["slug"] ?? null) : null))) {
                echo " list-group-item-action glow ";
            }
            echo "\"><a class=\"text-white\" style=\"color: black;\" href=\"/game-single/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 73), "html", null, true);
            echo "\">";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 73) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 73)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["slug"] ?? null) : null))) {
                echo " <i class=\"fa fa-arrow-right\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 73), "html", null, true);
                echo "</a> ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 73), "html", null, true);
                echo "</a> ";
            }
            echo "</li>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "          </ul>
        </div>
        ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["tmnt"] ?? null), "type", [], "any", false, false, false, 78) == "Paid")) {
            // line 79
            echo "        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Cash Prizes</h2>
          <ul class=\"list-group\">
            <li class=\"text-uppercase font-weight-bold list-group-item bg-warning\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 1st place Rs ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tmnt"] ?? null), "first_place", [], "any", false, false, false, 82), "html", null, true);
            echo "</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-success\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 2nd place Rs ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tmnt"] ?? null), "second_place", [], "any", false, false, false, 83), "html", null, true);
            echo "</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-info\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 3rd place Rs ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tmnt"] ?? null), "third_place", [], "any", false, false, false, 84), "html", null, true);
            echo "</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-light\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 4th to 10th place Rs ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tmnt"] ?? null), "four_to_ten", [], "any", false, false, false, 85), "html", null, true);
            echo "</li>
          </ul>
        </div>
        ";
        }
        // line 89
        echo "        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Winners </h2>
          <table class=\"table text-white glow\">
            <thead>
              <tr>
                <th scope=\"col\">Placement</th>
                <th scope=\"col\">Player Name</th>
                <th scope=\"col\">Price</th>
              </tr>
            </thead>
            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tmnt"] ?? null), "winners", [], "any", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            echo "            
            <tbody>
              <tr>
                <th scope=\"row\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "placement", [], "any", false, false, false, 102), "html", null, true);
            echo "</th>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "player_name", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "prize", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
              </tr>
            </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "    
          </table>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!-- Blog section end -->";
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
        return array (  284 => 107,  274 => 104,  270 => 103,  266 => 102,  258 => 99,  246 => 89,  239 => 85,  235 => 84,  231 => 83,  227 => 82,  222 => 79,  220 => 78,  216 => 76,  192 => 73,  188 => 72,  181 => 67,  169 => 60,  161 => 56,  155 => 55,  149 => 52,  145 => 51,  141 => 50,  138 => 49,  136 => 48,  131 => 46,  126 => 44,  121 => 42,  115 => 40,  111 => 39,  100 => 32,  89 => 27,  84 => 25,  79 => 22,  75 => 21,  71 => 20,  66 => 18,  62 => 17,  48 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}
{% for tmnt in record.tournaments %}
<!-- Page top section -->

<!-- Page top section end -->

<!-- Blog section -->
<section class=\"blog-section spad\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <div class=\"blog-post single-post\">
          <img src=\"img/blog/1.jpg\" alt=\"\">
          <div>
            <img style=\"margin-right: 10px;\" src=\"{{tmnt.poster.path|resize(60,60,{'mode':'crop'})}}\" class=\"rounded float-left\">
            <h3>{{tmnt.tournament_title}}</h3>
          </div>
          <p style=\"display: inline-block; margin-right: 10px;\">Tournament Date</p><div class=\"post-date\">{{tmnt.end_date}}</div>
          {% for map in tmnt.maps %}
          <div>
            <h3>Playing Map</h3>
            <div style=\"width: 200px; height: 200px;\" class=\"card bg-transparent text-white\">
              <img src=\"{{map.map_img|resize(200,200,{'mode':'crop'})}}\" class=\"rounded\" alt=\"...\">
              <div class=\"card-img-overlay\">
                <h3 class=\"card-title text-center effect-shine-still\">{{map.name}}</h3>
              </div>
            </div>
          </div>
          {% endfor %}
          <div class=\"text-white\">{{tmnt.description|raw}}</div>
        </div>
        <div class=\"container text-white\"  id=\"register\">
  <div class=\"row\">
    <div class=\"col-lg-12 col-md-4\" style=\"overflow-y: scroll; height: 600px;\">
      <h2>RULES</h2>
      <br>
      {% for rule in rules %}
      {{rule.gen_rules|raw}}
      <br>
      {{rule.game_rules|raw}}
      <br>
      {{rule.tec|raw}}
      <br>
      {{rule.bans|raw}}
      <br>
      {% if tmnt.type == 'Paid' %}
      <h2>Bank Details For Payment</h2>
      <p>Bank Name</p> {{rule.bank_name}}<br>
      <p>Bank Account Holder Name</p> {{rule.bank_user_name}}<br>
      <p>Bank Account Number</p> {{rule.bank_user_acc}}<br>

      {% endif %}
      {% endfor %}
    </div>
  </div>
</div>
{% else %}
<div style=\"background-color: darkblue; padding: 50px; margin: 50px;\" class=\"container glow text-center text-white\">
  <h1>No Tournament</h1>
  <h3>No active Tournament for this game.</h3>
  <br>
  <a class=\"btn btn-outline-primary\" href=\"/games\">Go Back</a>
</div>
{% endfor %}
      </div>
      <div class=\"col-lg-4 sidebar\">
        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-gamepad\" aria-hidden=\"true\"></i> Other Games</h2>
          <ul class=\"sb-cata-list list-group glow\">
            {% for record in records %}
            <li class=\" list-group-item bg-transparent {% if record.slug == this.param['slug'] %} list-group-item-action glow {% endif %}\"><a class=\"text-white\" style=\"color: black;\" href=\"/game-single/{{record.slug}}\">{% if record.slug == this.param['slug'] %} <i class=\"fa fa-arrow-right\"></i> {{record.title}}</a> {% else %} {{record.title}}</a> {% endif %}</li>

            {% endfor %}
          </ul>
        </div>
        {% if tmnt.type == 'Paid'%}
        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Cash Prizes</h2>
          <ul class=\"list-group\">
            <li class=\"text-uppercase font-weight-bold list-group-item bg-warning\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 1st place Rs {{tmnt.first_place}}</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-success\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 2nd place Rs {{tmnt.second_place}}</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-info\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 3rd place Rs {{tmnt.third_place}}</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-light\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 4th to 10th place Rs {{tmnt.four_to_ten}}</li>
          </ul>
        </div>
        {% endif %}
        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Winners </h2>
          <table class=\"table text-white glow\">
            <thead>
              <tr>
                <th scope=\"col\">Placement</th>
                <th scope=\"col\">Player Name</th>
                <th scope=\"col\">Price</th>
              </tr>
            </thead>
            {% for w in tmnt.winners %}            
            <tbody>
              <tr>
                <th scope=\"row\">{{w.placement}}</th>
                <td>{{w.player_name}}</td>
                <td>{{w.prize}}</td>
              </tr>
            </tbody>
            {% endfor %}    
          </table>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!-- Blog section end -->", "F:\\website\\slgamers/themes/slgamers/pages/game-single.htm", "");
    }
}
