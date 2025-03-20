<?php
require 'connect_db.php';
$E_id = $_POST['E_id'];
$grades = $_POST['grades'];
$units = $_POST['units'];

$sql = "INSERT INTO student_to_studentgrades(E_id, grades,units) VALUES ( '$E_id','$grades', '$units')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Student to Course added successfully!')</script>";
    header('Location: StudentGradeList.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);






?>