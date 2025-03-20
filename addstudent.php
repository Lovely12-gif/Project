<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<style>
    table{
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid black;
    }
    th, td{
        padding: 10px;
        text-align: left;
        background-color: #f1f1c1;
    }
</style>
<body>
    <div>
    <a href="addstudent.php">Add Student</a>
    <a href="addcourse.php">Add Course</a>
    <a href="enrollstudent.php">Enroll Student</a>
    <a href="addstudent-to-course.php">Add Student to Course</a>
    <a href="courselist.php">Course List</a>
    <a href="enrollmentlist.php">Enrollment List</a>
    <a href="studentgradelist.php">Student Grade List</a>
    <a href="addstudentgrade.php">Add Grade</a>


    <?php 
    require 'connect_db.php';
    $sql = "INSERT INTO students (fname ,lname,mname) VALUES ('Computer Science', 'CSC101', '3')";
    ?>

    <form action="createstudent.php" method="post">
        <br>
        <h1>Add Student</h1>
        <br>
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname">
        <br>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname">
        <br>
        <label for="mname">Middle Name:</label>
        <input type="text" name="mname" id="mname">
        <br>
        <input type="submit" value="Add Student">
    </form>
    </div>
    
</body>
</html>