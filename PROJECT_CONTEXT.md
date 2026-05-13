# Fairview Drupal — project context (handoff)

Lean reference for new chats. Full workflow details: `AGENTS.md`.

## Architecture

- **Composer-managed Drupal 11** (`web/` docroot). Local: **DDEV** (see `AGENTS.md`).
- **Landing pages** for marketing UIs are mostly **node-backed**: a **basic page** node is created in a small **custom module’s `hook_install` / `hook_update_N`**, with a **`path_alias`** (e.g. `/search`, `/get-care`). No public route replaces the node; the URL is the alias.
- **Theme** (`web/themes/custom/fairview`): **`hook_preprocess_page()`** in `fairview.theme` maps `footer_schedule_*` → shared **`contact_banner_*`** and attaches **`fairview/contact-banner`**. **`hook_theme_suggestions_page_alter()`** adds **`page--{path-with-hyphens}.html.twig`** from the current path alias (e.g. `/fairview-vendors` → `page--fairview-vendors.html.twig`).
- **Mega menus & utility bar**: Default markup lives in **`templates/layout/page.html.twig`** (Twig `set` blocks + `include` mega-menu / utility-bar). CMS can override via theme **regions** (e.g. `mega_menu_schedule`, `utility_bar`).
- **Shared UI**: **`components/contact-banner/`** + **`css/contact-banner.css`** + library **`fairview/contact-banner`** — one strip reused on search, locations list, get-care, etc.

## Important paths (custom)

| Area | Location |
|------|------------|
| Custom modules | `web/modules/custom/` |
| Fairview theme | `web/themes/custom/fairview/` |
| Page overrides | `templates/layout/page--*.html.twig` |
| Partials | `components/{feature}/` |
| CSS | `css/*.css` (per-feature libraries in `fairview.libraries.yml`) |
| JS | `js/*.js` (often `Drupal.behaviors` + `once`) |
| Theme hooks | `fairview.theme` |
| Ops script (DB) | `scripts/repair-block-content-tables.sql` (block_content repair if needed) |

## Custom Drupal modules (this repo)

| Module | Role |
|--------|------|
| `fairview_provider_search` | `/search` page vars, config (`fairview_provider_search.settings`), preprocess; optional controller/theme for standalone provider search page |
| `fairview_location_list` | `/locations/list` node + alias; preprocess for location directory mock data |
| `fairview_get_care` | `/get-care` node + alias; preprocess for get-care landing |
| `fairview_services` | `/services` node + alias; preprocess for services directory |
| `fairview_resources` | `/resources` node + alias; preprocess (minimal — mostly theme) |
| `fairview_about` | `/about` node + alias; preprocess (`wwa_*` vars, values list) |
| `fairview_vendors` | `/fairview-vendors` node + alias; vendors landing |
| `fairview_navigation` | Present for CMS/navigation extensions (verify if enabled per env) |

Enable + updates after pulling: `ddev drush en <module> -y && ddev drush updatedb -y && ddev drush cr`.

## Conventions

- **No core/contrib edits in place**; custom code only under `web/modules/custom` and `web/themes/custom`.
- **Libraries**: one feature ≈ one entry in `fairview.libraries.yml` (CSS/JS + `core/drupal` + `core/once` when using behaviors).
- **Images**: prefer copying from `public/images/...` into **`web/themes/custom/fairview/images/...`** so Drupal serves them.
- **Install hooks pattern** (landing pages): `_module_ensure_page()` creates page node + `/alias`; **`_module_delete_*_redirects()`** removes conflicting **`redirect`** rows for the bare path segment; **`update_9003`**-style hooks normalize alias if Pathauto/redirects conflict; **`update_9004`** publish + dedupe aliases if needed.
- **Mega menu defaults** in `page.html.twig`; **primary nav** triggers match keys in `mega_menus` passed to `primary-nav.twig`.
- **Utility bar dropdowns**: `utility-bar.twig` + `js/utility-bar.js` + `css/utility-bar.css`.

## Decisions (short)

- **Contact strip**: single Twig partial + one CSS library; not duplicated in `provider-search.css` / `get-care.css`.
- **Mega menus on mobile**: remain **hidden below 1024px** (CSS); desktop-only open/close in `primary-nav.js`. Moving mega DOM inside the drawer was **reverted** — it broke full-bleed desktop width.
- **`/search`**: Node + alias pattern (not only a standalone route) so the page fits normal CMS/content workflows.
- **Stub `fairview_get_care`**: If `core.extension` referenced a missing module historically, a minimal module may exist so `drush pm:enable` works — replace with real module or remove from extension list when safe.

## Pending / follow-ups (non-exhaustive)

- Wire **placeholder URLs** on marketing landings to real routes or Pathauto.
- **`fairview_get_care`**: confirm real module vs stub; remove stub when resolved.
- **Config export**: if modules are enabled only in DB, export `core.extension` etc. when policy requires repo parity.
- **Accessibility / QA**: custom dropdowns (utility bar, location search), mega menu keyboard paths.
- **Production**: run **`drush updatedb`** after deploy for any new `900x` hooks.

## Public URLs implemented (aliases; require module + updates)

Examples: `/search`, `/locations/list`, `/get-care`, `/services`, `/resources`, `/about`, `/fairview-vendors` — each backed by install/update hooks in its module unless noted otherwise in that module’s README (none committed here).

## External doc

- DDEV + Drush workflows: **`AGENTS.md`**
