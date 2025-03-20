<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll Student</title>
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
        font-size: 16px;
        color: #333;
    }
    a {
        padding: 10px 20px;
        background-color: #5cb85c;
        border: none;
        border-radius: 4px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        align-self: center;
        text-decoration: none;
    }
    a:hover {
        background-color: #4CAF50;
    }
</style>
<body>
    <div>
        <?php
        include 'connect_db.php';
        $sql = "SELECT * FROM students INNER JOIN student_to_courses ON students.stud_id = student_to_courses.stud_id INNER JOIN course ON student_to_courses.course_id = course.course_id";
        $result = $conn->query($sql);

        ?>
        <form action="SaveEnrollment.php" method="post">
            <br>
            <h1>Enroll Student</h1>
            <br>
            <label for="stud_id">Student:</label>
            <select name="stud_id" id="stud_id">
                <option value="">Select Student</option>
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option value=".$row["stud_id"].">".$row["fname"]." ".$row["lname"]."</option>";
                    }
                } else {
                    echo "0 results";
                }
       
                ?>
            </select>
            <br>



            <label for="subject_id">Subject</label>
            <select name="subject_id" id="subject_id">
                <option value="">Select Subject</option>
                <?php
              
                $sql = "SELECT * FROM subjects";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option value=".$row["subject_id"].">".$row["subject_code"]." ".$row["subject_desc"]."</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </select>
            <br>  

            <label for="semester">Semester:</label>
            <select name="semester" id="semester">
                <option value="">Select Semester</option>
                <option value="1st Semester">1st Semester</option>
                <option value="2nd Semester">2nd Semester</option>
                <option value="Summer">Summer</option>
            </select>
            <br>
            <label for="school_year">School Year:</label>
            <select name="schoolyear" id="school_year">
                <option value="">Select School Year</option>
                <option value="2024-2025">2024-2025</option>
                <option value="2025-2026">2025-2026</option>
                <option value="2026-2027">2026-2027</option>
                <option value="2027-2028">2027-2028</option>
                <option value="2028-2029">2028-2029</option>


            </select>
            <br>
            <input type="submit" value="Enroll Student">








        </form>
    </div>
    
</body>
</html>