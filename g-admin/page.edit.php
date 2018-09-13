<?php
$pTitle = " < Edit Page";
?>

<?php require "templates/header.php"; ?>

<?php require "templates/navbar.php"; ?>

<?php
    $pageId = $_GET["page"];

    require "./data/pages.php";
    $title = getPost($pageId)["post_title"];
    $content = getPost($pageId)["post_content"];
    $date = getPost($pageId)["post_date"];
    $location = getPost($pageId)["post_location"];
    $order = getPost($pageId)["post_order"];
    
    if(isset($_POST["update"])){
        $title = $_POST["title2"];
        $content = $_POST["textarea"];
        $author = $_SESSION["username"];
        $location = $_POST["postLocation"];
        $date = date('Y-m-d H:i:s');
        
        $conn = connect_db();
        $sql = "UPDATE g_posts SET post_title = '$title', post_content = '$content', post_author = '$author', post_date = '$date', post_location = '$location' WHERE id=(?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $pageId);
        mysqli_stmt_execute($stmt);

        mysqli_close($conn);

        echo "<script>alert('Page is updated');</script>";
    }
?>

<?php
    $heading = "Edit page";
    $buttonName = "Update";
    $inputValue = $title;
    $textareaValue = $content;

    require "templates/page.editor.php"; 
?>

<?php require "templates/footer.php"; ?>