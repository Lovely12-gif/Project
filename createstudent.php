<?php
require 'connect_db.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];

$sql = "INSERT INTO students (fname ,lname,mname) VALUES ('$fname', '$lname', '$mname')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully')</script>";
    header('Location: studentlist.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>