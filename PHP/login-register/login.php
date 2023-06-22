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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../CSS/cyber.css" />

    <title>Login</title>
  </head>
  <body>
    <form action="" method="post">
    <div class="login-box">
      <h2>Login</h2>
      <div class="input-field">
        <label for="emailadress">emailadress:</label>
        <input
          type="emailadress"
          id="emailadress"
          name="emailadress"
          placeholder="Enter your emailadress"
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
      <button type="submit" >Login</button>
      <a href="loginadmin.php">admin login</a>
      <a href="register.php">register</a>
      </form>
    </div>
  </body>
</html>