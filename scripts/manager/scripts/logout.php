<?php require "../../../config/link.php" ?>
<?php require "../admin/includes/session.php" ?>
<?php 
    define("log", "http://localhost/Book_Hub/scripts/manager/admin/");
    if(!isset($_SESSION['name'])){
        header("location: ".log."");
    } else {
        session_start();
        session_unset();
        session_destroy();

        header("location: ".APPURL."");
    }

?>