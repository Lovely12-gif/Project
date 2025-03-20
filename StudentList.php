<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
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
   <?php
    require 'connect_db.php';
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>Student_ID</th><th>First Name</th><th>LastName</th><th>MiddleName</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["stud_id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["mname"]."</td></tr>";
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