<?php 
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es 36 php</title>
</head>
<body>
    <form action="script.php" method="get">
        <input type="text" name="titolo" placeholder="Titolo"> </br>
        <input type="text" name="nazionalita" placeholder="Nazionalità"> </br>
        <input type="number" name="anno" placeholder="Anno di produzione"></br>
        <input type="text" name="regista" placeholder="Regista"></br>
        <input type="text" name="genere" placeholder="Genere"></br>
        <input type="submit" value="INSERISCI">
    </form>
        
</body>
</html>