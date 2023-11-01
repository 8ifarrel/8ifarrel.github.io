<?php
require "../actions/lihat_laporan.php";
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
  <a id="dark-mode-toggle" class="dark-mode-btn"></a>

  <?php
  require "../components/navbar/navbar.php";
  ?>

  <div class="main-container">
    <div class="summary-container">
      <h1 class="title">Laporan Anda</h1>
      <p class="description">
        Laporan Anda akan disampaikan kepada instansi pemerintah berwenang dan hasil laporan akan dikirim melalui email Anda
      </p>
    </div>

    <div class="form-container">
      <div class="form-title">
        <h2>Laporan yang Anda Buat</h2>
      </div>

      <div class='form-content'>
        <?php
        if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result);

          require "../components/buttons/left_arrow.php";

          echo '<div class="isi-laporan">';
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

          echo '<div class="edit-btn">';
          echo '<a href="">Edit laporan</a>';
          echo '</div>';

          echo '<div class="delete-btn" style="cursor: pointer;" onclick="window.location.href=\'../actions/hapus_laporan.php?report_id=' . $row['id_laporan'] . '\'">';
          echo '<a href="#">Hapus laporan</a>';
          echo '</div>';
          echo '</div>';          

          require "../components/buttons/right_arrow.php";
        }
        ?>
      </div>
    </div>
  </div>

  <?php
  require "../components/footer/footer.php";
  ?>

  <script src="../scripts/dark_mode.js"></script>
</body>
</html>