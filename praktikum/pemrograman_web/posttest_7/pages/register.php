<?php 
require '../actions/register.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>

<body>
  <form action="" method="POST">
    <h3>Register</h3>

    <div class="inputBox">
      <label for="">Nama Lengkap</label>
      <input type="text" name="nama_lengkap" placeholder="Nama lengkap" required>
    </div>

    <div class="inputBox">
      <label for="">Email</label>
      <input type="email" name="email" placeholder="Email" required>
    </div>

    <div class="inputBox">
      <label for="">Password</label>
      <input type="password" name="password" placeholder="Password" required>
    </div>

    <div class="inputBox">
      <label for="">Konfirmasi Password</label>
      <input type="password" name="konfirmasi" placeholder="Password" required>
    </div>

    <input type="submit" value="Register" name="register">

    <a href="login.php">Kembali</a>
</body>

</html>