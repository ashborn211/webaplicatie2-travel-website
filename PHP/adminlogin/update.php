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

