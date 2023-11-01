<?php
require "../connection/koneksi.php";

function cekLaporanAda($report_id) {
  global $conn;
  $sql = "SELECT id_laporan FROM tb_laporan WHERE id_laporan = $report_id";
  $result = $conn->query($sql);
  return $result->num_rows > 0;
}

$report_id = isset($_GET['report_id']) ? $_GET['report_id'] : 1;

if (!cekLaporanAda($report_id)) {
  $sqlNextID = "SELECT id_laporan FROM tb_laporan ORDER BY id_laporan ASC LIMIT 1";
  $resultNextID = $conn->query($sqlNextID);
  if ($resultNextID->num_rows > 0) {
    $next_row = $resultNextID->fetch_assoc();
    $next_report_id = $next_row['id_laporan'];
    echo "<script>";
    echo "document.location.href = '../pages/lihat_laporan.php?report_id=' + $next_report_id;";
    echo "</script>";
  }
}

$sqlMaxID = "SELECT MAX(id_laporan) AS max_id FROM tb_laporan";
$resultMaxID = $conn->query($sqlMaxID);
$max_report_id = $resultMaxID->fetch_assoc()['max_id'];

$sql = "SELECT id_laporan, judul_laporan, deskripsi_laporan, lokasi_kejadian, tanggal_kejadian, instansi_tujuan, alamat_email FROM tb_laporan WHERE id_laporan = $report_id";
$result = $conn->query($sql);
?>