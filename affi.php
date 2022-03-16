<?php 
session_start();
    require "connex.php";
    $req= 'SELECT * FROM test ';
    $res=mysqli_query($conn,$req);
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
    <h1><?php echo $_SESSION['email']?></h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">email</th>
      <th scope="col">pass</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
      <?php 
  while ($row=mysqli_fetch_array($res)){
    echo '<tr>
    <td>'. $row['id'].'</td>
      <td>'. $row['EMAIL'].'</td>
      <td>'.$row['PASSWORD'].'</td>
      <td><a href="edittest.php?id='. $row['id'].' ">EDIT</a></td>
      <td><a href="delettest.php?id='. $row['id'].' ">DELET</a></td>
    </tr>';
}
?>
  </tbody>
</table>
</body>
</html>