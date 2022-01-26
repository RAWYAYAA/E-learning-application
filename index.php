<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
              </div>
                    <form action="Dashboard.php">
                             <div class="mb-4">
                             <label class="form-label">Email</label>
                             <input type="email" class="form-control"  placeholder="Enter your email">
                             </div>
                    <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password"  class="form-control " placeholder="Enter your password">
                    </div>
                    <div class="validation  text-center  mb-3">
                    <button class="btn-info text-white rounded p-2 shadow-none w-100">SIGN IN</button>
                    <!-- <a href="student.html"><a class="btn-info text-white rounded p-2 shadow-none w-100" href="#">SIGN IN</a></a> -->
                    <p class=" fs-5 p-4 text-muted">Forgot your password?<a href="#">Reset Password</a></p>
                </div>
        </form>
    </div> 
</main>       
</body>
</html>