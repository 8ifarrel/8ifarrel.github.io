<?php
session_start();
require '../connection/koneksi.php'; 

if (isset($_POST['submit'])) {
  $judul_laporan = $_POST['judul_laporan'];
  $deskripsi_laporan = $_POST['deskripsi_laporan'];
  $tanggal_kejadian = $_POST['tanggal_kejadian'];
  $lokasi_kejadian = $_POST['lokasi_kejadian'];
  $instansi_tujuan = $_POST['instansi_tujuan'];
  $alamat_email = $_POST['alamat_email'];

  $result = mysqli_query($conn, "INSERT INTO tb_laporan (judul_laporan, deskripsi_laporan, tanggal_kejadian, lokasi_kejadian, instansi_tujuan, alamat_email) VALUES ('$judul_laporan', '$deskripsi_laporan', '$tanggal_kejadian', '$lokasi_kejadian', '$instansi_tujuan', '$alamat_email')");

  if ($result) {
    echo "
      <script>
        alert('data berhasil di tambahkan!');
        document.location.href = '../pages/lihat_laporan.php'
      </script>";
  } else {
    echo "
      <script>
      alert('data gagal di tambahkan!');
      document.location.href = '../pages/buat_laporan.php'
      </script>";
  }
}
?>