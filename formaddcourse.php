<?php
    require_once "e-classe-db.php";
    if(isset($_POST['save'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $sql = "INSERT INTO `courses` (id, title, description, price )
    VALUES('$id', '$title', '$description', '$price')";
    if(!mysqli_query($conn,$sql)){
        die ('impossible d’ajouter cet enregistrement : ' . mysqli_error());
    }
    echo "L’enregistrement est ajouté ";
        header('location: courses.php');
    }
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
    <form class="d-flex flex-column" method="POST" name="form" action="formaddcourse.php" >
    <label class="form-label">id</label>
    <input type="tel"  class="form-control " name="id" placeholder="Enter id">
    <label class="form-label">title</label>
    <input type="text"  class="form-control " name="title" placeholder="Entrer title">
    <label class="form-label">description</label>
    <input type="text"  class="form-control " name="description" placeholder="Entrer description">
    <label class="form-label">price</label>
    <input type="text"  class="form-control " name="price" placeholder="Enter price">   
    <input class="btn-info" type="submit" value="add" name="save">    
    </form>
    </div>
</body>
</html>