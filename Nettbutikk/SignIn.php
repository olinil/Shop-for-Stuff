<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="icon" href="Bilder/sfs.png">
    <title>Shop for Stuff</title>
</head>
<body>

    <div id="header-pre"></div>

    <div class="img">
        <img src="quotesaboutlivingabeautifullife.jpg" alt="img">
    </div>

    <div class="main">
        <form class="form" action="Kunde_Registrering.php" method="post">
            Fornavn: <input type="text" name="fornavn"><br>
            Etternavn: <input type="text" name="etternavn"><br>
            Tlf: <input type="text" name="telefonNummer"><br>
            E-post: <input type="text" name="epost"><br>
            Adresse: <input type="text" name="adresse"><br>
            Passord: <input type="text" name="passord"><br>
            <input type="submit">
        </form>
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