<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject List</title>
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
th, td:hover{
    padding: 10px;
    text-align: left;
    radius: 8px;
    margin-top: 50px;
    background-color:beige;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 100px;
    
}

</style>
<body>
    <div>
        <a href="addsubject.php">Add Subject</a>
    <?php
    require 'connect_db.php';
    $sql = "SELECT * FROM subjects";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>Subject Code</th><th>Subject Description</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["subject_code"]."</td><td>".$row["subject_desc"]."</td></tr>";
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