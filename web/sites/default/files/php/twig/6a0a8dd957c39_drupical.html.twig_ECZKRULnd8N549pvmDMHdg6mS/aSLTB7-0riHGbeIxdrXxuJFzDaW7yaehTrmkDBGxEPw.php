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

/* modules/contrib/drupical/templates/drupical.html.twig */
class __TwigTemplate_fc3d45071fe7d9bf1edef43659160392 extends Template
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
        if ((($tmp = ($context["count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "<div class=\"events-feed\">
  <nav class=\"events-list\">
    <div class=\"events-community-info\">
      ";
            // line 20
            yield t("Drupal communities are vibrant and world-wide. Find an <a href=\"https://www.drupal.org/community/events\" target=\"_blank\" rel=\"noopener\">event</a> and <a href=\"https://www.drupal.org/community/user-groups\" target=\"_blank\" rel=\"noopener\">connect</a> to a local or virtual user group today!", []);
            // line 23
            yield "    </div>

    <table class=\"events-table\">
      <tbody>
        ";
            // line 27
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["featured"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["featured"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 29
                    yield "            ";
                    yield from $this->load("@drupical/drupical-item.html.twig", 29)->unwrap()->yield(CoreExtension::merge($context, ["event" => $context["event"], "featured" => true]));
                    // line 30
                    yield "          ";
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
                unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                yield "        ";
            }
            // line 32
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["standard"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 33
                yield "          ";
                yield from $this->load("@drupical/drupical-item.html.twig", 33)->unwrap()->yield(CoreExtension::merge($context, ["event" => $context["event"], "featured" => false]));
                // line 34
                yield "        ";
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
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "      </tbody>
    </table>
  </nav>

  <div class=\"events-footer\">
    ";
            // line 40
            if ((($tmp = ($context["has_more"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "      <div class=\"events-load-more\">
        <a href=\"/events-feed/load-more?offset=";
                // line 42
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["offset"] ?? null) + ($context["limit"] ?? null)), "html", null, true);
                yield "&limit=";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["limit"] ?? null), "html", null, true);
                yield "\" class=\"button button--extrasmall use-ajax\">
          ";
                // line 43
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Load more events"));
                yield "
        </a>
      </div>
    ";
            }
            // line 47
            yield "    <div class=\"events-footer-links\">
      <a href=\"";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["drupalcon_link"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\" class=\"events-footer-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("DrupalCon"));
            yield "</a>
      <span class=\"events-separator\">·</span>
      <a href=\"";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["camps_link"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\" class=\"events-footer-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Camps"));
            yield "</a>
      <span class=\"events-separator\">·</span>
      <a href=\"";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["drupical_link"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\" class=\"events-footer-link\">Drupical</a>
      <span class=\"events-separator\">·</span>
      <a href=\"";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["add_event_link"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\" class=\"events-footer-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add your Event"));
            yield "</a>
    </div>
  </div>

  <div class=\"events-cta\">
    ";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Want more events?"));
            yield " <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["organize_link"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Help organize the next one"));
            yield "</a>!
  </div>
</div>
";
        } else {
            // line 63
            yield "  <div class=\"events-feed events--empty\"><p>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No events available"));
            yield "</p></div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["count", "featured", "standard", "has_more", "offset", "limit", "drupalcon_link", "camps_link", "drupical_link", "add_event_link", "organize_link"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/drupical/templates/drupical.html.twig";
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
        return array (  202 => 63,  191 => 59,  181 => 54,  176 => 52,  169 => 50,  162 => 48,  159 => 47,  152 => 43,  146 => 42,  143 => 41,  141 => 40,  134 => 35,  120 => 34,  117 => 33,  99 => 32,  96 => 31,  82 => 30,  79 => 29,  61 => 28,  59 => 27,  53 => 23,  51 => 20,  46 => 17,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/drupical/templates/drupical.html.twig", "/var/www/html/web/modules/contrib/drupical/templates/drupical.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 16, "trans" => 20, "for" => 28, "include" => 29];
        static $filters = ["length" => 27, "escape" => 42, "t" => 43];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'for', 'include'],
                ['length', 'escape', 't'],
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
