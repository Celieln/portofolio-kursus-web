<?php
$activePage = 'kursus.php';
$pageTitle  = 'Kursus';
require_once __DIR__ . '/includes/config.php';
$pageDesc = 'Jelajahi semua kursus digital EduNusa berdasarkan kategori dan topik.';
include __DIR__ . '/includes/header.php';
?>
    <section class="page-head"><div class="container">
      <h1>Jelajahi Kursus</h1>
      <p>Temukan kelas yang sesuai dengan tujuan belajarmu.</p>
    </div></section>

    <section class="section"><div class="container">
      <div class="toolbar">
        <div class="filter-kategori" id="filter-kategori" data-aktif="Semua">
          <?php foreach ($kategoriKursus as $k): ?><button class="btn-filter<?= $k === 'Semua' ? ' aktif' : '' ?>" data-kategori="<?= e($k) ?>"><?= e($k) ?></button><?php endforeach; ?>
        </div>
        <input type="text" class="cari" id="cari-kursus" placeholder="Cari kursus...">
      </div>
      <p class="jumlah-produk" id="jumlah-produk"></p>
      <div class="menu-grid" id="menu-grid"></div>
    </div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>