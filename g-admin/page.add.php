<?php
$pTitle = " < Add Page";
?>

<?php require "templates/header.php"; ?>

<?php require "templates/navbar.php"; ?>

<?php
    require "templates/db.php";

    if(isset($_POST["update"])){
        $title = $_POST["title2"];
        $content = $_POST["textarea"];
        $author = $_SESSION["username"];
        $date = date('Y-m-d H:i:s');
        $location = $_POST["postLocation"];
        
        $conn = connect_db();
        $sql = "INSERT INTO g_posts(post_title, post_content, post_author, post_date, post_location) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $title, $content, $author, $date, $location);
        mysqli_stmt_execute($stmt);

        mysqli_close($conn);

        echo "<script>alert('Page is added');</script>";
    }
?>

<?php
    $heading = "Add page";
    $buttonName = "Add";
    $inputValue = "";
    $textareaValue = "";

    require "templates/page.editor.php"; 
?>

<?php require "templates/footer.php"; ?>