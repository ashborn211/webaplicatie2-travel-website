<?php
require_once('../dbconnect.php');
require_once('loginhelper.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../../CSS/style.css" />
    <link rel="stylesheet" href="../../CSS/cyber.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
  <header>
      <a href="../Home.php"
        ><img src="../../IMG/pngwing.com.png" alt="Home"
      /></a>
  </header>

    <form action="" method="post">
    <div class="login-box">
      <h2>Login</h2>
      <div class="input-field">
        <label for="email">Email:</label>
        <input
          type="email"
          id="email"
          name="email"
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
      <div class="input-field">
        <label for="username">username:</label>
        <input
          type="username"
          id="username"
          name="username"
          placeholder="Enter your username"
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