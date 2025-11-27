(function () {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (prefersReducedMotion) {
          document.querySelectorAll('[data-reveal]').forEach(el => el.classList.add('show'));
          return;
        }

        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('show');
              observer.unobserve(entry.target);
            }
          });
        }, { threshold: 0.12 });

        document.querySelectorAll('[data-reveal]').forEach(el => {
          el.classList.add('reveal');
          observer.observe(el);
        });
      })();
    // handle "skip to content" style behavior for anchors (smooth + focus)
    document.querySelectorAll('a[href^="#"]').forEach(a => {
          a.addEventListener('click', e => {
            const id = a.getAttribute('href').slice(1);
            const target = document.getElementById(id);
            if (target) {
              e.preventDefault();
              // We add 128px (8rem) offset to account for the new, taller sticky header (pt-32)
              const offset = 128;
              target.tabIndex = -1;
              target.focus({ preventScroll: true });
              window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - offset, behavior: 'smooth' });
            }
          });
    });