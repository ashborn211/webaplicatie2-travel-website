<?php
require_once('dbconnect.php');

if (isset($_POST["submit"])) {



  $username = $_POST['username'];
  $countryname = $_POST['countryname'];
  $place = $_POST['place'];
  $price = $_POST['price'];
  $datum = $_POST['datum'];
  $tijd = $_POST['tijd'];

  $sql = "INSERT  INTO boeken (username, countryname, place, price, datum, tijd)
          VALUES (:username, :countryname, :place, :price, :datum, :tijd)";

  $stmt = $connect->prepare($sql);
  $stmt->bindParam(":username", $_POST['username']);      
  $stmt->bindParam(":countryname", $_POST['countryname']);      
  $stmt->bindParam(":place", $_POST['place']);      
  $stmt->bindParam(":price", $_POST['price']);      
  $stmt->bindParam(":datum", $_POST['datum']);      
  $stmt->bindParam(":tijd", $_POST['tijd']);      
  $stmt->execute();
  header("location: boeken.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../CSS/style.css" />
  <title>boeken</title>
</head>

<body>
  <header>
    <a href="home.php"><img src="../IMG/pngwing.com.png" alt="Home" /></a>

    <nav class="top-bar">
      <div><a href="flights.php">All flights</div></a>
      <div><a href="boeken.php">boeken</div></a>
      <div>Schedule</div>
      <div>Transport and directions</div>
    </nav>
    <h1 class="quo">Ready To Fly?</h1>
  </header>
  <main>




    <form action="" method="post">
      <input type="username" name="username" id="username" placeholder="username">
      <input type="countryname" name="countryname" id="countryname" placeholder="countryname">
      <input type="place" name="place" id="place" placeholder="place">
      <input type="price" name="price" id="price" placeholder="price">
      <input type="datum" name="datum" id="datum" placeholder="datum">
      <input type="tijd" name="tijd" id="tijd" placeholder="tijd">

      <input type="submit" value="submit" >
    </form>

  </main>
</body>

</html>