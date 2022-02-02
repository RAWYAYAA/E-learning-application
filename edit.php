<?php
                    $index = $_GET['index'];
                    $students = file_get_contents('student.json');
                    $students = json_decode($students, true);
                    $row = $students[$index];
                   if(isset($_POST['index'])){
                                //data in out POST
                                $input = array(
                                    'name' => $_POST['name'],
                                    'email' => $_POST['email'],
                                    'phone' => $_POST['phone'],
                                    'enroll'=> $_POST['enroll'],
                                    'date1'=> $_POST['datedadmission']
                                );
                                        //update the selected index
                                        $students[$index] = $input;
                                        //encode back to json
                                        $students = json_encode($students, JSON_PRETTY_PRINT);
                                        file_put_contents('student.json', $students);
                                        // header('location: ');
                                        echo "<script>window.location.href = './student.php';</script>";
                            }
                        ?>