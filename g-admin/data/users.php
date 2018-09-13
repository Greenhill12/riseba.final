<?php

    require "./templates/db.php";

    function getUsers(){
        $conn = connect_db();

        $sql = "SELECT id, username, name, surname, role, phone, mail FROM g_users";
        $result = mysqli_query($conn, $sql);

        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            $users[] = $row;
        }

        mysqli_close($conn);

        return $users;
    }

    function getUser($userId){
        $conn = connect_db();

        $sql = "SELECT username, name, surname, role, phone, mail, password FROM g_users WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $userId);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);

        mysqli_close($conn);

        return $user;
    }

    function deleteUser($userId){
        $conn = connect_db();

        $sql = "DELETE FROM g_users WHERE id=$userId";

            if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }

        mysqli_close($conn);

        header("Location:index.php");
    }

?>