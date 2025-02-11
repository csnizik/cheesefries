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

/* themes/contrib/uswds/templates/navigation/pager.html.twig */
class __TwigTemplate_a41aff9e40d19c98f114be125a4a93eb extends Template
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
        // line 33
        if (($context["items"] ?? null)) {
            // line 34
            yield "  <nav class=\"usa-pagination\" role=\"navigation\" aria-labelledby=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\">
    <div id=\"";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</div>
    <ul class=\"usa-pagination__list pager__items js-pager__items\">
      ";
            // line 38
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 38)) {
                // line 39
                yield "        <li class=\"usa-pagination__item usa-pagination__arrow\">
          <a href=\"";
                // line 40
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 40), "href", [], "any", false, false, true, 40), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 40), "attributes", [], "any", false, false, true, 40), "href", "title", "rel"), "html", null, true);
                yield ">
            <svg class=\"usa-icon\" aria-hidden=\"true\" role=\"img\">
              <use xlink:href=\"/";
                // line 42
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
                yield "/assets/img/sprite.svg#navigate_before\"></use>
            </svg>
            <span class=\"usa-pagination__link-text\"> ";
                // line 44
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
                yield " </span>
          </a>
        </li>
      ";
            }
            // line 48
            yield "      ";
            // line 49
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 49)) {
                // line 50
                yield "        <li class=\"usa-pagination__item usa-pagination__page-no\">
          <a  href=\"";
                // line 51
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 51), "href", [], "any", false, false, true, 51), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to page 1"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 51), "attributes", [], "any", false, false, true, 51), "href", "title"), "html", null, true);
                yield ">
            1
          </a>
        </li>
      ";
            }
            // line 56
            yield "      ";
            // line 57
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 57)) {
                // line 58
                yield "        <li class=\"usa-pagination__item usa-pagination__overflow\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 60
            yield "      ";
            // line 61
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 61));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 62
                yield "        <li class=\"usa-pagination__item usa-pagination__page-no\">
          ";
                // line 63
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 64
                    yield "            ";
                    $context["title"] = t("Current page");
                    // line 65
                    yield "          ";
                } else {
                    // line 66
                    yield "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 67
                    yield "          ";
                }
                // line 68
                yield "          <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 68), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 68), "href", "title"), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">
              ";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                yield "
            </span>";
                // line 72
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                // line 73
                yield "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            yield "      ";
            // line 77
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 77)) {
                // line 78
                yield "        <li class=\"usa-pagination__item usa-pagination__overflow\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 80
            yield "      ";
            // line 81
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 81)) {
                // line 82
                yield "        <li class=\"usa-pagination__item usa-pagination__page-no\">
          <a href=\"";
                // line 83
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 83), "href", [], "any", false, false, true, 83), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 83), "attributes", [], "any", false, false, true, 83), "href", "title"), "html", null, true);
                yield ">
            ";
                // line 84
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 84), "number", [], "any", false, false, true, 84), "html", null, true);
                yield "
          </a>
        </li>
      ";
            }
            // line 88
            yield "      ";
            // line 89
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 89)) {
                // line 90
                yield "        <li class=\"usa-pagination__item usa-pagination__arrow\">
          <a href=\"";
                // line 91
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 91), "href", [], "any", false, false, true, 91), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 91), "attributes", [], "any", false, false, true, 91), "href", "title", "rel"), "html", null, true);
                yield ">
            <span class=\"usa-pagination__link-text\"> ";
                // line 92
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
                yield " </span>
            <svg class=\"usa-icon\" aria-hidden=\"true\" role=\"img\">
              <use xlink:href=\"/";
                // line 94
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
                yield "/assets/img/sprite.svg#navigate_next\"></use>
            </svg>
          </a>
        </li>
      ";
            }
            // line 99
            yield "
    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "directory", "ellipses", "current"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/uswds/templates/navigation/pager.html.twig";
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
        return array (  223 => 99,  215 => 94,  210 => 92,  202 => 91,  199 => 90,  196 => 89,  194 => 88,  187 => 84,  179 => 83,  176 => 82,  173 => 81,  171 => 80,  167 => 78,  164 => 77,  162 => 76,  154 => 73,  152 => 72,  148 => 70,  138 => 68,  135 => 67,  132 => 66,  129 => 65,  126 => 64,  124 => 63,  121 => 62,  116 => 61,  114 => 60,  110 => 58,  107 => 57,  105 => 56,  93 => 51,  90 => 50,  87 => 49,  85 => 48,  78 => 44,  73 => 42,  64 => 40,  61 => 39,  58 => 38,  51 => 35,  46 => 34,  44 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds/templates/navigation/pager.html.twig", "/var/www/html/web/themes/contrib/uswds/templates/navigation/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 33, "for" => 61, "set" => 64];
        static $filters = ["escape" => 34, "t" => 35, "without" => 40];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 't', 'without'],
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
