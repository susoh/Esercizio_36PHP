<?php 
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $titolo = $_GET["titolo"];
        $nazionalita = $_GET["nazionalita"];
        $anno = $_GET["anno"];
        $regista = $_GET["regista"];
        $genere = $_GET["genere"];
        $query = "INSERT INTO film VALUES (\"$titolo\", \"$anno\", \"$nazionalita\", \"$regista\", \"$genere\")";
        query($query);
    ?>
</body>
</html>