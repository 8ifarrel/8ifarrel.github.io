<?php
  echo '<div class="arrow-container">';
  if ($report_id < $max_report_id) {
    $next_report_id = $report_id + 1;
  
    $next_id_found = false;
    while (!$next_id_found && $next_report_id <= $max_report_id) {
      if (cekLaporanAda($next_report_id)) {
        $next_id_found = true;
      } else {
        $next_report_id++;
      }
    }
  
    if ($next_id_found) {
      echo '<a href="lihat_laporan.php?report_id=' . $next_report_id . '"><i class="fa-solid fa-caret-right fa-2xl" style="color: #d0021b;"></i></a>';
    } else {
      echo '<a href="lihat_laporan.php?report_id=1"><i class="fa-solid fa-caret-right fa-2xl" style="color: #d0021b;"></i></a>';
    }
  } else {
    echo '<a href="lihat_laporan.php?report_id=1"><i class="fa-solid fa-caret-right fa-2xl" style="color: #d0021b;"></i></a>';
  }
  echo '</div>';
?>