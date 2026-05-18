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

/* @fairview/components/mega-menu/mega-menu.twig */
class __TwigTemplate_2d5e829abb95c13c8a5201b9684aa3fd extends Template
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
        // line 20
        yield "<div class=\"mega-menu\">
  <div class=\"mega-menu__grid\">

    ";
        // line 24
        yield "    <div class=\"mega-menu__col mega-menu__col--intro\">
      ";
        // line 25
        if ((($tmp = ($context["intro_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "        <h2 class=\"mega-menu__intro-title\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("intro_title", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "intro_title");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "intro_title");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["intro_title"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("intro_title", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "intro_title");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "intro_title");
                }
            }
            yield "</h2>
      ";
        }
        // line 28
        yield "      ";
        if ((($tmp = ($context["intro_description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "        <p class=\"mega-menu__intro-desc\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("intro_description", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "intro_description");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "intro_description");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["intro_description"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("intro_description", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "intro_description");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "intro_description");
                }
            }
            yield "</p>
      ";
        }
        // line 31
        yield "      ";
        if ((($context["intro_cta_label"] ?? null) && ($context["intro_cta_url"] ?? null))) {
            // line 32
            yield "        <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["intro_cta_url"] ?? null), "html", null, true);
            yield "\" class=\"mega-menu__cta-btn\">
          ";
            // line 33
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("intro_cta_label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "intro_cta_label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "intro_cta_label");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["intro_cta_label"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("intro_cta_label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "intro_cta_label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "intro_cta_label");
                }
            }
            yield "
        </a>
      ";
        }
        // line 36
        yield "    </div>

    ";
        // line 39
        yield "    <div class=\"mega-menu__col mega-menu__col--links\">
      ";
        // line 40
        if ((($tmp = ($context["quick_links_heading"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "        <p class=\"mega-menu__links-heading\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("quick_links_heading", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "quick_links_heading");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "quick_links_heading");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["quick_links_heading"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("quick_links_heading", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "quick_links_heading");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "quick_links_heading");
                }
            }
            yield "</p>
      ";
        }
        // line 43
        yield "      ";
        if ((($tmp = ($context["quick_links"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "        <ul class=\"mega-menu__links-list\" role=\"list\">
          ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["quick_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 46
                yield "            <li class=\"mega-menu__link-item\">
              <a href=\"";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, true, 47), "html", null, true);
                yield "\" class=\"mega-menu__link\">
                <span>";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "label", [], "any", false, false, true, 48), "html", null, true);
                yield "</span>
                <svg class=\"mega-menu__link-arrow\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\"
                     fill=\"none\" aria-hidden=\"true\" focusable=\"false\">
                  <path d=\"M3 7h8M8 4l3 3-3 3\"
                        stroke=\"currentColor\" stroke-width=\"1.5\"
                        stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                </svg>
              </a>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "        </ul>
      ";
        }
        // line 60
        yield "      ";
        if ((($context["view_all_label"] ?? null) && ($context["view_all_url"] ?? null))) {
            // line 61
            yield "        <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["view_all_url"] ?? null), "html", null, true);
            yield "\" class=\"mega-menu__view-all\">
          ";
            // line 62
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("view_all_label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "view_all_label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "view_all_label");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["view_all_label"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("view_all_label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "view_all_label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "view_all_label");
                }
            }
            yield "
        </a>
      ";
        }
        // line 65
        yield "    </div>

    ";
        // line 68
        yield "    <div class=\"mega-menu__col mega-menu__col--featured\">
      ";
        // line 69
        if ((($tmp = ($context["featured_image_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "        <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("featured_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["featured_url"] ?? null), "#")) : ("#")), "html", null, true);
            yield "\" class=\"mega-menu__featured-link\">
          <img src=\"";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_image_url"] ?? null), "html", null, true);
            yield "\"
               alt=\"";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("featured_image_alt", $context)) ? (Twig\Extension\CoreExtension::default(($context["featured_image_alt"] ?? null), "")) : ("")), "html", null, true);
            yield "\"
               class=\"mega-menu__featured-img\"
               loading=\"lazy\" />
          <div class=\"mega-menu__featured-overlay\">
            ";
            // line 76
            if ((($tmp = ($context["featured_text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "              <p class=\"mega-menu__featured-text\">";
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                    if (\array_key_exists("canvas_slot_ids", $context) && \in_array("featured_text", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "featured_text");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "featured_text");
                    }
                }
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_text"] ?? null), "html", null, true);
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                    if (\array_key_exists("canvas_slot_ids", $context) && \in_array("featured_text", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "featured_text");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "featured_text");
                    }
                }
                yield "</p>
            ";
            }
            // line 79
            yield "            <span class=\"mega-menu__featured-arrow\" aria-hidden=\"true\">
              <svg width=\"32\" height=\"32\" viewBox=\"0 0 32 32\" fill=\"none\">
                <circle cx=\"16\" cy=\"16\" r=\"15\" stroke=\"white\" stroke-width=\"1.5\"/>
                <path d=\"M13 10.5l5.5 5.5-5.5 5.5\"
                      stroke=\"white\" stroke-width=\"1.75\"
                      stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
              </svg>
            </span>
          </div>
        </a>
      ";
        }
        // line 90
        yield "    </div>

  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["intro_title", "intro_description", "intro_cta_label", "intro_cta_url", "quick_links_heading", "quick_links", "view_all_label", "view_all_url", "featured_image_url", "featured_url", "featured_image_alt", "featured_text"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@fairview/components/mega-menu/mega-menu.twig";
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
        return array (  279 => 90,  266 => 79,  246 => 77,  244 => 76,  237 => 72,  233 => 71,  228 => 70,  226 => 69,  223 => 68,  219 => 65,  199 => 62,  194 => 61,  191 => 60,  187 => 58,  171 => 48,  167 => 47,  164 => 46,  160 => 45,  157 => 44,  154 => 43,  134 => 41,  132 => 40,  129 => 39,  125 => 36,  105 => 33,  100 => 32,  97 => 31,  77 => 29,  74 => 28,  54 => 26,  52 => 25,  49 => 24,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@fairview/components/mega-menu/mega-menu.twig", "/var/www/html/web/themes/custom/fairview/components/mega-menu/mega-menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 25, "for" => 45];
        static $filters = ["escape" => 26, "default" => 70];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
