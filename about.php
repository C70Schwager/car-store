<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="../../assets/css/style.css">

  <title>PHP Intro | Forms in PHP</title>
</head>



<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">Home</a>
        <a href="index.php">Home</a>
    </nav>

    <?php
    session_start();
        echo "<h1>Hallo " . $_SESSION['vorname'] . ' '. $_SESSION['name'] ."</h1>";

    ?>



</body>
</html>