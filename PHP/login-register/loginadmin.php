<?php
require_once('../dbconnect.php');
require_once('adminhelper.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../../CSS/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin Login</title>
  </head>
  <body>
  <header>
  <a href="../home.php"><img src="../../IMG/pngwing.com.png" alt="Home" /></a>
</header>
  <form action="" method="post">
    <div class="login-box">
      <h2>admin Login</h2>
      <div class="input-field">
        <label for="email">Email:</label>
        <input
          type="emailadress"
          id="emailadress"
          name="emailadress"
          placeholder="Enter your email"
        />
      </div>
      <div class="input-field">
        <label for="password">Password:</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Enter your password"
        />
      </div>
      <button type="submit" name="submit">submit</button>
      <button><a href="login.php">Login</a></button>
      <button><a href="loginadmin.php">AdminLogin</a></button>
      <button><a href="register.php">register</a></button>

      </form>
      </div>
  </body>
</html>