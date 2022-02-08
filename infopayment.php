<?php
require_once "e-classe-db.php";
$id=$_GET['id'];
$req="SELECT * from paymentdetails WHERE id = $id ";
$res = mysqli_query($conn , $req);
$row = mysqli_fetch_assoc($res);
    $fullName = $row['fullName']; 
    $paymentschedule = $row['paymentschedule']; 
    $billnumber = $row['billnumber']; 
    $amountpaid = $row['amountpaid']; 
    $BalanceAmount = $row['balanceamount']; 
    $date = $row['dateofadmission']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="mystyle.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form class="d-flex flex-column mt-5" method="POST">
    <label class="form-label">Name</label>
    <input type="text"  class="form-control " name="image" value="<?php echo $fullName ?>" disabled>
    <label class="form-label">Payment schedule</label>
    <input type="text"  class="form-control " name="name" value="<?php echo $paymentschedule ?>" disabled>
    <label class="form-label">Bill Number</label>
    <input type="text"  class="form-control " name="email" value="<?php echo $billnumber ?>" disabled>
    <label class="form-label">Amount Paid</label>
    <input type="tel"  class="form-control " name="phone" value="<?php echo $amountpaid ?>" disabled>
    <label class="form-label">Balance Amount</label>
    <input type="tel"  class="form-control "  name="enroll" value="<?php echo $BalanceAmount ?>" disabled>
    <label class="form-label">Date</label>
    <input type="date"  class="form-control " name="datedadmission" value="<?php echo $date ?>" disabled> 
    <button class="btn btn-info" onclick="history.go(-1);">Back </button>       
    </form>
    </div>
</body>
</html>