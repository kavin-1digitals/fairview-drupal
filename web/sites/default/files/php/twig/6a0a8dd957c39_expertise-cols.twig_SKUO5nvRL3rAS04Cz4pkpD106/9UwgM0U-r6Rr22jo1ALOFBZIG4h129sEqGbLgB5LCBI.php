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

/* @fairview/components/expertise-cols/expertise-cols.twig */
class __TwigTemplate_d3613ab75f060eae443d2dfec2a0bc7d extends Template
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
        yield "<section class=\"expertise-cols\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "\">
  <div class=\"expertise-cols__inner\">

    ";
        // line 18
        yield "    <div class=\"expertise-cols__title-col\">
      <h2 class=\"expertise-cols__title\">";
        // line 19
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
            if (\array_key_exists("canvas_slot_ids", $context) && \in_array("title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
            if (\array_key_exists("canvas_slot_ids", $context) && \in_array("title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
            }
        }
        yield "</h2>
    </div>

    ";
        // line 23
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cols"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 24
            yield "      <div class=\"expertise-cols__col\">
        ";
            // line 25
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "image_url", [], "any", false, false, true, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "          <img class=\"expertise-cols__image\"
               src=\"";
                // line 27
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "image_url", [], "any", false, false, true, 27), "html", null, true);
                yield "\"
               alt=\"";
                // line 28
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "image_alt", [], "any", true, true, true, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "image_alt", [], "any", false, false, true, 28), "")) : ("")), "html", null, true);
                yield "\"
               loading=\"lazy\"
               decoding=\"async\" />
        ";
            }
            // line 32
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, true, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "          <h3 class=\"expertise-cols__heading\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "heading", [], "any", false, false, true, 33), "html", null, true);
                yield "</h3>
        ";
            }
            // line 35
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "body", [], "any", false, false, true, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "          <p class=\"expertise-cols__body\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "body", [], "any", false, false, true, 36), "html", null, true);
                yield "</p>
        ";
            }
            // line 38
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "cols"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@fairview/components/expertise-cols/expertise-cols.twig";
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
        return array (  123 => 40,  116 => 38,  110 => 36,  107 => 35,  101 => 33,  98 => 32,  91 => 28,  87 => 27,  84 => 26,  82 => 25,  79 => 24,  74 => 23,  54 => 19,  51 => 18,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@fairview/components/expertise-cols/expertise-cols.twig", "/var/www/html/web/themes/custom/fairview/components/expertise-cols/expertise-cols.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 23, "if" => 25];
        static $filters = ["escape" => 14, "default" => 28];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'default'],
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
