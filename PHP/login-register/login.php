<?php
require_once('../dbconnect.php');
require_once('loginhelper.php');
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../CSS/style.css" />
    <title>Home</title>
  </head>
  <body>
    <header>
      <a href="../home.php"><img src="../../IMG/pngwing.com.png" alt="Home"/></a>
      <nav class="top-bar">
        <div><a href="flights.php">All flights</div></a>
        <div><a href="boeken.php">boeken</div></a>
        <div>Schedule</div>
        <div>Transport and directions</div>
      </nav>
    </header>
    <main>

        <form action="" method="post" class = "LoginRegister">
            <input type="username" name="username" placeholder="username">
            <input type="emailadress" name="emailadress" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="login">
        </form>

    </main>
  </body>
</html>