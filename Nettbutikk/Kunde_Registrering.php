<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Shop for Stuff</title>
</head>
<body>
    <div id="header-pre"></div>

    <div class="img">
        <img src="quotesaboutlivingabeautifullife.jpg" alt="img">
    </div>

    <div class="main">
    <?php

      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "shopforstuffdb";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

          $fornavn= $_POST["fornavn"];
          $etternavn= $_POST["etternavn"];
          $telefonNummer= $_POST["telefonNummer"];
          $epost= $_POST["epost"];
          $adresse= $_POST["adresse"];
          $passord= $_POST["passord"];

      $sql = "INSERT INTO kunde (fornavn, etternavn, telefonNummer, epost, adresse, passord) 
      VALUES ('$fornavn', '$etternavn', '$telefonNummer', '$epost', '$adresse', '$passord')";

      echo $fornavn;

      if ($conn->query($sql) === TRUE) {
          echo ", din bruker er lagt til!";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      $conn->close();

    ?>
    </div>

    <div class="footer">
        Shop for Stuff AS © 2021
    </div>

    <!-- Script import -->
    <script crossorigin="anonymous" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JQuery -->
    <script>$("#header-pre").load("/sections/header.html");</script>
</body>
</html>