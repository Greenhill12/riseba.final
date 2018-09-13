<?php

    function connect_db(){
        $conn = mysqli_connect("localhost", "admin", "opis", "greeny");
        if(!$conn){
            die(mysqli_connect_error());
        }
        mysqli_query($conn, "SET NAMES 'utf8'");

        return $conn;
    }
    
?>