<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Load</title>
</head>
<style>
    table{
        width: 80%;
        border-collapse: collapse;
        align: center;
        align-self: center;
        margin: auto; 
        text-align: center; 
         

    }
    tr, th{
        border: 1px solid black;
    }
    td{
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }
</style>
<body>
    <div>
        <?php
      
        require 'connect_db.php';

        $sql = "SELECT  subjects.subject_id,subjects.subject_code, students.stud_id, students.fname, students.lname, students.mname, 
        course.course_code, course.course_desc,enrollment.semester,enrollment.schoolyear
       ,subjects.subject_desc,student_to_studentgrades.grades,
        student_to_studentgrades.units,
         student_to_studentgrades.grades,student_to_studentgrades.units
        FROM students
        INNER JOIN student_to_courses ON students.stud_id = student_to_courses.stud_id 
        INNER JOIN course ON student_to_courses.course_id = course.course_id 
        INNER JOIN enrollment ON students.stud_id = enrollment.stud_id
        INNER JOIN subjects ON enrollment.subject_id = subjects.subject_id
        INNER JOIN student_to_studentgrades ON 
        enrollment.E_id = student_to_studentgrades.E_id WHERE students.stud_id = 19";
    
        $result = $conn->query($sql);
        $row1 = $result->fetch_assoc();
       
        if ($result->num_rows > 0) {
            while($row1 = $result->fetch_array()) {
                echo "<table>
                    <tr>
                    <td colspan='5'>
                        <img src='logo.jfif' alt='' width='50px' height=50px'>
                    <h4>Cebu Mary Immaculate College INC.</h4>
                    <h4>".$row1['semester']."st Semester ,".$row1['schoolyear']."</h4>
                    </td> 
                    </tr>
                    <tr>
                        <th></th>
                        <th>".$row1['fname']." ".$row1['lname']."</th>
                        <th> </th>
                    </tr>  
                    <tr>
                        <th>Department</th>
                        <th>".$row1['course_desc']."</th>
                        <th> 2ND YEAR </th>
                    </tr>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Grade</th>
                        <th>Units</th>
                    </tr>";
                           
            }
                }
            if ($result->num_rows > 0) {
                $total_units = 0;
                foreach($result as $row){
                    echo "<tr>
                        <td>".$row['subject_code']."</td>
                        <td>".$row['subject_desc']."</td>
                        <td>".$row['grades']."</td>
                        <td>".$row['units']."</td>
                    </tr>";
                    $total_units += $row['units'];
                }
            } else {
                echo "0 results";
            }
            ?>
            <tr>
                <td colspan="3"><strong>Total Units </strong><?php echo $total_units; ?></td>
                <td><strong><?php echo $total_units; ?> unit(s)</strong></td>
            </tr>
            <tr>
                <td colspan="4"><strong>Prepared by: </strong>Lovely Camay</td>

               
            </tr>
        </table>
        <?php
        $conn->close();
        ?>
       
    </div>

    
</body>
</html>
