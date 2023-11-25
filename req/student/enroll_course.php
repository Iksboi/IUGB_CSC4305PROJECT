<?php


include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';

$course_id = $_POST['course_id'];
$student_id = $_POST['student_id'];


$sql = "INSERT INTO student_course (student_id, course_id) VALUES ('$student_id', '$course_id')";


if ($con->query($sql) === TRUE) {
    echo "Enrollment successful.";
} else {
    echo "Error during enrollment: " . $con->error;
}

$con->close();

?>
