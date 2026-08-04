<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Al Azhiim P.W',
            'title' => 'UI/UX Specialist',
            'tagline' => 'Membangun Pengalaman Digital Modern dengan Estetika dan Logika yang Kuat',
            'bio' => 'Saya seorang pengembang web passionate yang berfokus pada pembuatan aplikasi web performa tinggi, elegan, dan kaya interaksi. Memiliki perancangan sistem terstruktur, dan pengalaman pengguna yang utama.',
            'status' => 'Tersedia untuk Proyek & Karir Baru',
            'location' => 'Indonesia',
            'email' => 'contact@alazhiim.dev',
            'phone' => '+62 812-3456-7890',
            'github' => 'https://github.com',
            'linkedin' => 'https://linkedin.com',
            'instagram' => 'https://instagram.com',
            'stats' => [
                ['label' => 'Tahun Pengalaman', 'value' => '1+'],
                ['label' => 'Projek Selesai', 'value' => '5+'],
                ['label' => 'Teknologi Dikuasai', 'value' => '5+'],
            ]
        ];

        $skills = [
            'frontend' => [
                ['name' => 'HTML5 & CSS3 / Modern Glassmorphism', 'level' => 95, 'icon' => 'code-2'],
                ['name' => 'JavaScript (ES6+) & Modern DOM', 'level' => 90, 'icon' => 'file-code-2'],
                ['name' => 'Vue.js / React.js Framework', 'level' => 85, 'icon' => 'atom'],
                ['name' => 'Tailwind CSS & Responsive Layouts', 'level' => 92, 'icon' => 'palette'],
            ],
            'backend' => [
                ['name' => 'PHP 8 & Laravel Framework', 'level' => 95, 'icon' => 'server'],
                ['name' => 'RESTful API Development & JSON', 'level' => 90, 'icon' => 'network'],
                ['name' => 'MySQL / PostgreSQL Database', 'level' => 88, 'icon' => 'database'],
                ['name' => 'Authentication, Security & Sanctum', 'level' => 85, 'icon' => 'shield-check'],
            ],
            'tools' => [
                ['name' => 'Git, GitHub & Version Control', 'level' => 92, 'icon' => 'git-branch'],
                ['name' => 'Docker & Local Dev Environments', 'level' => 80, 'icon' => 'box'],
                ['name' => 'Figma (UI/UX Design & Prototyping)', 'level' => 88, 'icon' => 'figma'],
                ['name' => 'Vite, Webpack & Npm Package Manager', 'level' => 86, 'icon' => 'terminal'],
            ],
            'soft' => [
                ['name' => 'Problem Solving & Algoritma', 'level' => 95, 'icon' => 'lightbulb'],
                ['name' => 'Komunikasi & Kolaborasi Tim', 'level' => 90, 'icon' => 'users'],
                ['name' => 'Manajemen Waktu & Target Sprint', 'level' => 88, 'icon' => 'clock'],
            ]
        ];

        $education = [
            [
                'period' => '2024 - Sekarang',
                'degree' => 'SMKN 1 Surabaya - Rekayasa Perangkat Lunak (RPL)',
                'institution' => 'Universitas Teknologi Indonesia',
                'description' => 'Mempelajari pengembangan perangkat lunak, algoritma, dan desain sistem berbasis web serta mobile. Fokus pada praktik coding modern dan kolaborasi tim.',
                'highlights' => ['Ketua Devisi Devgraf Ekstrakurikuler ITClub', 'Peserta Cyberfest 2026']
            ],

        ];

        $experience = [
            [
                'period' => '2023 - Sekarang',
                'role' => 'Senior Full-Stack Developer',
                'company' => 'Aether Digital Tech Solution',
                'description' => 'Memimpin tim pengembang dalam merancang aplikasi enterprise berbasis Laravel & Vue.js dengan arsitektur microservices dan performa tinggi.',
                'tags' => ['Laravel 10/11', 'Vue.js', 'MySQL', 'REST API', 'Redis'],
                'highlights' => [
                    'Meningkatkan kecepatan load halaman sebesar 45% melalui optimalisasi query & caching',
                    'Mengintegrasikan payment gateway otomatis (Midtrans/Xendit) untuk platform e-commerce',
                    'Merancang sistem manajemen pengguna dengan role-based permission terstruktur'
                ]
            ],
            [
                'period' => '2022 - 2023',
                'role' => 'Laravel Web Developer',
                'company' => 'Nexa Cloud Studio',
                'description' => 'Bertanggung jawab mengembangkan modul backend dan UI interaktif untuk sistem informasi klien skala menengah hingga besar.',
                'tags' => ['PHP', 'Laravel', 'Blade', 'Bootstrap', 'JavaScript'],
                'highlights' => [
                    'Mengembangkan 12+ projek website custom untuk klien korporat',
                    'Membuat pustaka komponen Blade reusable untuk mempercepat alur kerja dev'
                ]
            ],
            [
                'period' => '2021 - 2022',
                'role' => 'Frontend & UI Specialist (Freelance)',
                'company' => 'Self-Employed / Remote',
                'description' => 'Mengerjakan berbagai proyek pembuatan landing page modern, dashboard admin glassmorphism, dan slicer desain Figma ke kode interaktif.',
                'tags' => ['HTML5/CSS3', 'Glassmorphism', 'JavaScript', 'Figma'],
                'highlights' => [
                    'Mencapai 100% tingkat kepuasan klien di platform freelance global',
                    'Menyelesaikan 20+ proyek interaktif tepat waktu'
                ]
            ]
        ];

        $projects = [
            [
                'title' => 'Liquid Enterprise Analytics Dashboard',
                'category' => 'Web App',
                'description' => 'Dashboard analitik real-time dengan tampilan liquid glassmorphism modern, visualisasi grafik interaktif, dan manajemen data komprehensif.',
                'tags' => ['Laravel', 'Vue.js', 'Chart.js', 'CSS Glass'],
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop',
                'demo_url' => '#',
                'github_url' => '#'
            ],
            [
                'title' => 'Aether SaaS E-Commerce Platform',
                'category' => 'Full-Stack',
                'description' => 'Platform toko online serba cepat dengan keranjang belanja interaktif, integrasi pembayaran digital, dan panel manajemen stok.',
                'tags' => ['Laravel', 'MySQL', 'Tailwind', 'Midtrans API'],
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop',
                'demo_url' => '#',
                'github_url' => '#'
            ],
            [
                'title' => 'Portal Layanan Publik Digital',
                'category' => 'Enterprise',
                'description' => 'Sistem pengajuan surat dan dokumen resmi secara mandiri untuk masyarakat dengan fitur verifikasi QR Code & status pengawasan real-time.',
                'tags' => ['Laravel', 'Bootstrap 5', 'PDF Generator', 'MySQL'],
                'image' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop',
                'demo_url' => '#',
                'github_url' => '#'
            ],
            [
                'title' => 'Liquid Glass UI Design System',
                'category' => 'UI/UX Design',
                'description' => 'Sistem desain komponen UI modern berbasis kaca transparan cair dengan aksen neon cyan untuk aplikasi web generasi mendatang.',
                'tags' => ['Figma', 'CSS3 Spec', 'Design System'],
                'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=800&auto=format&fit=crop',
                'demo_url' => '#',
                'github_url' => '#'
            ]
        ];

        return view('portfolio.index', compact('profile', 'skills', 'education', 'experience', 'projects'));
    }
}
