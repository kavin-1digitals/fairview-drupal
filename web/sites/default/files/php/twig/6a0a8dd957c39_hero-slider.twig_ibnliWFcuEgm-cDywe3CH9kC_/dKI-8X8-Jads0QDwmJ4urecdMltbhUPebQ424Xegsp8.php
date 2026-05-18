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

/* @fairview/components/hero-slider/hero-slider.twig */
class __TwigTemplate_825d41d6144fda455b613c1b646620c1 extends Template
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
        yield "<section class=\"hero-slider\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Homepage hero"));
        yield "\" data-hero-slider>

  ";
        // line 20
        yield "  <div class=\"hero-slider__track\" data-slider-track>
    ";
        // line 21
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
            // line 22
            yield "      <div class=\"hero-slider__slide";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " is-active";
            }
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "layout", [], "any", false, false, true, 22) == "split")) {
                yield " hero-slider__slide--split";
            }
            yield "\"
           data-slide
           role=\"group\"
           aria-roledescription=\"slide\"
           aria-label=\"";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 26), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("of"));
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["slides"] ?? null)), "html", null, true);
            yield "\">

        ";
            // line 28
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "layout", [], "any", false, false, true, 28) == "split")) {
                // line 29
                yield "          ";
                // line 30
                yield "          <div class=\"hero-slider__split-media\">
            <img class=\"hero-slider__image\"
                 src=\"";
                // line 32
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "image_url", [], "any", false, false, true, 32), "html", null, true);
                yield "\"
                 alt=\"";
                // line 33
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "image_alt", [], "any", true, true, true, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "image_alt", [], "any", false, false, true, 33), "")) : ("")), "html", null, true);
                yield "\"
                 loading=\"";
                // line 34
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("eager") : ("lazy")));
                yield "\"
                 decoding=\"async\" />
          </div>

          <div class=\"hero-slider__split-panel\">
            <div class=\"hero-slider__split-inner\">
              <h2 class=\"hero-slider__heading\">";
                // line 40
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "heading", [], "any", false, false, true, 40), "html", null, true);
                yield "</h2>

              ";
                // line 42
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "body", [], "any", false, false, true, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 43
                    yield "                <p class=\"hero-slider__body\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "body", [], "any", false, false, true, 43), "html", null, true);
                    yield "</p>
              ";
                }
                // line 45
                yield "
              ";
                // line 46
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_label", [], "any", false, false, true, 46) && CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_url", [], "any", false, false, true, 46))) {
                    // line 47
                    yield "                <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_url", [], "any", false, false, true, 47), "html", null, true);
                    yield "\" class=\"hero-slider__cta hero-slider__cta--solid\">
                  <span class=\"hero-slider__cta-label\">";
                    // line 48
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_label", [], "any", false, false, true, 48), "html", null, true);
                    yield "</span>
                  <span class=\"hero-slider__cta-icon\" aria-hidden=\"true\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\">
                      <path d=\"M6 3.5l5.5 5.5L6 14.5\"
                            stroke=\"currentColor\" stroke-width=\"2\"
                            stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                  </span>
                </a>
              ";
                }
                // line 58
                yield "            </div>
          </div>

        ";
            } else {
                // line 62
                yield "          ";
                // line 63
                yield "          <img class=\"hero-slider__image\"
               src=\"";
                // line 64
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "image_url", [], "any", false, false, true, 64), "html", null, true);
                yield "\"
               alt=\"";
                // line 65
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "image_alt", [], "any", true, true, true, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "image_alt", [], "any", false, false, true, 65), "")) : ("")), "html", null, true);
                yield "\"
               loading=\"";
                // line 66
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("eager") : ("lazy")));
                yield "\"
               decoding=\"async\" />

          <div class=\"hero-slider__overlay\" aria-hidden=\"true\"></div>

          <div class=\"hero-slider__content\">
            <div class=\"hero-slider__content-inner\">
              <h2 class=\"hero-slider__heading\">";
                // line 73
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "heading", [], "any", false, false, true, 73), "html", null, true);
                yield "</h2>

              ";
                // line 75
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_label", [], "any", false, false, true, 75) && CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_url", [], "any", false, false, true, 75))) {
                    // line 76
                    yield "                <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_url", [], "any", false, false, true, 76), "html", null, true);
                    yield "\" class=\"hero-slider__cta\">
                  <span class=\"hero-slider__cta-label\">";
                    // line 77
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "cta_label", [], "any", false, false, true, 77), "html", null, true);
                    yield "</span>
                  <span class=\"hero-slider__cta-icon\" aria-hidden=\"true\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\">
                      <path d=\"M6 3.5l5.5 5.5L6 14.5\"
                            stroke=\"#ffffff\" stroke-width=\"2\"
                            stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                    </svg>
                  </span>
                </a>
              ";
                }
                // line 87
                yield "            </div>
          </div>
        ";
            }
            // line 90
            yield "
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
        // line 93
        yield "  </div>

  ";
        // line 96
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["slides"] ?? null)) > 1)) {
            // line 97
            yield "    <button class=\"hero-slider__arrow hero-slider__arrow--prev\"
            aria-label=\"";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous slide"));
            yield "\"
            data-slider-prev>
      <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" aria-hidden=\"true\">
        <path d=\"M13 4L7 10l6 6\" stroke=\"currentColor\" stroke-width=\"1.75\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
      </svg>
    </button>
    <button class=\"hero-slider__arrow hero-slider__arrow--next\"
            aria-label=\"";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next slide"));
            yield "\"
            data-slider-next>
      <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" aria-hidden=\"true\">
        <path d=\"M7 4l6 6-6 6\" stroke=\"currentColor\" stroke-width=\"1.75\"
              stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
      </svg>
    </button>

    ";
            // line 115
            yield "    <div class=\"hero-slider__dots\" role=\"tablist\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Slide navigation"));
            yield "\">
      ";
            // line 116
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
                // line 117
                yield "        <button class=\"hero-slider__dot";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-active";
                }
                yield "\"
                role=\"tab\"
                aria-selected=\"";
                // line 119
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false")));
                yield "\"
                aria-label=\"";
                // line 120
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to slide"));
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 120), "html", null, true);
                yield "\"
                data-dot=\"";
                // line 121
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 121), "html", null, true);
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
            // line 124
            yield "    </div>

    ";
            // line 127
            yield "    <div class=\"hero-slider__progress\" aria-hidden=\"true\">
      <div class=\"hero-slider__progress-bar\" data-progress-bar></div>
    </div>
  ";
        }
        // line 131
        yield "
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
        return "@fairview/components/hero-slider/hero-slider.twig";
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
        return array (  327 => 131,  321 => 127,  317 => 124,  300 => 121,  294 => 120,  290 => 119,  282 => 117,  265 => 116,  260 => 115,  249 => 106,  238 => 98,  235 => 97,  232 => 96,  228 => 93,  212 => 90,  207 => 87,  194 => 77,  189 => 76,  187 => 75,  182 => 73,  172 => 66,  168 => 65,  164 => 64,  161 => 63,  159 => 62,  153 => 58,  140 => 48,  135 => 47,  133 => 46,  130 => 45,  124 => 43,  122 => 42,  117 => 40,  108 => 34,  104 => 33,  100 => 32,  96 => 30,  94 => 29,  92 => 28,  83 => 26,  70 => 22,  53 => 21,  50 => 20,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@fairview/components/hero-slider/hero-slider.twig", "/var/www/html/web/themes/custom/fairview/components/hero-slider/hero-slider.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 21, "if" => 22];
        static $filters = ["t" => 17, "escape" => 26, "length" => 26, "default" => 33];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['t', 'escape', 'length', 'default'],
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
