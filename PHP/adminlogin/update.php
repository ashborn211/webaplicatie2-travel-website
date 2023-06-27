<?php
/*hier word er gekeken of er een connectie is met de database en dat je de juiste inloggegevens gebruikt hebt voor admin rechten*/
include_once('../dbconnect.php');
include_once('../login-register/loginhelper.php');
if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true){
 
}

/*dit zorgt ervoor dat als je op submit drukt dat de database word bewerkt */
     if(isset($_POST["submit"])){
        $naam = $_POST['countryname'];
        $prijs = $_POST['prijs'];
        $countryId = $_POST['countryid'];

        

      $sql = "UPDATE country SET
          countryname = :countryname,
          WHERE ID = :id";
      $stmt = $connect->prepare($sql);   
      $stmt->bindParam(":countryid", $_POST['countryid']);   
      $stmt->bindParam(":naam", $_POST['countryname']);     
      $stmt->bindParam(":prijs", $_POST['prijs']);     
      $stmt->execute();
      header("location: update.php");
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
            <input type="id" name="id" id="" placeholder="id">
            <input type="countryname" name="countryname" id="" placeholder="countryname">
            <input type="placename" name="placename" id="" placeholder="placename">
            <input type="countryid" name="countryid" id=""placeholder="countryid">
            <input type="submit" value="login" onClick='return confirmSubmit()'>
        </form>

    </main>
  </body>
</html>

