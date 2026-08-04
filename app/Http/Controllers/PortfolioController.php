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
            'fullstack' => [
                ['name' => 'HTML5 & CSS3', 'level' => 85, 'icon' => 'code-2'],
                ['name' => 'MySQL / PostgreSQL Database', 'level' => 83, 'icon' => 'database'],
                ['name' => 'Tailwind CSS & Responsive Layouts', 'level' => 82, 'icon' => 'palette'],
                ['name' => 'PHP 8 & Laravel Framework', 'level' => 77, 'icon' => 'server'],
            ],
            'tools' => [
                ['name' => 'Figma (UI/UX Design & Prototyping)', 'level' => 95, 'icon' => 'brush'],
                ['name' => 'Capcut', 'level' => 93, 'icon' => 'clapperboard'],
                ['name' => 'Adobe Photoshop', 'level' => 89, 'icon' => 'pen'],
                ['name' => 'Adobe Illustrator', 'level' => 84, 'icon' => 'pen-tool'],
                ['name' => 'Git, GitHub & Version Control', 'level' => 82, 'icon' => 'git-branch'],
                ['name' => '9Routes', 'level' => 78, 'icon' => 'network'],

            ],
            'soft' => [
                ['name' => 'Problem Solving', 'level' => 95, 'icon' => 'lightbulb'],
                ['name' => 'Komunikasi & Kolaborasi Tim', 'level' => 92, 'icon' => 'users'],
                ['name' => 'Manajemen Waktu & Target Sprint', 'level' => 90, 'icon' => 'clock'],
            ]
        ];

        $education = [
            [
                'period' => '2024 - Sekarang',
                'degree' => 'Program Keahlian Rekayasa Perangkat Lunak',
                'institution' => 'SMKN 1 Surabaya',
                'description' => 'Mempelajari pengembangan perangkat lunak, algoritma, dan desain sistem berbasis web serta mobile. Fokus pada praktik coding modern dan kolaborasi tim.',
                'highlights' => ['Alhamdulilllah, saya diterima di SMKN 1 Surabaya untuk program keahlian Rekayasa Perangkat Lunak.'],
            ],

        ];

        $experience = [
            [
                'period' => 'Januari 2026',
                'role' => 'Peserta Cyberfest 2026',
                'company' => 'Universitas Hayam Wuruk Perbanas',
                'description' => 'Memimpin tim perancangan desain tampilan sebuah website',
                'tags' => ['Figma', 'UI/UX Design', 'Prototyping'],
                'highlights' => [
                    'Membuat desain UI/UX untuk website kompetisi Cyberfest 2026',
                    'Menyusun prototipe interaktif untuk presentasi tim'
                ]
            ],
            [
                'period' => 'Juli 2026 - Sekarang',
                'role' => 'Ketua Devisi Devgraf',
                'company' => 'Ekstrakurikuler ITClub SMKN 1 Surabaya',
                'description' => 'Merancang pembelajaran devgraf, serta menjadi mentor',
                'tags' => ['Adobe Photoshop', 'Adobe Illustrator', 'Figma', 'UI/UX Design'],
                'highlights' => [
                    'Membuat kurikulum pembelajaran Devgraf untuk anggota baru',
                    'Membimbing anggota dalam proyek desain grafis dan UI/UX'
                ]
            ],
        ];

        $projects = [
            [
                'title' => 'Website UMKM "Taki"',
                'category' => 'UI/UX',
                'description' => 'Desain UI/UX modern untuk website UMKM Taki, menampilkan produk, testimoni, dan integrasi pembayaran digital untuk pengalaman belanja online yang mulus.',
                'tags' => ['Figma'],
                'image' => 'images\A4 - 12.png',
                'demo_url' => 'https://www.figma.com/design/KPJaMsHwVAQ66LTKZWJxra/Desain-Website-Taki?node-id=11-2&t=nkc82ZqXSxyI4xjJ-1',
            ],
            [
                'title' => 'Mobile App - Arahin AI',
                'category' => 'Ui/UX',
                'description' => 'Desain UI/UX untuk aplikasi mobile Arahin AI, menampilkan antarmuka interaktif, navigasi intuitif, dan integrasi AI untuk pengalaman pengguna yang cerdas.',
                'tags' => ['Figma'],
                'image' => 'images\SplashScreen-5.png',
                'demo_url' => 'https://www.figma.com/design/fDeyQZu5CDlMOc3c9fAezW/PendekarSuki-s-Project?node-id=56-259&t=cWTOwhOfNVSqFBE7-1',
            ],
            [
                'title' => 'Website Nasi Cokot MasFahmi',
                'category' => 'UI/UX',
                'description' => 'Rancangan antarmuka modern untuk website Nasi Cokot MasFahmi, menampilkan menu, lokasi, dan integrasi pemesanan online untuk pengalaman kuliner yang praktis.',
                'tags' => ['Figma'],
                'image' => 'images\Landing Page.png',
                'demo_url' => 'https://www.figma.com/design/JmdHfdxs4qtUqHzbREsWJ9/SegoCokotMasFahmi?node-id=155-43&t=bkyDWAbKOoOweh6p-1',
            ],
            [
                'title' => 'Website Pilihanmu',
                'category' => 'UI/UX Design',
                'description' => 'Rancangan UI/UX untuk website Pilihanmu, yakni website mirip Quizizz, menampilkan pertanyaan dengan topik tertentu, untuk dimainkan bersama teman-teman',
                'tags' => ['Figma'],
                'image' => 'images\MacBook Pro 16_ - 4.png',
                'demo_url' => 'https://www.figma.com/design/zkxCsObwNEGAQIEfx5ggwA/UI-UX-Website-Pilihanmu?node-id=0-1&t=eO4Kw0NArUgEiuXF-1',
            ]
        ];

        return view('portfolio.index', compact('profile', 'skills', 'education', 'experience', 'projects'));
    }
}
