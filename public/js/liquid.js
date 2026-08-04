document.addEventListener('DOMContentLoaded', () => {
  // 1. Custom Liquid Cursor Follower
  const cursor = document.getElementById('liquidCursor');
  if (cursor && window.innerWidth > 768) {
    document.addEventListener('mousemove', (e) => {
      cursor.style.left = `${e.clientX}px`;
      cursor.style.top = `${e.clientY}px`;
    });

    const hoverableElements = document.querySelectorAll('a, button, .glass-card, .tab-btn, .toggle-option');
    hoverableElements.forEach(el => {
      el.addEventListener('mouseenter', () => cursor.classList.add('active'));
      el.addEventListener('mouseleave', () => cursor.classList.remove('active'));
    });
  }

  // 2. Mobile Navbar Toggle
  const mobileToggle = document.getElementById('mobileMenuToggle');
  const navLinks = document.getElementById('navLinks');
  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  }

  // 3. ScrollSpy & Back to Top
  const sections = document.querySelectorAll('section[id]');
  const navLinksList = document.querySelectorAll('.nav-link');
  const backToTopBtn = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    const scrollY = window.pageYOffset;

    // Active link highlighting
    sections.forEach(current => {
      const sectionHeight = current.offsetHeight;
      const sectionTop = current.offsetTop - 150;
      const sectionId = current.getAttribute('id');

      if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
        navLinksList.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === `#${sectionId}`) {
            link.classList.add('active');
          }
        });
      }
    });

    // Back to top button visibility
    if (backToTopBtn) {
      if (scrollY > 400) {
        backToTopBtn.classList.add('visible');
      } else {
        backToTopBtn.classList.remove('visible');
      }
    }
  });

  if (backToTopBtn) {
    backToTopBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // 4. Skills Tab Switcher & Progress Animation
  const tabBtns = document.querySelectorAll('.tab-btn');
  const skillGrids = document.querySelectorAll('.skills-grid');

  function animateSkillBars(container) {
    const bars = container.querySelectorAll('.skill-bar-fill');
    bars.forEach(bar => {
      const level = bar.getAttribute('data-level');
      bar.style.width = `${level}%`;
    });
  }

  // Initial animation for active grid
  const initialActiveGrid = document.querySelector('.skills-grid.active');
  if (initialActiveGrid) {
    setTimeout(() => animateSkillBars(initialActiveGrid), 300);
  }

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetCat = btn.getAttribute('data-tab');

      tabBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      skillGrids.forEach(grid => {
        grid.style.display = 'none';
        grid.classList.remove('active');
        // Reset bar widths
        grid.querySelectorAll('.skill-bar-fill').forEach(bar => bar.style.width = '0%');
      });

      const targetGrid = document.getElementById(`skills-${targetCat}`);
      if (targetGrid) {
        targetGrid.style.display = 'grid';
        targetGrid.classList.add('active');
        setTimeout(() => animateSkillBars(targetGrid), 100);
      }
    });
  });

  // 5. Timeline Switcher (Pendidikan vs Pengalaman)
  const toggleOptions = document.querySelectorAll('.toggle-option');
  const timelineEdu = document.getElementById('timelineEducation');
  const timelineExp = document.getElementById('timelineExperience');

  toggleOptions.forEach(option => {
    option.addEventListener('click', () => {
      const target = option.getAttribute('data-target');

      toggleOptions.forEach(opt => opt.classList.remove('active'));
      option.classList.add('active');

      if (target === 'experience') {
        timelineExp.style.display = 'block';
        timelineEdu.style.display = 'none';
      } else {
        timelineEdu.style.display = 'block';
        timelineExp.style.display = 'none';
      }
    });
  });

  // 6. Contact Form AJAX Handler with Laravel CSRF Token
  const contactForm = document.getElementById('contactForm');
  const toastNotification = document.getElementById('toastNotification');
  const toastMessage = document.getElementById('toastMessage');

  function showToast(msg) {
    if (toastNotification && toastMessage) {
      toastMessage.textContent = msg;
      toastNotification.classList.add('show');
      setTimeout(() => {
        toastNotification.classList.remove('show');
      }, 5000);
    }
  }

  if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<span>Mengirim Pesan...</span>';

      const formData = new FormData(contactForm);

      try {
        const response = await fetch(contactForm.action, {
          method: 'POST',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json',
          },
          body: formData
        });

        const data = await response.json();

        if (response.ok && data.success) {
          showToast(data.message);
          contactForm.reset();
        } else {
          let errorMsg = 'Gagal mengirim pesan. Silakan periksa kembali inputan Anda.';
          if (data.errors) {
            errorMsg = Object.values(data.errors).flat().join('\n');
          } else if (data.message) {
            errorMsg = data.message;
          }
          showToast(errorMsg);
        }
      } catch (err) {
        showToast('Terjadi kesalahan koneksi. Silakan coba lagi.');
      } finally {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      }
    });
  }
});
