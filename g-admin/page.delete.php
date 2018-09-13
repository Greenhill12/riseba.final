<?php
$pTitle = "";
?>

<?php require "templates/header.php"; ?>

<?php

$pageId = $_GET["page"];

require "data/pages.php";

deletePage($pageId);

header("Location: /PROJECT/g-admin/pages.all.php");

?>