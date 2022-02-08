<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_classe_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// $sql = "CREATE DATABASE IF NOT EXISTS 'e_classe_db' ";
// $query = mysqli_query($conn, $sql);
// if ($query) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }
// $sql = "CREATE TABLE IF NOT EXISTS student (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     image varchar(50),
//     fullName VARCHAR(30) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     phone VARCHAR(20) NOT NULL,
//     enrollnumber VARCHAR(50),
//     dateofadmission DATE
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table student created successfully";
//     } else {
//       echo "Error creating table: " . mysqli_error($conn);
//     }  
// mysqli_close($conn);
// $sql = "CREATE TABLE IF NOT EXISTS 'paymentdetails' (
//      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//        fullName VARCHAR(30) NOT NULL,
//        paymentschedule VARCHAR(50) NOT NULL,
//        billnumber VARCHAR(20) NOT NULL,
//        amountpaid VARCHAR(50),
//        balanceamount VARCHAR(50),
//        dateofadmission DATE
//        )";
      
//       if ($conn->query($sql) === TRUE) {
//         echo "Table student created successfully";
//       } else {
//         echo "Error creating table: " . mysqli_error($conn);
//       }  
//   mysqli_close($conn);
// $sql = "CREATE TABLE IF NOT EXISTS 'courses' (
//         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         title VARCHAR(30) NOT NULL,
//         description  VARCHAR(50) NOT NULL,
//          price VARCHAR(20) NOT NULL,
//          )";
        
//         if ($conn -> query($sql) === TRUE) {
//           echo "Table courses created successfully";
//          } else {
//            echo "Error creating table: " . mysqli_error($conn);
//          }  
//      mysqli_close($conn);
// ?>