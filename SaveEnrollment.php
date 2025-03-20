<?php
require 'connect_db.php';

$stud_id = $_POST['stud_id'];
$subject_id = $_POST['subject_id'];
$semester = $_POST['semester'];
$schoolyear = $_POST['schoolyear'];

$sql = "INSERT INTO enrollment ( stud_id, subject_id, semester, schoolyear) VALUES ('$stud_id', '$subject_id', '$semester', '$schoolyear')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully')</script>";
    header('Location: EnrollmentList.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();









?>