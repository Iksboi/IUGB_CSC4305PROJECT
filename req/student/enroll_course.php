<?php




include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Make sure form data is present
    if (isset($_POST['student_id']) && isset($_POST['course_id'])) {
        // Retrieve form values
        $student_id = $_POST['student_id'];
        $course_id = $_POST['course_id'];

        // Insert into the student_course table
        $sql = "INSERT INTO student_course (student_id, course_id) VALUES ('$student_id', '$course_id')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Enrollment successful.";
        } else {
            echo "Error during enrollment: " . $conn->error;
        }
    } else {
        echo "A FUCKING PROBLEM NIGGA";
    }
}

// Close the database connection
$conn->close();
?>



