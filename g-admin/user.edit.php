<?php 
$pTitle=" < Edit user";
 ?>

<?php require "templates/header.php"; ?>

<?php require "templates/navbar.php"; ?>

<?php
   $userId = $_GET["user"];

   require "./data/users.php";
   $username = getUser($userId)["username"];
   $name = getUser($userId)["name"];
   $surname = getUser($userId)["surname"];
   $role = getUser($userId)["role"];
   $phone = getUser($userId)["phone"];
   $mail = getUser($userId)["mail"];
   $password = getUser($userId)["password"];

   if(isset($_POST["update"])){
        $username = $_POST["user"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $role = $_POST["userRights"];
        $phone = $_POST["phone"];
        $mail = $_POST["mail"];
        $password = $_POST["password1"];
       
        $conn = connect_db();
        $sql = "UPDATE g_users SET username = '$username', name = '$name', surname = '$surname', role = '$role', phone = '$phone', mail = '$mail', password = '$password' WHERE id=(?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $userId);
        mysqli_stmt_execute($stmt);

        mysqli_close($conn);

        echo "<script>alert('User is updated');</script>";
   }
?>

<?php
    $heading="Edit user";
    $buttonName="Update";
    $userUsername = $username;
    $userName = $name;
    $userSurname = $surname;
    $userPhone = $phone;
    $userMail = $mail;
    
    require "templates/user.editor.php";

?>


<?php require "templates/footer.php"; ?>