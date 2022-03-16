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
<style>
    .model {
        margin: 0;
        padding: 0;
        max-width: 500px;
        height: 500px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .hidden {
        display: none;
    }
</style>

<body>
    <div class="container">
    <button>Open</button>
    <div class="model hidden">
        <form class="d-flex flex-column" method="POST" name="form" action="./student.php" onsubmit="valid()"  >
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
            <input class="btn-info" type="submit" value="add" name="save" >     
        </form>
        </div>
    </div>
    <script src="addstudent.js"></script>
</body>
</html>