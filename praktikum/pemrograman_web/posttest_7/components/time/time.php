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

  <script src="../scripts/time.js"></script>
</body>