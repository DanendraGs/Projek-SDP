<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Prediksi Jurusan & Kampus</title>
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background-color: #f0f4f8;
    }

    .navbar {
      background-color: #1e88e5;
      color: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar h1 {
      margin: 0;
      font-size: 20px;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin-left: 15px;
      font-weight: bold;
      cursor: pointer;
    }

    .navbar a:hover {
      text-decoration: underline;
    }

    .hero {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      background-color: #e3f2fd;
      padding: 0 20px;
      margin-bottom: 60px; /* Jarak bawah agar tidak mepet */
    }

    .hero h2 {
      font-size: 36px;
      color: #1e88e5;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 18px;
      color: #333;
    }

    .form-section {
      padding: 60px 20px 80px; /* padding bawah lebih untuk jarak */
      background-color: white;
      max-width: 600px;
      margin: 60px auto 80px; /* Penyesuaian margin agar tidak terlalu jauh jika hero pendek */
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label, input, select {
      margin-top: 15px;
      font-size: 16px;
    }

    input, select {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    input[type=submit] {
      margin-top: 25px;
      background-color: #1e88e5;
      color: white;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-weight: bold;
      font-size: 18px;
    }

    input[type=submit]:hover {
      background-color: #1565c0;
    }

    /* Tentang section */
    .about-section {
      max-width: 900px;
      margin: 0 auto 80px;
      padding: 40px 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .about-section h2 {
      text-align: center;
      color: #1e88e5;
      margin-bottom: 30px;
    }

    .authors {
      display: flex;
      justify-content: center;
      gap: 30px; /* Mengurangi gap sedikit */
      flex-wrap: wrap;
    }

    .author {
      max-width: 200px; /* Mengurangi max-width sedikit */
      text-align: center;
      padding: 20px; /* Menambah padding internal */
      background-color: #e3f2fd;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(30,136,229,0.2); /* Shadow lebih soft */
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .author:hover {
      transform: translateY(-5px); /* Efek hover lebih halus */
      box-shadow: 0 6px 16px rgba(30,136,229,0.3);
    }

    .author img {
      width: 100px; /* Ukuran gambar disesuaikan */
      height: 100px;
      border-radius: 50%;
      border: 3px solid #1e88e5; /* Border lebih tipis */
      object-fit: cover;
      margin-bottom: 15px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .author h3 {
      margin-bottom: 8px;
      color: #1565c0;
      font-size: 18px; /* Ukuran font nama */
      font-weight: 600;
    }
     .author p {
        font-size: 13px; /* Ukuran font link sosial media */
        margin-bottom: 0;
    }
    .author p a {
      margin: 0 5px; /* Jarak antar link sosial media */
      color: #1565c0;
      text-decoration: none;
      font-weight: 500; /* Font weight link */
    }

    .author p a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <h1>PrediksiKuliah</h1>
    <div>
      <a href="#beranda" class="nav-link">Beranda</a>
      <a href="#prediksi" class="nav-link">Prediksi</a>
      <a href="#tentang" class="nav-link">Tentang</a>
    </div>
  </div>

  <div class="hero" id="beranda">
    <div>
      <h2>Temukan Jurusan & Kampus yang Tepat</h2>
      <p>Isi formulir di bawah atau klik "Prediksi" di menu untuk mulai</p>
    </div>
  </div>

  <div class="form-section" id="prediksi">
    <form action="proses.php" method="POST">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required>

      <label for="skor">Skor Ujian (Contoh: UTBK 0–1000):</label>
      <input type="number" id="skor" name="skor" min="0" max="1000" required>

      <label for="minat">Minat Utama:</label>
      <select id="minat" name="minat" required>
        <option value="">-- Pilih Minat --</option>
        <option value="teknologi">Teknologi & Rekayasa</option>
        <option value="sains">Sains Murni & Matematika</option>
        <option value="kesehatan">Kesehatan</option>
        <option value="bisnis">Ekonomi & Bisnis</option>
        <option value="soshum">Sosial & Humaniora (Hukum, Psikologi, Komunikasi, dll)</option>
        <option value="seni">Seni & Desain</option>
        <option value="pertanian">Pertanian & Lingkungan</option>
        <option value="pendidikan">Pendidikan & Keguruan</option>
      </select>

      <label for="lokasi">Preferensi Lokasi Kampus:</label>
      <select id="lokasi" name="lokasi"> <option value="">-- Semua Lokasi (Default) --</option>
        <option value="jakarta">DKI Jakarta</option>
        <option value="jawa_barat">Jawa Barat (Bandung, Bogor, Depok, dll)</option>
        <option value="banten">Banten</option>
        <option value="jawa_tengah">Jawa Tengah (Semarang, Solo, dll)</option>
        <option value="yogyakarta">DI Yogyakarta</option>
        <option value="jawa_timur">Jawa Timur (Surabaya, Malang, dll)</option>
        <option value="sumatera_utara">Sumatera Utara</option>
        <option value="sumatera_barat">Sumatera Barat</option>
        <option value="sumatera_selatan">Sumatera Selatan</option>
        <option value="lampung">Lampung</option>
        <option value="riau">Riau</option>
        <option value="kalimantan_timur">Kalimantan Timur</option>
        <option value="kalimantan_selatan">Kalimantan Selatan</option>
        <option value="sulawesi_selatan">Sulawesi Selatan</option>
        <option value="bali">Bali</option>
        </select>

      <input type="submit" value="Prediksi Sekarang">
    </form>
  </div>

  <div class="about-section" id="tentang">
    <h2>Tentang Kami</h2>
    <div class="authors">
      <div class="author">
        <img src="image/foto_danen.jpg" alt="DanendraGs" /> <h3>Danendra Ganijan S</h3>
        <p>
          <a href="https://www.instagram.com/danendrags" target="_blank" rel="noopener noreferrer">Instagram</a> |
          <a href="https://www.linkedin.com/in/danendra-ganijan-sunarso-6389a0301/" target="_blank" rel="noopener noreferrer">LinkedIn</a> |
          <a href="https://twitter.com/raka_tw" target="_blank" rel="noopener noreferrer">Twitter</a>
        </p>
      </div>
      <div class="author">
        <img src="image/foto_deren.jpeg" alt="FergianoDeren" /> <h3>Fergiano Deren Ryandi</h3>
        <p>
          <a href="https://instagram.com/derenryn" target="_blank" rel="noopener noreferrer">Instagram</a> |
          <a href="https://www.linkedin.com/in/fergiano-deren-ryandi-306459219/?originalSubdomain=id" target="_blank" rel="noopener noreferrer">LinkedIn</a> |
          <a href="https://twitter.com/sinta_tw" target="_blank" rel="noopener noreferrer">Twitter</a>
        </p>
      </div>
      <div class="author">
        <img src="image/foto_ario.png" alt="FauzanArio" /> <h3>Fauzan Ario Bagaskoro</h3>
        <p>
          <a href="https://instagram.com/fauzanario_" target="_blank" rel="noopener noreferrer">Instagram</a> |
          <a href="https://www.linkedin.com/in/fauzanario/" target="_blank" rel="noopener noreferrer">LinkedIn</a> |
          <a href="https://twitter.com/agung_tw" target="_blank" rel="noopener noreferrer">Twitter</a>
        </p>
      </div>
    </div>
  </div>
  <script>
    // Script untuk smooth scroll jika diperlukan browser lama, modern browser support dari CSS
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
  </script>
</body>
</html>