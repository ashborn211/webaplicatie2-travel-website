<?php
require_once('../dbconnect.php');

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
    header("location: register.php");
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
        <img src="../../IMG/pngwing.com.png" alt="Home"
      /></a>
      <nav class="top-bar">
        <div>All flights</div>
        <div>Schedule</div>
        <div>Transport and directions</div>
      </nav>
    </header>
    <main>

        <form action="" method="post">
        <input type="username" name="email" id="" >
            <input type="emailadress" name="emailadress" id="" >
            <input type="password" name="password" id="">
            <input type="submit" value="login">
        </form>
        
    </main>
  </body>
</html>