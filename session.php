<?php 
require 'connex.php';
session_start();
if(isset($_POST['check'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $req="SELECT * FROM test WHERE EMAIL='$email' AND PASSWORD='$pass'";
    $res=mysqli_query($conn,$req);
    if($row=mysqli_fetch_array($res) > 0){ 
    $_SESSION['email']=$email;
    setcookie('email',$email,time()+60,"/");
    setcookie('pass',$password,time()+60,"/");
    header('location: affi.php');
    }
    else{
        echo 'no';
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
      <input type="email" name="email" value="<?php if(isset($_COOKIE['email'])) echo  $_COOKIE['email'];?>">
    <label for="">password</label>
    <input type="password" name="pass" value="<?php if(isset($_COOKIE['pass'])) echo  $_COOKIE['pass'];?>">
    <button type="submit" name="check">sigh</button>
  </div>
</div>
</form>
</body>
</html>