<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades of Student</title>
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
    th{
        background-color: #4CAF50;
        color: white;
    }
    select{
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }
    input[type="submit"] {
        padding: 10px 20px;
        background-color: #5cb85c;
        border: none;
        border-radius: 4px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        align-self: center;
    }
    input[type="text"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }
    h1 {
        text-align: center;
        color: #333;
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
    <a href="studentlist.php">Student List</a>
    <a href="studentgradelist.php">Student Grade List</a>
    <a href="addstudentgrade.php">Add Grade</a>
    
    
        <?php
        require 'connect_db.php';
        $sql = "SELECT students.stud_id, students.fname, students.lname, students.mname, 
        course.course_code, subjects.subject_code, student_to_studentgrades.grades,student_to_studentgrades.units
        FROM students  
        INNER JOIN student_to_courses ON students.stud_id = student_to_courses.stud_id 
        INNER JOIN course ON student_to_courses.course_id = course.course_id 
        INNER JOIN enrollment ON students.stud_id = enrollment.stud_id
        INNER JOIN subjects ON enrollment.subject_id = subjects.subject_id
        INNER JOIN student_to_studentgrades ON enrollment.E_id = student_to_studentgrades.E_id ";

        $result = $conn->query($sql);
      

        ?>
    <table>
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Course Code</th>
            <th>Subject Code</th>
            <th>Grade</th>
            <th>Units</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["stud_id"]."</td><td>".$row["fname"]."</td><td>"
                .$row["lname"]."</td><td>".$row["mname"]."</td><td>".$row["course_code"]."</td><td>"
                .$row["subject_code"]."</td><td>".$row["grades"]."</td><td> " .$row["units"]." "."</td></tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>





    </div>
    
</body>
</html>