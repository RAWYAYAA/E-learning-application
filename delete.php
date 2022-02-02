
<!-- $index= $_POST[$index];
$file = 'student.json';
$data = file_get_contents($file);
$student = Json_decode($data,true);
{unset($student[$index]);
$data = json_encode($student);
 file_put_contents('student.json', $data);
 header('location: student.php');
} -->
<?php
    $index = $_GET['index'];
    $students = file_get_contents('student.json');
    $students = json_decode($students, true);
    unset($students[$index]);
    $students = json_encode($students, JSON_PRETTY_PRINT);
    file_put_contents('student.json', $students);

    header('location: student.php');
?>
