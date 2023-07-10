<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="style.css">

  <title>PHP Intro | Forms in PHP</title>
</head>

<header>
    <div class="container-fluid">
        <div class="topnav">
            <a class="active" href="home">Home</a>
            <a href="about">About</a>
            <a href="result">Result</a>
        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
            <div class="col-sm-6">
                <img src="fire-flame-flame-132b3b36f994e845693cf2cb49f3d7ce.png" alt="fire-flame-fist" width="200px" height="300px">
                <h1>Cyrill's<br>Car-Land</h1>
        </div>
    </div>





</header>



<body>
    <nav>
        <a href="index.php">Index</a>
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="result.php">Result</a>
    </nav>

    <?php
    session_start();
        echo "<h1>Hallo " . $_SESSION['vorname'] . ' '. $_SESSION['name'] ."</h1>";

    ?>



</body>
</html>