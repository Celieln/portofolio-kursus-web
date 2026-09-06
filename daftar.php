<?php
$activePage = 'daftar.php';
$pageTitle  = 'Daftar Kursus';
require_once __DIR__ . '/includes/config.php';
$pageDesc = 'Daftar kursus EduNusa pilihan Anda sekarang dan mulai belajar.';
$pilihId = isset($_GET['kursus']) ? (int) $_GET['kursus'] : 0;
$pilihNama = '';
foreach ($daftarKursus as $m) { if ((int)$m['id'] === $pilihId) { $pilihNama = $m['nama']; break; } }
include __DIR__ . '/includes/header.php';
?>
    <section class="page-head"><div class="container">
      <h1>Daftar Kursus</h1>
      <p>Isi data Anda untuk mendaftar ke kelas pilihan.</p>
    </div></section>

    <section class="section"><div class="container daftar-layout">
      <div class="panel-form" data-aos="fade-up">
        <h2 class="form-title">Formulir Pendaftaran</h2>
        <form id="form-daftar" class="form">
          <label class="field"><span>Nama Lengkap *</span><input type="text" id="nama" placeholder="Nama Anda" required></label>
          <label class="field"><span>Email *</span><input type="email" id="email" placeholder="nama@email.com" required></label>
          <label class="field"><span>No. WhatsApp / Telepon *</span><input type="text" id="telepon" placeholder="08xxxxxxxxxx" required></label>
          <label class="field"><span>Kursus Pilihan *</span>
            <select id="pilih-kursus" required>
              <option value="">-- Pilih kursus --</option>
              <?php foreach ($daftarKursus as $m): ?><option value="<?= (int)$m['id'] ?>" <?= (int)$m['id'] === $pilihId ? 'selected' : '' ?>><?= e($m['nama']) ?> â€” <?= rupiah($m['harga']) ?></option><?php endforeach; ?>
            </select>
          </label>
          <label class="field"><span>Motivasi Mengikuti</span><textarea id="motivasi" rows="3" placeholder="Ceritakan tujuan Anda..."></textarea></label>
          <button type="submit" class="btn"><i class="fa-solid fa-paper-plane"></i> Kirim Pendaftaran</button>
        </form>
      </div>
      <aside class="panel-info" data-aos="fade-left">
        <h3>Keunggulan Belajar di EduNusa</h3>
        <ul>
          <li><i class="fa-solid fa-check"></i> Mentor praktisi industri</li>
          <li><i class="fa-solid fa-check"></i> Materi ter-update</li>
          <li><i class="fa-solid fa-check"></i> Sertifikat resmi</li>
          <li><i class="fa-solid fa-check"></i> Konsultasi karier gratis</li>
        </ul>
        <div class="cta-lingkup"><i class="fa-solid fa-circle-info"></i> Tim kami akan menghubungi Anda maksimal 2x24 jam.</div>
      </aside>
    </div></section>

    <div class="modal" id="modal-sukses">
      <div class="modal-kotak">
        <div class="modal-ikon"><i class="fa-solid fa-check"></i></div>
        <h2>Pendaftaran Berhasil</h2>
        <p>Terima kasih <b id="nama-pendaftar">-</b>!</p>
        <div class="modal-kode">No. Pendaftaran<b id="kode-pendaftaran">-</b></div>
        <button class="btn lebar" id="tutup-modal">Kembali ke Beranda</button>
      </div>
    </div>
<?php include __DIR__ . '/includes/footer.php'; ?>