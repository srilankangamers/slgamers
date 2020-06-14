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

/* F:\website\slgamers/plugins/sunal/games/components/registerform/default.htm */
class __TwigTemplate_13c374b644a3f7d23a60ae1ef7bb77db9112b6496ac430e45bfabe4bd55762f3 extends \Twig\Template
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
        echo "
    

<form data-request=\"onSave\" data-request-files data-request-flash>
  <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
  ";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
  ";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_sessionkey')->getCallable(), ["sessionkey"]);
        echo "
  <h2>Register Now</h2>
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
  </form>";
    }

    public function getTemplateName()
    {
        return "F:\\website\\slgamers/plugins/sunal/games/components/registerform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    

<form data-request=\"onSave\" data-request-files data-request-flash>
  <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
  {{ form_token() }}
  {{ form_sessionkey() }}
  <h2>Register Now</h2>
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
  </form>", "F:\\website\\slgamers/plugins/sunal/games/components/registerform/default.htm", "");
    }
}
