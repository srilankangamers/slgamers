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
        // line 5
        echo $this->extensions['Cms\Twig\DebugExtension']->runDump($this->env, $context, ($context["record"] ?? null));
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournaments", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["tmnt"]) {
            // line 7
            echo "<!-- Page top section -->
<section class=\"page-top-section set-bg\" data-setbg=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tmnt"], "poster", [], "any", false, false, false, 8), "path", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
  <div style=\"margin-top: -150px;\" class=\"container\">
    <h2>Register Now!</h2>
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
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "tournament_title", [], "any", false, false, false, 22), "html", null, true);
            echo "</h3>
          <p style=\"display: inline-block; margin-right: 10px;\">Tournament Date</p><div class=\"post-date\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tmnt"], "end_date", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
          <div class=\"text-white\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["tmnt"], "description", [], "any", false, false, false, 24);
            echo "</div>
        </div>
      </div>
      <div class=\"col-lg-4 sidebar\">
        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-gamepad\" aria-hidden=\"true\"></i> Other Games</h2>
          <ul class=\"sb-cata-list list-group\">
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 32
                echo "            <li class=\"list-group-item ";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 32) == (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 32)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["slug"] ?? null) : null))) {
                    echo " list-group-item-action active ";
                }
                echo "\"><a style=\"color: black;\" href=\"/game-single/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 32), "html", null, true);
                echo "\">";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 32) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 32)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["slug"] ?? null) : null))) {
                    echo " <i class=\"fa fa-arrow-right\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 32), "html", null, true);
                    echo "</a> ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 32), "html", null, true);
                    echo "</a> ";
                }
                echo "</li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "          </ul>
        </div>
        ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["tmnt"], "type", [], "any", false, false, false, 36) == "Paid")) {
                // line 37
                echo "        <div class=\"sb-widget\">
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
        ";
            }
            // line 47
            echo "        <div class=\"sb-widget\">
          <h2 class=\"sb-title text-uppercase\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> Winners </h2>
            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tmnt"], "winners", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                echo "           
            <ul class=\"list-group list-group-horizontal\">
              <li class=\"list-group-item flex-fill\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "placement", [], "any", false, false, false, 51), "html", null, true);
                echo "</li>
              <li class=\"list-group-item flex-fill\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "player_name", [], "any", false, false, false, 52), "html", null, true);
                echo "</li>
              <li class=\"list-group-item flex-fill\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "prize", [], "any", false, false, false, 53), "html", null, true);
                echo "</li>
             </ul> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "    
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
            // line 68
            echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
            echo "
        ";
            // line 69
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
          ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournaments", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 90
                echo "          
          ";
                // line 91
                if ((twig_get_attribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 91) == "Paid")) {
                    // line 92
                    echo "          <div class=\"form-group col-md-6\">
            <label>Upload Bank Slip</label>
            <input type=\"file\" class=\"form-control\" name=\"bankslip\" accept=\"image/*\" data-request=\"onUpload\" data-request-files data-request-flash >
            <br>
            <div style=\"width: 150px; height: 150px;\" id=\"imageresult\">No Image to Preview</div>
            <br>
          </div>
          ";
                }
                // line 100
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "          </div>
          <button type=\"submit\" class=\"btn btn-primary\">Register</button>
        </form>
    </div>
    <div class=\"col-lg-6\" style=\"overflow-y: scroll; height: 600px;\">
      <h2>RULES</h2>
      <br>
      ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 109
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "gen_rules", [], "any", false, false, false, 109);
                echo "
        <br>
        ";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "game_rules", [], "any", false, false, false, 111);
                echo "
        <br>
        ";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "tec", [], "any", false, false, false, 113);
                echo "
        <br>
        ";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["rule"], "bans", [], "any", false, false, false, 115);
                echo "
        <br>
        ";
                // line 117
                if ((twig_get_attribute($this->env, $this->source, $context["tmnt"], "type", [], "any", false, false, false, 117) == "Paid")) {
                    // line 118
                    echo "        ";
                    echo twig_get_attribute($this->env, $this->source, $context["rule"], "bank", [], "any", false, false, false, 118);
                    echo "
        ";
                }
                // line 120
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
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
        return array (  292 => 121,  286 => 120,  280 => 118,  278 => 117,  273 => 115,  268 => 113,  263 => 111,  257 => 109,  253 => 108,  244 => 101,  238 => 100,  228 => 92,  226 => 91,  223 => 90,  219 => 89,  196 => 69,  192 => 68,  177 => 55,  168 => 53,  164 => 52,  160 => 51,  153 => 49,  149 => 47,  142 => 43,  138 => 42,  134 => 41,  130 => 40,  125 => 37,  123 => 36,  119 => 34,  96 => 32,  92 => 31,  82 => 24,  78 => 23,  74 => 22,  57 => 8,  54 => 7,  50 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{{dump(record)}}
{% for tmnt in record.tournaments %}
<!-- Page top section -->
<section class=\"page-top-section set-bg\" data-setbg=\"{{tmnt.poster.path}}\">
  <div style=\"margin-top: -150px;\" class=\"container\">
    <h2>Register Now!</h2>
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
            {% for w in tmnt.winners %}           
            <ul class=\"list-group list-group-horizontal\">
              <li class=\"list-group-item flex-fill\">{{w.placement}}</li>
              <li class=\"list-group-item flex-fill\">{{w.player_name}}</li>
              <li class=\"list-group-item flex-fill\">{{w.prize}}</li>
             </ul> 
            {% endfor %}    
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
          {% for t in record.tournaments %}
          
          {% if t.type == 'Paid' %}
          <div class=\"form-group col-md-6\">
            <label>Upload Bank Slip</label>
            <input type=\"file\" class=\"form-control\" name=\"bankslip\" accept=\"image/*\" data-request=\"onUpload\" data-request-files data-request-flash >
            <br>
            <div style=\"width: 150px; height: 150px;\" id=\"imageresult\">No Image to Preview</div>
            <br>
          </div>
          {% endif %}
          {% endfor %}
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
        {% if tmnt.type == 'Paid' %}
        {{rule.bank|raw}}
        {% endif%}
      {% endfor %}
    </div>
  </div>
  </div>

    
{% endfor %}", "F:\\website\\slgamers/themes/slgamers/pages/game-single.htm", "");
    }
}
