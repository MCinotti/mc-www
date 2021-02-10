<?php
try {
  $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
  foreach ($dbh->query('SELECT * from FOO') as $row) {
    print_r($row);
  }
  $dbh = null;
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Needs -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/darkly/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="manifest" href="manifest.json">
  <!-- MagicPuddle CSS -->
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Page Name -->
  <title>Martin Cinotti</title>
</head>

<body>
  <h1>PHP connect to MySQL projects_DB</h1>

  <?php
  //Step2
  $query = "SELECT * FROM projects";
  mysqli_query($db, $query) or die('Error querying database.');

  //Step3
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_array($result);

  while ($row = mysqli_fetch_array($result)) {
    echo $row['name'] . ' ' . $row['company'] . ': ' . $row['email'] . ' ' . $row['contact'] . '<br />';
  }
  //Step 4
  mysqli_close($db);
  ?>

</body>

</html>
