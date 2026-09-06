<?php require_once __DIR__ . '/config.php'; ?>
  </main>

  <footer class="footer">
    <div class="container footer-grid">
      <div class="footer-kol">
        <a href="index.php" class="logo"><i class="fa-solid fa-graduation-cap"></i> Edu<span>Nusa</span></a>
        <p>Platform kursus digital untuk mengasah keterampilan karier Anda. Belajar dari praktisi dengan materi terstruktur dan sertifikat.</p>
      </div>
      <div class="footer-kol">
        <h4>Navigasi</h4>
        <?php foreach ($menuNav as $m): ?><a href="<?= e($m['url']) ?>"><?= e($m['label']) ?></a><?php endforeach; ?>
      </div>
      <div class="footer-kol">
        <h4>Waktu Belajar</h4>
        <p>Layanan<br><b><?= e($kontak['jam']) ?></b></p>
        <p>Kelas online &amp; sertifikat digital</p>
      </div>
      <div class="footer-kol">
        <h4>Kontak</h4>
        <p><i class="fa-solid fa-location-dot"></i> <?= e($kontak['alamat']) ?></p>
        <p><i class="fa-solid fa-phone"></i> <?= e($kontak['telepon']) ?></p>
        <p><i class="fa-solid fa-envelope"></i> <?= e($kontak['email']) ?></p>
      </div>
    </div>
    <div class="footer-bawah">Copyright <?= date('Y') ?> <?= e($namaPlatform) ?>. Seluruh hak cipta dilindungi.</div>
  </footer>

  <script>window.KURSUS_DATA = <?= json_encode($daftarKursus, JSON_UNESCAPED_UNICODE) ?>;</script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/script.js"></script>
  <div class="cursor-atom" id="kursorAtom" aria-hidden="true"><span class="inti"><i class="fa-solid fa-graduation-cap"></i></span><span class="orbit"><span class="elek"></span></span><span class="orbit orbit2"><span class="elek"></span></span></div>
  <script>
  (function () {
    if (window.matchMedia('(max-width:768px)').matches) return;
    var k = document.getElementById('kursorAtom');
    document.addEventListener('mousemove', function (e) { k.style.left = e.clientX + 'px'; k.style.top = e.clientY + 'px'; });
  })();
  </script>
</body>
</html>