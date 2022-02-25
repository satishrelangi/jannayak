<?php
    $conn = new mysqli('localhost', 'root', '', 'jannayak');
    $reg =$_POST['reg'];
    $name=$_POST['name'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    if($reg == 1){
        $sql="INSERT INTO register(name, phone, dob, gender) VALUES ('$name', '$phone', '$dob','$gender')";
        if ($conn->query($sql) === TRUE) {
            // echo "data inserted";
        }
        else {
            echo "failed";
        }
    }
?>