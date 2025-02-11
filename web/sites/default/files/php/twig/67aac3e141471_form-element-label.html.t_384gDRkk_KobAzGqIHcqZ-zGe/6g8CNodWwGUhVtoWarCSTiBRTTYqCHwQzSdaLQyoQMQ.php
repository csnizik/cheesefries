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

/* themes/contrib/uswds/templates/form/form-element-label.html.twig */
class __TwigTemplate_b94c4d8806e696e48c0c91297df43d4e extends Template
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
        // line 16
        $context["classes"] = [(((        // line 17
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), (((        // line 18
($context["title_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), ((        // line 19
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 20
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 23
        yield "
";
        // line 24
        if ((( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null)) || ($context["required"] ?? null)) || ($context["form_optional_label"] ?? null))) {
            // line 25
            yield "<label";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 25), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((( !($context["required"] ?? null) && ($context["form_optional_label"] ?? null))) ? (t("<span class=\"usa-hint\">(optional)</span>")) : ("")));
            yield "</label>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_display", "required", "title", "form_optional_label", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/uswds/templates/form/form-element-label.html.twig";
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
        return array (  55 => 25,  53 => 24,  50 => 23,  48 => 20,  47 => 19,  46 => 18,  45 => 17,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds/templates/form/form-element-label.html.twig", "/var/www/html/web/themes/contrib/uswds/templates/form/form-element-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "if" => 24];
        static $filters = ["escape" => 25, "t" => 25];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
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
