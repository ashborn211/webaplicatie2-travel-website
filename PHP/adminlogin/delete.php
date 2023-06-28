<?php
/*hier word er gekeken of er een connectie is met de database en dat je de juiste inloggegevens gebruikt hebt voor admin rechten*/
include_once('../dbconnect.php');
include_once('../login-register/loginhelper.php');
if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true){
 
}






if(isset($_POST["submit"])){
    $id = $_POST['id'];

      $sql = "DELETE FROM boeken WHERE id = :id";
      $stmt = $connect->prepare($sql);
      $stmt->bindParam(":id", $_POST['id']);
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
    <a href="../home.php"><img src="../../IMG/pngwing.com.png" alt="Home"/></a>

    <nav class="top-bar">
        <div><a href="create.php">create</div></a>
        <div><a href="update.php">update</div></a>
        <div><a href="delete.php">delete</div></a>
      </nav>
    </header>
    <main>

        <form action="" method="post">
            <input type="id" name="id" placeholder="id">
            <input type="submit" value="submit" name="submit" onClick='return confirmSubmit()'>
        </form>

<table>
<?php
$sql = "SELECT username, placename, price, datum, tijd, countryname, id, aprove FROM boeken ORDER BY id ASC";
$stmt = $connect->prepare($sql);
$stmt -> FetchAll(PDO::FETCH_ASSOC);
$stmt->execute();
$result = $stmt ->FetchAll(PDO::FETCH_ASSOC);

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

