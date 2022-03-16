<!-- <?php 
    // require 'connex.php';
    // $id=$_GET['id'];
    // $req="SELECT * FROM test where id='$id' ";
    // $res=mysqli_query($conn,$req);
    // $row=mysqli_fetch_assoc($res);
    // $email=$row['EMAIL'];
    // $pass=$row['PASSWORD'];
    // if(isset($_POST['edit'])){
    //     $email=$_POST['email'];
    //     $pass=$_POST['pass'];
    //     $req="UPDATE `test` SET `EMAIL`='$email',`PASSWORD`='$pass' where id='$id' ";
    //     if(mysqli_query($conn,$req)){
    //         header('location: affi.php');
    //     }else{
    //         echo 'no edit';
    //     }
    // }
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
      <input type="email" name="email" value="<?php echo $email;?>">
    <label for="">password</label>
    <input type="password" name="pass" value="<?php echo $pass;?> ">
    <button type="submit" name="edit">update</button>
  </div>
</div>
</form>
</body>
</html> -->
<?php
    require 'connex.php';
    $id=$_GET['id'];
    $req="SELECT * FROM test WHERE id='$id'";
    $res=mysqli_query($conn,$req);
    $row=mysqli_fetch_array($res);
    $email=$row['EMAIL'];
    $pass=$row['PASSWORD'];
    if(isset($_POST['edit'])){
        $email=$_POST['EMAIL'];
        $pass=$_POST['PASSWORD'];
        $req="UPDATE test SET EMAIL='$email',PASSWORD='$pass'";
        $res=mysqli_query($conn,$req);
        header('location: affi.php');
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
      <input type="email" name="email"  value="<?php echo $email; ?>">
    <label for="">password</label>
    <input type="password" name="pass" value="<?php echo $pass; ?>" >
    <button type="submit" name="edit">update</button>
  </div>
</div>
</form>
</body>
</html>