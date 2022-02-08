<?php
    require_once "e-classe-db.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM courses WHERE id ='$id'";
        if (mysqli_query($conn, $sql)) {
            header('location: courses.php');
        } 
        
        
    }

    