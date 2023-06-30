<?php
require_once('dbconnect.php');
$sql = "SELECT id, name, prijs, date, path FROM destinations ORDER BY id ASC";
$stmt = $connect->prepare($sql);
$stmt -> FetchAll(PDO::FETCH_ASSOC);
$stmt->execute();
$result = $stmt ->FetchAll(PDO::FETCH_ASSOC);
if (isset($_POST["submit"])) {
  $username = $_POST['username'];
  $datum = $_POST['startdatum'];
  $datum = $_POST['einddatum'];

  $sql = "SELECT * FROM boeken WHERE startdatum >= :startdatum AND startdatum <= :startdatum
    OR :einddatum >= einddatum AND :startdatum <= einddatum";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':startdatum', $_POST['startdatum']);
    $stmt->bindParam(':einddatum', $_POST['einddatum']);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->execute();
    $data = $stmt->fetchAll();
    var_dump($data);
    if ($data == null) {

  $username = $_POST['username'];
  $countryname = $_POST['countryname'];
  $placename = $_POST['placename'];
  $price = $_POST['price'];
  $datum = $_POST['startdatum'];
  $datum = $_POST['einddatum'];
  $tijd = $_POST['tijd'];

  $sql = "INSERT INTO boeken (username, countryname, placename, price, startdatum, tijd, einddatum)
          VALUES (:username, :countryname, :placename, :price, :startdatum, :tijd, :einddatum)";

  $stmt = $connect->prepare($sql);
  $stmt->bindParam(":username", $_POST['username']);      
  $stmt->bindParam(":countryname", $_POST['countryname']);      
  $stmt->bindParam(":placename", $_POST['placename']);      
  $stmt->bindParam(":price", $_POST['price']);      
  $stmt->bindParam(":startdatum", $_POST['startdatum']);   
  $stmt->bindParam(":einddatum", $_POST['einddatum']);         
  $stmt->bindParam(":tijd", $_POST['tijd']);      
  $stmt->execute();
  header("location: boeken.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="stylesheet" href="../CSS/cyber.css">
  <link rel="stylesheet" href="../CSS/form.css">
  <title>boeken</title>
</head>

<body>

    <?php
    include_once('header.php');
    ?>
  <main>

    <form action="" method="post">
      <input type="user" name="username" id="username" placeholder="username">
      <input type="countryname" name="countryname" id="countryname" placeholder="countryname">
      <input type="place" name="placename" id="place" placeholder="place">
      <input type="price" name="price" id="price" placeholder="price">
      <input type="date" name="startdatum" id="datum" placeholder="startdatum">
      <input type="date" name="einddatum" id="datum" placeholder="einddatum">
      <input type="time" name="tijd" id="tijd" placeholder="tijd">

      <input type="submit" value="submit" name="submit" >
    </form>

  </main>
</body>

</html>