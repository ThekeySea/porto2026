<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="#" class="nav-brand">
                    <span class="brand-dot"></span>
                    <span>Al Azhiim<span class="text-gradient-blue">.dev</span></span>
                </a>
            </div>

            <div class="social-links">
                <a href="{{ $profile['github'] }}" target="_blank" class="social-btn" aria-label="GitHub">
                    <i data-lucide="github"></i>
                </a>
                <a href="{{ $profile['linkedin'] }}" target="_blank" class="social-btn" aria-label="LinkedIn">
                    <i data-lucide="linkedin"></i>
                </a>
                <a href="{{ $profile['instagram'] }}" target="_blank" class="social-btn" aria-label="Instagram">
                    <i data-lucide="instagram"></i>
                </a>
            </div>
        </div>

        <div class="footer-copyright">
            &copy; {{ date('Y') }} {{ $profile['name'] }}. Hak Cipta Dilindungi Undang-Undang. Didesain dengan estetika Liquid Glass & Laravel.
        </div>
    </div>
</footer>
