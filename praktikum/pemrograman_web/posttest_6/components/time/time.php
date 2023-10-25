<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../styles/base.css" />
</head>

<body>

  <div class="time-container">
    <?php
    echo '<p id="jam">';
    date_default_timezone_set("asia/pontianak");
    echo date("l, d F Y - H:i:s");
    echo '</p>';
    ?>
  </div>

  <script>
    function updateClock() {
      var elementJam = document.getElementById("jam");
      var now = new Date();
      var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
      var day = days[now.getDay()];
      var date = now.getDate();
      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
      var month = months[now.getMonth()];
      var year = now.getFullYear();
      var hours = now.getHours();
      var minutes = now.getMinutes();
      var seconds = now.getSeconds();
      var timeString = day + ', ' + date + ' ' + month + ' ' + year + ' - ' + (hours < 10 ? "0" : "") + hours + ':' + (minutes < 10 ? "0" : "") + minutes + ':' + (seconds < 10 ? "0" : "") + seconds;
      elementJam.innerText = timeString;
    }

    updateClock();
    setInterval(updateClock, 1000);
  </script>
</body>