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
<!-- Page top section -->
<section class=\"page-top-section set-bg\" data-setbg=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tmnt"], "poster", [], "any", false, false, false, 9), "path", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
  <div style=\"margin-top: -150px;\" class=\"container\">
    <h2>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "tournament_title", [], "any", false, false, false, 11), "html", null, true);
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
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "tournament_title", [], "any", false, false, false, 23), "html", null, true);
            echo "</h3>
          <p style=\"display: inline-block; margin-right: 10px;\">Tournament Date</p><div class=\"post-date\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "end_date", [], "any", false, false, false, 24), "html", null, true);
            echo "</div>
          <div class=\"text-white\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["tmnt"], "description", [], "any", false, false, false, 25);
            echo "</div>
        </div>
      </div>
      <div class=\"col-lg-4 sidebar\">
        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-gamepad\" aria-hidden=\"true\"></i> Other Games</h2>
          <ul class=\"sb-cata-list list-group\">
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 33
                echo "            <li class=\"list-group-item ";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 33) == (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 33)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["slug"] ?? null) : null))) {
                    echo " list-group-item-action active ";
                }
                echo "\"><a style=\"color: black;\" href=\"/game-single/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 33), "html", null, true);
                echo "\">";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 33) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 33)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["slug"] ?? null) : null))) {
                    echo " <i class=\"fa fa-arrow-right\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 33), "html", null, true);
                    echo "</a> ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 33), "html", null, true);
                    echo "</a> ";
                }
                echo "</li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "          </ul>
        </div>
        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Cash Prizes</h2>
          <ul class=\"list-group\">
            <li class=\"text-uppercase font-weight-bold list-group-item bg-warning\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 1st place Rs ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "first_place", [], "any", false, false, false, 40), "html", null, true);
            echo "</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-success\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 2nd place Rs ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "second_place", [], "any", false, false, false, 41), "html", null, true);
            echo "</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-info\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 3rd place Rs ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "third_place", [], "any", false, false, false, 42), "html", null, true);
            echo "</li>
            <li class=\"text-uppercase list-group-item font-weight-bold bg-light\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> 4th to 10th place Rs ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "four_to_ten", [], "any", false, false, false, 43), "html", null, true);
            echo "</li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!-- Blog section end -->
<div class=\"jumbotron\">
  <div class=\"row\">
    <div class=\"col-lg-6\">
      <form data-request=\"onSave\" data-request-files data-request-flash>
        <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
        ";
            // line 57
            echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
            echo "
        ";
            // line 58
            echo call_user_func_array($this->env->getFunction('form_sessionkey')->getCallable(), ["sessionkey"]);
            echo "
        <h2>Register Now</h2>
        <br>
          <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
              <label> Player Name</label>
              <input type=\"text\" class=\"form-control\" name=\"name\">
            </div>
            <div class=\"form-group col-md-6\">
              <label> Contact Number (Whatsapp)</label>
              <input type=\"text\" class=\"form-control\" name=\"contact\">
            </div>
            <div class=\"form-group col-md-6\">
              <label>Player IGN</label>
              <input type=\"text\" class=\"form-control\" name=\"ign\">
          </div>
          <div class=\"form-group col-md-6\">
              <label>Game Account ID</label>
              <input type=\"text\" class=\"form-control\" name=\"game_id\">
          </div>
          <div class=\"form-group col-md-6\">
            <label>Upload Bank Slip</label>
            <input type=\"file\" class=\"form-control\" name=\"bankslip\" accept=\"image/*\" data-request=\"onUpload\" data-request-files data-request-flash >
            <br>
            <div style=\"width: 150px; height: 150px;\" id=\"imageresult\">No Image to Preview</div>
            <br>
          </div>
          </div>
          <button type=\"submit\" class=\"btn btn-primary\">Register</button>
        </form>
    </div>
    <div class=\"col-lg-6\" style=\"overflow-y: scroll; height: 600px;\">
      <h2>RULES</h2>
      <br>
      ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 93
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "gen_rules", [], "any", false, false, false, 93);
                echo "
        <br>
        ";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "game_rules", [], "any", false, false, false, 95);
                echo "
        <br>
        ";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "tec", [], "any", false, false, false, 97);
                echo "
        <br>
        ";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "bans", [], "any", false, false, false, 99);
                echo "
        <br>
        ";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "bank", [], "any", false, false, false, 101);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "    </div>
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
        return array (  230 => 103,  222 => 101,  217 => 99,  212 => 97,  207 => 95,  201 => 93,  197 => 92,  160 => 58,  156 => 57,  139 => 43,  135 => 42,  131 => 41,  127 => 40,  120 => 35,  97 => 33,  93 => 32,  83 => 25,  79 => 24,  75 => 23,  60 => 11,  55 => 9,  51 => 7,  47 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
          <div class=\"text-white\">{{tmnt.description|raw}}</div>
        </div>
      </div>
      <div class=\"col-lg-4 sidebar\">
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
<div class=\"jumbotron\">
  <div class=\"row\">
    <div class=\"col-lg-6\">
      <form data-request=\"onSave\" data-request-files data-request-flash>
        <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
        {{ form_token() }}
        {{ form_sessionkey() }}
        <h2>Register Now</h2>
        <br>
          <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
              <label> Player Name</label>
              <input type=\"text\" class=\"form-control\" name=\"name\">
            </div>
            <div class=\"form-group col-md-6\">
              <label> Contact Number (Whatsapp)</label>
              <input type=\"text\" class=\"form-control\" name=\"contact\">
            </div>
            <div class=\"form-group col-md-6\">
              <label>Player IGN</label>
              <input type=\"text\" class=\"form-control\" name=\"ign\">
          </div>
          <div class=\"form-group col-md-6\">
              <label>Game Account ID</label>
              <input type=\"text\" class=\"form-control\" name=\"game_id\">
          </div>
          <div class=\"form-group col-md-6\">
            <label>Upload Bank Slip</label>
            <input type=\"file\" class=\"form-control\" name=\"bankslip\" accept=\"image/*\" data-request=\"onUpload\" data-request-files data-request-flash >
            <br>
            <div style=\"width: 150px; height: 150px;\" id=\"imageresult\">No Image to Preview</div>
            <br>
          </div>
          </div>
          <button type=\"submit\" class=\"btn btn-primary\">Register</button>
        </form>
    </div>
    <div class=\"col-lg-6\" style=\"overflow-y: scroll; height: 600px;\">
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
        {{rule.bank|raw}}
      {% endfor %}
    </div>
  </div>
  </div>

    
{% endfor %}", "F:\\website\\slgamers/themes/slgamers/pages/game-single.htm", "");
    }
}
