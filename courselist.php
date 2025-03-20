<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
</head>
<style>
table{
    width: 100%;
    border-collapse: collapse;
    background-color: #f1f1c1;
}
table, th, td{
    border: 1px solid black;
}
th, td{
    padding: 10px;
    text-align: left;
}


</style>
<body>
    <div>
        <a href="addcourse.php">Add Course</a>
        <a href="addstudent.php">Add Student</a>
        <a href="addsubject.php">Add Subject</a>
        <a href="Addstudent-To-Course.php">Add Student to Course</a>
        <a href="enrollstudent.php">Enroll Student</a>
        <a href="enrollmentlist.php">Enrollment List</a>
        <a href="courselist.php">Course List</a>
        <a href="studentgradelist.php">Student Grade List</a>
        <a href="addstudentgrade.php">Add Grade</a>
<?php
    require 'connect_db.php';
    $sql = "SELECT * FROM course";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border='1'></th><th>Course Code</th><th>Course Description</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "</td><td>".$row["course_code"]."</td><td>".$row["course_desc"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();





?>




    </div>
    
</body>
</html>