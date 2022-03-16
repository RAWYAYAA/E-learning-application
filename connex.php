<?php
    $servername="localhost";
    $usename="root";
    $password="";
    $dbname="testing";
    $conn=mysqli_connect($servername,$usename,$password,$dbname);
    if($conn->connect_error){
        die("no connect" );
    }
?>