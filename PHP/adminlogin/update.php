<?php
/*hier word er gekeken of er een connectie is met de database en dat je de juiste inloggegevens gebruikt hebt voor admin rechten*/
include_once('../dbconnect.php');
include_once('../login-register/loginhelper.php');
if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true){
 
}

/*dit zorgt ervoor dat als je op submit drukt dat de database word bewerkt */
     if(isset($_POST["submit"])){

        $username = $_POST['username'];
        $countryname = $_POST['countryname'];
        $placename = $_POST['placename'];
        $datum = $_POST['datum'];
        $tijd = $_POST['tijd'];
        $price = $_POST['price'];
        $aprove = $_POST['aprove'];
        $id = $_POST['id'];

      $sql = "UPDATE boeken SET
          username = :username, countryname = :countryname, placename = :placename, datum = :datum, tijd = :tijd, price = :price, aprove = :aprove, id = :id
          WHERE ID = :id";
      $stmt = $connect->prepare($sql);   
      $stmt->bindParam(":username", $_POST['username']);   
      $stmt->bindParam(":countryname", $_POST['countryname']);     
      $stmt->bindParam(":placename", $_POST['placename']);     
      $stmt->bindParam(":datum", $_POST['datum']);     
      $stmt->bindParam(":tijd", $_POST['tijd']);     
      $stmt->bindParam(":id", $_POST['id']);     
      $stmt->bindParam(":price", $_POST['price']);     
      $stmt->bindParam(":aprove", $_POST['aprove']);    
      $stmt->execute();
      // <input type="user" name="username" id="" placeholder="username">
      // <input type="placename" name="placename" id="" placeholder="placename">
      // <input type="prijs" name="price" id=""placeholder="prijs">
      // <input type="date" name="datum" id=""placeholder="date">
      // <input type="time" name="tijd" id=""placeholder="time">
      // <input type="countryname" name="countryname" id=""placeholder="countryname">
      // <input type="id" name="id" id=""placeholder="id">
      // <input type="aprove" name="aprove" id=""placeholder="aprove">
      header("location: update.php");
      }
      // elseif($_POST['change'] == 'destinations') {
      //   $name = $_POST['name'];
      //   $prijs = $_POST['prijs'];
      //   $date = $_POST['date'];
      //   $path = $_POST['path'];
      //   $country = $_POST['country'];

      //   $sql = "UPDATE destinations SET
      //   name = :name, prijs = :prijs, date = :date, path = :path, country = :country
      //   WHERE ID = :id";
      // $stmt = $connect->prepare($sql);   
      // $stmt->bindParam(":name", $_POST['name']);   
      // $stmt->bindParam(":prijs", $_POST['prijs']);     
      // $stmt->bindParam(":date", $_POST['date']);     
      // $stmt->bindParam(":datum", $_POST['datum']);     
      // $stmt->bindParam(":path", $_POST['path']);     
      // $stmt->bindParam(":country", $_POST['country']);     
      // $stmt->execute();
      // header("location: update.php");
      // }

  
  

  
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

 
        <h1>boeken</h1>
      <form action="" method="post">
            <input type="user" name="username" id="" placeholder="username">
            <input type="placename" name="placename" id="" placeholder="placename">
            <input type="prijs" name="price" id=""placeholder="prijs">
            <input type="date" name="datum" id=""placeholder="date">
            <input type="time" name="tijd" id=""placeholder="time">
            <input type="countryname" name="countryname" id=""placeholder="countryname">
            <input type="id" name="id" id=""placeholder="id">
            <input type="aprove" name="aprove" id=""placeholder="aprove">
            <input type="submit" value="submit" name="submit" onClick='return confirmSubmit()'>
        </form>

        <!-- <h1>destinations</h1>
      <form action="" method="post">
            <input type="name" name="name" id="" placeholder="placename">
            <input type="id" name="id" id=""placeholder="id">
            <input type="prijs" name="prijs" id=""placeholder="prijs">
            <input type="date" name="date" id=""placeholder="date">
            <input type="path" name="path" id=""placeholder="path">
            <input type="country" name="country" id=""placeholder="country">
            <input type="change" name="change" id=""placeholder="change">
            <input type="submit" value="login" name="submit" onClick='return confirmSubmit()'>
        </form> -->
    </main>
  </body>
</html>

