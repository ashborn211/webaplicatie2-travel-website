<?php
/*hier word er gekeken of er een connectie is met de database en dat je de juiste inloggegevens gebruikt hebt voor admin rechten*/
   include_once('../dbconnect.php');
   include_once('../login-register/loginhelper.php');
   if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true){
    
   }
if(isset($_POST["submit"])){
    $countryname = $_POST['countryname'];
   
    $sql = "INSERT INTO country (name)
            VALUES (:countryname)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":countryname", $_POST['countryname']);      
    $stmt->execute();
    header("location: create.php");

    $placename = $_POST['placename'];
    $countryid = $_POST['countryid'];
   
    $sql = "INSERT INTO places (name, countryid)
            VALUES (:placename, :countryid,)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":countryid", $_POST['countryid']);     
    $stmt->bindParam(":name", $_POST['placename']);     
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
            <input type="countryname" name="countryname" id="" placeholder="countryname">
            <input type="placename" name="placename" id=""placeholder="placename" >
            <input type="countryid" name="countryid" id=""placeholder="countryid">
            <input type="submit" value="login" onClick='return confirmSubmit()'>
        </form>

    </main>
  </body>
</html>

