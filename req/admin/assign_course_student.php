<?php
include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST['student_id']) && isset($_POST['course_id'])) {
       
        $student_id = $_POST['student_id'];
        $course_id = $_POST['course_id'];

        
        $sql = "update student_course setstudent_id, course_id) VALUES ('$student_id', '$course_id')";

      
        if ($con->query($sql) === TRUE) {
            echo "Enrollment successful.";
        } else {
            echo "Error during enrollment: " . $con->error;
        }
    } else {
        echo "Please fill in all the form fields.";
    }
}


$con->close();
?>
