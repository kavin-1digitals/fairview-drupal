/**
 * @file
 * Get Care page: horizontal card slider scroll controls (clamped to content).
 */
(function (Drupal, once) {
  'use strict';

  const END_EPS = 3;

  /**
   * Maximum scrollLeft for the viewport.
   *
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
    const slide = track.querySelector('.gc-slide');
    if (!slide) {
      return 0;
    }
    const trackStyles = window.getComputedStyle(track);
    const gap =
      parseFloat(trackStyles.columnGap || trackStyles.gap || '0') || 0;
    return slide.offsetWidth + gap;
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
   *   -1 prev, 1 next
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

  Drupal.behaviors.fairviewGetCareSlider = {
    attach(context) {
      once('fairview-get-care', '[data-get-care]', context).forEach(function (root) {
        const slider = root.querySelector('[data-gc-slider]');
        const viewport = slider?.querySelector('.gc-slider__viewport');
        const track = slider?.querySelector('[data-gc-track]');
        const prev = slider?.querySelector('[data-gc-prev]');
        const next = slider?.querySelector('[data-gc-next]');
        if (!slider || !viewport || !track || !prev || !next) {
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
