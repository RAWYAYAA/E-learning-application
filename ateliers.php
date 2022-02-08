<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dataname="e_classe_db";

$conn = mysqli_connect('localhost', 'root', '',  );
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";
//  $sql = "CREATE DATABASE e_classe_db";
$sql = "CREATE TABLE student (
    image VARCHAR(50),
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone INT(10) ,
    enrollphone INT(10) ,
    dateofadmission DATE 
    )";

