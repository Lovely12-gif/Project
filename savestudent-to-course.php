
 <?php
include_once 'connect_db.php';
$student_id = $_POST['student_id'];
$course_id = $_POST['course_id'];
$sql = "INSERT INTO student_to_courses (stud_id, course_id) VALUES ('$student_id', '$course_id')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Student to Course added successfully!')</script>";
    header('Location: StudenttoCourseList.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
    ?>

