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

/* @fairview/components/care-options/care-options.twig */
class __TwigTemplate_f48f7e05226b3ebc7d74c4e4e09cebda extends Template
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
        yield "<section class=\"care-options\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Care options"));
        yield "\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["panels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["panel"]) {
            // line 16
            yield "    <div class=\"care-options__panel care-options__panel--";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "modifier", [], "any", true, true, true, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "modifier", [], "any", false, false, true, 16), "primary")) : ("primary")), "html", null, true);
            yield "\">
      <div class=\"care-options__panel-inner\">
        <h2 class=\"care-options__heading\">";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "heading", [], "any", false, false, true, 18), "html", null, true);
            yield "</h2>
        ";
            // line 19
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "body", [], "any", false, false, true, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "          <p class=\"care-options__body\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "body", [], "any", false, false, true, 20), "html", null, true);
                yield "</p>
        ";
            }
            // line 22
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "cta_label", [], "any", false, false, true, 22) && CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "cta_url", [], "any", false, false, true, 22))) {
                // line 23
                yield "          <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "cta_url", [], "any", false, false, true, 23), "html", null, true);
                yield "\" class=\"care-options__btn\">
            ";
                // line 24
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "cta_label", [], "any", false, false, true, 24), "html", null, true);
                yield "
          </a>
        ";
            }
            // line 27
            yield "      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['panel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["panels"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@fairview/components/care-options/care-options.twig";
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
        return array (  93 => 30,  85 => 27,  79 => 24,  74 => 23,  71 => 22,  65 => 20,  63 => 19,  59 => 18,  53 => 16,  49 => 15,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@fairview/components/care-options/care-options.twig", "/var/www/html/web/themes/custom/fairview/components/care-options/care-options.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 15, "if" => 19];
        static $filters = ["t" => 14, "escape" => 16, "default" => 16];
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
