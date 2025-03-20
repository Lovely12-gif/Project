<?php
require 'connect_db.php';
$subject_code = $_POST['subject_code'];
$subject_desc = $_POST['subject_desc'];

$sql = "INSERT INTO subjects (subject_code, subject_desc) VALUES ('$subject_code', '$subject_desc')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully')</script>";
    header('Location: subjectlist.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();






?>