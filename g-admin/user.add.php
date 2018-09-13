<?php 
$pTitle=" < Add user";
 ?>

<?php require "templates/header.php"; ?>

<?php require "templates/navbar.php"; ?>

<?php
    require "templates/db.php";

    if(isset($_POST["update"])){
        $username = $_POST["user"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $mail = $_POST["mail"];
        $phone = $_POST["phone"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];
        $selectOption = $_POST["userRights"];

        if ($password1 == $password2){
            $conn = connect_db();
            $sql = "INSERT INTO g_users(username, name, surname, role, phone, mail, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssssss", $username, $name, $surname, $selectOption, $phone, $mail, $password1);
            mysqli_stmt_execute($stmt);
    
            mysqli_close($conn);
    
            echo "<script>alert('User is added');</script>";
        } else {    
            echo "Oops! Password did not match! Try again.";
        }
    }
?>

<?php
    $heading="Add user";
    $buttonName="Add";
    $userUsername = "";
    $userName = "";
    $userSurname = "";
    $userPhone = "";
    $userMail = "";
    
    require "templates/user.editor.php";

?>


<?php require "templates/footer.php"; ?>
