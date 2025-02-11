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

/* themes/contrib/uswds/templates/uswds/government-banner.html.twig */
class __TwigTemplate_069ca0ca43301794668a6c4d048c1913 extends Template
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
        yield "<section class=\"usa-banner\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Official government website"));
        yield "\">
  <div class=\"usa-accordion\">
    <header class=\"usa-banner__header\">
      <div class=\"usa-banner__inner\">
        <div class=\"grid-col-auto\">
          <img class=\"usa-banner__header-flag\" src=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["image_base"] ?? null), "html", null, true);
        yield "/us_flag_small.png\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("U.S. flag"));
        yield "\">
        </div>
        <div class=\"grid-col-fill tablet:grid-col-auto\">
          <p class=\"usa-banner__header-text\">";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("An official website of the United States government"));
        yield "</p>
          <p class=\"usa-banner__header-action\" aria-hidden=\"true\">";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Here’s how you know"));
        yield "</p>
        </div>
        <button class=\"usa-accordion__button usa-banner__button\"
          aria-expanded=\"false\" aria-controls=\"gov-banner\">
          <span class=\"usa-banner__button-text\">";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Here’s how you know"));
        yield "</span>
        </button>
      </div>
    </header>
    <div class=\"usa-banner__content usa-accordion__content\" id=\"gov-banner\">
      <div class=\"grid-row grid-gap-lg\">
        <div class=\"usa-banner__guidance tablet:grid-col-6\">
          <img class=\"usa-banner__icon usa-media-block__img\" src=\"";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["image_base"] ?? null), "html", null, true);
        yield "/icon-dot-gov.svg\" role=\"img\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Dot gov"));
        yield "\">
          <div class=\"usa-media-block__body\">
            <p>
              <strong>
                ";
        // line 25
        yield t("Official websites use @tld", array("@tld" =>         // line 26
($context["tld"] ?? null), ));
        // line 28
        yield "              </strong>
              <br/>
              ";
        // line 30
        if (($context["military"] ?? null)) {
            // line 31
            yield "                ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("A <strong>.mil</strong> website belongs to an official U.S. Department of Defense organization."));
            yield "
              ";
        } else {
            // line 33
            yield "                ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("A <strong>.gov</strong> website belongs to an official government organization in the United States."));
            yield "
              ";
        }
        // line 35
        yield "            </p>
          </div>
        </div>
        <div class=\"usa-banner__guidance tablet:grid-col-6\">
          <img class=\"usa-banner__icon usa-media-block__img\" src=\"";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["image_base"] ?? null), "html", null, true);
        yield "/icon-https.svg\" role=\"img\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Https"));
        yield "\">
          <div class=\"usa-media-block__body\">
            <p>
              <strong>
                ";
        // line 43
        yield t("Secure @tld websites use HTTPS", array("@tld" =>         // line 44
($context["tld"] ?? null), ));
        // line 46
        yield "              </strong>
              <br/>
              ";
        // line 48
        yield t("A <strong>lock</strong>
                (<span class=\"icon-lock\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"52\" height=\"64\" viewBox=\"0 0 52 64\" class=\"usa-banner__lock-image\" role=\"img\" aria-labelledby=\"banner-lock-title banner-lock-description\"><title id=\"banner-lock-title\">Lock</title><desc id=\"banner-lock-description\">A locked padlock</desc><path fill=\"#000000\" fill-rule=\"evenodd\" d=\"M26 0c10.493 0 19 8.507 19 19v9h3a4 4 0 0 1 4 4v28a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V32a4 4 0 0 1 4-4h3v-9C7 8.507 15.507 0 26 0zm0 8c-5.979 0-10.843 4.77-10.996 10.712L15 19v9h22v-9c0-6.075-4.925-11-11-11z\"/></svg></span>)
                or <strong>https://</strong> means you’ve safely connected to the @tld website. Share sensitive information only on official, secure websites.", array("@tld" =>         // line 51
($context["tld"] ?? null), ));
        // line 53
        yield "            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["image_base", "tld", "military"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/uswds/templates/uswds/government-banner.html.twig";
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
        return array (  139 => 53,  137 => 51,  134 => 48,  130 => 46,  128 => 44,  127 => 43,  118 => 39,  112 => 35,  106 => 33,  100 => 31,  98 => 30,  94 => 28,  92 => 26,  91 => 25,  82 => 21,  72 => 14,  65 => 10,  61 => 9,  53 => 6,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds/templates/uswds/government-banner.html.twig", "/var/www/html/web/themes/contrib/uswds/templates/uswds/government-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 25, "if" => 30];
        static $filters = ["t" => 1, "escape" => 6];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'if'],
                ['t', 'escape'],
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
