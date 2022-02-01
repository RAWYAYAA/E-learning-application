<?php
 if(isset($_POST['btnadd'])){
 $data = file_get_contents('student.json');
 $data = json_decode($data, true);
 $add_arr = array(
 'image' => $_POST['image'],
 'name' => $_POST['name'],
 'email' => $_POST['email'],
 'phone' => $_POST['phone'],
 'enroll' => $_POST['enroll'],
 'datedadmission' => $_POST['datedadmission']
 );
 array_push($data, $add_arr);

 $data = json_encode($data);
 file_put_contents('student.json', $data);
 header('location: student.php');
 }
?>