/**
 * @file
 * Provider search: dismissible alert, filter panels, pronouns "show more".
 */
(function (Drupal, once) {
  'use strict';

  const STORAGE_ALERT = 'fairview_ps_alert_dismissed';

  function initAlerts(root) {
    const alert = root.querySelector('[data-ps-alert]');
    if (!alert) {
      return;
    }
    if (sessionStorage.getItem(STORAGE_ALERT) === '1') {
      alert.setAttribute('hidden', '');
      return;
    }
    const btn = alert.querySelector('[data-ps-alert-dismiss]');
    if (!btn) {
      return;
    }
    btn.addEventListener('click', function () {
      alert.setAttribute('hidden', '');
      sessionStorage.setItem(STORAGE_ALERT, '1');
    });
  }

  function closeAllPanels(root) {
    root.querySelectorAll('[data-ps-filter-panel]').forEach(function (p) {
      p.hidden = true;
    });
    root.querySelectorAll('[data-ps-filter-trigger]').forEach(function (t) {
      t.setAttribute('aria-expanded', 'false');
    });
  }

  function initFilters(root) {
    root.addEventListener('click', function (e) {
      const closeBtn = e.target.closest('[data-ps-filter-close]');
      if (closeBtn) {
        const panel = closeBtn.closest('[data-ps-filter-panel]');
        const id = panel && panel.id;
        if (id) {
          const trigger = root.querySelector('[aria-controls="' + id + '"]');
          panel.hidden = true;
          if (trigger) {
            trigger.setAttribute('aria-expanded', 'false');
          }
        }
        e.preventDefault();
        return;
      }

      const trigger = e.target.closest('[data-ps-filter-trigger]');
      if (trigger && root.contains(trigger)) {
        const panelId = trigger.getAttribute('aria-controls');
        const panel = panelId ? document.getElementById(panelId) : null;
        if (!panel) {
          return;
        }
        const expanded = trigger.getAttribute('aria-expanded') === 'true';
        closeAllPanels(root);
        if (!expanded) {
          panel.hidden = false;
          trigger.setAttribute('aria-expanded', 'true');
        }
        e.preventDefault();
        return;
      }

      if (!e.target.closest('[data-ps-filters]')) {
        closeAllPanels(root);
      }
    });

    const moreBtn = root.querySelector('[data-ps-show-more]');
    const moreBlock = root.querySelector('[data-ps-pronouns-more]');
    if (moreBtn && moreBlock) {
      moreBtn.addEventListener('click', function () {
        const hidden = moreBlock.hasAttribute('hidden');
        if (hidden) {
          moreBlock.removeAttribute('hidden');
          moreBtn.textContent = Drupal.t('Show Less');
        } else {
          moreBlock.setAttribute('hidden', '');
          moreBtn.textContent = Drupal.t('Show More');
        }
      });
    }
  }

  Drupal.behaviors.fairviewProviderSearch = {
    attach(context) {
      const roots = once('fairview-provider-search', '[data-provider-search]', context);
      roots.forEach(function (root) {
        initAlerts(root);
        initFilters(root);
      });
    },
  };
})(Drupal, once);
