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

/* @fairview/components/feature-cards/feature-cards.twig */
class __TwigTemplate_ca9e484dab70d184072be1f54644123e extends Template
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
        yield "<section class=\"feature-cards\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Featured services"));
        yield "\">
  <div class=\"feature-cards__grid\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 17
            yield "      <article class=\"feature-cards__card\">

        ";
            // line 20
            yield "        <div class=\"feature-cards__img-wrap\">
          <img class=\"feature-cards__img\"
               src=\"";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["card"], "image_url", [], "any", false, false, true, 22), "html", null, true);
            yield "\"
               alt=\"";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "image_alt", [], "any", true, true, true, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "image_alt", [], "any", false, false, true, 23), "")) : ("")), "html", null, true);
            yield "\"
               loading=\"lazy\" />
        </div>

        ";
            // line 28
            yield "        <div class=\"feature-cards__body-wrap\">
          ";
            // line 29
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["card"], "body", [], "any", false, false, true, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "            <p class=\"feature-cards__body\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["card"], "body", [], "any", false, false, true, 30), "html", null, true);
                yield "</p>
          ";
            }
            // line 32
            yield "
          ";
            // line 33
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "cta_label", [], "any", false, false, true, 33) && CoreExtension::getAttribute($this->env, $this->source, $context["card"], "cta_url", [], "any", false, false, true, 33))) {
                // line 34
                yield "            <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["card"], "cta_url", [], "any", false, false, true, 34), "html", null, true);
                yield "\" class=\"feature-cards__btn\">
              ";
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["card"], "cta_label", [], "any", false, false, true, 35), "html", null, true);
                yield "
              <svg class=\"feature-cards__btn-arrow\" width=\"14\" height=\"14\"
                   viewBox=\"0 0 14 14\" fill=\"none\" aria-hidden=\"true\">
                <path d=\"M3 7h8M8 4l3 3-3 3\"
                      stroke=\"currentColor\" stroke-width=\"1.5\"
                      stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
              </svg>
            </a>
          ";
            }
            // line 44
            yield "        </div>

      </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['card'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["cards"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@fairview/components/feature-cards/feature-cards.twig";
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
        return array (  115 => 48,  106 => 44,  94 => 35,  89 => 34,  87 => 33,  84 => 32,  78 => 30,  76 => 29,  73 => 28,  66 => 23,  62 => 22,  58 => 20,  54 => 17,  50 => 16,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@fairview/components/feature-cards/feature-cards.twig", "/var/www/html/web/themes/custom/fairview/components/feature-cards/feature-cards.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 16, "if" => 29];
        static $filters = ["t" => 14, "escape" => 22, "default" => 23];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
