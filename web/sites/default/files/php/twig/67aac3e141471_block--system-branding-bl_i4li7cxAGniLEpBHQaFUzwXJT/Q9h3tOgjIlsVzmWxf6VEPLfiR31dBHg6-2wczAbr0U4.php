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

/* themes/contrib/uswds/templates/system/block/block--system-branding-block.html.twig */
class __TwigTemplate_1d1dd90290ffceb9bd8a7f471d83532a extends Template
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
        // line 17
        yield "<div class=\"usa-logo\" id=\"logo\">

  ";
        // line 19
        if (($context["site_logo"] ?? null)) {
            // line 20
            yield "  <a class=\"logo-img\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" accesskey=\"1\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" aria-label=\"Home\">
    <img src=\"";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" />
  </a>
  ";
        } elseif (        // line 23
($context["site_name"] ?? null)) {
            // line 24
            yield "  <em class=\"usa-logo__text\">
    <a href=\"";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" accesskey=\"1\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" aria-label=\"Home\">
      ";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
            yield "
    </a>
  </em>
  ";
        }
        // line 30
        yield "  ";
        if (($context["site_slogan"] ?? null)) {
            // line 31
            yield "    <em class=\"usa-logo__text\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
            yield "</em>
  ";
        }
        // line 33
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_name", "site_slogan"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/uswds/templates/system/block/block--system-branding-block.html.twig";
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
        return array (  91 => 33,  85 => 31,  82 => 30,  75 => 26,  69 => 25,  66 => 24,  64 => 23,  57 => 21,  50 => 20,  48 => 19,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds/templates/system/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/contrib/uswds/templates/system/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 19];
        static $filters = ["t" => 20, "escape" => 21];
        static $functions = ["path" => 20];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                ['path'],
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
