<?php
$activePage = 'index.php';
$pageTitle  = 'Beranda';
require_once __DIR__ . '/includes/config.php';
$pageDesc = $namaPlatform . ' - ' . strtolower($tagline) . '. Temukan kursus web, mobile, desain, data, bisnis, dan softskill.';
include __DIR__ . '/includes/header.php';
?>

    <div class="brand-strip"><div class="container marquee">
      <span>Kelas Online</span><i class="fa-solid fa-star"></i><span>Mentor Praktisi</span><i class="fa-solid fa-star"></i><span>Sertifikat Resmi</span><i class="fa-solid fa-star"></i><span>Akses Seumur Hidup</span><i class="fa-solid fa-star"></i><span>Kelas Online</span><i class="fa-solid fa-star"></i><span>Mentor Praktisi</span><i class="fa-solid fa-star"></i><span>Sertifikat Resmi</span><i class="fa-solid fa-star"></i><span>Akses Seumur Hidup</span><i class="fa-solid fa-star"></i>
    </div></div>

    <section class="hero">
      <div class="blob blob-1"></div>
      <div class="blob blob-2"></div>
      <div class="container hero-dalam">
        <div class="hero-teks">
          <span class="hero-badge" data-aos="fade-up">Selamat Datang</span>
          <h1 data-aos="fade-up" data-aos-delay="80">Tingkatkan <span class="grad">Karier</span> Mu Hari Ini</h1>
          <p data-aos="fade-up" data-aos-delay="160">Belajar keterampilan digital yang relevan dengan industri. Materi terstruktur, mentor berpengalaman, dan sertifikat yang diakui.</p>
          <div class="hero-aksi" data-aos="fade-up" data-aos-delay="240">
            <a href="kursus.php" class="btn hvr-sweep-to-right"><i class="fa-solid fa-book-open"></i> Lihat Kursus</a>
            <a href="daftar.php" class="btn btn-ghost hvr-sweep-to-right"><i class="fa-solid fa-user-plus"></i> Mendaftar</a>
          </div>
          <div class="hero-stat" data-aos="fade-up" data-aos-delay="320">
            <div><b>40+</b><span>Kursus</span></div>
            <div><b>20k+</b><span>Alumni</span></div>
            <div><b>4.8<i class="fa-solid fa-star"></i></b><span>Rating</span></div>
          </div>
        </div>
        <div class="hero-visual" data-aos="fade-left" data-aos-delay="200">
          <div class="hero-card utama">
            <span class="promo-label">Promo Awal Tahun</span>
            <h3>Diskon hingga 30%</h3>
            <p>Untuk semua kelas baru</p>
            <div class="harga-hero">Mulai dari <em>Rp 299rb</em></div>
            <a href="kursus.php" class="btn btn-kecil btn-putih hvr-sweep-to-right">Pilih Kelas</a>
          </div>
          <div class="hero-badge-card"><i class="fa-solid fa-certificate"></i><div><b>Bersertifikat</b><span>Diakui industri</span></div></div>
          <div class="hero-mini-card"><i class="fa-solid fa-headset"></i><div><b>Mentor Aktif</b><span>Diskusi langsung</span></div></div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="judul-section" data-aos="fade-up">
          <div><span class="eyebrow">Populer</span><h2>Kursus Andalan</h2></div>
          <a href="kursus.php" class="link-semua">Lihat Semua <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="menu-grid" id="menu-grid">
          <?php foreach (array_slice($daftarKursus, 0, 8) as $i => $m): ?>
          <div data-aos="fade-up" data-aos-delay="<?= ($i % 4) * 60 ?>"><?= kartu_kursus($m) ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="promo-band">
      <div class="container promo-band-dalam" data-aos="fade-up">
        <div><span class="eyebrow light">Promo</span><h2>Gratis konsultasi karier untuk <em>100 pendaftar</em> pertama</h2><p>Batch berikutnya mulai bulan depan.</p></div>
        <a href="daftar.php" class="btn btn-putih hvr-sweep-to-right">Ambil Promo</a>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="judul-section" data-aos="fade-up"><div><span class="eyebrow">Kategori</span><h2>Pilih Jalur Belajarmu</h2></div></div>
        <div class="kategori-grid">
          <?php $ik = ['fa-code','fa-mobile-screen-button','fa-palette','fa-chart-line','fa-briefcase','fa-people-group']; $gk = ['gk-1','gk-2','gk-3','gk-4','gk-5','gk-6']; $no=0; foreach (['Web','Mobile','Desain','Data','Bisnis','Softskill'] as $k): ?>
          <a href="kursus.php" class="kategori-card <?= $gk[$no] ?>" data-aos="fade-up" data-aos-delay="<?= $no*60 ?>"><i class="fa-solid <?= $ik[$no] ?>"></i><h3><?= $k ?></h3><span>Lihat â†’</span></a>
          <?php $no++; endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section tentang-ringkas">
      <div class="container tentang-grid" data-aos="fade-up">
        <div class="ttg-visual"><div class="ttg-gambar"><i class="fa-solid fa-graduation-cap"></i></div><div class="ttg-badge">20k+ Alumni</div></div>
        <div class="ttg-teks">
          <span class="eyebrow">Tentang Kami</span>
          <h2>Belajar dengan cara yang menyenangkan</h2>
          <p>EduNusa lahir untuk membuat belajar keterampilan digital mudah diakses semua orang Indonesia. Kelas dirancang bertahap dengan proyek nyata.</p>
          <ul>
            <li><i class="fa-solid fa-check"></i> Mentoring langsung setiap pekan</li>
            <li><i class="fa-solid fa-check"></i> Proyek portofolio di setiap kelas</li>
            <li><i class="fa-solid fa-check"></i> Sertifikat digital yang diakui</li>
          </ul>
          <a href="kursus.php" class="btn hvr-sweep-to-right">Mulai Belajar</a>
        </div>
      </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>