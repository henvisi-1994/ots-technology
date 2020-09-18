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

/* themes/onepage_zymphonies_theme-2.0.1/templates/form/details.html.twig */
class __TwigTemplate_a0642d2f082eb3556832c5b9adaae188981be9255da8d11b9c12f0f5f160ce10 extends \Twig\Template
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
        $tags = array("if" => 18);
        $filters = array("escape" => 17);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 17
        echo "<details";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 17, $this->source), "html", null, true);
        echo ">";
        // line 18
        if (($context["title"] ?? null)) {
            // line 19
            echo "<summary";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary_attributes"] ?? null), 19, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 19, $this->source), "html", null, true);
            echo "</summary>";
        }
        // line 21
        echo "<div class=\"details-wrapper\">
    ";
        // line 22
        if (($context["errors"] ?? null)) {
            // line 23
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 24, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 27
        if (($context["description"] ?? null)) {
            // line 28
            echo "<div class=\"details-description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 28, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 30
        if (($context["children"] ?? null)) {
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 31, $this->source), "html", null, true);
        }
        // line 33
        if (($context["value"] ?? null)) {
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 34, $this->source), "html", null, true);
        }
        // line 36
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "themes/onepage_zymphonies_theme-2.0.1/templates/form/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  103 => 34,  101 => 33,  98 => 31,  96 => 30,  91 => 28,  89 => 27,  83 => 24,  80 => 23,  78 => 22,  75 => 21,  68 => 19,  66 => 18,  62 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/onepage_zymphonies_theme-2.0.1/templates/form/details.html.twig", "C:\\laragon\\www\\ots-technologyc\\web\\themes\\onepage_zymphonies_theme-2.0.1\\templates\\form\\details.html.twig");
    }
}
