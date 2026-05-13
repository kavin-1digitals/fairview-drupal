/**
 * @file
 * Services page: patient stories horizontal scroll.
 */
(function (Drupal, once) {
  'use strict';

  const END_EPS = 3;

  /**
   * @param {HTMLElement} viewport
   * @return {number}
   */
  function maxScrollLeft(viewport) {
    return Math.max(0, viewport.scrollWidth - viewport.clientWidth);
  }

  /**
   * @param {HTMLElement} viewport
   * @param {HTMLElement} track
   * @return {number}
   */
  function scrollStep(viewport, track) {
    const card = track.querySelector('.sv-story-card');
    if (!card) {
      return 0;
    }
    const styles = window.getComputedStyle(track);
    const gap = parseFloat(styles.columnGap || styles.gap || '0') || 0;
    return card.offsetWidth + gap;
  }

  /**
   * @param {HTMLElement} viewport
   * @param {HTMLElement} prev
   * @param {HTMLElement} next
   */
  function updateNavState(viewport, prev, next) {
    const max = maxScrollLeft(viewport);
    const left = viewport.scrollLeft;
    const atStart = left <= END_EPS;
    const atEnd = left >= max - END_EPS;
    prev.toggleAttribute('disabled', atStart);
    prev.setAttribute('aria-disabled', atStart ? 'true' : 'false');
    prev.classList.toggle('is-disabled', atStart);
    next.toggleAttribute('disabled', atEnd);
    next.setAttribute('aria-disabled', atEnd ? 'true' : 'false');
    next.classList.toggle('is-disabled', atEnd);
  }

  /**
   * @param {HTMLElement} viewport
   * @param {HTMLElement} track
   * @param {number} direction
   */
  function scrollByCard(viewport, track, direction) {
    const step = scrollStep(viewport, track);
    if (step <= 0) {
      return;
    }
    const max = maxScrollLeft(viewport);
    let target = viewport.scrollLeft + direction * step;
    target = Math.max(0, Math.min(target, max));
    viewport.scrollTo({ left: target, behavior: 'smooth' });
  }

  Drupal.behaviors.fairviewServicesStories = {
    attach(context) {
      once('fairview-services', '[data-services]', context).forEach(function (root) {
        const section = root.querySelector('[data-sv-stories]');
        const viewport = section?.querySelector('.sv-stories__viewport');
        const track = section?.querySelector('[data-sv-track]');
        const prev = section?.querySelector('[data-sv-prev]');
        const next = section?.querySelector('[data-sv-next]');
        if (!section || !viewport || !track || !prev || !next) {
          return;
        }

        function onScroll() {
          updateNavState(viewport, prev, next);
        }

        prev.addEventListener('click', function () {
          if (prev.hasAttribute('disabled')) {
            return;
          }
          scrollByCard(viewport, track, -1);
        });
        next.addEventListener('click', function () {
          if (next.hasAttribute('disabled')) {
            return;
          }
          scrollByCard(viewport, track, 1);
        });

        viewport.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', onScroll, { passive: true });
        onScroll();

        viewport.addEventListener(
          'scrollend',
          function () {
            const max = maxScrollLeft(viewport);
            if (viewport.scrollLeft > max) {
              viewport.scrollLeft = max;
            }
            onScroll();
          },
          { passive: true },
        );
      });
    },
  };
})(Drupal, once);
