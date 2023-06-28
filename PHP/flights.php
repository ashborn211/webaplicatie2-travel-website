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
    <title>flights</title>
  </head>
  <body>
<?php include_once('header.php');?>
    <main>

    <div class="center-table">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Price</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($result as $data) {
        ?>
        <tr>
          <td><?php echo $data['id']; ?></td>
          <td><?php echo $data['name']; ?></td>
          <td><?php echo $data['prijs']; ?></td>
          <td><?php echo $data['date']; ?></td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  </div>
</main>   
    </main>
  </body>
</html>