<?php
require "../connection/koneksi.php";

session_start();

if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $pass = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM tb_akun_user WHERE email = '$email'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($pass, $row["password"])) {
      $_SESSION["akses"] = $row["nama_lengkap"];
      header("location: ../pages/buat_laporan.php");
      exit;
    } else {
      echo "
        <script>
          alert('Email atau password Anda Tidak Ada');
          document.location.href = 'login.php';
        </script>
      ";
    }
  } else {
    echo "
        <script>
          alert('Email atau password Anda Salah');
          document.location.href = 'login.php';
        </script>
      ";
  }
}
?>