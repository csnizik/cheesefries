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

/* @uswds/includes/slim-footer.html.twig */
class __TwigTemplate_4befb7e228cc0f2ff0682a7b211e6c66 extends Template
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
        // line 1
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 1) || ($context["footer_contact"] ?? null)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 1))) {
            // line 2
            yield "  <div class=\"usa-footer__primary-section\">
    <div class=\"usa-footer__primary-container grid-row\">
      ";
            // line 4
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 4)) {
                // line 5
                yield "        <div class=\"mobile-lg:grid-col-8\">
          <nav class=\"usa-footer__nav\" aria-label=\"Footer navigation\">
            ";
                // line 7
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 7), "html", null, true);
                yield "
          </nav>
        </div>
      ";
            }
            // line 11
            yield "      ";
            if (($context["footer_contact"] ?? null)) {
                // line 12
                yield "        <div class=\"mobile-lg:grid-col-4\">
          <address class=\"usa-footer__address\">
            <div class=\"grid-row grid-gap\">
              ";
                // line 15
                if (($context["phone"] ?? null)) {
                    // line 16
                    yield "                <div class=\"grid-col-auto mobile-lg:grid-col-12 desktop:grid-col-auto\">
                  <div class=\"usa-footer__contact-info\">
                    <a href=\"tel:";
                    // line 18
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["phone"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["phone"] ?? null), "html", null, true);
                    yield "</a>
                  </div>
                </div>
              ";
                }
                // line 22
                yield "              ";
                if (($context["email"] ?? null)) {
                    // line 23
                    yield "                <div class=\"grid-col-auto mobile-lg:grid-col-12 desktop:grid-col-auto\">
                  <div class=\"usa-footer__contact-info\">
                    <a href=\"mailto:";
                    // line 25
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true);
                    yield "</a>
                  </div>
                </div>
              ";
                }
                // line 29
                yield "            </div>
          </address>
        </div>
      ";
            }
            // line 33
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 33)) {
                // line 34
                yield "        <div class=\"grid-row grid-gap\">
          <div class=\"mobile-lg:grid-col-12\">
            ";
                // line 36
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 36), "html", null, true);
                yield "
          </div>
        </div>
      ";
            }
            // line 40
            yield "    </div>
  </div>
";
        }
        // line 43
        if (((($context["footer_agency_logo"] ?? null) || ($context["footer_agency_name"] ?? null)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_secondary", [], "any", false, false, true, 43))) {
            // line 44
            yield "  <div class=\"usa-footer__secondary-section\">
    <div class=\"grid-container\">
      ";
            // line 46
            if ((($context["footer_agency_logo"] ?? null) || ($context["footer_agency_name"] ?? null))) {
                // line 47
                yield "        <div class=\"usa-footer__logo grid-row grid-gap-2\">
          ";
                // line 48
                if (($context["footer_agency_logo"] ?? null)) {
                    // line 49
                    yield "            <div class=\"grid-col-auto\">
              <img class=\"usa-footer__logo-img\" src=\"";
                    // line 50
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_agency_logo"] ?? null), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_agency_name"] ?? null), "html", null, true);
                    yield " logo\">
            </div>
          ";
                }
                // line 53
                yield "          ";
                if (($context["footer_agency_name"] ?? null)) {
                    // line 54
                    yield "            <div class=\"grid-col-auto\">
              <p class=\"usa-footer__logo-heading\">";
                    // line 55
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_agency_name"] ?? null), "html", null, true);
                    yield "</p>
            </div>
          ";
                }
                // line 58
                yield "        </div>
      ";
            }
            // line 60
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_secondary", [], "any", false, false, true, 60)) {
                // line 61
                yield "        <div class=\"grid-row grid-gap\">
          <div class=\"mobile-lg:grid-col-12\">
            ";
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_secondary", [], "any", false, false, true, 63), "html", null, true);
                yield "
          </div>
        </div>
      ";
            }
            // line 67
            yield "    </div>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "footer_contact", "phone", "email", "footer_agency_logo", "footer_agency_name"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@uswds/includes/slim-footer.html.twig";
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
        return array (  181 => 67,  174 => 63,  170 => 61,  167 => 60,  163 => 58,  157 => 55,  154 => 54,  151 => 53,  143 => 50,  140 => 49,  138 => 48,  135 => 47,  133 => 46,  129 => 44,  127 => 43,  122 => 40,  115 => 36,  111 => 34,  108 => 33,  102 => 29,  93 => 25,  89 => 23,  86 => 22,  77 => 18,  73 => 16,  71 => 15,  66 => 12,  63 => 11,  56 => 7,  52 => 5,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@uswds/includes/slim-footer.html.twig", "/var/www/html/web/themes/contrib/uswds/templates/includes/slim-footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 7];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
