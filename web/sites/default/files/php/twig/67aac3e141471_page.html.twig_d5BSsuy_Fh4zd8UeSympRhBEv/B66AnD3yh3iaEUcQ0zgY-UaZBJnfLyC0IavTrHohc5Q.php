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

/* themes/contrib/uswds/templates/system/layout/page.html.twig */
class __TwigTemplate_7dee4bc12bd567897c92a5e6aa2ff3f0 extends Template
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
";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 8) || ($context["government_banner"] ?? null))) {
            // line 9
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["government_banner"] ?? null), "html", null, true);
            yield "
";
        }
        // line 11
        yield "
<div class=\"usa-overlay\"></div>

";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 14)) {
            // line 15
            yield "  <div class=\"grid-container\">
    ";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 16), "html", null, true);
            yield "
  </div>
";
        }
        // line 19
        yield "
<header class=\"";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_classes"] ?? null), "html", null, true);
        yield "\" role=\"banner\">
  ";
        // line 21
        if (($context["header_basic"] ?? null)) {
            // line 22
            yield "    <div class=\"usa-nav-container\">
   ";
        }
        // line 24
        yield "      <div class=\"usa-navbar\">
        ";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 25), "html", null, true);
        yield "
        <button class=\"usa-menu-btn\">";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
        yield "</button>
      </div>

      <nav aria-label=\"Primary navigation\" class=\"usa-nav\" role=\"navigation\">
        <button class=\"usa-nav__close\">
          <img src=\"";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["active_theme_path"] ?? null), "html", null, true);
        yield "/assets/img/close.svg\" alt=\"close\" />
        </button>
        ";
        // line 34
        yield "        ";
        if (($context["header_extended"] ?? null)) {
            // line 35
            yield "          <div class=\"usa-nav__inner\">
        ";
        }
        // line 37
        yield "
        ";
        // line 38
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 38)), "<img><video><audio><drupal-render-placeholder>"))) {
            // line 39
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 39), "html", null, true);
            yield "
        ";
        }
        // line 41
        yield "
        ";
        // line 42
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 42)), "<img><video><audio><drupal-render-placeholder>"))) {
            // line 43
            yield "          <div class=\"usa-nav__secondary\">
            ";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 44), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 47
        yield "
        ";
        // line 48
        if (($context["header_extended"] ?? null)) {
            // line 49
            yield "          </div>
        ";
        }
        // line 51
        yield "     </nav>

  ";
        // line 53
        if (($context["header_basic"] ?? null)) {
            // line 54
            yield "    </div>
  ";
        }
        // line 56
        yield "
</header>
 <main class=\"usa-section\" id=\"main-content\">
  ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 59)) {
            // line 60
            yield "    <section class=\"usa-hero\">
      ";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 61), "html", null, true);
            yield "
    </section>
  ";
        }
        // line 64
        yield "   <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_class"] ?? null), "html", null, true);
        yield "\">
     <div class=\"grid-row grid-gap\">
       <div class=\"grid-col-12\">
         ";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 67), "html", null, true);
        yield "
         ";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 68), "html", null, true);
        yield "

         ";
        // line 70
        if (Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 70)))) {
            // line 71
            yield "           <div class=\"usa-alert usa-alert--info\">
             <div class=\"usa-alert__body\">
               <p class=\"usa-alert__text\">
                 ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 74), "html", null, true);
            yield "
               </p>
             </div>
           </div>
         ";
        }
        // line 79
        yield "
      </div>
    </div>

    <div class=\"grid-row grid-gap\">
    ";
        // line 85
        yield "    ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 85)), "<img><video><audio><drupal-render-placeholder>"))) {
            // line 86
            yield "      <aside class=\"tablet:grid-col-3\">
        ";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 87), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 90
        yield "
      <div class=\"region-content ";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_class"] ?? null), "html", null, true);
        yield "\">
       ";
        // line 92
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 92), "html", null, true);
        yield "
      </div>
    ";
        // line 95
        yield "    ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95)), "<img><video><audio><drupal-render-placeholder>"))) {
            // line 96
            yield "      <aside class=\"tablet:grid-col-3\">
        ";
            // line 97
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 97), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 100
        yield "
    </div>
  </div>
</main>

<footer class=\"";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_classes"] ?? null), "html", null, true);
        yield "\" role=\"contentinfo\">
  <div class=\"grid-container usa-footer__return-to-top\">
    <a href=\"#\">Return to top</a>
  </div>
  ";
        // line 109
        if (($context["footer_slim"] ?? null)) {
            // line 110
            yield "    ";
            yield from $this->loadTemplate("@uswds/includes/slim-footer.html.twig", "themes/contrib/uswds/templates/system/layout/page.html.twig", 110)->unwrap()->yield($context);
            // line 111
            yield "  ";
        } elseif (($context["footer_medium"] ?? null)) {
            // line 112
            yield "    ";
            yield from $this->loadTemplate("@uswds/includes/medium-footer.html.twig", "themes/contrib/uswds/templates/system/layout/page.html.twig", 112)->unwrap()->yield($context);
            // line 113
            yield "  ";
        } else {
            // line 114
            yield "    ";
            yield from $this->loadTemplate("@uswds/includes/big-footer.html.twig", "themes/contrib/uswds/templates/system/layout/page.html.twig", 114)->unwrap()->yield($context);
            // line 115
            yield "  ";
        }
        // line 116
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
        return "themes/contrib/uswds/templates/system/layout/page.html.twig";
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
        return array (  279 => 116,  276 => 115,  273 => 114,  270 => 113,  267 => 112,  264 => 111,  261 => 110,  259 => 109,  252 => 105,  245 => 100,  239 => 97,  236 => 96,  233 => 95,  228 => 92,  224 => 91,  221 => 90,  215 => 87,  212 => 86,  209 => 85,  202 => 79,  194 => 74,  189 => 71,  187 => 70,  182 => 68,  178 => 67,  171 => 64,  165 => 61,  162 => 60,  160 => 59,  155 => 56,  151 => 54,  149 => 53,  145 => 51,  141 => 49,  139 => 48,  136 => 47,  130 => 44,  127 => 43,  125 => 42,  122 => 41,  116 => 39,  114 => 38,  111 => 37,  107 => 35,  104 => 34,  99 => 31,  91 => 26,  87 => 25,  84 => 24,  80 => 22,  78 => 21,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  60 => 14,  55 => 11,  49 => 9,  47 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds/templates/system/layout/page.html.twig", "/var/www/html/web/themes/contrib/uswds/templates/system/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 8, "include" => 110];
        static $filters = ["escape" => 9, "t" => 26, "trim" => 38, "striptags" => 38, "render" => 38];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 't', 'trim', 'striptags', 'render'],
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
