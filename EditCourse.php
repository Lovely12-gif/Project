<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
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

</style>
<body>
    <?php
    include 'connect_db.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM course WHERE course_id = '$course_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }

    
    ?>
    <div class="container">
    <form action="savecourse.php" method="POST">
        <h1>Edit Course</h1>
        <input type="hidden" name="id" value="<?php echo $row['course_id']; ?>">
        <label for="course_code">Course Code</label>
        <input type="text" name="course_code" value="<?php echo $row['course_code']; ?>"><br>
        <label for="course_desc">Course Description</label>
        <input type="text" name="course_desc" value="<?php echo $row['course_desc']; ?>"><br>
        <input type="submit" value="Update Course" name="Updatecourse">
    </form>
</div>
<?php

    if(isset($_POST['Updatecourse'])){
        $id = $_POST['id'];
        $course_code = $_POST['course_code'];
        $course_desc = $_POST['course_desc'];
        $sql = "UPDATE course SET course_code = '$course_code', course_desc = '$course_desc' WHERE course_id = '$course_id'";
        if($conn->query($sql) === TRUE){
            header('Location: courselist.php');
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

</div>
</body>
</html>