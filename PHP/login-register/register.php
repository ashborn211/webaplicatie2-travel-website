<?php
require_once('../dbconnect.php');
require ('registerhelper.php');


if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $emailadress = $_POST['emailadress'];
    $password = $_POST['password'];
   
    $sql = "INSERT INTO users (username, emailadress, password)
            VALUES (:username, :emailadress, :password)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":username", $_POST['username']);     
    $stmt->bindParam(":emailadress", $_POST['emailadress']);     
    $stmt->bindParam(":password", $_POST['password']);     
    $stmt->execute();
    header("location: login.php");
}
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
    <main>

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
      <button type="submit" onClick='return confirmSubmit()'>register</button>
      </form>
        
    </main>
  </body>
</html>