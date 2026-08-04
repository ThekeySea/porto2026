<section class="hero-section" id="profil">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="section-tag">
                    <i data-lucide="sparkles"></i>
                    <span>Portofolio Profesional</span>
                </div>
                <div class="hero-greeting">
                    <span>Halo, Saya</span>
                    <i data-lucide="hand" style="color: var(--accent-blue-light); width: 20px;"></i>
                </div>
                <h1 class="hero-name">
                    <span class="text-gradient">{{ $profile['name'] }}</span>
                </h1>
                <h2 class="hero-title">{{ $profile['title'] }}</h2>
                <p class="hero-bio">{{ $profile['bio'] }}</p>

                <div class="hero-actions">
                    <a href="#kontak" class="btn-primary">
                        <span>Hubungi Saya</span>
                        <i data-lucide="arrow-right"></i>
                    </a>
                    <a href="#portofolio" class="btn-secondary">
                        <i data-lucide="folder-git-2"></i>
                        <span>Lihat Karya</span>
                    </a>

                    <div class="social-links">
                        <a href="https://github.com/ThekeySea" target="_blank" class="social-btn" aria-label="GitHub">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
                        </a>
                        <a href="https://www.instagram.com/nndroid_?igsh=MTRwOWxjNWZtZG9vZw==" target="_blank" class="social-btn" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                        <a href="mailto:alazhiimpw02@gmail.com" class="social-btn" aria-label="Email">
                            <i data-lucide="mail"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="hero-avatar-wrapper">
                <div class="avatar-glass-card">
                    <!-- High quality minimalist developer vector/photo placeholder -->
                    <img src="{{ asset('images/fotopas3bagi4.png') }}" alt="{{ $profile['name'] }}" class="avatar-image">
                </div>

                <!-- Floating Liquid Badges -->
                <div class="floating-badge badge-1">
                    <div class="badge-icon">
                        <i data-lucide="palette"></i>
                    </div>
                    <div>
                        <div class="badge-text-title">Spesialisasi</div>
                        <div class="badge-text-val">UI/UX Designer</div>
                    </div>
                </div>

                <div class="floating-badge badge-2">
                    <div class="badge-icon">
                        <i data-lucide="award"></i>
                    </div>
                    <div>
                        <div class="badge-text-title">Pengalaman</div>
                        <div class="badge-text-val">1+ Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats Row -->
        <div class="stats-grid">
            @foreach($profile['stats'] as $stat)
                <div class="glass-card stat-card">
                    <div class="stat-value">{{ $stat['value'] }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
