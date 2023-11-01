<?php 
require '../actions/login.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <form action="" method="POST">
    <h3>Login</h3>

    <div class="inputBox">
      <label for="">Email</label>
      <input type="text" name="email" placeholder="Email" required>
    </div>

    <div class="inputBox">
      <label for="">Password</label>
      <input type="password" name="password" placeholder="Password" required>
    </div>
    
    <input type="submit" value="Login" name="login">
    
    <div class="links">
      <p>Belum punya akun?</p>
      <a href="register.php">Register</a>
    </div>
  </form>
</body>

</html>