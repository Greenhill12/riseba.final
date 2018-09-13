<?php

    require "./templates/db.php";

    function getPages(){
        $conn = connect_db();

        $sql = "SELECT id, post_title, post_content, post_author, post_date, post_location, post_order FROM g_posts ORDER BY post_order";
        $result = mysqli_query($conn, $sql);

        $pages = [];
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $pages[] = $row;
            }
        } else {
            echo "Nav izveidots neviens raksts";
        }

        mysqli_close($conn);

        return $pages;
    }

    function getPost($pageId){
        $conn = connect_db();

        $sql = "SELECT post_title, post_content, post_author, post_date, post_location, post_order FROM g_posts WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $pageId);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $post = mysqli_fetch_assoc($result);

        mysqli_close($conn);

        return $post;
    }

    function deletePage($pageId){
        $conn = connect_db();

        $sql = "DELETE FROM g_posts WHERE id=$pageId";

            if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }

        mysqli_close($conn);

        header("Location:index.php");
    }

?>