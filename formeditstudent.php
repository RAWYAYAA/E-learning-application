<?php
require_once 'e-classe-db.php';
$id = $_GET['id'];
$results = "SELECT * FROM `student` WHERE id = $id";
$res = mysqli_query($conn , $results);
while($row = mysqli_fetch_assoc($res)){
    $image = $row['image']; 
    $name = $row['fullName']; 
    $email = $row['email']; 
    $phone = $row['phone']; 
    $enroll = $row['enrollnumber']; 
    $datedadmission = $row['dateofadmission']; 
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
    <form class="d-flex flex-column" method="POST">
    <label class="form-label">image</label>
    <input type="file"  class="form-control " name="image" placeholder="Entrer une image" value="<?php echo $image; ?>">
    <label class="form-label">name</label>
    <input type="text"  class="form-control " name="fullName" placeholder="Entrer le nom" value="<?php echo $name; ?>">
    <label class="form-label">email</label>
    <input type="text"  class="form-control " name="email" placeholder="Enter l'email" value="<?php echo $email; ?>">
    <label class="form-label">Phone</label>
    <input type="tel"  class="form-control " name="phone" placeholder="Enter phone" value="<?php echo $phone; ?>">
    <label class="form-label">enroll</label>
    <input type="tel"  class="form-control "  name="enrollnumber" placeholder="Enter enroll" value="<?php echo $enroll; ?>">
    <label class="form-label">datedadmission</label>
    <input type="date"  class="form-control " name="dateofadmission" placeholder="Enter date" value="<?php echo $datedadmission; ?>">     
    <input class="btn-info" type="submit" value="add" name="save">     
    </form>
    <?php
        if(isset($_POST['save'])){
            $image = $_POST['image']; 
            $name = $_POST['fullName']; 
            $email = $_POST['email']; 
            $phone = $_POST['phone']; 
            $enroll = $_POST['enrollnumber']; 
            $datedadmission = $_POST['dateofadmission']; 

            $edit_student = "UPDATE student SET image = '$image',
            fullName = '$name',
            email = '$email',
            phone = '$phone',
            enrollnumber = '$enroll',
            dateofadmission = '$datedadmission'
            WHERE id = '$id'";
            mysqli_query($conn, $edit_student);
            header('location: student.php');
        }
    ?>
</body>
</html>