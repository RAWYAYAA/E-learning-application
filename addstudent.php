<?php
    require_once "e-classe-db.php";
    if(isset($_POST['save'])){
    $image = $_POST['image'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enroll = $_POST['enroll'];
    $datedadmission = $_POST['datedadmission'];
    var_dump(isset($_POST['save']));
    $sql = "INSERT INTO `student` (image, fullName, email, phone, enrollnumber, dateofadmission )
    VALUES('$image', '$name', '$email', '$phone', '$enroll', '$datedadmission')";
        if(!mysqli_query($conn,$sql)){
            die('impossible d’ajouter cet enregistrement : ');
        }
        else{
            echo "L’enregistrement est ajouté ";
            header('location: student.php');
        }
    }
    ?> 