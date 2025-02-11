<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/demo_subtheme/templates/layout/page.html.twig */
class __TwigTemplate_8a077595c52123ffb011dc5e54f391b5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "
<script src=\"/themes/custom/demo_subtheme/assets/js/uswds.min.js\"></script>




";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 13) || ($context["government_banner"] ?? null))) {
            // line 14
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("government_banner", $context)) ? (Twig\Extension\CoreExtension::default(($context["government_banner"] ?? null), "No government banner")) : ("No government banner")), "html", null, true);
            yield "
";
        }
        // line 16
        yield "
<div class=\"usa-overlay\"></div>

";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 19)) {
            // line 20
            yield "  <div class=\"grid-container\">
    ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 21), "html", null, true);
            yield "
  </div>
";
        }
        // line 24
        yield "
<header class=\"";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_classes"] ?? null), "html", null, true);
        yield "\" role=\"banner\">
  ";
        // line 26
        if (($context["header_basic"] ?? null)) {
            // line 27
            yield "    <div class=\"usa-nav-container\">
   ";
        }
        // line 29
        yield "      <div class=\"usa-navbar\">
        ";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 30), "html", null, true);
        yield "
        <button class=\"usa-menu-btn\">";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
        yield "</button>
      </div>

      <nav aria-label=\"Primary navigation\" class=\"usa-nav\" role=\"navigation\">
        <button class=\"usa-nav__close\">
          <img src=\"";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["active_theme_path"] ?? null), "html", null, true);
        yield "/assets/img/close.svg\" alt=\"close\" />
        </button>
        ";
        // line 39
        yield "        ";
        if (($context["header_extended"] ?? null)) {
            // line 40
            yield "          <div class=\"usa-nav__inner\">
        ";
        }
        // line 42
        yield "
        ";
        // line 43
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 43)), "<img><video><audio><drupal-render-placeholder>"))) {
            // line 44
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 44), "html", null, true);
            yield "
        ";
        }
        // line 46
        yield "
        ";
        // line 47
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 47)), "<img><video><audio><drupal-render-placeholder>"))) {
            // line 48
            yield "          <div class=\"usa-nav__secondary\">
            ";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 49), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 52
        yield "
        ";
        // line 53
        if (($context["header_extended"] ?? null)) {
            // line 54
            yield "          </div>
        ";
        }
        // line 56
        yield "     </nav>

  ";
        // line 58
        if (($context["header_basic"] ?? null)) {
            // line 59
            yield "    </div>
  ";
        }
        // line 61
        yield "
</header>
 <main class=\"usa-section\" id=\"main-content\">
  ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 64)) {
            // line 65
            yield "    <section class=\"usa-hero\">
      ";
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 66), "html", null, true);
            yield "
    </section>
  ";
        }
        // line 69
        yield "   <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_class"] ?? null), "html", null, true);
        yield "\">
     <div class=\"grid-row grid-gap\">
       <div class=\"grid-col-12\">
         ";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 72), "html", null, true);
        yield "
         ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 73), "html", null, true);
        yield "

         ";
        // line 75
        if (Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 75)))) {
            // line 76
            yield "           <div class=\"usa-alert usa-alert--info\">
             <div class=\"usa-alert__body\">
               <p class=\"usa-alert__text\">
                 ";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 79), "html", null, true);
            yield "
               </p>
             </div>
           </div>
         ";
        }
        // line 84
        yield "
      </div>
    </div>

    <div class=\"grid-row grid-gap\">
    ";
        // line 90
        yield "    ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 90)), "<img><video><audio><drupal-render-placeholder>"))) {
            // line 91
            yield "      <aside class=\"tablet:grid-col-3\">
        ";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 92), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 95
        yield "
      <div class=\"region-content ";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_class"] ?? null), "html", null, true);
        yield "\">
       ";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 97), "html", null, true);
        yield "
      </div>
    ";
        // line 100
        yield "    ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 100)), "<img><video><audio><drupal-render-placeholder>"))) {
            // line 101
            yield "      <aside class=\"tablet:grid-col-3\">
        ";
            // line 102
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 102), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 105
        yield "
    </div>
  </div>
</main>

<footer class=\"";
        // line 110
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_classes"] ?? null), "html", null, true);
        yield "\" role=\"contentinfo\">
  <div class=\"grid-container usa-footer__return-to-top\">
    <a href=\"#\">Return to top</a>
  </div>
  ";
        // line 114
        if (($context["footer_slim"] ?? null)) {
            // line 115
            yield "    ";
            yield from $this->loadTemplate("@uswds/includes/slim-footer.html.twig", "themes/custom/demo_subtheme/templates/layout/page.html.twig", 115)->unwrap()->yield($context);
            // line 116
            yield "  ";
        } elseif (($context["footer_medium"] ?? null)) {
            // line 117
            yield "    ";
            yield from $this->loadTemplate("@uswds/includes/medium-footer.html.twig", "themes/custom/demo_subtheme/templates/layout/page.html.twig", 117)->unwrap()->yield($context);
            // line 118
            yield "  ";
        } else {
            // line 119
            yield "    ";
            yield from $this->loadTemplate("@uswds/includes/big-footer.html.twig", "themes/custom/demo_subtheme/templates/layout/page.html.twig", 119)->unwrap()->yield($context);
            // line 120
            yield "  ";
        }
        // line 121
        yield "</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "government_banner", "header_classes", "header_basic", "active_theme_path", "header_extended", "main_class", "content_class", "footer_classes", "footer_slim", "footer_medium"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/demo_subtheme/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  284 => 121,  281 => 120,  278 => 119,  275 => 118,  272 => 117,  269 => 116,  266 => 115,  264 => 114,  257 => 110,  250 => 105,  244 => 102,  241 => 101,  238 => 100,  233 => 97,  229 => 96,  226 => 95,  220 => 92,  217 => 91,  214 => 90,  207 => 84,  199 => 79,  194 => 76,  192 => 75,  187 => 73,  183 => 72,  176 => 69,  170 => 66,  167 => 65,  165 => 64,  160 => 61,  156 => 59,  154 => 58,  150 => 56,  146 => 54,  144 => 53,  141 => 52,  135 => 49,  132 => 48,  130 => 47,  127 => 46,  121 => 44,  119 => 43,  116 => 42,  112 => 40,  109 => 39,  104 => 36,  96 => 31,  92 => 30,  89 => 29,  85 => 27,  83 => 26,  79 => 25,  76 => 24,  70 => 21,  67 => 20,  65 => 19,  60 => 16,  54 => 14,  52 => 13,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/demo_subtheme/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/demo_subtheme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 13, "include" => 115];
        static $filters = ["escape" => 14, "default" => 14, "t" => 31, "trim" => 43, "striptags" => 43, "render" => 43];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'default', 't', 'trim', 'striptags', 'render'],
                [],
                $this->source
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
}
