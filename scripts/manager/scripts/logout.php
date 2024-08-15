<?php require "../../../config/link.php" ?>
<?php 

    session_start();
    session_unset();
    session_destroy();

    header("location: ".APPURL."");

?>