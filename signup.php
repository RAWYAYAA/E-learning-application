<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="toast.css">
    <title>sign up</title>
</head>
<body id="indexBody"  class="container  d-flex justify-content-center align-items-center mt-5">
   <form name = "myForm" method="POST" onsubmit = "return(validate());" class="d-flex flex-column justify-content align-items-center">
   <div class="mb-3">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" >

  </div>
  <div class="mb-3">
    <label for="Prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom">
  </div>
  <div class="mb-3">
    <label for="Phone" class="form-label">Phone</label>
    <input type="phone" class="form-control" id="phone" name="phone">
  </div>
  <div class="mb-3">
    <label for="EMAIL" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label"> confirm yourPassword</label>
    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
  </div>
  <a href="Dashboard.php">
    <button type="submit" class="btn-info text-white rounded  shadow-none p-2  text-decoration-none "id="toast">Sign up</button>
    </a>
</form>
<div class="toast toast--visible toast--success ">inscription effectuer par succés
</div>
<?php 
require_once 'e-classe-db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    extract($_POST);
    $sql="INSERT INTO comptes ( `nom`, `prenom`, `phone`, `email`, `password`)  VALUES ('$nom', '$prenom', '$phone', '$email', '$password')";
    $conn->query($sql);
}
?>
<script src="signup.js"></script>
<script src="toast.js"></script>
</body>
</html>