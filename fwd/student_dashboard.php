<?php
session_start();

// Retrieve the student's ID from the session
if (isset($_SESSION['student_id'])) {
    $student_id = $_SESSION['student_id'];

    echo "Student ID: $student_id";

} else {
    echo "Student ID not found in the session.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - IUGB</title>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style1.css">
    <link rel="icon" href="img\logo\logo.png">
</head>
<body class="body-home">
 <h3>Hi Student</h3>

<div class="shadow w-450 p-3 text-center bg-light">
<div class="row no-gutters">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">View courses</h5>
        <p class="card-text">View the list of all the courses.</p>
        <a href="view_course.php" class="btn btn-primary">Go to courses</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Enroll courses</h5>
        <p class="card-text">Enroll a new class to which attend.</p>
        <a href="enroll_course.php" class="btn btn-primary">Go to Enroll</a>
      </div>
    </div>
  </div>

  <br>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

