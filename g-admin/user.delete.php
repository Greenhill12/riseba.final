<?php
$pTitle = "";
?>

<?php require "templates/header.php"; ?>

<?php

$userId = $_GET["user"];

require "data/users.php";

deleteUser($userId);

header("Location: /PROJECT/g-admin/users.all.php");

?>