/**
 * @file
 * Utility bar: Donate, Careers, For Medical Professionals dropdowns.
 */
(function () {
  'use strict';

  const root = document.querySelector('[data-utility-bar]');
  if (!root) {
    return;
  }

  const dropdowns = root.querySelectorAll('[data-utility-dropdown]');

  function closeAll() {
    dropdowns.forEach(function (wrap) {
      const btn = wrap.querySelector('[data-utility-dropdown-trigger]');
      const panel = wrap.querySelector('[data-utility-dropdown-panel]');
      if (btn) {
        btn.setAttribute('aria-expanded', 'false');
      }
      if (panel) {
        panel.hidden = true;
      }
      wrap.classList.remove('is-open');
    });
  }

  dropdowns.forEach(function (wrap) {
    const trigger = wrap.querySelector('[data-utility-dropdown-trigger]');
    const panel = wrap.querySelector('[data-utility-dropdown-panel]');
    if (!trigger || !panel) {
      return;
    }

    trigger.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      const open = trigger.getAttribute('aria-expanded') === 'true';
      if (open) {
        closeAll();
      } else {
        closeAll();
        trigger.setAttribute('aria-expanded', 'true');
        panel.hidden = false;
        wrap.classList.add('is-open');
      }
    });
  });

  document.addEventListener('click', function () {
    closeAll();
  });

  root.addEventListener('click', function (e) {
    e.stopPropagation();
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeAll();
    }
  });
})();
