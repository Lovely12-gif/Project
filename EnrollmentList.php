<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment List</title>
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
    th{
        background-color: #4CAF50;
        color: white;
    }

</style>


<body>
    <div>
        <a href="addstudent.php">Add Student</a>
        <a href="addsubject.php">Add Subject</a>
        <a href="addcourse.php">Add Course</a>
        <a href="addstudenttocourse.php">Add Student to Course</a>
        <a href="enrollstudent.php">Enroll Student</a>
        <a href="courselist.php">Course List</a>
        <a href="enrollmentlist.php">Enrollment List</a>
        <a href="studentgradelist.php">Student Grade List</a>


        <?php
        require 'connect_db.php';
        $sql = "SELECT students.stud_id, students.fname, students.lname, students.mname, course.course_code, course.course_desc,subjects.subject_code,subjects.subject_desc,enrollment.semester,enrollment.schoolyear FROM students INNER JOIN student_to_courses ON students.stud_id = student_to_courses.stud_id INNER JOIN course ON student_to_courses.course_id = course.course_id INNER JOIN enrollment ON enrollment.stud_id = students.stud_id INNER JOIN subjects ON enrollment.subject_id = subjects.subject_id ";
        $result = $conn->query($sql);
      

        ?>
    <table>
        <tr>
            <th>Student</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Course Code</th>
            <th>Course Description</th>
            <th>Subject Code</th>
            <th>Subject Description</th>
            <th>Semester</th>
            <th>School Year</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["stud_id"]."</td><td>".$row["fname"]."</td>";
                echo "<td>".$row["lname"]."</td><td>".$row["mname"]."</td><td>".$row["course_code"]."</td>";
                echo "<td>".$row["course_desc"]."</td><td>".$row["subject_code"]."</td>";
                echo "<td>".$row["subject_desc"]."</td><td>".$row["semester"]."</td>";
                echo "<td>".$row["schoolyear"]."</td></tr>";
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