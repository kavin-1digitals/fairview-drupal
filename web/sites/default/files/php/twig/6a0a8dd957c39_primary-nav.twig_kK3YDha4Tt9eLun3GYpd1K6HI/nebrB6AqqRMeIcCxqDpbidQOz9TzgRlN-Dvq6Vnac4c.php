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

/* @fairview/components/primary-nav/primary-nav.twig */
class __TwigTemplate_aa879a42ff188afa23de69ee434fd3a2 extends Template
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
        // line 9
        yield "
";
        // line 11
        $context["nav_items"] = [["label" => "Schedule", "href" => "/schedule", "trigger" => "schedule"], ["label" => "Providers", "href" => "/providers", "trigger" => "providers"], ["label" => "Locations", "href" => "/locations", "trigger" => "locations"], ["label" => "Care & Treatment", "href" => "/care-treatment", "trigger" => "care"], ["label" => "Resources", "href" => "/resources", "trigger" => "resources"], ["label" => "About Us", "href" => "/about", "trigger" => "about"]];
        // line 19
        yield "
<nav class=\"primary-nav\" aria-label=\"";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary navigation"));
        yield "\" data-primary-nav>
  <div class=\"primary-nav__inner\">

    ";
        // line 24
        yield "    <a class=\"primary-nav__logo\"
       href=\"";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("front_page", $context)) ? (Twig\Extension\CoreExtension::default(($context["front_page"] ?? null), "/")) : ("/")), "html", null, true);
        yield "\"
       rel=\"home\"
       aria-label=\"";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Fairview home"));
        yield "\">
      <img src=\"";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["logo_url"] ?? null), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Fairview"));
        yield "\" width=\"176\" height=\"25\" />
    </a>

    ";
        // line 32
        yield "    <div class=\"primary-nav__panel\" data-nav-panel>

      ";
        // line 35
        yield "      <ul class=\"primary-nav__menu\" role=\"list\">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["nav_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            yield "          ";
            $context["has_dropdown"] = (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "trigger", [], "any", false, false, true, 37) &&  !Twig\Extension\CoreExtension::testEmpty((($_v0 = ($context["mega_menus"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "trigger", [], "any", false, false, true, 37)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["mega_menus"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "trigger", [], "any", false, false, true, 37), [], "array", false, false, true, 37))));
            // line 38
            yield "          <li class=\"primary-nav__menu-item\" data-nav-item>
            ";
            // line 43
            yield "            ";
            if ((($tmp = ($context["has_dropdown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "              <button type=\"button\"
                      class=\"primary-nav__menu-link\"
                      data-triggers=\"";
                // line 46
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "trigger", [], "any", false, false, true, 46), "html", null, true);
                yield "\"
                      aria-haspopup=\"true\"
                      aria-expanded=\"false\">
                <span>";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, true, 49)));
                yield "</span>
                <svg class=\"primary-nav__chevron\" width=\"10\" height=\"10\"
                     viewBox=\"0 0 10 10\" fill=\"none\"
                     aria-hidden=\"true\" focusable=\"false\">
                  <path d=\"M1.5 3.5L5 7L8.5 3.5\"
                        stroke=\"currentColor\" stroke-width=\"1.6\"
                        stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                </svg>
              </button>
            ";
            } else {
                // line 59
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 59), "html", null, true);
                yield "\" class=\"primary-nav__menu-link\">
                <span>";
                // line 60
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, true, 60)));
                yield "</span>
              </a>
            ";
            }
            // line 63
            yield "          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "      </ul>

      ";
        // line 68
        yield "      <div class=\"primary-nav__divider\" aria-hidden=\"true\"></div>

      ";
        // line 71
        yield "      <div class=\"primary-nav__actions\">
        <a href=\"/mychart\" class=\"primary-nav__action-link\">
          ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("MyChart & App"));
        yield "
        </a>
        <a href=\"/pay-bill\" class=\"primary-nav__action-link\">
          ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pay A Bill"));
        yield "
        </a>
        <a href=\"/search\" class=\"primary-nav__action-link primary-nav__action-link--search\">
          <svg class=\"primary-nav__search-icon\" width=\"15\" height=\"15\"
               viewBox=\"0 0 15 15\" fill=\"none\"
               aria-hidden=\"true\" focusable=\"false\">
            <circle cx=\"6.5\" cy=\"6.5\" r=\"4.75\" stroke=\"currentColor\" stroke-width=\"1.5\"/>
            <path d=\"M10.5 10.5L13.5 13.5\" stroke=\"currentColor\"
                  stroke-width=\"1.5\" stroke-linecap=\"round\"/>
          </svg>
          ";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search"));
        yield "
        </a>
      </div>

    </div>";
        // line 91
        yield "
    ";
        // line 93
        yield "    <button class=\"primary-nav__hamburger\"
            aria-expanded=\"false\"
            aria-label=\"";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open navigation menu"));
        yield "\"
            data-nav-toggle>
      <span class=\"primary-nav__bar\"></span>
      <span class=\"primary-nav__bar\"></span>
      <span class=\"primary-nav__bar\"></span>
    </button>

  </div>";
        // line 103
        yield "
  ";
        // line 105
        yield "  ";
        if ((($tmp = ($context["mega_menus"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "    <div class=\"primary-nav__mega-menus\" data-mega-menus>
      ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["mega_menus"] ?? null));
            foreach ($context['_seq'] as $context["trigger_key"] => $context["content"]) {
                // line 108
                yield "        ";
                if ((($tmp = $context["content"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 109
                    yield "          <div class=\"mega-menu-panel\"
               data-panel=\"";
                    // line 110
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["trigger_key"], "html", null, true);
                    yield "\"
               hidden>
            ";
                    // line 112
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                        if (\array_key_exists("canvas_slot_ids", $context) && \in_array("content", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "content");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "content");
                        }
                    }
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["content"], "html", null, true);
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                        if (\array_key_exists("canvas_slot_ids", $context) && \in_array("content", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "content");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "content");
                        }
                    }
                    yield "
          </div>
        ";
                }
                // line 115
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['trigger_key'], $context['content'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "    </div>
  ";
        }
        // line 118
        yield "
</nav>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["front_page", "logo_url", "mega_menus"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@fairview/components/primary-nav/primary-nav.twig";
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
        return array (  248 => 118,  244 => 116,  238 => 115,  218 => 112,  213 => 110,  210 => 109,  207 => 108,  203 => 107,  200 => 106,  197 => 105,  194 => 103,  184 => 95,  180 => 93,  177 => 91,  170 => 86,  157 => 76,  151 => 73,  147 => 71,  143 => 68,  139 => 65,  132 => 63,  126 => 60,  121 => 59,  108 => 49,  102 => 46,  98 => 44,  95 => 43,  92 => 38,  89 => 37,  85 => 36,  82 => 35,  78 => 32,  70 => 28,  66 => 27,  61 => 25,  58 => 24,  52 => 20,  49 => 19,  47 => 11,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@fairview/components/primary-nav/primary-nav.twig", "/var/www/html/web/themes/custom/fairview/components/primary-nav/primary-nav.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 11, "for" => 36, "if" => 43];
        static $filters = ["t" => 20, "escape" => 25, "default" => 25];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['t', 'escape', 'default'],
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
