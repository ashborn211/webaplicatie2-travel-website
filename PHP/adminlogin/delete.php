<?php
include_once('../dbconnect.php');
if(isset($_POST["submit"])){
    $id = $_POST['id'];

$sql = "DELETE FROM country WHERE ID= :id";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":id", $_POST['id']);
$stmt->execute();

$sql = "DELETE FROM places WHERE ID= :countryid";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":countryid", $_POST['countryid']);
$stmt->execute();
    header("location: delete.php");
}
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../CSS/style.css" />
    <script src="../../JS/confirm.js"></script>
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
            <input type="id" name="id" id="" >
            <input type="countryid" name="countryid" id="" >
            <input type="submit" value="login" onClick='return confirmSubmit()'>
        </form>

    </main>
  </body>
</html>
