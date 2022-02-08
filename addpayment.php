<?php
    require_once "e-classe-db.php";
    $name = $_POST['name'];
    $paymentschedule = $_POST['paymentschedule'];
    $billnumber = $_POST['billnumber'];
    $amountpaid = $_POST['amountpaid'];
    $balanceamount = $_POST['balanceamount'];
    $date = $_POST['date'];
    $sql = "INSERT INTO `paymentdetails` (fullName, paymentschedule, billnumber,amountpaid, balanceamount, dateofadmission )
    VALUES('$name', '$paymentschedule', '$billnumber', '$amountpaid', '$balanceamount', '$date')";
    if(!mysqli_query($conn,$sql)){
        die('impossible d’ajouter cet enregistrement : ' . mysqli_error());
    }
    echo "L’enregistrement est ajouté ";

        header('location: paymentdetail.php');
    ?> 