/**
 * @file
 * Location list: search dropdowns, active filter chips.
 */
(function (Drupal, once) {
  'use strict';

  function closeDropdowns(root) {
    root.querySelectorAll('[data-ll-dropdown]').forEach(function (dd) {
      dd.hidden = true;
    });
  }

  function wireDropdown(root, inputSel, ddSel) {
    const input = root.querySelector(inputSel);
    const dd = root.querySelector(ddSel);
    if (!input || !dd) {
      return;
    }
    input.addEventListener('focus', function () {
      closeDropdowns(root);
      dd.hidden = false;
    });
    input.addEventListener('click', function () {
      closeDropdowns(root);
      dd.hidden = false;
    });
  }

  function rebuildChips(root) {
    const wrap = root.querySelector('[data-ll-active]');
    const chips = root.querySelector('[data-ll-chips]');
    if (!wrap || !chips) {
      return;
    }
    chips.innerHTML = '';
    const checked = root.querySelectorAll('input[type="checkbox"][data-ll-filter]:checked');
    checked.forEach(function (inp) {
      const label = inp.getAttribute('data-ll-filter-label') || inp.value;
      const id = inp.getAttribute('data-ll-filter') || '';
      const chip = document.createElement('span');
      chip.className = 'll-chip';
      chip.setAttribute('data-ll-chip-for', id);
      const text = document.createElement('span');
      text.textContent = label;
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'll-chip__remove';
      btn.setAttribute('aria-label', Drupal.t('Remove filter'));
      btn.innerHTML = '\u00d7';
      btn.addEventListener('click', function () {
        inp.checked = false;
        inp.dispatchEvent(new Event('change', { bubbles: true }));
      });
      chip.appendChild(text);
      chip.appendChild(btn);
      chips.appendChild(chip);
    });
    wrap.hidden = chips.childElementCount === 0;
  }

  Drupal.behaviors.fairviewLocationList = {
    attach(context) {
      once('fairview-location-list', '[data-location-list]', context).forEach(function (root) {
        wireDropdown(root, '[data-ll-input-primary]', '[data-ll-dropdown="primary"]');
        wireDropdown(root, '[data-ll-input-near]', '[data-ll-dropdown="near"]');

        root.querySelectorAll('[data-ll-suggest]').forEach(function (btn) {
          btn.addEventListener('click', function () {
            const input = root.querySelector('[data-ll-input-primary]');
            const dd = root.querySelector('[data-ll-dropdown="primary"]');
            if (input) {
              input.value = btn.getAttribute('data-ll-suggest') || '';
            }
            if (dd) {
              dd.hidden = true;
            }
          });
        });

        const useLoc = root.querySelector('[data-ll-use-location]');
        if (useLoc) {
          useLoc.addEventListener('click', function () {
            const input = root.querySelector('[data-ll-input-near]');
            const dd = root.querySelector('[data-ll-dropdown="near"]');
            if (input) {
              input.value = Drupal.t('Current location');
            }
            if (dd) {
              dd.hidden = true;
            }
          });
        }

        document.addEventListener('click', function (e) {
          if (!root.contains(e.target)) {
            closeDropdowns(root);
          }
        });

        root.querySelectorAll('input[type="checkbox"][data-ll-filter]').forEach(function (inp) {
          inp.addEventListener('change', function () {
            rebuildChips(root);
          });
        });

        const clear = root.querySelector('[data-ll-clear-all]');
        if (clear) {
          clear.addEventListener('click', function () {
            root.querySelectorAll('input[type="checkbox"][data-ll-filter]').forEach(function (inp) {
              inp.checked = false;
            });
            const openSw = root.querySelector('.ll-switch__input[data-ll-filter="open"]');
            if (openSw) {
              openSw.checked = false;
            }
            rebuildChips(root);
          });
        }

        rebuildChips(root);
      });
    },
  };
})(Drupal, once);
