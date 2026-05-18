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

/* @fairview/components/utility-bar/utility-bar.twig */
class __TwigTemplate_bbbe1e28e9ed08c5b4b5f0404f5ed410 extends Template
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
        // line 12
        $context["donate_items"] = ((array_key_exists("donate_items", $context)) ? (Twig\Extension\CoreExtension::default(($context["donate_items"] ?? null), [["label" => t("Giving"), "url" => "/donate/giving"], ["label" => t("Volunteering"), "url" => "/donate/volunteering"]])) : ([["label" => t("Giving"), "url" => "/donate/giving"], ["label" => t("Volunteering"), "url" => "/donate/volunteering"]]));
        // line 16
        $context["careers_items"] = ((array_key_exists("careers_items", $context)) ? (Twig\Extension\CoreExtension::default(($context["careers_items"] ?? null), [["label" => t("Overview"), "url" => "/careers/overview"], ["label" => t("Benefits"), "url" => "/careers/benefits"], ["label" => t("Diversity, Equity & Inclusion"), "url" => "/careers/dei"], ["label" => t("Life In Minnesota"), "url" => "/careers/life-in-minnesota"], ["label" => t("Nursing"), "url" => "/careers/nursing"], ["label" => t("Educational Opportunities"), "url" => "/careers/education"]])) : ([["label" => t("Overview"), "url" => "/careers/overview"], ["label" => t("Benefits"), "url" => "/careers/benefits"], ["label" => t("Diversity, Equity & Inclusion"), "url" => "/careers/dei"], ["label" => t("Life In Minnesota"), "url" => "/careers/life-in-minnesota"], ["label" => t("Nursing"), "url" => "/careers/nursing"], ["label" => t("Educational Opportunities"), "url" => "/careers/education"]]));
        // line 24
        $context["medical_prof_items"] = ((array_key_exists("medical_prof_items", $context)) ? (Twig\Extension\CoreExtension::default(($context["medical_prof_items"] ?? null), [["label" => t("Medical Education and Learners"), "url" => "/medical-professionals/education-learners"], ["label" => t("Continuing Medical Education"), "url" => "/medical-professionals/cme"], ["label" => t("Required Learning"), "url" => "/medical-professionals/required-learning"], ["label" => t("Research & Clinical Trials"), "url" => "/medical-professionals/research"], ["label" => t("Internal Career Portal"), "url" => "/medical-professionals/careers"]])) : ([["label" => t("Medical Education and Learners"), "url" => "/medical-professionals/education-learners"], ["label" => t("Continuing Medical Education"), "url" => "/medical-professionals/cme"], ["label" => t("Required Learning"), "url" => "/medical-professionals/required-learning"], ["label" => t("Research & Clinical Trials"), "url" => "/medical-professionals/research"], ["label" => t("Internal Career Portal"), "url" => "/medical-professionals/careers"]]));
        // line 31
        yield "
<nav class=\"utility-bar\" aria-label=\"";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Utility navigation"));
        yield "\" data-utility-bar>
  <div class=\"utility-bar__inner\">

    ";
        // line 36
        yield "    <ul class=\"utility-bar__group utility-bar__group--left\" role=\"list\">
      <li class=\"utility-bar__item\">
        <a class=\"utility-bar__link\" href=\"";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["left_links"] ?? null), "m-health-fairview", [], "array", false, true, true, 38), "url", [], "any", true, true, true, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["left_links"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["m-health-fairview"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["left_links"] ?? null), "m-health-fairview", [], "array", false, false, true, 38)), "url", [], "any", false, false, true, 38), "#")) : ("#")), "html", null, true);
        yield "\">
          ";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("M Health Fairview"));
        yield "
        </a>
      </li>
      <li class=\"utility-bar__item\">
        <a class=\"utility-bar__link\" href=\"";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["left_links"] ?? null), "fairview-range", [], "array", false, true, true, 43), "url", [], "any", true, true, true, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["left_links"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["fairview-range"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["left_links"] ?? null), "fairview-range", [], "array", false, false, true, 43)), "url", [], "any", false, false, true, 43), "#")) : ("#")), "html", null, true);
        yield "\">
          ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Fairview Range"));
        yield "
        </a>
      </li>
      <li class=\"utility-bar__item\">
        <a class=\"utility-bar__link\" href=\"";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["left_links"] ?? null), "fairview-pharmacy", [], "array", false, true, true, 48), "url", [], "any", true, true, true, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["left_links"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["fairview-pharmacy"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["left_links"] ?? null), "fairview-pharmacy", [], "array", false, false, true, 48)), "url", [], "any", false, false, true, 48), "#")) : ("#")), "html", null, true);
        yield "\">
          ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Fairview Pharmacy"));
        yield "
        </a>
      </li>
      <li class=\"utility-bar__item\">
        <a class=\"utility-bar__link\" href=\"";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["left_links"] ?? null), "grand-itasca", [], "array", false, true, true, 53), "url", [], "any", true, true, true, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["left_links"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["grand-itasca"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["left_links"] ?? null), "grand-itasca", [], "array", false, false, true, 53)), "url", [], "any", false, false, true, 53), "#")) : ("#")), "html", null, true);
        yield "\">
          ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Grand Itasca"));
        yield "
        </a>
      </li>
    </ul>

    ";
        // line 60
        yield "    <ul class=\"utility-bar__group utility-bar__group--right\" role=\"list\">
      <li class=\"utility-bar__item\">
        <a class=\"utility-bar__link utility-bar__link--language\" href=\"";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["right_links"] ?? null), "language", [], "array", false, true, true, 62), "url", [], "any", true, true, true, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["right_links"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["language"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["right_links"] ?? null), "language", [], "array", false, false, true, 62)), "url", [], "any", false, false, true, 62), "#")) : ("#")), "html", null, true);
        yield "\"
           aria-label=\"";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Select language"));
        yield "\">
          ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Language"));
        yield "
        </a>
      </li>
      <li class=\"utility-bar__item\">
        <a class=\"utility-bar__link\" href=\"";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["right_links"] ?? null), "contact-us", [], "array", false, true, true, 68), "url", [], "any", true, true, true, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["right_links"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["contact-us"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["right_links"] ?? null), "contact-us", [], "array", false, false, true, 68)), "url", [], "any", false, false, true, 68), "#")) : ("#")), "html", null, true);
        yield "\">
          ";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact Us"));
        yield "
        </a>
      </li>

      ";
        // line 74
        yield "      <li class=\"utility-bar__item utility-bar__item--dropdown\" data-utility-dropdown>
        <button type=\"button\"
                class=\"utility-bar__trigger\"
                data-utility-dropdown-trigger
                aria-expanded=\"false\"
                aria-haspopup=\"true\"
                id=\"utility-donate-trigger\">
          ";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Donate"));
        yield "
          <svg class=\"utility-bar__chevron\" width=\"10\" height=\"10\" viewBox=\"0 0 10 10\" fill=\"none\" aria-hidden=\"true\" focusable=\"false\">
            <path d=\"M1.5 3.5L5 7L8.5 3.5\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        </button>
        <ul class=\"utility-bar__dropdown\" id=\"utility-donate-menu\" data-utility-dropdown-panel role=\"menu\" hidden aria-labelledby=\"utility-donate-trigger\">
          ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["donate_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 88
            yield "            <li role=\"none\"><a role=\"menuitem\" class=\"utility-bar__dropdown-link\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "url", [], "any", false, false, true, 88), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "label", [], "any", false, false, true, 88), "html", null, true);
            yield "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "        </ul>
      </li>

      <li class=\"utility-bar__item utility-bar__item--dropdown\" data-utility-dropdown>
        <button type=\"button\"
                class=\"utility-bar__trigger\"
                data-utility-dropdown-trigger
                aria-expanded=\"false\"
                aria-haspopup=\"true\"
                id=\"utility-careers-trigger\">
          ";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Careers"));
        yield "
          <svg class=\"utility-bar__chevron\" width=\"10\" height=\"10\" viewBox=\"0 0 10 10\" fill=\"none\" aria-hidden=\"true\" focusable=\"false\">
            <path d=\"M1.5 3.5L5 7L8.5 3.5\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        </button>
        <ul class=\"utility-bar__dropdown\" id=\"utility-careers-menu\" data-utility-dropdown-panel role=\"menu\" hidden aria-labelledby=\"utility-careers-trigger\">
          ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["careers_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 107
            yield "            <li role=\"none\"><a role=\"menuitem\" class=\"utility-bar__dropdown-link\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "url", [], "any", false, false, true, 107), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "label", [], "any", false, false, true, 107), "html", null, true);
            yield "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "        </ul>
      </li>

      <li class=\"utility-bar__item utility-bar__item--dropdown\" data-utility-dropdown>
        <button type=\"button\"
                class=\"utility-bar__trigger\"
                data-utility-dropdown-trigger
                aria-expanded=\"false\"
                aria-haspopup=\"true\"
                id=\"utility-medical-trigger\">
          ";
        // line 119
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("For Medical Professionals"));
        yield "
          <svg class=\"utility-bar__chevron\" width=\"10\" height=\"10\" viewBox=\"0 0 10 10\" fill=\"none\" aria-hidden=\"true\" focusable=\"false\">
            <path d=\"M1.5 3.5L5 7L8.5 3.5\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        </button>
        <ul class=\"utility-bar__dropdown utility-bar__dropdown--wide\" id=\"utility-medical-menu\" data-utility-dropdown-panel role=\"menu\" hidden aria-labelledby=\"utility-medical-trigger\">
          ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["medical_prof_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 126
            yield "            <li role=\"none\"><a role=\"menuitem\" class=\"utility-bar__dropdown-link\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "url", [], "any", false, false, true, 126), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "label", [], "any", false, false, true, 126), "html", null, true);
            yield "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "        </ul>
      </li>
    </ul>

  </div>
</nav>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["left_links", "right_links"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@fairview/components/utility-bar/utility-bar.twig";
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
        return array (  243 => 128,  232 => 126,  228 => 125,  219 => 119,  207 => 109,  196 => 107,  192 => 106,  183 => 100,  171 => 90,  160 => 88,  156 => 87,  147 => 81,  138 => 74,  131 => 69,  127 => 68,  120 => 64,  116 => 63,  112 => 62,  108 => 60,  100 => 54,  96 => 53,  89 => 49,  85 => 48,  78 => 44,  74 => 43,  67 => 39,  63 => 38,  59 => 36,  53 => 32,  50 => 31,  48 => 24,  46 => 16,  44 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@fairview/components/utility-bar/utility-bar.twig", "/var/www/html/web/themes/custom/fairview/components/utility-bar/utility-bar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 12, "for" => 87];
        static $filters = ["default" => 12, "t" => 13, "escape" => 38];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['default', 't', 'escape'],
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
