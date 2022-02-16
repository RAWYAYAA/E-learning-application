<?php 
    session_start();
    require_once "e-classe-db.php";
    if(isset($_POST['check'])){
    $email=$_POST['email'];
    $pass= $_POST['password'];
    $req="SELECT * from comptes where EMAIL= '$email' and PASSWORD='$pass' ";
    $res=$conn->query($req);
    if( $res -> num_rows > 0){
        $row = $res -> fetch_assoc();
        // $row = mysqli_fetch_assoc($res);
        $_SESSION['Name'] = $row['USERNAME'];
        $box = $_POST['box'] ?? "";
        if($box === "on"){
        setcookie('email', $email, time()+ 3600*24);
        setcookie('password', $pass, time()+ 3600*24);
        }else{
            setcookie('email');
            setcookie('password');
        }
        header('location: dashboard.php');
    }else{
        header('location: index.php?error');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="mystyle.css">
    <title>Sign In</title>
</head>
<body id="indexBody">
    <main class=" container  d-flex justify-content-center align-items-center" id="content">
    <div class=" login mb-4  bg-white p-4 ">
        <div class="logo mb-4">
        <h1 class="border-start px-2 m-3 border-info border-5 fw-bold ">E-classe</h1>
        </div>
               <div class="sign text-center text-uppercase">
               <h2>SIGN IN</h2>
               <p class="f-3 text-muted">Enter your credentials to access your account</p>
                <?php 
                if(isset($_GET['error'])){
                    echo '<p class="f-3 bg-danger">password or email not valid </p>';
                }
                ?>
              </div>
                    <form method="POST">
                             <div class="mb-4">
                             <label class="form-label">Email</label>
                             <input type="email" class="form-control"name="email" value="<?= $_COOKIE['email'] ?? "" ?>" placeholder="Enter your email" required>
                             </div>
                    <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password"  class="form-control " name="password" value="<?= $_COOKIE['password'] ?? "" ?>" placeholder="Enter your password" required>
                    </div>
                    <div class="form-check form-switch ms-2 mb-2">
                        <input name="box" class="form-check-input" type="checkbox">
                        <label class="form-check-label" for="box">Remember me</label>
                    </div>
                    <div class="validation  text-center  mb-3"> 
                       <input type="submit" class="btn-info text-white rounded p-2 shadow-none w-100" name="check" value="SIGN IN">
                    <!-- <a href="student.html"><a class="btn-info text-white rounded p-2 shadow-none w-100" href="#">SIGN IN</a></a> -->
                    <p class=" fs-5 p-4 text-muted">Forgot your password?<a href="#">Reset Password</a></p>
                </div>
        </form>
    </div> 
</main>       
</body>
</html>