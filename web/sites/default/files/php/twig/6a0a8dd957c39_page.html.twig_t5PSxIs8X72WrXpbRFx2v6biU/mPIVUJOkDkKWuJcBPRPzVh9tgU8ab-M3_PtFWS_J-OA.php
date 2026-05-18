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

/* themes/custom/fairview/templates/layout/page.html.twig */
class __TwigTemplate_14e5850e7d15236a41304d2aefa4e2aa extends Template
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
            'page_body' => [$this, 'block_page_body'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "
";
        // line 20
        yield "
";
        // line 22
        $context["mm_schedule"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 23
            yield "  ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_schedule", [], "any", false, false, true, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_schedule", [], "any", false, false, true, 24), "html", null, true);
                yield "
  ";
            } else {
                // line 26
                yield "    ";
                yield from $this->load("@fairview/components/mega-menu/mega-menu.twig", 26)->unwrap()->yield(CoreExtension::toArray(["intro_title" => "Get Care", "intro_description" => "Uncertain about which care option to choose? Visit our 'Get Care' section and find the best care for your needs.", "intro_cta_label" => "Help Me Choose", "intro_cta_url" => "/get-care", "quick_links_heading" => "Browse Care Options", "quick_links" => [["label" => "Get Care Today", "url" => "/care/today"], ["label" => "Book a Lab Visit", "url" => "/care/lab"], ["label" => "eVisits", "url" => "/care/evisits"], ["label" => "Routine Preventive Visit", "url" => "/care/preventive"], ["label" => "Symptom Checker", "url" => "/care/symptoms"]], "view_all_label" => "View All Care Options", "view_all_url" => "/care", "featured_image_url" => ((                // line 41
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/schedule_promo.webp"), "featured_image_alt" => "Woman booking a virtual appointment on a tablet device", "featured_text" => "Same-day Virtual Urgent Care Appointments", "featured_url" => "/care/virtual-urgent-care"]));
                // line 46
                yield "  ";
            }
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        yield "
";
        // line 50
        $context["mm_providers"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 51
            yield "  ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_providers", [], "any", false, false, true, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_providers", [], "any", false, false, true, 52), "html", null, true);
                yield "
  ";
            } else {
                // line 54
                yield "    ";
                yield from $this->load("@fairview/components/mega-menu/mega-menu.twig", 54)->unwrap()->yield(CoreExtension::toArray(["intro_title" => "Providers", "intro_description" => "Embark on your healthcare journey by finding the perfect provider to guide you.", "intro_cta_label" => "View All Providers", "intro_cta_url" => "/search", "quick_links_heading" => "Providers by Specialty", "quick_links" => [["label" => "Cancer Care", "url" => "/providers/cancer-care"], ["label" => "Heart Care", "url" => "/providers/heart-care"], ["label" => "Mental Health", "url" => "/providers/mental-health"], ["label" => "Orthopedics", "url" => "/providers/orthopedics"], ["label" => "Primary Care", "url" => "/providers/primary-care"], ["label" => "Women's Health", "url" => "/providers/womens-health"]], "view_all_label" => "View All Specialties", "view_all_url" => "/providers/specialties", "featured_image_url" => ((                // line 70
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/primary_care_promo.avif"), "featured_image_alt" => "Woman doctor providing information to a male patient", "featured_text" => "Primary Care", "featured_url" => "/providers/primary-care"]));
                // line 75
                yield "  ";
            }
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        yield "
";
        // line 79
        $context["mm_locations"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 80
            yield "  ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_locations", [], "any", false, false, true, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 81
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_locations", [], "any", false, false, true, 81), "html", null, true);
                yield "
  ";
            } else {
                // line 83
                yield "    ";
                yield from $this->load("@fairview/components/mega-menu/mega-menu.twig", 83)->unwrap()->yield(CoreExtension::toArray(["intro_title" => "Locations", "intro_description" => "With a presence everywhere, discover the most convenient locations for you and your family, no matter your needs.", "intro_cta_label" => "Search Locations", "intro_cta_url" => "/locations/list", "quick_links_heading" => "", "quick_links" => [["label" => "Birthplace", "url" => "/locations/birthplace"], ["label" => "Labs", "url" => "/locations/labs"], ["label" => "Pharmacies", "url" => "/locations/pharmacies"], ["label" => "Urgent Care", "url" => "/locations/urgent-care"], ["label" => "Emergency Care", "url" => "/locations/emergency-care"]], "view_all_label" => "View All Location Types", "view_all_url" => "/locations/types", "featured_image_url" => ((                // line 98
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/locations_promo.avif"), "featured_image_alt" => "A parent and their child at the doctor's office, smiling", "featured_text" => "Family Medicine", "featured_url" => "/locations/family-medicine"]));
                // line 103
                yield "  ";
            }
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        yield "
";
        // line 107
        $context["mm_care"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 108
            yield "  ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_care", [], "any", false, false, true, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_care", [], "any", false, false, true, 109), "html", null, true);
                yield "
  ";
            } else {
                // line 111
                yield "    ";
                yield from $this->load("@fairview/components/mega-menu/mega-menu.twig", 111)->unwrap()->yield(CoreExtension::toArray(["intro_title" => "Care & Treatment", "intro_description" => "Discover the range of conditions, treatments, services, and specialties we offer at M Health Fairview, providing you with the knowledge needed to make informed decisions for your healthcare.", "intro_cta_label" => "View All Care", "intro_cta_url" => "/services", "quick_links_heading" => "Key Departments & Specialties", "quick_links" => [["label" => "Birthplace", "url" => "/care-treatment/birthplace"], ["label" => "Cancer Care", "url" => "/care-treatment/cancer-care"], ["label" => "Heart Care", "url" => "/care-treatment/heart-care"], ["label" => "Pediatrics", "url" => "/care-treatment/pediatrics"], ["label" => "Primary Care", "url" => "/care-treatment/primary-care"]], "view_all_label" => "View More", "view_all_url" => "/care-treatment/specialties", "featured_image_url" => ((                // line 126
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/care_promo.avif"), "featured_image_alt" => "Two adults navigating a health website from the comfort of their own home", "featured_text" => "Health Library", "featured_url" => "/resources/health-library"]));
                // line 131
                yield "  ";
            }
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        yield "
";
        // line 135
        $context["mm_resources"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 136
            yield "  ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_resources", [], "any", false, false, true, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 137
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_resources", [], "any", false, false, true, 137), "html", null, true);
                yield "
  ";
            } else {
                // line 139
                yield "    ";
                yield from $this->load("@fairview/components/mega-menu/mega-menu.twig", 139)->unwrap()->yield(CoreExtension::toArray(["intro_title" => "Resources", "intro_description" => "Utilize available resources to effectively manage your health and enhance your healthcare experiences.", "intro_cta_label" => "Go to Resources", "intro_cta_url" => "/resources", "quick_links_heading" => "Some Resources for You", "quick_links" => [["label" => "Billing & Financial Resources", "url" => "/resources/billing"], ["label" => "FAQs", "url" => "/resources/faqs"], ["label" => "For Medical Professionals", "url" => "/medical-professionals"], ["label" => "Health Library", "url" => "/resources/health-library"], ["label" => "Request Medical Records", "url" => "/resources/medical-records"]], "view_all_label" => "View All Resources", "view_all_url" => "/resources", "featured_image_url" => ((                // line 154
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/resources_promo.avif"), "featured_image_alt" => "A cell phone showing the Fairview App", "featured_text" => "M Health Fairview Patient App", "featured_url" => "/resources/patient-app"]));
                // line 159
                yield "  ";
            }
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        yield "
";
        // line 163
        $context["mm_about"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 164
            yield "  ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_about", [], "any", false, false, true, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 165
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mega_menu_about", [], "any", false, false, true, 165), "html", null, true);
                yield "
  ";
            } else {
                // line 167
                yield "    ";
                yield from $this->load("@fairview/components/mega-menu/mega-menu.twig", 167)->unwrap()->yield(CoreExtension::toArray(["intro_title" => "About Us", "intro_description" => "Learn who we are, read our stories, and connect with our vendor partners.", "intro_cta_label" => "", "intro_cta_url" => "", "quick_links_heading" => "", "quick_links" => [["label" => "Who We Are", "url" => "/about"], ["label" => "News and Stories", "url" => "/news"], ["label" => "Fairview Vendors", "url" => "/fairview-vendors"]], "view_all_label" => "", "view_all_url" => "", "featured_image_url" => ((                // line 180
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/care_promo.avif"), "featured_image_alt" => "Care team supporting patients", "featured_text" => "Our Mission", "featured_url" => "/about"]));
                // line 185
                yield "  ";
            }
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 187
        yield "
";
        // line 189
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "utility_bar", [], "any", false, false, true, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 190
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "utility_bar", [], "any", false, false, true, 190), "html", null, true);
            yield "
";
        } else {
            // line 192
            yield "  ";
            yield from $this->load("@fairview/components/utility-bar/utility-bar.twig", 192)->unwrap()->yield(CoreExtension::toArray(["left_links" => ["m-health-fairview" => ["url" => "https://www.mhealthfairview.org"], "fairview-range" => ["url" => "https://www.fairviewrange.org"], "fairview-pharmacy" => ["url" => "https://www.fairviewpharmacy.com"], "grand-itasca" => ["url" => "https://www.granditasca.org"]], "right_links" => ["language" => ["url" => "#language"], "contact-us" => ["url" => "/contact"]]]));
        }
        // line 205
        yield "
";
        // line 207
        yield from $this->load("@fairview/components/primary-nav/primary-nav.twig", 207)->unwrap()->yield(CoreExtension::toArray(["logo_url" => ((        // line 208
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/fairview_logo.svg"), "front_page" =>         // line 209
($context["front_page"] ?? null), "site_name" => "Fairview", "mega_menus" => ["schedule" =>         // line 212
($context["mm_schedule"] ?? null), "providers" =>         // line 213
($context["mm_providers"] ?? null), "locations" =>         // line 214
($context["mm_locations"] ?? null), "care" =>         // line 215
($context["mm_care"] ?? null), "resources" =>         // line 216
($context["mm_resources"] ?? null), "about" =>         // line 217
($context["mm_about"] ?? null)]]));
        // line 220
        yield "
";
        // line 221
        yield from $this->unwrap()->yieldBlock('page_body', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "base_path", "directory", "front_page", "is_front", "rendered_by_canvas", "breadcrumb", "title"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 222
        yield "
";
        // line 224
        if ((($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 225
            yield "  ";
            yield from $this->load("@fairview/components/hero-slider/hero-slider.twig", 225)->unwrap()->yield(CoreExtension::toArray(["slides" => [["image_url" => ((            // line 228
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/homepage_hero1.webp"), "image_alt" => "A new chapter for Fairview", "heading" => "A New Chapter for Fairview", "cta_label" => "Learn More", "cta_url" => "/new-chapter"], ["image_url" => ((            // line 235
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/homepage_hero2.jpg"), "image_alt" => "Leading the way to better healthcare", "heading" => "Leading The Way To Better Healthcare"], ["layout" => "split", "image_url" => ((            // line 241
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/homepage_hero3.webp"), "image_alt" => "M Health Fairview Pediatrics", "heading" => "Meet M Health Fairview Pediatrics", "body" => "Our children's healthcare system brings together the brightest minds and biggest hearts in medicine. Everything we do is centered around giving your child a strong start and a strong future.", "cta_label" => "Get Care for Your Child", "cta_url" => "/care-treatment/pediatrics"]]]));
        }
        // line 251
        yield "
";
        // line 253
        if ((($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 254
            yield "  ";
            yield from $this->load("@fairview/components/award-banner/award-banner.twig", 254)->unwrap()->yield(CoreExtension::toArray(["heading" => "Fairview recognized with national award", "body" => "Fairview is honored to be the 2025 recipient of the American Hospital Association’s Foster G. McGaw Prize. Our community work does not begin or end with this prize. Rather, it affirms our deep commitment to our diverse neighbors and strengthens our resolve to continue and expand our efforts.", "links" => [["label" => "Learn more about the prize and our work in community", "url" => "/about/foster-mcgaw-prize"], ["label" => "Review our Community Impact Report, recognizing Fairview’s investment in the community", "url" => "/about/community-impact-report"]]]));
        }
        // line 269
        yield "
";
        // line 271
        if ((($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 272
            yield "  ";
            yield from $this->load("@fairview/components/care-options/care-options.twig", 272)->unwrap()->yield(CoreExtension::toArray(["panels" => [["modifier" => "primary", "heading" => "Helping You Choose the Right Care", "body" => "Healthcare doesn't have to be complicated. We're here to help you get the right care, where and when you need it. Get started by reviewing all of our different care options in one place and deciding what works best for you.", "cta_label" => "Get Care", "cta_url" => "/care"], ["modifier" => "secondary", "heading" => "Got the Flu? Try an E-Visit", "body" => "E-visits are a quick and convenient care option for flu-like symptoms.", "cta_label" => "Start an e-visit", "cta_url" => "/care/evisits"]]]));
        }
        // line 291
        yield "
";
        // line 293
        if ((($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 294
            yield "  ";
            yield from $this->load("@fairview/components/feature-cards/feature-cards.twig", 294)->unwrap()->yield(CoreExtension::toArray(["cards" => [["image_url" => ((            // line 297
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/providers.svg"), "image_alt" => "Providers illustration", "body" => "Browse our extensive list of best-in-class providers and specialists.", "cta_label" => "View Providers", "cta_url" => "/providers"], ["image_url" => ((            // line 304
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/locations.svg"), "image_alt" => "Locations illustration", "body" => "Discover our facilities nearest to you, covering the Northstar State from border to border.", "cta_label" => "View Locations", "cta_url" => "/locations"], ["image_url" => ((            // line 311
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/services.svg"), "image_alt" => "Services illustration", "body" => "We cover an extensive list of conditions, treatments, and services.", "cta_label" => "View Services", "cta_url" => "/services"]]]));
        }
        // line 320
        yield "
";
        // line 322
        if ((($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 323
            yield "  ";
            yield from $this->load("@fairview/components/text-columns/text-columns.twig", 323)->unwrap()->yield(CoreExtension::toArray(["label" => "Practice Made Perfect", "columns" => [["heading" => "Improving Patient Outcomes", "body" => "While there are no promises in medicine, there are guarantees and ours is to always relentlessly advocate for our patients. We are constantly improving ourselves by letting past results inform future decisions."], ["heading" => "On-Demand Access to Care", "body" => "Wellness should have no waiting line. When patients find themselves in need of care, any amount of delay can only add to worry. That's why we strive for zero latency care: when they need it, where they need it."]]]));
        }
        // line 337
        yield "
";
        // line 339
        if ((($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 340
            yield "  ";
            yield from $this->load("@fairview/components/announcement-slider/announcement-slider.twig", 340)->unwrap()->yield(CoreExtension::toArray(["slides" => [["label" => "Announcement", "heading" => "An Easier Way to Pay", "body" => "Our new payment option allows you to pay via text message if you have an active MyChart account and a saved payment method.", "cta_label" => "learn more about", "cta_url" => "/resources/billing"], ["label" => "Announcement", "heading" => "5 things to know about heart failure prevention and treatment", "body" => "Heart failure happens when the heart weakens over time. While there's no cure, you can learn more about what you can do to prevent and treat it here.", "cta_label" => "learn more about", "cta_url" => "/care-treatment/heart-care"]]]));
        }
        // line 359
        yield "
";
        // line 361
        if ((($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 362
            yield "  ";
            yield from $this->load("@fairview/components/expertise-cols/expertise-cols.twig", 362)->unwrap()->yield(CoreExtension::toArray(["title" => "Backed by Expertise", "cols" => [["image_url" => ((            // line 366
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/backed_by_expertise1.avif"), "image_alt" => "600 Active Research Studies", "heading" => "600 Active Research Studies", "body" => "When we say we're using techniques that are at the forefront of medicine, we say that because we're right there ourselves, developing those techniques. When we're not caring for patients, we're caring for the future."], ["image_url" => ((            // line 372
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/backed_by_expertise2.avif"), "image_alt" => "Top Rated Providers", "heading" => "Top Rated Providers", "body" => "No amount of technological upgrades or program expansions guarantees a customer feels satisfied with their treatment. That takes compassionate care. The results are clear: our network's clinics, facilities, and staff are consistently rated at the top."]]]));
        }
        // line 380
        yield "
";
        // line 382
        if ((($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 383
            yield "  ";
            yield from $this->load("@fairview/components/stats-row/stats-row.twig", 383)->unwrap()->yield(CoreExtension::toArray(["title" => "Healing Our Community", "stats" => [["number" => "2.1M", "label" => "Yearly Patients"], ["number" => "142", "label" => "Locations"], ["number" => "100+", "label" => "Specialties"], ["number" => "36k+", "label" => "Providers and Affiliates"]]]));
        }
        // line 393
        yield "
";
        // line 395
        if ((($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 396
            yield "  ";
            yield from $this->load("@fairview/components/recognition-row/recognition-row.twig", 396)->unwrap()->yield(CoreExtension::toArray(["title" => "One of America's Greatest Workplaces for Diversity", "body" => "Fairview Health Services was once again honored as one of \"America's Greatest Workplaces for Inclusion and Diversity\" by Newsweek in 2025. The national list includes more than 1,500 organizations of various sizes and types. Fairview last earned this award in 2023.", "link_label" => "Learn More", "link_url" => "/about/diversity-award", "badge_url" => ((            // line 401
($context["base_path"] ?? null) . ($context["directory"] ?? null)) . "/images/newsweek_logo.avif"), "badge_alt" => "Newsweek America's Greatest Workplaces for Diversity 2025"]));
        }
        // line 405
        yield "
";
        // line 407
        yield "<div class=\"layout-container bg-background\">

  ";
        // line 409
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 409)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 410
            yield "    <header role=\"banner\">
      ";
            // line 411
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 411), "html", null, true);
            yield "
    </header>
  ";
        }
        // line 414
        yield "
  ";
        // line 415
        if (( !($context["rendered_by_canvas"] ?? null) && (($context["breadcrumb"] ?? null) || ($context["title"] ?? null)))) {
            // line 416
            yield "    <div class=\"container pb-4\">
      ";
            // line 417
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("breadcrumb", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "breadcrumb");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "breadcrumb");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && \in_array("breadcrumb", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "breadcrumb");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "breadcrumb");
                }
            }
            yield "
      ";
            // line 418
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
            yield "
    </div>
  ";
        }
        // line 421
        yield "
  ";
        // line 422
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 422), "html", null, true);
        yield "
  ";
        // line 423
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 423), "html", null, true);
        yield "
  ";
        // line 424
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 424), "html", null, true);
        yield "
  ";
        // line 425
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 425), "html", null, true);
        yield "
  ";
        // line 426
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 426), "html", null, true);
        yield "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    <div class=\"layout-content\">
      ";
        // line 432
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 432), "html", null, true);
        yield "
    </div>

    ";
        // line 435
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 435)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 436
            yield "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 437
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 437), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 440
        yield "
    ";
        // line 441
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 441)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 442
            yield "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 443
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 443), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 446
        yield "  </main>


</div>

";
        // line 452
        yield from $this->load("@fairview/components/site-footer/site-footer.twig", 452)->unwrap()->yield(CoreExtension::toArray(["content" => CoreExtension::getAttribute($this->env, $this->source,         // line 453
($context["page"] ?? null), "footer", [], "any", false, false, true, 453)]));
        // line 455
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/fairview/templates/layout/page.html.twig";
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
        return array (  452 => 455,  450 => 453,  449 => 452,  442 => 446,  436 => 443,  433 => 442,  431 => 441,  428 => 440,  422 => 437,  419 => 436,  417 => 435,  411 => 432,  402 => 426,  398 => 425,  394 => 424,  390 => 423,  386 => 422,  383 => 421,  363 => 418,  345 => 417,  342 => 416,  340 => 415,  337 => 414,  331 => 411,  328 => 410,  326 => 409,  322 => 407,  319 => 405,  316 => 401,  314 => 396,  312 => 395,  309 => 393,  305 => 383,  303 => 382,  300 => 380,  297 => 372,  296 => 366,  294 => 362,  292 => 361,  289 => 359,  285 => 340,  283 => 339,  280 => 337,  276 => 323,  274 => 322,  271 => 320,  268 => 311,  267 => 304,  266 => 297,  264 => 294,  262 => 293,  259 => 291,  255 => 272,  253 => 271,  250 => 269,  246 => 254,  244 => 253,  241 => 251,  238 => 241,  237 => 235,  236 => 228,  234 => 225,  232 => 224,  229 => 222,  217 => 221,  214 => 220,  212 => 217,  211 => 216,  210 => 215,  209 => 214,  208 => 213,  207 => 212,  206 => 209,  205 => 208,  204 => 207,  201 => 205,  197 => 192,  191 => 190,  189 => 189,  186 => 187,  181 => 185,  179 => 180,  177 => 167,  171 => 165,  168 => 164,  166 => 163,  163 => 161,  158 => 159,  156 => 154,  154 => 139,  148 => 137,  145 => 136,  143 => 135,  140 => 133,  135 => 131,  133 => 126,  131 => 111,  125 => 109,  122 => 108,  120 => 107,  117 => 105,  112 => 103,  110 => 98,  108 => 83,  102 => 81,  99 => 80,  97 => 79,  94 => 77,  89 => 75,  87 => 70,  85 => 54,  79 => 52,  76 => 51,  74 => 50,  71 => 48,  66 => 46,  64 => 41,  62 => 26,  56 => 24,  53 => 23,  51 => 22,  48 => 20,  45 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/fairview/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/fairview/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 22, "if" => 23, "include" => 26, "block" => 221];
        static $filters = ["escape" => 24];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block'],
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
