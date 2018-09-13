<?php
    session_start();
?>

<?php
    define("BASE_URL", "/PROJECT/g-admin/");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>greeny<?=$pTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="<?php echo BASE_URL;?>pictures/favicon.ico" type="image/x-icon" /> 
    <link href="<?php echo BASE_URL;?>css/glyphicons.css" rel="stylesheet">
    <link href="<?php echo BASE_URL;?>css/glyphicons-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo BASE_URL;?>css/main.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL;?>text-editor/jquery-te-1.4.0.css">
    <script type="text/javascript" src="<?php echo BASE_URL;?>text-editor/jquery-te-1.4.0.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="<?php echo BASE_URL;?>js/main.js"></script>
</head>
<body>