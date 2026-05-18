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

/* @fairview/components/announcement-slider/announcement-slider.twig */
class __TwigTemplate_e58d3e634e52123f0c3f6ab70a581b86 extends Template
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
        // line 14
        yield "<section class=\"ann-slider\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Announcements"));
        yield "\" data-ann-slider>
  <div class=\"ann-slider__inner\">

    ";
        // line 18
        yield "    <div class=\"ann-slider__stage\">

      <div class=\"ann-slider__viewport\">
        <div class=\"ann-slider__track\" data-ann-track>

          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["slides"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 24
            yield "            <div class=\"ann-slider__slide";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " is-active";
            }
            yield "\"
                 data-ann-slide
                 role=\"group\"
                 aria-roledescription=\"slide\"
                 aria-label=\"";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 28), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("of"));
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["slides"] ?? null)), "html", null, true);
            yield "\">

              <div class=\"ann-slider__card\">

                ";
            // line 33
            yield "                <div class=\"ann-slider__content\">
                  ";
            // line 34
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "label", [], "any", false, false, true, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "                    <p class=\"ann-slider__label\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "label", [], "any", false, false, true, 35), "html", null, true);
                yield "</p>
                  ";
            }
            // line 37
            yield "                  <h2 class=\"ann-slider__heading\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "heading", [], "any", false, false, true, 37), "html", null, true);
            yield "</h2>
                  ";
            // line 38
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "body", [], "any", false, false, true, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                yield "                    <p class=\"ann-slider__body\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "body", [], "any", false, false, true, 39), "html", null, true);
                yield "</p>
                  ";
            }
            // line 41
            yield "                  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_label", [], "any", false, false, true, 41) && CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_url", [], "any", false, false, true, 41))) {
                // line 42
                yield "                    <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_url", [], "any", false, false, true, 42), "html", null, true);
                yield "\" class=\"ann-slider__cta\">
                      ";
                // line 43
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_label", [], "any", false, false, true, 43), "html", null, true);
                yield "
                      <span class=\"ann-slider__cta-icon\" aria-hidden=\"true\">
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\">
                          <path d=\"M3 8h10M9 4l4 4-4 4\"
                                stroke=\"currentColor\" stroke-width=\"1.75\"
                                stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                        </svg>
                      </span>
                    </a>
                  ";
            }
            // line 53
            yield "                </div>

                ";
            // line 56
            yield "                <div class=\"ann-slider__accent\" aria-hidden=\"true\">
                  <span class=\"ann-slider__accent-num\">";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 57)), "html", null, true);
            yield "</span>
                </div>

              </div>
            </div>
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
        unset($context['_seq'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "
        </div>
      </div>

      ";
        // line 68
        yield "      ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["slides"] ?? null)) > 1)) {
            // line 69
            yield "        <button class=\"ann-slider__arrow ann-slider__arrow--prev\"
                aria-label=\"";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
            yield "\"
                data-ann-prev>
          <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" aria-hidden=\"true\">
            <path d=\"M11.5 4.5L7 9l4.5 4.5\" stroke=\"currentColor\" stroke-width=\"1.75\"
                  stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        </button>
        <button class=\"ann-slider__arrow ann-slider__arrow--next\"
                aria-label=\"";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
            yield "\"
                data-ann-next>
          <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" aria-hidden=\"true\">
            <path d=\"M6.5 4.5L11 9l-4.5 4.5\" stroke=\"currentColor\" stroke-width=\"1.75\"
                  stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        </button>
      ";
        }
        // line 86
        yield "
    </div>

    ";
        // line 90
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["slides"] ?? null)) > 1)) {
            // line 91
            yield "      <div class=\"ann-slider__dots\" role=\"tablist\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Slide navigation"));
            yield "\">
        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["slides"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 93
                yield "          <button class=\"ann-slider__dot";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-active";
                }
                yield "\"
                  role=\"tab\"
                  aria-selected=\"";
                // line 95
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")));
                yield "\"
                  aria-label=\"";
                // line 96
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to slide"));
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 96), "html", null, true);
                yield "\"
                  data-ann-dot=\"";
                // line 97
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 97), "html", null, true);
                yield "\">
          </button>
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
            unset($context['_seq'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "      </div>
    ";
        }
        // line 102
        yield "
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["slides", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@fairview/components/announcement-slider/announcement-slider.twig";
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
        return array (  271 => 102,  267 => 100,  250 => 97,  244 => 96,  240 => 95,  232 => 93,  215 => 92,  210 => 91,  207 => 90,  202 => 86,  191 => 78,  180 => 70,  177 => 69,  174 => 68,  168 => 63,  148 => 57,  145 => 56,  141 => 53,  128 => 43,  123 => 42,  120 => 41,  114 => 39,  112 => 38,  107 => 37,  101 => 35,  99 => 34,  96 => 33,  85 => 28,  75 => 24,  58 => 23,  51 => 18,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@fairview/components/announcement-slider/announcement-slider.twig", "/var/www/html/web/themes/custom/fairview/components/announcement-slider/announcement-slider.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 23, "if" => 24];
        static $filters = ["t" => 14, "escape" => 28, "length" => 28, "format" => 57];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['t', 'escape', 'length', 'format'],
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
