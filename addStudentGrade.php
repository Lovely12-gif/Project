<?php
    include 'connect_db.php';
    if(isset($_POST['grade'])){
        $stud_id = $_POST['stud_id'];
        $grade = $_POST['grade'];
        $sql = "INSERT INTO student_to_studentgrades (stud_id, grade) VALUES ('$stud_id', '$grade')";
        if($conn->query($sql) === TRUE){
            echo "Student Grade Added Successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Grade</title>
</head>
<style>
    form{
        width: 50%;
        align: center;
        text align: center;
        background: #fff;
        padding: 20px;
        margin top: 50px;
        background-color: #f4f4f4;
    }
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
    label {
        color: #555;
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
    <a href="addStudentGrade.php">Add Student Grade</a>

    
    <form action="SaveStudentGrade.php" method="post">
        <br>
        <h1>Student Grade</h1>
        <br>
        <label for="student_id">Student ID:</label>
        <select name="E_id" id="">
            <option value="">Select Student</option>
            <?php
            $sql = "SELECT * FROM students INNER JOIN student_to_courses ON students.stud_id = student_to_courses.stud_id 
            INNER JOIN course ON student_to_courses.course_id = course.course_id 
            INNER JOIN enrollment ON students.stud_id = enrollment.stud_id 
            INNER JOIN subjects ON enrollment.subject_id = subjects.subject_id";
            $result = $conn->query($sql);    
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<option value=".$row["E_id"].">".$row["fname"]." ".$row["lname"]."-".$row["course_code"]."".$row["subjects"].""."</option>";
                }
            } else {
                echo "0 results";
            }
            
            ?>

        </select>
        <br>
        <label for="grade">Grade:</label>
        <input type="text" name="grades" id="grade">
        <br>
        <label for="units">Units</label>
        <input type="text" name="units" id="units" required>
        <br>
        <input type="submit" value="Add Student Grade">

    </form>
    </div>

</body>
</html>