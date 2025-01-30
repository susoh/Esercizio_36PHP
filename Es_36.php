<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es 36 php</title>
</head>
<body>
    <?php
        $servernameDB = "localhost";
        $usernameDB = "root";
        $passwordDB = "";    
        $dbnameDB = "cinema";

        mysqli_report(MYSQLI_REPORT_OFF);
        $conn = new mysqli($servernameDB, $usernameDB, $passwordDB, $dbnameDB);	
        if ($conn->connect_error) {
            header("Location: errore.html"); 
        }
    ?>
        
</body>
</html>