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
        $titolo = $_POST["titolo"];
        $nazionalita = $_POST["nazionalita"];
        $anno = $_POST["anno"];
        $regista = $_POST["regista"];
        $genere = $_POST["genere"];
        $sql = "INSERT INTO film (Titolo, Annoproduzione, nazionalita, regista, genere) VALUES ('$titolo', $anno, '$nazionalita', '$regista', '$genere');";
        if($conn->query($sql)) {
            echo "<p>Inserimento andato a buon fine</p>";
        } else {
            echo "<p style='color: red;'>Inserimento non andato a buon fine</p>";
        }
    ?>
    <a href="Es_36.html">Torna a inserimento</a>
</body>
</html>