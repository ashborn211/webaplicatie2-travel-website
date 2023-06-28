<?php
require_once('dbconnect.php');

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/cyber.css">
    <title>flights</title>
  </head>
  <body>
  <?php
    include_once('header.php');
    ?>

    </header>
    <main>
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
</body>
</html>
    </main>
  </body>
</html>
