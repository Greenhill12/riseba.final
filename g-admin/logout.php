<?php $title = "Logout"; ?>

<?php 
    require "templates/header.php";

    session_destroy();

    header("Location:/PROJECT/g-admin/g-login/index.php");
?>
