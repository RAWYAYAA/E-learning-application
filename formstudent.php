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
    <form class="d-flex flex-column" method="POST" action="addstudent.php" >
    <label class="form-label">image</label>
    <input type="file"  class="form-control " name="image" placeholder="Entrer une image">
    <label class="form-label">name</label>
    <input type="text"  class="form-control " name="name" placeholder="Entrer le nom">
    <label class="form-label">email</label>
    <input type="text"  class="form-control " name="email" placeholder="Enter l'email">
    <label class="form-label">Phone</label>
    <input type="tel"  class="form-control " name="phone" placeholder="Enter phone">
    <label class="form-label">enroll</label>
    <input type="tel"  class="form-control "  name="enroll" placeholder="Enter enroll">
    <label class="form-label">datedadmission</label>
    <input type="date"  class="form-control " name="datedadmission" placeholder="Enter date">     
    <input class="btn-info" type="submit" value="add" name="save">     
    </form>
    </div>
</body>
</html>