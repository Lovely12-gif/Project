<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Subject</s></title>
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



</style>
<body>
    <div>
    <?php
    require 'connect_db.php';
    $sql = "INSERT INTO subject ( subject_code, subject_desc) VALUES ( 'MTH101', '3')";
    ?>
    <form action="createsubject.php" method="post" style="margin-left: 30%;">
        <br>
        <h1>Add Subject</h1>
        <br>
        <label for="subject_code">Subject Code:</label>
        <input type="text" name="subject_code" id="subject_code">
        <br>
        <label for="subject_desc">Subject Description:</label>
        <input type="text" name="subject_desc" id="subject_desc">
        <br>
        <input type="submit" value="Add Subject">
    </form>

  </div>  
    
    
    

</body>
</html>