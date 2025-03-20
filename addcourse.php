<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add course</title>
</head>
<style>
    form{
        width: 50%;
        align: center;
        text align: center;
        background: #fff;
        padding: 20px;
        margin: auto;
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
        background-color:rgb(175, 76, 150);
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
        padding: 10px;
        font-size: 16px;
    }

</style>
<body>
    <div>
    <?php
    require 'connect_db.php';
    $sql = "INSERT INTO course ( course_code, course_desc) VALUES ( 'CSC101', '3')";

    ?>
    <form action="createcourse.php" method = "post" >
        <br>
        <h1>Add Course</h1>
        <br>
      
        <br>
        <label for="course_code">Course Code:</label>
        <input type="text" name="course_code" id="course_code">
        <br>
        <label for="course_desc">Course Description:</label>
        <input type="text" name="course_desc" id="course_desc">
        <br>
        <input type="submit" value="Add Course">

    </form>
    </div>
</body>
</html>