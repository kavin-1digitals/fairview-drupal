(function () {
  'use strict';

  const nav = document.querySelector('[data-primary-nav]');
  if (!nav) return;

  const toggle     = nav.querySelector('[data-nav-toggle]');
  const panel      = nav.querySelector('[data-nav-panel]');
  const megaWrap   = nav.querySelector('[data-mega-menus]');
  const triggers   = nav.querySelectorAll('[data-triggers]');
  const DESKTOP_BP = 1024;

  // ── Helpers ──────────────────────────────────────────────────────

  function getMegaPanel(id) {
    return megaWrap ? megaWrap.querySelector(`[data-panel="${id}"]`) : null;
  }

  function closeAllMegaMenus() {
    if (!megaWrap) return;
    megaWrap.querySelectorAll('.mega-menu-panel').forEach((p) => {
      p.hidden = true;
      p.classList.remove('is-visible');
    });
    triggers.forEach((t) => t.setAttribute('aria-expanded', 'false'));
  }

  function openMegaMenu(id) {
    closeAllMegaMenus();
    const target  = getMegaPanel(id);
    const trigger = nav.querySelector(`[data-triggers="${id}"]`);
    if (!target) return;
    target.hidden = false;
    // Trigger reflow so the animation replays each time.
    void target.offsetWidth;
    target.classList.add('is-visible');
    if (trigger) trigger.setAttribute('aria-expanded', 'true');
  }

  // ── Mobile hamburger ─────────────────────────────────────────────

  function openMobileMenu() {
    panel.classList.add('is-open');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeMobileMenu() {
    panel.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  toggle.addEventListener('click', () => {
    if (toggle.getAttribute('aria-expanded') === 'true') {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  });

  // Close mobile menu on viewport resize to desktop
  window.addEventListener('resize', () => {
    if (window.innerWidth >= DESKTOP_BP) {
      closeMobileMenu();
      closeAllMegaMenus();
    }
  });

  // ── Mega menu triggers (desktop) ─────────────────────────────────

  triggers.forEach((trigger) => {
    trigger.addEventListener('click', () => {
      if (window.innerWidth < DESKTOP_BP) return; // handled by mobile drawer

      const id     = trigger.dataset.triggers;
      const isOpen = trigger.getAttribute('aria-expanded') === 'true';

      if (isOpen) {
        closeAllMegaMenus();
      } else {
        openMegaMenu(id);
      }
    });
  });

  // ── Close on outside click ───────────────────────────────────────

  document.addEventListener('click', (e) => {
    if (!nav.contains(e.target)) {
      closeAllMegaMenus();
      if (window.innerWidth < DESKTOP_BP) {
        closeMobileMenu();
      }
    }
  });

  // ── Escape key ───────────────────────────────────────────────────

  document.addEventListener('keydown', (e) => {
    if (e.key !== 'Escape') return;
    closeAllMegaMenus();
    if (window.innerWidth < DESKTOP_BP && panel.classList.contains('is-open')) {
      closeMobileMenu();
      toggle.focus();
    }
  });

  // ── Focus trap: close mega menus when tabbing away ───────────────

  if (megaWrap) {
    megaWrap.addEventListener('focusout', (e) => {
      if (!nav.contains(e.relatedTarget)) {
        closeAllMegaMenus();
      }
    });
  }
})();
