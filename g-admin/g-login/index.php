<?php $pTitle=" dashboard login"; ?>

<?php require "../templates/header.php"; ?>

<?php
    require "../templates/db.php";

    if(isset($_POST["login"])){
        $mail = $_POST["mail"];
        $password = $_POST["password"];
        //$password = hash("sha512", $password);
        
        $conn = connect_db();
        $sql = "SELECT username, mail FROM g_users WHERE mail = '".$mail."' AND password = '".$password."'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION["username"] = $row["username"];
            header("Location: /PROJECT/g-admin/index.php");
        } else {
            echo "<script>alert('Login and/or password is incorrect!');</script>";
        }

        mysqli_close($conn);
    }
?>

<div class="container">
    <img class="main-logo" src="../pictures/green.png" alt="Greeny"/>
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Login</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Login" name="mail">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <button type="submit" class="btn btn-default login" name="login">Log in</button>
            </div>
        </div>
    </form>
</div>

<?php require "../templates/footer.php"; ?>

