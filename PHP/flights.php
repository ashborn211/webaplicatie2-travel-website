<?php
require_once('dbconnect.php');


$sql = "SELECT id, name, prijs, date, path FROM destinations ORDER BY id ASC";
$stmt = $connect->prepare($sql);
$stmt -> FetchAll(PDO::FETCH_ASSOC);
$stmt->execute();
$result = $stmt ->FetchAll(PDO::FETCH_ASSOC);
        
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/cyber.css" />

    <title>flights</title>
  </head>
  <body>
    <header>
      <a href="home.php"><img src="../IMG/pngwing.com.png" alt="Home"/></a>

      <nav class="top-bar">
      <nav class="top-bar">
        <div>
          <a href="Flights.php"><button>All flights</button></a>
        </div>
        <div>
          <a href="Schedule.php"><button>Schedule</button></a>
        </div>
        <div>
          <a href="About-US.php"><button>About US</button></a>
        </div>
      </nav>
      </nav>
      <h1 class="quo">Ready To Fly?</h1>
      <button class="login-page"><a href="login-register/login.php">Login</button></a>
    </header>
    <main>

    <table>
        <?php
        
             foreach($result as $data) {
               
               ?>
                <tr>
               <td><?php echo $data['id']; ?> </td>
               <td><?php echo $data['name']; ?> </td>
               <td><?php echo $data['prijs']; ?> </td>
               <td><?php echo $data['date']; ?> </td>
                </tr>
                <?php
              }
              ?>
            </table>




    
    </main>
  </body>
</html>
