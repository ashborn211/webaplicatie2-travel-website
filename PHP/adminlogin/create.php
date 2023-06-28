<?php
/*hier word er gekeken of er een connectie is met de database en dat je de juiste inloggegevens gebruikt hebt voor admin rechten*/
   include_once('../dbconnect.php');
   include_once('../login-register/loginhelper.php');
   if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == false){
    header('../home.php');
   }
if(isset($_POST["submit"])){
  $country = $_POST['country'];
  $path = $_POST['path'];
  $prijs = $_POST['prijs'];
  $date = $_POST['date'];
  $name = $_POST['name'];

  $sql = "INSERT INTO destinations (country, path, prijs, date, name)
          VALUES (:country, :path, :prijs, :date, :name)";

  $stmt = $connect->prepare($sql);
  $stmt->bindParam(":country", $_POST['country']);      
  $stmt->bindParam(":path", $_POST['path']);      
  $stmt->bindParam(":prijs", $_POST['prijs']);      
  $stmt->bindParam(":date", $_POST['date']);      
  $stmt->bindParam(":name", $_POST['name']);      
  $stmt->execute();
    header("location: create.php");

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
    <a href="../home.php"><img src="../../IMG/pngwing.com.png" alt="Home"/></a>

    <nav class="top-bar">
        <div><a href="create.php">create</div></a>
        <div><a href="update.php">update</div></a>
        <div><a href="delete.php">delete</div></a>
      </nav>
    </header>
    <main>

    <form action="" method="post">
      <input type="country" name="country" id="country" placeholder="country">
      <input type="path" name="path" id="path" placeholder="path">
      <input type="name" name="name" id="name" placeholder="name">
      <input type="prijs" name="prijs" id="prijs" placeholder="prijs">
      <input type="date" name="date" id="date" placeholder="date">

      <input type="submit" value="submit" name="submit" >
    </form>
        <?php



$sql = "SELECT username, placename, price, datum, tijd, countryname, id, aprove FROM boeken ORDER BY id ASC";
$stmt = $connect->prepare($sql);
$stmt -> FetchAll(PDO::FETCH_ASSOC);
$stmt->execute();
$result = $stmt ->FetchAll(PDO::FETCH_ASSOC);

?>
<table>
<?php

   foreach($result as $data) {
     
     ?>
      <tr>
     <td><?php echo $data['username']; ?> </td>
     <td><?php echo $data['placename']; ?> </td>
     <td><?php echo $data['price']; ?> </td>
     <td><?php echo $data['datum']; ?> </td>
     <td><?php echo $data['tijd']; ?> </td>
     <td><?php echo $data['countryname']; ?> </td>
     <td><?php echo $data['id']; ?> </td>
     <td><?php echo $data['aprove']; ?> </td>
      </tr>
      <?php
    }
    ?>
  </table>
    </main>
  </body>
</html>

