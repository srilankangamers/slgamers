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

/* F:\website\slgamers/themes/slgamers/pages/registration.htm */
class __TwigTemplate_df2be76dd6bbe62a145043eb5deeb8430c37fa5815b419e66e55cc2b5bac6ab1 extends \Twig\Template
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
        if (($context["record"] ?? null)) {
            // line 5
            echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-6 glow\" style=\"margin-top: 10px; margin-bottom: 10px;\">
\t\t\t<form data-request=\"onSave\" data-request-files data-request-flash>
\t\t<input type=\"hidden\" name=\"_handler\" value=\"onSave\">
\t\t";
            // line 11
            echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
            echo "
\t\t";
            // line 12
            echo call_user_func_array($this->env->getFunction('form_sessionkey')->getCallable(), ["sessionkey"]);
            echo "
\t\t<h2>Register Now</h2>
\t\t<br>
\t\t<div class=\"form-row\">
\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t<label> Player Name</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\">
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t<label> Contact Number (Whatsapp)</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"contact\">
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t<label>Player IGN</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"ign\">
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t<label>Game Account ID</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"game_id\">
\t\t\t</div>
\t\t\t<div class=\"form-group\" hidden=\"true\">
\t\t\t\t<label for=\"exampleFormControlSelect1\">Select Tournament</label>
\t\t\t\t<select name=\"tour_id\" class=\"form-control float-right\">
\t\t\t\t\t
\t\t\t\t\t<option id=\"tname\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_title", [], "any", false, false, false, 36), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "type", [], "any", false, false, false, 36), "html", null, true);
            echo ")</option>
\t\t\t\t\t
\t\t\t\t</select>
\t\t\t</div>
\t\t\t";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "type", [], "any", false, false, false, 40) == "Paid")) {
                // line 41
                echo "\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t<label>Upload Bank Slip (Only For Paid Tournaments)</label>
\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"bankslip\" accept=\"image/*\" data-request=\"onUpload\" data-request-files data-request-flash >
\t\t\t\t<br>
\t\t\t\t<div style=\"width: 150px; height: 150px;\" id=\"imageresult\">No Image to Preview</div>
\t\t\t\t<br>
\t\t\t</div>
\t\t\t";
            }
            // line 49
            echo "\t\t\t<div class=\"col-md-9\"></div>
\t\t\t<div class=\"col-md-3\"><button type=\"submit\" class=\"btn float-right btn-primary\">Register <i class=\"fas fa-user-edit\"></i></button></div>
\t\t\t</div>
\t\t</form>
\t\t</div>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "F:\\website\\slgamers/themes/slgamers/pages/registration.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 49,  97 => 41,  95 => 40,  84 => 36,  57 => 12,  53 => 11,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}
{% if record %}
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-3\"></div>
\t\t<div class=\"col-md-6 glow\" style=\"margin-top: 10px; margin-bottom: 10px;\">
\t\t\t<form data-request=\"onSave\" data-request-files data-request-flash>
\t\t<input type=\"hidden\" name=\"_handler\" value=\"onSave\">
\t\t{{ form_token() }}
\t\t{{ form_sessionkey() }}
\t\t<h2>Register Now</h2>
\t\t<br>
\t\t<div class=\"form-row\">
\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t<label> Player Name</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\">
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t<label> Contact Number (Whatsapp)</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"contact\">
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t<label>Player IGN</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"ign\">
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t<label>Game Account ID</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"game_id\">
\t\t\t</div>
\t\t\t<div class=\"form-group\" hidden=\"true\">
\t\t\t\t<label for=\"exampleFormControlSelect1\">Select Tournament</label>
\t\t\t\t<select name=\"tour_id\" class=\"form-control float-right\">
\t\t\t\t\t
\t\t\t\t\t<option id=\"tname\" value=\"{{record.id}}\">{{record.tournament_title}} ({{record.type}})</option>
\t\t\t\t\t
\t\t\t\t</select>
\t\t\t</div>
\t\t\t{% if record.type == 'Paid' %}
\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t<label>Upload Bank Slip (Only For Paid Tournaments)</label>
\t\t\t\t<input type=\"file\" class=\"form-control\" name=\"bankslip\" accept=\"image/*\" data-request=\"onUpload\" data-request-files data-request-flash >
\t\t\t\t<br>
\t\t\t\t<div style=\"width: 150px; height: 150px;\" id=\"imageresult\">No Image to Preview</div>
\t\t\t\t<br>
\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"col-md-9\"></div>
\t\t\t<div class=\"col-md-3\"><button type=\"submit\" class=\"btn float-right btn-primary\">Register <i class=\"fas fa-user-edit\"></i></button></div>
\t\t\t</div>
\t\t</form>
\t\t</div>
\t</div>
</div>
{% endif %}", "F:\\website\\slgamers/themes/slgamers/pages/registration.htm", "");
    }
}
