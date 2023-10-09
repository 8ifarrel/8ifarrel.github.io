<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PENORAK - Pengaduan Online Rakyat</title>
  <link rel="stylesheet" href="style_lihat_laporan.css">
</head>
<body>
  <a id="dark-mode-toggle" class="dark-mode-logo"></a>
  <div class="image-container">
    <div class="content">
      <h1 class="main-title">Laporan Anda</h1>
      <p class="description">Laporan Anda akan disampaikan kepada instansi pemerintah berwenang dan hasil laporan akan dikirim melalui email Anda</p>
    </div>
    <div class="form-background">
      <div class="form-container">
        <div class="form-title">
          <h2>Laporan yang Anda Buat</h2>
        </div>
        <div>
          <?php
            $judul = isset($_POST['judul']) ? $_POST['judul'] : '';
            $isi = isset($_POST['isi']) ? $_POST['isi'] : '';
            $tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
            $lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
            $instansi = isset($_POST['instansi']) ? $_POST['instansi'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
          ?>

          <p><b>Judul laporan:</b>
          <div id="laporan-judul">
            <p ><?php echo $judul; ?></p>
          </div>

          <p><b>Isi laporan:</b></p>
          <div id="laporan-isi">
            <p><?php echo $isi; ?></p>
          </div>

          <p><b>Tanggal kejadian:</b></p>
          <div id="laporan-tanggal">
            <p><?php echo $tanggal; ?></p>
          </div>

          <p><b>Lokasi kejadian:</b></p>
          <div id="laporan-lokasi">
            <p><?php echo $lokasi; ?></p>
          </div>

          <p><b>Instansi tujuan:</b></p>
          <div id="laporan-instansi">
            <p><?php echo $instansi; ?></p>
          </div>

          <p><b>Email Anda:</b></p>
          <div id="laporan-email">
            <p><?php echo $email; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header class="header">
    <a href="index.html" class="logo">PENORAK</a>
    <nav class="navbar">
      <a href="about_me.html">TENTANG SAYA</a>
      <a href="#footer">HUBUNGI KAMI</a>
      <a href="index.html">SAMPAIKAN LAPORAN</a>
  </header>
  <footer id="footer">
    <div class="footer-content">
      <div class="contact-info">
        <h3>Hubungi Kami</h3>
        <p>Email: <a href="mailto:farrelsirah@email.com">farrelsirah@gmail.com</a></p>
        <p>Nomor Telepon: <a href="tel:+6288888888">+6288888888</a></p>
      </div>
      <div class="social-media">
        <h3>Lebih Dekat Dengan Kami</h3>
        <ul>
          <li><a href="https://www.instagram.com/"><img src="./assets/instagram-logo.png" width="35"></a></li>
          <li><a id="github-logo" href="https://github.com/"><img src="./assets/light_mode/github-logo.png" width="35"></a></li>
          <li><a href="https://www.linkedin.com/"><img src="./assets/linkedin-logo.png" width="35"></a></li>
        </ul>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2023. Kantor YTTA Empire. Hak cipta dilindungi Undang-Undang.</p>
    </div>
  </footer>
  <script>
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const imageContainer = document.querySelector('.image-container');

    function enableDarkMode() {
      document.body.classList.add('dark-mode');
      imageContainer.style.backgroundImage = 'none';
      const inputs = document.querySelectorAll('input[type="text"], input[type="date"], textarea, input[type="email"]');
      for (let i = 0; i < inputs.length; i++) {
        inputs[i].style.backgroundColor = '#161616';
        inputs[i].style.color = '#fff';
        inputs[i].style.borderColor = '#505050';
      }
    }

    function disableDarkMode() {
      document.body.classList.remove('dark-mode');
      imageContainer.style.backgroundImage = 'url("./assets/background.jpg")';
      const inputs = document.querySelectorAll('input[type="text"], input[type="date"], textarea, input[type="email"]');
      for (let i = 0; i < inputs.length; i++) {
        inputs[i].style.backgroundColor = '#fff';
        inputs[i].style.color = '#000';
        inputs[i].style.borderColor = '#ccc';
      }
    }

    function toggleDarkMode() {
      if (document.body.classList.contains('dark-mode')) {
        disableDarkMode();
      } else {
        enableDarkMode();
      }
    }

    darkModeToggle.addEventListener('click', toggleDarkMode);
  </script>
  <script>
    const kirimButton = document.getElementById('kirim-button');
  
    kirimButton.addEventListener('click', function (event) {
      const konfirmasi = confirm("Apakah Anda yakin ingin mengirim pengaduan?");
      if (!konfirmasi) {
        event.preventDefault();
      }
    });
  </script>
</body>
</html>