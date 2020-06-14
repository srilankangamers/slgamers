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

/* F:\website\slgamers/themes/slgamers/pages/register.htm */
class __TwigTemplate_1a4a06771974feae1720064c70831dbde466ab6d7b0e3c88a9757f5779f6023d extends \Twig\Template
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
        echo "<div class=\"jumbotron jumbotron-fluid\">
   <div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("registerform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "        </div>
        <div class=\"col-lg-6\">
            <h3>Rules</h3>
        </div>
    </div>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "F:\\website\\slgamers/themes/slgamers/pages/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid\">
   <div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            {% component 'registerform' %}
        </div>
        <div class=\"col-lg-6\">
            <h3>Rules</h3>
        </div>
    </div>
 </div>
</div>", "F:\\website\\slgamers/themes/slgamers/pages/register.htm", "");
    }
}
