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

/* core/themes/bartik/templates/classy/content/taxonomy-term.html.twig */
class __TwigTemplate_3ffe3954fbe8cd01a5af85f8bac3f1f98e59b6efe12b34f474c0453af8a6eff5 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 27, "if" => 34);
        $filters = array("clean_class" => 29, "escape" => 32);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        $context["classes"] = [0 => "taxonomy-term", 1 => ("vocabulary-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 29
($context["term"] ?? null), "bundle", [], "any", false, false, true, 29), 29, $this->source)))];
        // line 32
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => ("taxonomy-term-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "id", [], "any", false, false, true, 32), 32, $this->source))], "method", false, false, true, 32), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 32), 32, $this->source), "html", null, true);
        echo ">
  ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 33, $this->source), "html", null, true);
        echo "
  ";
        // line 34
        if ((($context["name"] ?? null) &&  !($context["page"] ?? null))) {
            // line 35
            echo "    <h2><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 35, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 35, $this->source), "html", null, true);
            echo "</a></h2>
  ";
        }
        // line 37
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 37, $this->source), "html", null, true);
        echo "
  <div class=\"content\">
    ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 39, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/classy/content/taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  84 => 37,  76 => 35,  74 => 34,  70 => 33,  65 => 32,  63 => 29,  62 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/bartik/templates/classy/content/taxonomy-term.html.twig", "C:\\laragon\\www\\ots-technology\\web\\core\\themes\\bartik\\templates\\classy\\content\\taxonomy-term.html.twig");
    }
}