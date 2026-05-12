(function () {
  'use strict';

  const slider = document.querySelector('[data-hero-slider]');
  if (!slider) return;

  const track      = slider.querySelector('[data-slider-track]');
  const slides     = slider.querySelectorAll('[data-slide]');
  const dots       = slider.querySelectorAll('[data-dot]');
  const prevBtn    = slider.querySelector('[data-slider-prev]');
  const nextBtn    = slider.querySelector('[data-slider-next]');
  const progressBar = slider.querySelector('[data-progress-bar]');

  if (!slides.length) return;

  const AUTOPLAY_MS = 6000;
  let current       = 0;
  let timer         = null;
  let progressTimer = null;

  // ── Core slide logic ───────────────────────────────────────────────

  function activate(index) {
    const prev = current;
    current = ((index % slides.length) + slides.length) % slides.length;

    // Remove active state from outgoing slide
    slides[prev].classList.remove('is-active');
    if (dots[prev]) {
      dots[prev].classList.remove('is-active');
      dots[prev].setAttribute('aria-selected', 'false');
    }

    // Move track
    track.style.transform = `translateX(-${current * 100}%)`;

    // Activate incoming slide (animation restarts via class toggle)
    slides[current].classList.remove('is-active');
    void slides[current].offsetWidth; // reflow to restart CSS animations
    slides[current].classList.add('is-active');

    if (dots[current]) {
      dots[current].classList.add('is-active');
      dots[current].setAttribute('aria-selected', 'true');
    }

    resetProgress();
  }

  // ── Progress bar ───────────────────────────────────────────────────

  function resetProgress() {
    if (!progressBar) return;
    progressBar.style.transition = 'none';
    progressBar.style.width = '0%';
    void progressBar.offsetWidth;
    progressBar.style.transition = `width ${AUTOPLAY_MS}ms linear`;
    progressBar.style.width = '100%';
  }

  // ── Autoplay ───────────────────────────────────────────────────────

  function startAutoplay() {
    stopAutoplay();
    timer = setInterval(() => activate(current + 1), AUTOPLAY_MS);
    resetProgress();
  }

  function stopAutoplay() {
    clearInterval(timer);
    timer = null;
    if (progressBar) {
      const computed = getComputedStyle(progressBar).width;
      progressBar.style.transition = 'none';
      progressBar.style.width = computed;
    }
  }

  // ── Controls ────────────────────────────────────────────────────────

  prevBtn?.addEventListener('click', () => {
    stopAutoplay();
    activate(current - 1);
    startAutoplay();
  });

  nextBtn?.addEventListener('click', () => {
    stopAutoplay();
    activate(current + 1);
    startAutoplay();
  });

  dots.forEach((dot) => {
    dot.addEventListener('click', () => {
      const target = parseInt(dot.dataset.dot, 10);
      if (target !== current) {
        stopAutoplay();
        activate(target);
        startAutoplay();
      }
    });
  });

  // ── Pause on hover / focus ─────────────────────────────────────────

  slider.addEventListener('mouseenter', stopAutoplay);
  slider.addEventListener('mouseleave', startAutoplay);
  slider.addEventListener('focusin',  stopAutoplay);
  slider.addEventListener('focusout', (e) => {
    if (!slider.contains(e.relatedTarget)) startAutoplay();
  });

  // ── Keyboard ──────────────────────────────────────────────────────

  slider.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft')  { stopAutoplay(); activate(current - 1); startAutoplay(); }
    if (e.key === 'ArrowRight') { stopAutoplay(); activate(current + 1); startAutoplay(); }
  });

  // ── Touch / swipe ─────────────────────────────────────────────────

  let touchStartX = 0;
  slider.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].clientX;
  }, { passive: true });

  slider.addEventListener('touchend', (e) => {
    const delta = e.changedTouches[0].clientX - touchStartX;
    if (Math.abs(delta) < 40) return;
    stopAutoplay();
    activate(delta < 0 ? current + 1 : current - 1);
    startAutoplay();
  }, { passive: true });

  // ── Init ──────────────────────────────────────────────────────────

  startAutoplay();
})();
