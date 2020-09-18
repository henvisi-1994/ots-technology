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

/* themes/onepage_zymphonies_theme-2.0.1/templates/layout/page.html.twig */
class __TwigTemplate_e7b8d5da6518e68f5e36102b3181c8e42c395c1abfdd0aba35a940a86fd1c14d extends \Twig\Template
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
        $tags = array("if" => 62, "for" => 125);
        $filters = array("escape" => 70, "raw" => 126, "date" => 436);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
        // line 60
        echo "

";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 62) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 62))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-8\">
          ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 69)) {
                // line 70
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 72
            echo "        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-4\">
          ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 77)) {
                // line 78
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 80
            echo "        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 87
        echo "

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-3\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 102)) {
            // line 103
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 105
        echo "        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-9\">
          ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 110)) {
            // line 111
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 113
        echo "        </div>

        </div>
      </div>
    </nav>
</header>


<!-- Start: Slider -->
  ";
        // line 122
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 123
            echo "    <div class=\"flexslider wow bounceInUp\">
      <ul class=\"slides\">
        ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 126
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 126, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "      </ul>
    </div>
  ";
        }
        // line 131
        echo "<!-- End: Slider -->


<!-- Start: Home page message -->
  ";
        // line 135
        if ((($context["is_front"] ?? null) && (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 135) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 135)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 135)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 135)))) {
            // line 136
            echo "    <div class=\"parallax-widget zero\" id=\"about\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">

          <!-- Start: Home page message -->
          ";
            // line 141
            if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 141))) {
                // line 142
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 144
            echo "          <!--End: Home page message -->

          ";
            // line 146
            if ((($context["is_front"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 146) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 146)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 146)))) {
                // line 147
                echo "            <div class=\"row- clearfix topwidget\">

              <!-- Start: Top wid
              get first -->          
              ";
                // line 151
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 151)) {
                    // line 152
                    echo "                <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 152, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
                    echo "</div>
              ";
                }
                // line 153
                echo "          
              <!-- End: Top widget first --> 

              <!-- Start: Top widget second -->          
              ";
                // line 157
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 157)) {
                    // line 158
                    echo "                <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 158, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                    echo "</div>
              ";
                }
                // line 159
                echo "          
              <!-- End: Top widget second --> 
              
              <!-- Start: Top widget third -->         
              ";
                // line 163
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 163)) {
                    // line 164
                    echo "                <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null), 164, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                    echo "</div>
              ";
                }
                // line 165
                echo "          
              <!-- End: Top widget third -->

            </div>
          ";
            }
            // line 170
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 175
        echo "<!--End: Home page message -->


<!-- Start: xxx -->
<div class=\"parallax-widget one\">
  <div class=\"parallax-region- wow bounceInDown\">
    
    ";
        // line 182
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 182)) {
            // line 183
            echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 186
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 191
        echo "
    ";
        // line 192
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 192) &&  !($context["is_front"] ?? null))) {
            // line 193
            echo "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 198
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 205
        echo "
    <div class=\"container\">
      <div class=\"parallax-region\">

        ";
        // line 209
        if ( !($context["is_front"] ?? null)) {
            // line 210
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 211
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
            echo "</div>
          </div>
        ";
        }
        // line 214
        echo "
        <div class=\"row layout\">

          ";
        // line 217
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 217)) {
            // line 218
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 219
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 219, $this->source), "html", null, true);
            echo "> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 222
        echo "
          ";
        // line 223
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 223)) {
            // line 224
            echo "            <div class=\"content_layout\">
              <div class=";
            // line 225
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 225, $this->source), "html", null, true);
            echo "> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 228
        echo "
          ";
        // line 229
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 229)) {
            // line 230
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 231
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 231, $this->source), "html", null, true);
            echo "> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 231), 231, $this->source), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 234
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End: xxx -->


<!-- Start: Home page message -->
  ";
        // line 244
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 244))) {
            // line 245
            echo "    <div class=\"parallax-widget two\" id=\"services\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 250
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 257
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 261
        if ((($context["is_front"] ?? null) && (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 261) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 261)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 261)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 261)))) {
            // line 262
            echo "  <div class=\"parallax-widget four\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 268
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 268)) {
                // line 269
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 269, $this->source), "html", null, true);
                echo ">
              ";
                // line 270
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 270), 270, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 272
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 276
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 276)) {
                // line 277
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 277, $this->source), "html", null, true);
                echo ">
              ";
                // line 278
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 280
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 284
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 284)) {
                // line 285
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 285, $this->source), "html", null, true);
                echo ">
              ";
                // line 286
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 288
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 292
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 292)) {
                // line 293
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 293, $this->source), "html", null, true);
                echo ">
              ";
                // line 294
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 294), 294, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 297
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 304
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
  ";
        // line 308
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 308))) {
            // line 309
            echo "    <div class=\"parallax-widget three\" id=\"clients\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 314
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 314), 314, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 321
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 325
        if ((($context["is_front"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 325) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 325)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 325)))) {
            // line 326
            echo "  <div class=\"parallax-widget six\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 332
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 332)) {
                // line 333
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null), 333, $this->source), "html", null, true);
                echo ">
              ";
                // line 334
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 334), 334, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 337
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 340
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 340)) {
                // line 341
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 341, $this->source), "html", null, true);
                echo ">
              ";
                // line 342
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 342), 342, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 345
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 348
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 348)) {
                // line 349
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 349, $this->source), "html", null, true);
                echo ">
              ";
                // line 350
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 350), 350, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 353
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 360
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 364
        if (((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 364)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, true, 364))) {
            // line 365
            echo "  <div class=\"parallax-widget five map-and-address\" id=\"contact\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <!-- Start: Google map -->
            ";
            // line 371
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 371)) {
                // line 372
                echo "              <div class=\"google_map\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 372), 372, $this->source), "html", null, true);
                echo "</div>
            ";
            }
            // line 374
            echo "            <!-- End: Google map -->
          </div>
          <div class=\"col-md-6\">
            <!-- Start: Address -->
            ";
            // line 378
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, true, 378)) {
                // line 379
                echo "              <div class=\"address-wrap\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, true, 379), 379, $this->source), "html", null, true);
                echo "</div>
            ";
            }
            // line 381
            echo "          <!--End: Address -->
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 388
        echo "<!--End: Home page message -->


<!-- Start: Footer Menu -->
";
        // line 392
        if (($context["show_social_icon"] ?? null)) {
            // line 393
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Social media links -->
        <div class=\"col-sm-12\">
          <div class=\"social-media\">
            ";
            // line 400
            if (($context["facebook_url"] ?? null)) {
                // line 401
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 401, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
            }
            // line 403
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 404
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 404, $this->source), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
            }
            // line 406
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 407
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 407, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
            }
            // line 409
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 410
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 410, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
            }
            // line 412
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 413
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 413, $this->source), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
            }
            // line 415
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 416
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 416, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 418
            echo "          </div>
        </div>
        <!-- End: Social media links -->

      </div>
    </div>
  </div>
";
        }
        // line 426
        echo "<!-- End: Footer Menu -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 436
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 441
        if (($context["show_credit_link"] ?? null)) {
            // line 442
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 446
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/onepage_zymphonies_theme-2.0.1/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  767 => 446,  761 => 442,  759 => 441,  751 => 436,  739 => 426,  729 => 418,  723 => 416,  720 => 415,  714 => 413,  711 => 412,  705 => 410,  702 => 409,  696 => 407,  693 => 406,  687 => 404,  684 => 403,  678 => 401,  676 => 400,  667 => 393,  665 => 392,  659 => 388,  650 => 381,  644 => 379,  642 => 378,  636 => 374,  630 => 372,  628 => 371,  620 => 365,  618 => 364,  612 => 360,  603 => 353,  597 => 350,  592 => 349,  590 => 348,  585 => 345,  579 => 342,  574 => 341,  572 => 340,  567 => 337,  561 => 334,  556 => 333,  554 => 332,  546 => 326,  544 => 325,  538 => 321,  528 => 314,  521 => 309,  519 => 308,  513 => 304,  504 => 297,  498 => 294,  493 => 293,  491 => 292,  485 => 288,  479 => 286,  474 => 285,  472 => 284,  466 => 280,  460 => 278,  455 => 277,  453 => 276,  447 => 272,  441 => 270,  436 => 269,  434 => 268,  426 => 262,  424 => 261,  418 => 257,  408 => 250,  401 => 245,  399 => 244,  387 => 234,  379 => 231,  376 => 230,  374 => 229,  371 => 228,  363 => 225,  360 => 224,  358 => 223,  355 => 222,  347 => 219,  344 => 218,  342 => 217,  337 => 214,  331 => 211,  328 => 210,  326 => 209,  320 => 205,  310 => 198,  303 => 193,  301 => 192,  298 => 191,  290 => 186,  285 => 183,  283 => 182,  274 => 175,  267 => 170,  260 => 165,  252 => 164,  250 => 163,  244 => 159,  236 => 158,  234 => 157,  228 => 153,  220 => 152,  218 => 151,  212 => 147,  210 => 146,  206 => 144,  200 => 142,  198 => 141,  191 => 136,  189 => 135,  183 => 131,  178 => 128,  169 => 126,  165 => 125,  161 => 123,  159 => 122,  148 => 113,  142 => 111,  140 => 110,  133 => 105,  127 => 103,  125 => 102,  108 => 87,  99 => 80,  93 => 78,  91 => 77,  84 => 72,  78 => 70,  76 => 69,  68 => 63,  66 => 62,  62 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/onepage_zymphonies_theme-2.0.1/templates/layout/page.html.twig", "C:\\laragon\\www\\ots-technologyc\\web\\themes\\onepage_zymphonies_theme-2.0.1\\templates\\layout\\page.html.twig");
    }
}
