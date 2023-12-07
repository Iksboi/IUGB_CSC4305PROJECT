<?php
session_start();

$con = new mysqli('localhost', 'root', '', 'sms_db');

if (!$con) {
    die("connection to database failed: " . !$con);
}

$username = $_POST['username'];
$password = $_POST['password'];

$resultAdmin = $con->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
$resultTeacher = $con->query("SELECT * FROM teacher WHERE username='$username' AND password='$password'");
$resultStudent = $con->query("SELECT * FROM student WHERE username='$username' AND password='$password'");

if ($resultAdmin->num_rows > 0) {
    $rowAdmin = $resultAdmin->fetch_assoc();
    $_SESSION['u_id'] = $rowAdmin['u_id'];
    header('Location: admin\admin_home.php');

} elseif ($resultTeacher->num_rows > 0) {
    $rowTeacher = $resultTeacher->fetch_assoc();
    $_SESSION['teacher_id'] = $rowTeacher['teacher_id'];
    header('Location: teacher\teacher_home.php');

} elseif ($resultStudent->num_rows > 0) {
    $rowStudent = $resultStudent->fetch_assoc();
    $_SESSION['student_id'] = $rowStudent['student_id'];
    header('Location:student\student_home.php');

} else {
    echo "Authentication failure. Please try again.";
}

$con->close();
?>
