<?php require "../admin/includes/session.php" ?>
<?php require "../../../config/config.php" ?>
<?php 
    define("log", "http://localhost/Book_Hub/scripts/manager/admin/");
    if(!isset($_SESSION['name'])){
        header("location: ".log."");
    }

?>

Edition