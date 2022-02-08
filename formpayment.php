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
    <form class="d-flex flex-column" method="POST" action="addpayment.php">
    <label class="form-label">Name</label>
    <input type="text"  class="form-control " name="name" placeholder="Entrer name">
    <label class="form-label">Payment schedule</label>
    <input type="text"  class="form-control " name="paymentschedule" placeholder="Entrer ps">
    <label class="form-label">Bill Number</label>
    <input type="text"  class="form-control " name="billnumber" placeholder="Enter bn">
    <label class="form-label">Amount Paid</label>
    <input type="tel"  class="form-control " name="amountpaid" placeholder="Enter ap">
    <label class="form-label">Balance Amount</label>
    <input type="tel"  class="form-control "  name="balanceamount" placeholder="Enter ba">
    <label class="form-label">Date</label>
    <input type="date"  class="form-control " name="date" placeholder="Enter date">     
    <input class="btn-info" type="submit" value="add" name="save">     
    </form>
    </div>
</body>
</html>