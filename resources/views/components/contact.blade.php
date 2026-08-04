<section class="section-padding contact-section" id="kontak">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">
                <i data-lucide="message-square"></i>
                <span>Mari Berkolaborasi</span>
            </div>
            <h2 class="section-title">Hubungi <span class="text-gradient-blue">Saya</span></h2>
            <p class="section-subtitle">Punya proyek menarik, pertanyaan, atau peluang karir? Jangan ragu untuk mengirimkan pesan kepada saya.</p>
        </div>

        <div class="contact-grid">
            <!-- Contact Info Cards -->
            <div class="contact-info-cards">
                <div class="glass-card info-card">
                    <div class="info-icon">
                        <i data-lucide="mail"></i>
                    </div>
                    <div>
                        <div class="info-label">Email Saya</div>
                        <div class="info-value">alazhiimpw02@gmail.com</div>
                    </div>
                </div>

                <div class="glass-card info-card">
                    <div class="info-icon">
                        <i data-lucide="phone-call"></i>
                    </div>
                    <div>
                        <div class="info-label">WhatsApp / Telepon</div>
                        <div class="info-value">+62-888-0589-4545</div>
                    </div>
                </div>

                <div class="glass-card info-card">
                    <div class="info-icon">
                        <i data-lucide="map-pin"></i>
                    </div>
                    <div>
                        <div class="info-label">Lokasi</div>
                        <div class="info-value">Surabaya, East Java</div>
                    </div>
                </div>

                <div class="glass-card info-card" style="background: rgba(56, 189, 248, 0.05); border-color: rgba(56, 189, 248, 0.3);">
                    <div class="info-icon" style="background: rgba(56, 189, 248, 0.2);">
                        <i data-lucide="clock-4"></i>
                    </div>
                    <div>
                        <div class="info-label">Status Ketersediaan</div>
                        <div class="info-value" style="color: var(--accent-blue-light);">Siap Magang</div>
                    </div>
                </div>
            </div>

            <!-- Contact Form Card -->
            <div class="glass-card contact-form-card">
                <form id="contactForm" action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem;">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Lengkap *</label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Contoh: Budi Santoso" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Alamat Email *</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="nama@domain.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subjek" class="form-label">Subjek Pesan *</label>
                        <input type="text" id="subjek" name="subjek" class="form-control" placeholder="Diskusi Proyek Web / Tawaran Karir" required>
                    </div>

                    <div class="form-group">
                        <label for="pesan" class="form-label">Detail Pesan *</label>
                        <textarea id="pesan" name="pesan" class="form-control" placeholder="Tuliskan ide atau kebutuhan Anda secara lengkap di sini..." required></textarea>
                    </div>

                    <button type="submit" class="btn-primary" style="width: 100%; font-size: 1.05rem;">
                        <span>Kirim Pesan Sekarang</span>
                        <i data-lucide="send"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
