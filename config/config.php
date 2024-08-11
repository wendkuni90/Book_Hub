<?php

    try{
        $SERVER = "localhost";
        $DBNAME = "book_hub";
        $LOGIN = "root";
        $PASS = "";

        $conn = new PDO("mysql:host=$SERVER;dbname=$DBNAME",$LOGIN,$PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connexion avec la base de données établie<br>";

    }catch(PDOException $e){

        echo "<strong>Connetion failed:</strong> ".$e->getMessage();

    }


?>