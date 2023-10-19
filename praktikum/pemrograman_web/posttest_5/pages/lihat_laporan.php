<?php
require "../connection/koneksi.php";

$report_id = isset($_GET['report_id']) ? $_GET['report_id'] : 1;

$sqlMaxID = "SELECT MAX(id_laporan) AS max_id FROM tb_laporan";
$resultMaxID = $conn->query($sqlMaxID);
$max_report_id = $resultMaxID->fetch_assoc()['max_id'];

$sql = "SELECT id_laporan, judul_laporan, deskripsi_laporan, lokasi_kejadian, tanggal_kejadian, instansi_tujuan, alamat_email FROM tb_laporan WHERE id_laporan = $report_id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PENORAK - Pengaduan Online Rakyat</title>
  <script src="https://kit.fontawesome.com/9830653175.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../styles/base.css" />
  <link rel="stylesheet" href="../styles/lihat_laporan.css" />
</head>

<body class="background-image">
  <header class="navbar-container">
    <nav class="navbar-content-left">
      <a href="index.html" class="navbar-logo">PENORAK</a>

      <div class="navbar-main-content">
        <a href="about_us.html">TENTANG KAMI</a>
        <a href="#footer-container">HUBUNGI KAMI</a>
        <a href="buat_laporan.php">BUAT LAPORAN</a>
      </div>
    </nav>

    <div class="navbar-content-right">
      <a href="" class="account-container">REGISTER</a>
      <a href="" class="account-container">LOG IN</a>
    </div>
  </header>

  <div class="main-container">
    <div class="summary-container">
      <h1 class="title">Laporan Anda</h1>
      <p class="description">
        Laporan Anda akan disampaikan kepada instansi pemerintah berwenang dan hasil laporan akan dikirim melalui email
        Anda
      </p>
    </div>

    <div class="form-container">
      <div class="form-title">
        <h2>Laporan yang Anda Buat</h2>
      </div>

      <?php
      if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
  
        echo '<p><b>Judul laporan:</b></p>';
        echo '<div id="laporan-judul">';
        echo '<p>' . $row["judul_laporan"] . '</p>';
        echo '</div>';

        echo '<p><b>Deskripsi laporan:</b></p>';
        echo '<div id="laporan-deskripsi">';
        echo '<p>' . $row["deskripsi_laporan"] . '</p>';
        echo '</div>';

        echo '<p><b>Tanggal kejadian:</b></p>';
        echo '<div id="laporan-tanggal">';
        echo '<p>' . $row["tanggal_kejadian"] . '</p>';
        echo '</div>';

        echo '<p><b>Lokasi kejadian:</b></p>';
        echo '<div id="laporan-lokasi">';
        echo '<p>' . $row["lokasi_kejadian"] . '</p>';
        echo '</div>';

        echo '<p><b>Instansi tujuan:</b></p>';
        echo '<div id="laporan-instansi">';
        echo '<p>' . $row["instansi_tujuan"] . '</p>';
        echo '</div>';

        echo '<p><b>Alamat email Anda:</b></p>';
        echo '<div id="laporan-email">';
        echo '<p>' . $row["alamat_email"] . '</p>';
        echo '</div>';

        echo '<div class="edit-button-container">';
        echo '<a href="ubah_laporan.php" class="update-btn">Edit laporan</a>';
        echo '</div>';

        echo '<div class="arrow-container">';
        if ($report_id > 1) {
            $prev_report_id = $report_id - 1;
            echo '<a href="lihat_laporan.php?report_id=' . $prev_report_id . '"><i class="fa-solid fa-caret-left fa-2xl" style="color: #d0021b;"></i></a>';
        }
        if ($report_id < $max_report_id) {
            $next_report_id = $report_id + 1;
            echo '<a href="lihat_laporan.php?report_id=' . $next_report_id . '"><i class="fa-solid fa-caret-right fa-2xl" style="color: #d0021b;"></i></a>';
        }
        echo '</div>';
      }
      ?>
    </div>
  </div>

  <footer id="footer-container">
    <div class="footer-content">
      <div class="contact-info">
        <h3>Hubungi Kami</h3>
        <p>
          Email:
          <a href="mailto:farrelsirah@email.com">farrelsirah@gmail.com</a>
        </p>
        <p>Nomor Telepon: <a href="tel:+6288888888">+6288888888</a></p>
      </div>

      <div class="social-media">
        <h3>Lebih Dekat Dengan Kami</h3>
        <ul>
          <li>
            <a href="https://www.instagram.com/"><img src="../assets/instagram-logo.png" width="35" /></a>
          </li>
          <li>
            <a id="github-logo" href="https://github.com/"><img src="../assets/light_mode/github-logo.png"
                width="35" /></a>
          </li>
          <li>
            <a href="https://www.linkedin.com/"><img src="../assets/linkedin-logo.png" width="35" /></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-copyright">
      <p>
        &copy; 2023. Kantor YTTA Empire. Hak cipta dilindungi Undang-Undang.
      </p>
    </div>
  </footer>

  <script src="../scripts/dark_mode.js"></script>
</body>

</html>