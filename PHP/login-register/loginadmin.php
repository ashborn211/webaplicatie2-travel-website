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
    <a href="home.php"><img src="../IMG/pngwing.com.png" alt="Home" /></a>

    <nav class="top-bar">
        <div>
          <a href="Flights.php"><button>All flights</button></a>
        </div>
        <div>
          <a href="Schedule.php"><button>Schedule</button></a>
        </div>
        <div>
          <a href="About-US.php"><button>About US</button></a>
        </div>
        <div>
          <a href="boeken.php"><button>boeken</button></a>
        </div>
        <div>
          <a href="contact.php"><button>contact us</button></a>
        </div>
      </nav>
    <h1 class="quo">Ready To Fly?</h1>
  </header>
    <form action="" method="post">
    <div class="login-box">
      <h2>admin Login</h2>
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
      </form>
    </div>
  </body>
</html>