<!DOCTYPE html>
<html>
    <head>
        <title>partiel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            $conn = new mysqli ('localhost', 'root', 'root');
            
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';
        ?>
    </body>
</html>