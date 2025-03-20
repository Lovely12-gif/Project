<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<div>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        echo "<h2>Registration successful</h2>";
        echo "<h3>Your details:</h3>";
        echo "<table>";
        echo "<tr><th>Name</th><th>Email</th></tr>";
        echo "<tr><td>$name</td><td>$email</td></tr>";
        echo "</table>";
    }else{
        ?>
        <form action="Registration.php" method="post">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Register"></td>
                </tr>
            </table>
        </form>
        <?php
    }
    
        
    
    
    
    
    ?>



</div>
    
</body>
</html>