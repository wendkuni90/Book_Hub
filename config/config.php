<?php

    try{
        $SERVER = "localhost";
        $DBNAME = "book_hub";
        $LOGIN = "root";
        $PASS = "";

        $conn = new PDO("mysql:host=$SERVER;dbname=$DBNAME",$LOGIN,$PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){

        echo "<strong>Something went wrong: </strong> ".$e->getMessage()."<br>";

    }


?>