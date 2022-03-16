<?php 
require 'connex.php';
$id=$_GET['id'];
$req="DELETE FROM test where id=$id";
if(mysqli_query($conn,$req)){
    header('location:affi.php');
}else{
    echo'failed';
}

?>