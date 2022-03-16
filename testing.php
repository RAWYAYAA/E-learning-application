<?php 
require "connex.php";
 if(isset($_POST['add'])){ 
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $req= "INSERT INTO test (EMAIL,PASSWORD) values ('$email','$pass')";
    if (mysqli_query($conn, $req)) {
    header('location: affi.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" >
<div class="row g-3 align-items-center">
  <div class="col-auto">
      <label for="">Email</label>
      <input type="email" name="email">
    <label for="">password</label>
    <input type="password" name="pass">
    <button type="submit" name="add">Add</button>
  </div>
</div>
</form>
</body>
</html>