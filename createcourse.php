<?php
require 'connect_db.php';
$course_code = $_POST['course_code'];
$course_desc = $_POST['course_desc'];

$sql = "INSERT INTO course (course_code, course_desc) VALUES ('$course_code', '$course_desc')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully')</script>";
    header('Location: courselist.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();









?>