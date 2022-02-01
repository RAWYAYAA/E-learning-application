<?php
$indexx= $_POST['index'];
$file = 'student.json';
$data = file_get_contents($file);
$student = Json_decode($data,true);

// unset($student[$index]);
// $data = json_encode($student);
//  file_put_contents('student.json', $data);
//  header('location: student.php');
foreach ($student as $i => $post) 
{
    if ($post->index == $index) 
    {
        unset ($student[$index]);
        $data= json_encode(array_values($student), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents('student.json', $data);
        break;
    }
} 
