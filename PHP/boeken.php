<?php
require_once('dbconnect.php');

$sql = "SELECT id, name, prijs, date, path FROM destinations ORDER BY id ASC";
$stmt = $connect->prepare($sql);
$stmt -> FetchAll(PDO::FETCH_ASSOC);
$stmt->execute();
$result = $stmt ->FetchAll(PDO::FETCH_ASSOC);
if (isset($_POST["submit"])) {
  $username = $_POST['users_id'];
  $datum = $_POST['startdatum'];
  $datum = $_POST['einddatum'];

  $sql = "SELECT * FROM boeken WHERE startdatum >= :startdatum AND startdatum <= :startdatum
    OR :einddatum >= einddatum AND :startdatum <= einddatum";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':startdatum', $_POST['startdatum']);
    $stmt->bindParam(':einddatum', $_POST['einddatum']);
    $stmt->bindParam(':users_id', $_POST['users_id']);
    $stmt->execute();
    $data = $stmt->fetchAll();
    var_dump($data);
    if ($data == null) {


  $datum = $_POST['startdatum'];
  $datum = $_POST['einddatum'];
  $tijd = $_POST['tijd'];
  $destination_id = $_POST['destination_id'];
  $users_id = $_POST['users_id'];
  $users_id = $_POST['persons'];

  $sql = "INSERT INTO boeken (startdatum, tijd, einddatum, destination_id, users_id, persons)
          VALUES (:startdatum, :tijd, :einddatum, :destination_id, :users_id, :persons)";

  $stmt = $connect->prepare($sql);  
  $stmt->bindParam(":startdatum", $_POST['startdatum']);  
  $stmt->bindParam(":destination_id", $_POST['destination_id']);   
  $stmt->bindParam(":users_id", $_POST['users_id']);   
  $stmt->bindParam(":persons", $_POST['persons']);    
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
      <input type="date" name="startdatum" id="datum" placeholder="startdatum">
      <input type="date" name="einddatum" id="datum" placeholder="einddatum">
      <input type="destination" name="destination_id" id="datum" placeholder="destination_id" value="<?php echo $_GET['destination_id'];?>">
      <input type="users" name="users_id" id="datum" placeholder="users_id" value="<?php echo $_SESSION['users_id'];?>">
      <input type="persons" name="persons" id="datum" placeholder="persons">
      <input type="time" name="tijd" id="tijd" placeholder="tijd">

      <input type="submit" value="submit" name="submit" >
    </form>

  </main>
</body>

</html>