<?php
require 'koneksi.php'; // Menggunakan "require" untuk file koneksi
$id = $_GET['id'];

$result = mysqli_query ($conn, "select $ from dblamas where id=$id");

$update_laporan = [];

while ($row = mysqli_fetch_assoc($result)) {
    $update_laporan[] = $row;
}

$update_laporan = $update_laporan[0];

if (isset($_POST['submit'])) {
  $judul_laporan = $_POST['judul_laporan'];
  $isi_laporan = $_POST['isi_laporan'];
  $tanggal_kejadian = $_POST['tanggal_kejadian'];
  $lokasi_kejadian = $_POST['lokasi_kejadian'];
  $instansi_tujuan = $_POST['instansi_tujuan'];
  $alamat_email = $_POST['alamat_email'];
  $upload_berkas = $_FILES['upload_berkas']['name'];
  $x = explode('.', $upload_berkas);
  $ekstensi = strtolower(end($x));

  // Mengganti $name menjadi $upload_berkas
  $berkas_baru = "$upload_berkas.$ekstensi";
  $tmp = $_FILES['upload_berkas']['tmp_name']; // Menambahkan tanda semicolon


  if(move_uploaded_file($tmp, 'img/'.$berkas_baru)) {
    $result = mysqli_query($conn, "INSERT INTO tblaporan (upload_gambar) VALUES ('$berkas_baru)");
  }

  $result = mysqli_query($conn, "UPDATE tblaporan SET judul_laporan = '$judul_laporan', isi_laporan = '$isi_laporan', tanggal_kejadian = '$tanggal_kejadian', lokasi_kejadian = '$lokasi_kejadian', instansi_tujuan = '$instansi_tujuan', alamat_email = '$alamat_email', upload_berkas = '$upload_berkas' WHERE id = '$id' " );


    if ($result) {
    echo "
      <script>
        alert('data berhasil di tambahkan!');
        document.location.href = 'index.php'
      </script>";
  } else {
    echo "
      <script>
      alert('data gagal di tambahkan!');
      document.location.href = 'index.php'
      </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PENORAK - Pengaduan Online Rakyat</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body class="background-image">
  <a id="dark-mode-toggle" class="dark-mode-btn"></a>

  <header class="navbar-container">
    <nav class="navbar-content-left">
      <a href="index.html" class="navbar-logo">PENORAK</a>

      <div class="navbar-main-content">
        <a href="about_us.html">TENTANG KAMI</a>
        <a href="#footer-container">HUBUNGI KAMI</a>
        <a href="lihat_laporan.php">LIHAT LAPORAN</a>
      </div>
    </nav>

    <div class="navbar-content-right">
      <a href="" class="account-container">REGISTER</a>
      <a href="" class="account-container">LOG IN</a>
    </div>
  </header>

  <div class="main-container">
    <div class="summary">
      <h1 class="title">Layanan Pengaduan Online Rakyat</h1>
      <p class="description">
        Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang
      </p>
    </div>

    <div class="form-container">
      <div class="form-title">
        <h2>Sampaikan Laporan Anda</h2>
      </div>

      <form action="" method="post" enctype="multipart/form-data">
        <label for="judul"><b>Ketik judul laporan:</b></label>
        <input type="text" id="inputan-laporan-judul" name="judul_laporan" value="<?php echo $update_laporan['judul_laporan']?>" required />

        <label for="isi"><b>Ketik isi laporan:</b></label>
        <textarea id="inputan-laporan-isi" name="isi_laporan" value="<?php echo $update_laporan['isi_laporan']?>" rows="10" required style="resize: none"></textarea>

        <label for="tanggal"><b>Pilih tanggal kejadian:</b></label>
        <input type="date" id="inputan-laporan-tanggal" name="tanggal_kejadian" value="<?php echo $update_laporan['tanggal_kejadian']?>" required />

        <label for="lokasi"><b>Ketik lokasi kejadian:</b></label>
        <textarea id="inputan-laporan-lokasi" name="lokasi_kejadian" value="<?php echo $update_laporan['lokasi_kejadian']?>" required style="resize: none"></textarea>

        <!-- <label for="instansi"><b>Ketik instansi tujuan:</b></label>
        <input type="text" id="inputan-laporan-instansi" name="instansi_tujuan" value="<?php echo $update_laporan['instansi_tujuan']?>" required /> -->

        <label for="email"><b>Email Anda:</b></label>
        <input type="email" id="email" name="alamat_email" required />

        <label for="file">Upload File</label>
        <input type="file" id="gambar" name="upload_berkas" value="<?php echo $update_laporan['upload_berkas']?>" required />
        <input type="submit" name="submit" value="Kirim Pengaduan" id="submit-tambah" />
      </form>
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
            <a href="https://www.instagram.com/"><img src="./assets/instagram-logo.png" width="35" /></a>
          </li>
          <li>
            <a id="github-logo" href="https://github.com/"><img src="./assets/light_mode/github-logo.png"
                width="35" /></a>
          </li>
          <li>
            <a href="https://www.linkedin.com/"><img src="./assets/linkedin-logo.png" width="35" /></a>
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

  <script src="script.js"></script>
</body>

</html>

update