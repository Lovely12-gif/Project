<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student to Course</title>
</head>
<style>
    form{
        width: 50%;
        align: center;
        text align: center;
        background: #fff;
        padding: 20px;
        margin top: 50px;
        background-color:beige;
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
    select{
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }
    .d{
        display: flex;
        flex-direction: column;
        background-color:beige;
        padding: 20px;
        border-radius: 8px;
        margin-left: 300px;
        width: 50%;
        align: center;
        text align: center;


    }

</style>
<body>
    <div class="d">
        <?php
        require 'connect_db.php';
        $sql = "select * from students";
        $result = mysqli_query($conn, $sql);
        ?>
        <form action="savestudent-to-course.php" method = "post">
            <br>
            <h1>Add Student to Course</h1>
            <br>
            <label for="student_id">Student:</label>
            <select name="student_id" id="student_id">
                <option value="">Select Student</option>
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo "<option value='".$row['stud_id']."'>".$row['fname']." ".$row['lname']."</option>";
                }
                ?>
            </select>
            <br>
            <label for="course_id">Course:</label>
            <select name="course_id" id="course_id">
                <option value="">Select Courses</option>
                <?php
                $sql = "select * from course";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo "<option value='".$row['course_id']."'>".$row['course_code'].$row['course_desc']."</option>";
                }
                ?>
            </select>
            <br>
            <br>
            <input type="submit" value="Add Student to Course">
        </form>





    </div>
    
</body>
</html>