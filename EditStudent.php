<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
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
    font-size: 20px;
}
.container{
    width: 50%;
    margin: auto;
    padding: 20px;
    background-color: beige;
}


</style>
<body>
    <?php
    include 'connect_db.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM student WHERE student_id = '$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>
    <div class="container">
    <form action="savestudent.php" method="POST">
        <h1>Edit Student</h1>
        <input type="hidden" name="id" value="<?php echo $row['student_id']; ?>">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" value="<?php echo $row['fname']; ?>"><br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" value="<?php echo $row['lname']; ?>"><br>
        <label for="mname">Middle Name</label>
        <input type="text" name="mname" value="<?php echo $row['mname']; ?>"><br>
        <input type="submit" value="Update Student" name="Updatestudent">\
    </form>
</div>


    
</body>
</html>