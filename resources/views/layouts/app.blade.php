<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Al Azhiim P.W. | Full-Stack Developer & UI/UX Specialist')</title>
    <meta name="description" content="Portofolio Pribadi Al Azhiim P.W. - Full-Stack Developer & UI/UX Specialist dengan estetika modern Liquid Glass.">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Custom Liquid Glass CSS -->
    <link rel="stylesheet" href="{{ asset('css/liquid-glass.css') }}">
    @stack('styles')
</head>
<body>
    <!-- Liquid Background Animated Blobs -->
    <div class="liquid-bg-container">
        <div class="liquid-blob liquid-blob-1"></div>
        <div class="liquid-blob liquid-blob-2"></div>
        <div class="liquid-blob liquid-blob-3"></div>
    </div>
    <div class="liquid-overlay-grid"></div>

    <!-- Custom Cursor Follower (Disabled) -->
    <!-- <div class="liquid-cursor" id="liquidCursor"></div> -->

    <!-- Header Navigation -->
    @include('components.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Kembali ke atas">
        <i data-lucide="chevron-up"></i>
    </button>

    <!-- Toast Notification -->
    <div class="toast-notification" id="toastNotification">
        <div class="toast-icon">
            <i data-lucide="check-circle-2"></i>
        </div>
        <span id="toastMessage">Pesan berhasil terkirim!</span>
    </div>

    <!-- Custom Liquid JS -->
    <script src="{{ asset('js/liquid.js') }}"></script>
    <script>
        lucide.createIcons();
    </script>
    @stack('scripts')
</body>
</html>
