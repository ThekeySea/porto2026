document.addEventListener('DOMContentLoaded', () => {
  // 1. Project Detail Modal
  const modalOverlay = document.getElementById('projectModalOverlay');
  const modalCloseBtn = document.getElementById('modalCloseBtn');
  const modalImage = document.getElementById('modalImage');
  const modalCategory = document.getElementById('modalCategory');
  const modalTitle = document.getElementById('modalTitle');
  const modalDescription = document.getElementById('modalDescription');
  const modalTags = document.getElementById('modalTags');
  const modalDemoBtn = document.getElementById('modalDemoBtn');
  const modalGithubBtn = document.getElementById('modalGithubBtn');

  function openModal(card) {
    const title = card.getAttribute('data-title');
    const category = card.getAttribute('data-category');
    const description = card.getAttribute('data-description');
    const image = card.getAttribute('data-image');
    const demo = card.getAttribute('data-demo');
    const github = card.getAttribute('data-github');
    const tags = card.getAttribute('data-tags').split(',');

    // Isi data ke dalam modal
    modalImage.src = image;
    modalImage.alt = title;
    modalCategory.textContent = category;
    modalTitle.textContent = title;
    modalDescription.textContent = description;
    modalDemoBtn.href = demo;
    modalGithubBtn.href = github;

    // Render tag-tag teknologi
    modalTags.innerHTML = '';
    tags.forEach(tag => {
      const span = document.createElement('span');
      span.className = 'tech-tag';
      span.textContent = tag.trim();
      modalTags.appendChild(span);
    });

    // Sembunyikan tombol jika link adalah '#'
    modalDemoBtn.style.display = (demo === '#' || !demo) ? 'none' : 'inline-flex';
    modalGithubBtn.style.display = (github === '#' || !github) ? 'none' : 'inline-flex';

    // Buka modal
    modalOverlay.classList.add('open');
    document.body.style.overflow = 'hidden';

    // Re-render Lucide icons di dalam modal
    if (window.lucide) lucide.createIcons();
  }

  function closeModal() {
    modalOverlay.classList.remove('open');
    document.body.style.overflow = '';
  }

  // Klik pada kartu proyek → buka modal
  document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('click', () => openModal(card));
  });

  // Tombol tutup modal
  if (modalCloseBtn) {
    modalCloseBtn.addEventListener('click', closeModal);
  }

  // Klik di luar modal → tutup modal
  if (modalOverlay) {
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) closeModal();
    });
  }

  // Tekan Escape → tutup modal
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeModal();
  });


  // 1. Mobile Navbar Toggle
  const mobileToggle = document.getElementById('mobileMenuToggle');
  const navLinks = document.getElementById('navLinks');
  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  }

  // 2. ScrollSpy & Back to Top
  const sections = document.querySelectorAll('section[id]');
  const navLinksList = document.querySelectorAll('.nav-link');
  const backToTopBtn = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    const scrollY = window.pageYOffset;

    // Active link highlighting
    sections.forEach(current => {
      const sectionHeight = current.offsetHeight;
      const sectionTop = current.offsetTop - 160;
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

  // 3. 3D Tilt Effect for Glass Cards
  const glassCards = document.querySelectorAll('.glass-card');
  if (window.innerWidth > 768) {
    glassCards.forEach(card => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateX = ((y - centerY) / centerY) * -6;
        const rotateY = ((x - centerX) / centerX) * 6;

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-6px)`;
      });

      card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
      });
    });
  }

  // 4. Skills Tab Switcher & Progress Bar Animation
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

  // 7. Interactive Draggable Floating Badges
  const floatingBadges = document.querySelectorAll('.floating-badge');
  floatingBadges.forEach(badge => {
    let isDragging = false;
    let offsetX = 0;
    let offsetY = 0;

    const startDrag = (e) => {
      isDragging = true;
      badge.classList.add('dragging');
      badge.style.animation = 'none'; // Pause floating keyframe during drag
      badge.style.zIndex = '100';

      const clientX = e.type.startsWith('touch') ? e.touches[0].clientX : e.clientX;
      const clientY = e.type.startsWith('touch') ? e.touches[0].clientY : e.clientY;

      const rect = badge.getBoundingClientRect();
      offsetX = clientX - rect.left;
      offsetY = clientY - rect.top;

      badge.style.position = 'fixed';
      badge.style.left = `${rect.left}px`;
      badge.style.top = `${rect.top}px`;
      badge.style.right = 'auto';
      badge.style.bottom = 'auto';
    };

    const onDrag = (e) => {
      if (!isDragging) return;
      if (e.cancelable) e.preventDefault();

      const clientX = e.type.startsWith('touch') ? e.touches[0].clientX : e.clientX;
      const clientY = e.type.startsWith('touch') ? e.touches[0].clientY : e.clientY;

      badge.style.left = `${clientX - offsetX}px`;
      badge.style.top = `${clientY - offsetY}px`;
    };

    const stopDrag = () => {
      if (isDragging) {
        isDragging = false;
        badge.classList.remove('dragging');
      }
    };

    badge.addEventListener('mousedown', startDrag);
    badge.addEventListener('touchstart', startDrag, { passive: false });

    document.addEventListener('mousemove', onDrag);
    document.addEventListener('touchmove', onDrag, { passive: false });

    document.addEventListener('mouseup', stopDrag);
    document.addEventListener('touchend', stopDrag);
  });

  // Auto-hide floating badges when scrolling past Hero section (#profil)
  const heroSection = document.getElementById('profil');
  if (heroSection && floatingBadges.length > 0) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        floatingBadges.forEach(badge => {
          if (!entry.isIntersecting) {
            badge.classList.add('out-of-view');
          } else {
            badge.classList.remove('out-of-view');
          }
        });
      });
    }, { threshold: 0.15 });

    observer.observe(heroSection);
  }
});
