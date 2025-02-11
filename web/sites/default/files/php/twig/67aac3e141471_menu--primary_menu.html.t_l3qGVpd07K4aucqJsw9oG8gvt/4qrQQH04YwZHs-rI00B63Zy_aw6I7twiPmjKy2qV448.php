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

/* themes/contrib/uswds/templates/system/menu/menu--primary_menu.html.twig */
class __TwigTemplate_5bf17ea8626e9edd2a5b69bb227a7357 extends Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 28, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), 0, ($context["megamenu"] ?? null), 0, null, ($context["duplicate_parent"] ?? null), null, ($context["mega_display_second"] ?? null)]));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "megamenu", "duplicate_parent", "mega_display_second", "menu_level", "header_extended", "button_id", "parent", "loop"]);        yield from [];
    }

    // line 30
    public function macro_menu_links($items = null, $menu_level = null, $megamenu = null, $button_id = null, $parent = null, $duplicate_parent = null, $region = null, $mega_display_second = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "menu_level" => $menu_level,
            "megamenu" => $megamenu,
            "button_id" => $button_id,
            "parent" => $parent,
            "duplicate_parent" => $duplicate_parent,
            "region" => $region,
            "mega_display_second" => $mega_display_second,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 31
            yield "  ";
            $macros["menus"] = $this;
            // line 32
            yield "
  ";
            // line 33
            if (($context["items"] ?? null)) {
                // line 34
                yield "
    ";
                // line 35
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 36
                    yield "      <ul class=\"usa-nav__primary usa-accordion\">
    ";
                } elseif ((                // line 37
($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                    // line 38
                    yield "      <div id=\"";
                    if (($context["header_extended"] ?? null)) {
                        yield "extended";
                    } else {
                        yield "basic";
                    }
                    yield "-mega-nav-section-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_id"] ?? null), "html", null, true);
                    yield "\" class=\"usa-nav__submenu usa-megamenu\" hidden=\"\">

      ";
                    // line 40
                    if (($context["duplicate_parent"] ?? null)) {
                        // line 41
                        yield "        <div class=\"grid-row grid-gap-4\">
          <div class=\"desktop:grid-col-3\">
            <div class=\"usa-nav__submenu-item\">
              <a href=\"";
                        // line 44
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 44), "html", null, true);
                        yield "\">
                <span><h3>";
                        // line 45
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 45), "html", null, true);
                        yield "</h3></span>
              </a>
            </div>
          </div>
        </div>
      ";
                    }
                    // line 51
                    yield "
        <div class=\"grid-row grid-gap-4\">
    ";
                } else {
                    // line 54
                    yield "      <ul id=\"basic-nav-section-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_id"] ?? null), "html", null, true);
                    yield "\" class=\"usa-nav__submenu";
                    if ((($context["menu_level"] ?? null) > 1)) {
                        yield "-list";
                    }
                    yield "\"";
                    if ((($context["menu_level"] ?? null) == 1)) {
                        yield " hidden=\"\"";
                    }
                    yield ">

      ";
                    // line 56
                    if ((($context["duplicate_parent"] ?? null) && (($context["megamenu"] ?? null) == 0))) {
                        // line 57
                        yield "        <li class=\"usa-nav__submenu-item\">
          <a href=\"";
                        // line 58
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 58), "html", null, true);
                        yield "\">
            <span>";
                        // line 59
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 59), "html", null, true);
                        yield "</span>
          </a>
        </li>
      ";
                    }
                    // line 63
                    yield "    ";
                }
                // line 64
                yield "
    ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 66
                    yield "
      ";
                    // line 67
                    if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                        // line 68
                        yield "        <div class=\"usa-col\">

        ";
                        // line 70
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 70) && ($context["mega_display_second"] ?? null))) {
                            // line 71
                            yield "          <div class=\"usa-nav__submenu-item\">
            <a href=\"";
                            // line 72
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 72), "html", null, true);
                            yield "\" class=\"usa-nav__link\">
              <span><strong>";
                            // line 73
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 73), "html", null, true);
                            yield "</strong></span>
            </a>
          </div>
        ";
                        }
                        // line 77
                        yield "      ";
                    } else {
                        // line 78
                        yield "        <li class=\"";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            yield "usa-nav__primary-item";
                        } else {
                            yield "usa-nav__submenu-item";
                        }
                        yield "\">
      ";
                    }
                    // line 80
                    yield "
      ";
                    // line 81
                    if (((($context["menu_level"] ?? null) == 0) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 81))) {
                        // line 82
                        yield "        <button class=\"usa-accordion__button usa-nav__link ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 82)) {
                            yield "usa-current";
                        }
                        yield "\" aria-expanded=\"false\" aria-controls=\"";
                        if ((($context["megamenu"] ?? null) && ($context["header_extended"] ?? null))) {
                            yield "extended-mega-nav-section-";
                        } elseif (($context["megamenu"] ?? null)) {
                            yield "basic-mega-nav-section-";
                        } else {
                            yield "basic-nav-section-";
                        }
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 82), "html", null, true);
                        yield "\">
          <span>";
                        // line 83
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 83), "html", null, true);
                        yield "</span>
        </button>
      ";
                    }
                    // line 86
                    yield "
      ";
                    // line 87
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 87) && ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1)) || (($context["menu_level"] ?? null) == 0)))) {
                        // line 88
                        yield "        ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 88, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 88), (($context["menu_level"] ?? null) + 1), ($context["megamenu"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 88), $context["item"], ($context["duplicate_parent"] ?? null), null, ($context["mega_display_second"] ?? null)]));
                        yield "
      ";
                    } else {
                        // line 90
                        yield "        ";
                        if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                            // line 91
                            yield "          <div class=\"usa-nav__submenu-item\">
        ";
                        }
                        // line 93
                        yield "        <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 93), "html", null, true);
                        yield "\"";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            yield " class=\"usa-nav__link";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 93)) {
                                yield " usa-current";
                            }
                            yield "\" ";
                        }
                        yield ">
          <span>";
                        // line 94
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 94), "html", null, true);
                        yield "</span>
        </a>
        ";
                        // line 96
                        if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                            // line 97
                            yield "          </div>
        ";
                        }
                        // line 99
                        yield "      ";
                    }
                    // line 100
                    yield "
      ";
                    // line 101
                    if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                        // line 102
                        yield "        </div>
      ";
                    } else {
                        // line 104
                        yield "        </li>
      ";
                    }
                    // line 106
                    yield "
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                yield "
    ";
                // line 109
                if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                    // line 110
                    yield "        </div>
      </div>
    ";
                } else {
                    // line 113
                    yield "      </ul>
    ";
                }
                // line 115
                yield "
  ";
            }
            // line 117
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/uswds/templates/system/menu/menu--primary_menu.html.twig";
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
        return array (  338 => 117,  334 => 115,  330 => 113,  325 => 110,  323 => 109,  320 => 108,  305 => 106,  301 => 104,  297 => 102,  295 => 101,  292 => 100,  289 => 99,  285 => 97,  283 => 96,  278 => 94,  265 => 93,  261 => 91,  258 => 90,  252 => 88,  250 => 87,  247 => 86,  241 => 83,  225 => 82,  223 => 81,  220 => 80,  210 => 78,  207 => 77,  200 => 73,  196 => 72,  193 => 71,  191 => 70,  187 => 68,  185 => 67,  182 => 66,  165 => 65,  162 => 64,  159 => 63,  152 => 59,  148 => 58,  145 => 57,  143 => 56,  129 => 54,  124 => 51,  115 => 45,  111 => 44,  106 => 41,  104 => 40,  92 => 38,  90 => 37,  87 => 36,  85 => 35,  82 => 34,  80 => 33,  77 => 32,  74 => 31,  55 => 30,  46 => 28,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds/templates/system/menu/menu--primary_menu.html.twig", "/var/www/html/web/themes/contrib/uswds/templates/system/menu/menu--primary_menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 23, "macro" => 30, "if" => 33, "for" => 65];
        static $filters = ["escape" => 38];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
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
