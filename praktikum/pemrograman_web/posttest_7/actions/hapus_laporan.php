<?php
require "../connection/koneksi.php";

$report_id = $_GET['report_id'];

$sqlDelete = "DELETE FROM tb_laporan WHERE id_laporan = $report_id";
if ($conn->query($sqlDelete) === TRUE) {
  echo "
  <script>
    alert('Laporan berhasil dihapus');
    document.location.href = '../pages/lihat_laporan.php';
  </script>
  ";
} else {
  echo "
  <script>
    alert('Laporan gagal dihapus');
    document.location.href = '../pages/lihat_laporan.php';
  </script>
  ";
}
?>
