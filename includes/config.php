<?php
/* ============================================================
 * KONFIGURASI SITUS KURSUS — EduNusa
 * ============================================================ */

$namaPlatform = 'EduNusa';
$tagline   = 'Belajar Keterampilan Digital';
$promoStrip = 'Diskon 30% untuk pendaftaran minggu ini • Kelas mulai setiap Senin • 100% Online';

$kursusDefault = [
    ['id' => 1, 'nama' => 'Web Development Fundamentals', 'kategori' => 'Web', 'harga' => 499000, 'hargaAsli' => 799000, 'label' => 'Terlaris', 'singkat' => 'WDF', 'durasi' => '8 Minggu', 'level' => 'Pemula', 'warna' => ['#2563eb', '#1d4ed8'], 'deskripsi' => 'Dasar HTML, CSS, dan JavaScript untuk membangun website modern.'],
    ['id' => 2, 'nama' => 'Full-Stack JavaScript', 'kategori' => 'Web', 'harga' => 899000, 'hargaAsli' => 0, 'label' => 'Baru', 'singkat' => 'FJS', 'durasi' => '12 Minggu', 'level' => 'Menengah', 'warna' => ['#d97706', '#b45309'], 'deskripsi' => 'React, Node.js, dan database untuk aplikasi full-stack.'],
    ['id' => 3, 'nama' => 'Mobile App dengan Flutter', 'kategori' => 'Mobile', 'harga' => 799000, 'hargaAsli' => 0, 'label' => '', 'singkat' => 'FLT', 'durasi' => '10 Minggu', 'level' => 'Menengah', 'warna' => ['#0284c7', '#0369a1'], 'deskripsi' => 'Buat aplikasi Android & iOS dari satu codebase Dart.'],
    ['id' => 4, 'nama' => 'UI/UX Design Masterclass', 'kategori' => 'Desain', 'harga' => 599000, 'hargaAsli' => 749000, 'label' => 'Diskon', 'singkat' => 'UIX', 'durasi' => '8 Minggu', 'level' => 'Semua', 'warna' => ['#9333ea', '#7e22ce'], 'deskripsi' => 'Figma, design system, dan portfolio untuk UI/UX profesional.'],
    ['id' => 5, 'nama' => 'Data Science & Python', 'kategori' => 'Data', 'harga' => 999000, 'hargaAsli' => 0, 'label' => 'Terlaris', 'singkat' => 'DSP', 'durasi' => '12 Minggu', 'level' => 'Menengah', 'warna' => ['#16a34a', '#15803d'], 'deskripsi' => 'Python, pandas, dan machine learning untuk analisis data.'],
    ['id' => 6, 'nama' => 'Digital Marketing 101', 'kategori' => 'Bisnis', 'harga' => 399000, 'hargaAsli' => 0, 'label' => '', 'singkat' => 'DM1', 'durasi' => '6 Minggu', 'level' => 'Pemula', 'warna' => ['#dc2626', '#b91c1c'], 'deskripsi' => 'SEO, iklan digital, dan strategi konten untuk pemasaran.'],
    ['id' => 7, 'nama' => 'Manajemen Keuangan Pribadi', 'kategori' => 'Bisnis', 'harga' => 349000, 'hargaAsli' => 499000, 'label' => 'Diskon', 'singkat' => 'MKP', 'durasi' => '4 Minggu', 'level' => 'Semua', 'warna' => ['#0d9488', '#0f766e'], 'deskripsi' => 'Kelola anggaran, investasi, dan utang secara bijak.'],
    ['id' => 8, 'nama' => 'Public Speaking & Komunikasi', 'kategori' => 'Softskill', 'harga' => 299000, 'hargaAsli' => 0, 'label' => 'Baru', 'singkat' => 'PSK', 'durasi' => '4 Minggu', 'level' => 'Semua', 'warna' => ['#ea580c', '#c2410c'], 'deskripsi' => 'Kuasai seni berbicara dan presentasi yang memikat.'],
];

$kategoriKursus = ['Semua', 'Web', 'Mobile', 'Desain', 'Data', 'Bisnis', 'Softskill'];
$statusDaftar = ['Baru', 'Diproses', 'Diterima', 'Ditolak'];

$kontak = ['alamat' => 'Jl. Teknologi No. 12, Bandung', 'telepon' => '(022) 556 7890', 'wa' => '6281234567890', 'email' => 'halo@edunusa.id', 'jam' => 'Senin - Sabtu 08.00 - 18.00'];

$menuNav = [
    ['label' => 'Beranda', 'url' => 'index.php'],
    ['label' => 'Kursus', 'url' => 'kursus.php'],
    ['label' => 'Daftar', 'url' => 'daftar.php'],
];

$dataDir = __DIR__ . '/../data';
$kursusFile = $dataDir . '/kursus.json';
$daftarFile = $dataDir . '/daftar.json';

function e($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); }
function rupiah($n) { return 'Rp ' . number_format((int) $n, 0, ',', '.'); }
function baca_json($file, $default = []) { if (!is_file($file)) return is_array($default) ? $default : []; $d = json_decode(file_get_contents($file), true); return is_array($d) ? $d : $default; }
function tulis_json($file, $data) { $dir = dirname($file); if (!is_dir($dir)) mkdir($dir, 0777, true); file_put_contents($file, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)); }

$daftarKursus = baca_json($kursusFile, $kursusDefault);

function kartu_kursus($m) {
    $badge = '';
    if (!empty($m['label'])) { $cls = $m['label'] === 'Terlaris' ? 'badge-terlaris' : ($m['label'] === 'Baru' ? 'badge-baru' : 'badge-diskon'); $badge = '<span class="badge ' . $cls . '">' . e($m['label']) . '</span>'; }
    $diskon = '';
    if ((int) $m['hargaAsli'] > 0) { $diskon = '<span class="harga-asli">' . rupiah($m['hargaAsli']) . '</span>'; if ($m['label'] !== 'Diskon') { $badge .= '<span class="badge badge-diskon">-' . (int) round((1 - $m['harga'] / $m['hargaAsli']) * 100) . '%</span>'; } }
    $w0 = e($m['warna'][0]); $w1 = e($m['warna'][1]);
    return '<article class="card" data-id="' . (int) $m['id'] . '">'
        . '<div class="card-gambar" style="background:linear-gradient(135deg,' . $w0 . ',' . $w1 . ')"><div class="img-lapis"><span class="img-teks">' . e($m['singkat']) . '</span></div>' . $badge . '</div>'
        . '<div class="card-body"><span class="card-kat">' . e($m['kategori']) . '</span>'
        . '<h3 class="card-nama">' . e($m['nama']) . '</h3>'
        . '<p class="card-desk">' . e($m['deskripsi']) . '</p>'
        . '<div class="meta-kursus"><span><i class="fa-regular fa-clock"></i> ' . e($m['durasi']) . '</span><span><i class="fa-solid fa-signal"></i> ' . e($m['level']) . '</span></div>'
        . '<div class="harga">' . rupiah($m['harga']) . $diskon . '</div>'
        . '<a class="btn-tambah" href="daftar.php?kursus=' . (int) $m['id'] . '">Daftar Sekarang</a>'
        . '</article>';
}
