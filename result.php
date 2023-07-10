<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="../../assets/css/style.css">

<title>PHP Intro | Forms in PHP</title>
</head>

<header>
<div class="container">
    <div class="row">
        <div class="colum1">
        <div class="colum2">
        <div class="colum3">
</div>


</header>



<body>


    <nav>
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="result.php">Result</a>
    </nav>

    <form action="result.php" method="post">

    <div class="row mb-4">
            <div class="form-group col">
                <label for="vorname">Vorname:</label>

            <?php
                session_start();
                if(isset($_SESSION['vorname'])) {
                    echo '<input type="text" name="vorname" value="' . $_SESSION['vorname'] .'">';
                } else {
                    echo '<input type="text" name="vorname">';
                }
            ?>
            </div>
    </div>

        <div class="row mb-4">
            <div class="form-group col">
                <label for="name">Name:    </label>

                <?php

                if(isset($_SESSION['name'])) {
                    echo '<input type="text" name="name" value="' . $_SESSION['name'] .'">';
                } else {
                    echo '<input type="text" name="name">';
                }
            ?>
        </div>

        <div class = "form-group col">
            <label for = "nachname">Meine Nummer: </label>

            <?php
                print_r ($_SESSION['nummer']);
                if(isset($_SESSION['nummer'])) {
                    echo '<input type = "number" name = "nummer" value = "'.$_SESSION['nummer'].'">';
                } else {
                    echo '<input type = "number" name = "nummer">';
                }
            ?>
        </div>
            


        <input type = "submit" class = "btn-primary mb-2" value = "senden">
    </div>
    </form>

</body>
</html>