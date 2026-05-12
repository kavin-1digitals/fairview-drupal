(function () {
  'use strict';

  const slider = document.querySelector('[data-ann-slider]');
  if (!slider) return;

  const track  = slider.querySelector('[data-ann-track]');
  const slides = slider.querySelectorAll('[data-ann-slide]');
  const dots   = slider.querySelectorAll('[data-ann-dot]');
  const prevBtn = slider.querySelector('[data-ann-prev]');
  const nextBtn = slider.querySelector('[data-ann-next]');

  if (!slides.length) return;

  let current = 0;

  function activate(index) {
    const total    = slides.length;
    const outgoing = current;
    current = ((index % total) + total) % total;

    slides[outgoing].classList.remove('is-active');
    if (dots[outgoing]) {
      dots[outgoing].classList.remove('is-active');
      dots[outgoing].setAttribute('aria-selected', 'false');
    }

    track.style.transform = `translateX(-${current * 100}%)`;

    slides[current].classList.add('is-active');
    if (dots[current]) {
      dots[current].classList.add('is-active');
      dots[current].setAttribute('aria-selected', 'true');
    }
  }

  prevBtn?.addEventListener('click', () => activate(current - 1));
  nextBtn?.addEventListener('click', () => activate(current + 1));

  dots.forEach((dot) => {
    dot.addEventListener('click', () => {
      const target = parseInt(dot.dataset.annDot, 10);
      if (target !== current) activate(target);
    });
  });

  slider.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft')  activate(current - 1);
    if (e.key === 'ArrowRight') activate(current + 1);
  });

  let touchStartX = 0;
  slider.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].clientX;
  }, { passive: true });
  slider.addEventListener('touchend', (e) => {
    const delta = e.changedTouches[0].clientX - touchStartX;
    if (Math.abs(delta) < 40) return;
    activate(delta < 0 ? current + 1 : current - 1);
  }, { passive: true });

})();
