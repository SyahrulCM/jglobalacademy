<?php
$site = [
    'name' => 'J Global Academy',
    'tagline' => 'Digital Marketing Training',
    'description' => 'J Global Academy adalah komunitas dan lembaga training digital marketing untuk kelas praktikal, konsultasi privat, pengembangan brand, dan peluang kolaborasi bisnis.',
    'admin_whatsapp' => '601111487983',
    'email' => 'admin@jglobalacademy.com',
    'address' => 'Alamat lengkap J Global Academy belum tersedia - ganti dengan alamat resmi jika sudah ada.',
    'maps_embed' => 'https://maps.google.com/maps?q=Kuala%20Lumpur&t=&z=12&ie=UTF8&iwloc=&output=embed',
];

$navItems = [
    ['label' => 'Home', 'href' => 'index.php'],
    ['label' => 'Profile', 'href' => 'profile.php'],
    ['label' => 'Program', 'href' => 'programs.php'],
    ['label' => 'Alumni', 'href' => 'gallery.php'],
    ['label' => 'Lowongan', 'href' => 'jobs.php'],
    ['label' => 'Kontak', 'href' => 'contact.php'],
];

$programs = [
    [
        'slug' => 'digital-entrepreneur-workshop',
        'name' => 'Digital Entrepreneur Workshop',
        'description' => 'Kelas intensif untuk membangun mindset bisnis, penawaran, audience, konten, dan funnel digital yang siap dipraktikkan.',
        'duration' => '2 hari workshop + mentoring',
        'facilities' => ['Modul digital', 'Template campaign', 'Grup komunitas', 'Sertifikat partisipasi'],
        'requirements' => ['Pemula atau pemilik bisnis', 'Memiliki smartphone/laptop', 'Siap praktik', 'Mengisi formulir pendaftaran'],
        'cost' => '-',
        'image' => 'assets/img/1.jpg',
    ],
    [
        'slug' => 'private-consultation',
        'name' => 'Private Digital Consultation',
        'description' => 'Sesi konsultasi privat untuk audit Instagram, strategi konten, iklan, funnel, dan rencana pemasaran bisnis.',
        'duration' => '1-2 jam per sesi',
        'facilities' => ['Audit profil', 'Rekomendasi strategi', 'Action plan', 'Follow up singkat'],
        'requirements' => ['Memiliki brand/bisnis', 'Membawa data akun', 'Menentukan target konsultasi', 'Booking jadwal'],
        'cost' => '-',
        'image' => 'assets/img/3.jpg',
    ],
    [
        'slug' => 'social-media-ads',
        'name' => 'Social Media Ads Training',
        'description' => 'Pelatihan pemasaran melalui Facebook, Instagram, Google, TikTok, WhatsApp Business, dan pemanfaatan ChatGPT.',
        'duration' => '4 minggu',
        'facilities' => ['Praktik iklan', 'Studi kasus', 'Checklist optimasi', 'Komunitas diskusi'],
        'requirements' => ['Akun media sosial aktif', 'Budget iklan latihan', 'Laptop disarankan', 'Komitmen tugas mingguan'],
        'cost' => '-',
        'image' => 'assets/img/2.jpg',
    ],
];

$advantages = [
    'Materi praktikal untuk pemilik bisnis, kreator, dan pemula digital marketing.',
    'Komunitas belajar untuk bertanya, networking, dan saling review konten.',
    'Template konten, funnel, dan campaign yang mudah diedit sesuai brand.',
    'Konsultasi strategi untuk membantu peserta mengambil langkah yang jelas.',
];

$testimonials = [
    [
        'name' => 'Aina Rahman',
        'program' => 'Digital Entrepreneur Workshop',
        'year' => '2024',
        'quote' => 'Saya jadi lebih paham cara susun konten promosi dan funnel WhatsApp untuk bisnis kecil saya.',
        'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=500&q=80',
    ],
    [
        'name' => 'Farid Hakim',
        'program' => 'Social Media Ads Training',
        'year' => '2024',
        'quote' => 'Trainingnya praktikal. Bukan cuma teori, tapi langsung tahu apa yang harus diperbaiki di iklan.',
        'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=500&q=80',
    ],
    [
        'name' => 'Nadia Sofia',
        'program' => 'Private Digital Consultation',
        'year' => '2025',
        'quote' => 'Audit Instagram dan action plan-nya jelas. Konten saya jadi lebih terarah.',
        'photo' => 'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=500&q=80',
    ],
];

$jobs = [
    [
        'company' => 'Brand Partner Placeholder',
        'position' => 'Social Media Admin',
        'location' => 'Remote / Hybrid',
        'qualification' => 'Mampu membuat caption, basic design, memahami kalender konten, dan responsif.',
        'description' => 'Membantu pengelolaan akun media sosial bisnis mitra dan laporan performa mingguan.',
        'date' => '2026-05-20',
        'partner' => true,
    ],
    [
        'company' => 'Digital Agency Placeholder',
        'position' => 'Junior Ads Assistant',
        'location' => 'Kuala Lumpur',
        'qualification' => 'Memahami dasar Facebook Ads/Google Ads, teliti, dan mau belajar data campaign.',
        'description' => 'Membantu setup campaign, monitoring budget, dan rekap hasil iklan.',
        'date' => '2026-05-18',
        'partner' => true,
    ],
    [
        'company' => 'UMKM Collaboration',
        'position' => 'Content Creator Freelance',
        'location' => 'Remote',
        'qualification' => 'Bisa membuat ide konten, shooting sederhana, editing basic, dan mengikuti brief.',
        'description' => 'Kolaborasi pembuatan konten produk untuk campaign UMKM.',
        'date' => '2026-05-12',
        'partner' => false,
    ],
];

$gallery = [
    ['title' => 'Digital marketing workshop', 'image' => 'assets/img/banner.jpg'],
    ['title' => 'Sesi konsultasi bisnis', 'image' => 'assets/img/1.jpg'],
    ['title' => 'Praktik strategi konten', 'image' => 'assets/img/3.jpg'],
    ['title' => 'Komunitas entrepreneur', 'image' => 'assets/img/2.jpg'],
    ['title' => 'Audit campaign digital', 'image' => 'assets/img/4.jpg'],
    ['title' => 'Kelas ads training', 'image' => 'assets/img/5.jpg'],
];

$team = [
    ['name' => 'Mr. J', 'role' => 'Founder / Digital Marketing Officer - placeholder'],
    ['name' => 'Trainer Placeholder', 'role' => 'Digital Marketing Trainer - placeholder'],
    ['name' => 'Admin Academy', 'role' => 'Admin Pendaftaran - placeholder'],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function wa_link(string $number, string $message): string
{
    return 'https://wa.me/' . preg_replace('/\D+/', '', $number) . '?text=' . rawurlencode($message);
}
