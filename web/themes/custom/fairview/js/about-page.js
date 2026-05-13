/**
 * @file
 * Who we are (/about): autoplay horizontal scroll for value stat cards.
 */
(function (Drupal, once) {
  'use strict';

  const INTERVAL_MS = 4200;

  Drupal.behaviors.fairviewAboutValues = {
    attach(context) {
      once('fairview-about-values', '[data-wwa-values]', context).forEach(function (root) {
        const viewport = root.querySelector('[data-wwa-values-viewport]');
        const track = root.querySelector('[data-wwa-values-track]');
        if (!viewport || !track) {
          return;
        }

        let timer = null;

        function step() {
          const card = track.querySelector('.wwa-value-card');
          if (!card) {
            return;
          }
          const styles = window.getComputedStyle(track);
          const gap = parseFloat(styles.gap || styles.columnGap || '0') || 16;
          const delta = card.offsetWidth + gap;
          const max = Math.max(0, viewport.scrollWidth - viewport.clientWidth);
          if (max <= 0) {
            return;
          }
          if (viewport.scrollLeft >= max - 2) {
            viewport.scrollTo({ left: 0, behavior: 'smooth' });
          } else {
            viewport.scrollBy({ left: delta, behavior: 'smooth' });
          }
        }

        function start() {
          stop();
          timer = window.setInterval(step, INTERVAL_MS);
        }

        function stop() {
          if (timer !== null) {
            window.clearInterval(timer);
            timer = null;
          }
        }

        root.addEventListener('mouseenter', stop);
        root.addEventListener('mouseleave', start);
        root.addEventListener('focusin', stop);
        root.addEventListener('focusout', function (e) {
          if (!root.contains(e.relatedTarget)) {
            start();
          }
        });

        document.addEventListener('visibilitychange', function () {
          if (document.visibilityState === 'hidden') {
            stop();
          } else {
            start();
          }
        });

        start();
      });
    },
  };
})(Drupal, once);
