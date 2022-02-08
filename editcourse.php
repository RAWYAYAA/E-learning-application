<?php
require_once 'e-classe-db.php';
$id = $_GET['id'];
$results = "SELECT * FROM `courses` WHERE id = '$id' ";
$res = mysqli_query($conn , $results);
while($row = mysqli_fetch_assoc($res)){
    $id = $row['id']; 
    $title = $row['title']; 
    $description = $row['description']; 
    $price = $row['price']; 
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
    <form class="d-flex flex-column" method="POST"  >
    <label class="form-label">title</label>
    <input type="text"  class="form-control " name="title" value="<?php echo $title ?>">
    <label class="form-label">description</label>
    <input type="text"  class="form-control " name="description" value="<?php echo $description ?>">
    <label class="form-label">price</label>
    <input type="text"  class="form-control " name="price" value="<?php echo $price ?>">   
    <input class="btn-info" type="submit" value="edit" name="edit">    
    </form>
    </div>
    <?php
        if(isset($_POST['edit'])){
            $id = $_GET['id'];
            $title = $_POST['title']; 
            $description = $_POST['description']; 
            $price =$_POST['price']; 
            $req= "UPDATE courses SET 
            title = '$title',
            description = '$description',
            price= '$price'
            WHERE id = '$id' " ;
            mysqli_query($conn, $req);
            header('location: courses.php');
        }
    ?>
</body>
</html>