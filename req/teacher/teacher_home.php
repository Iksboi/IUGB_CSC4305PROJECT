
<?php
session_start();

// Retrieve the teacher's ID from the session
if (isset($_SESSION['teacher_id'])) {
    $teacher_id = $_SESSION['teacher_id'];

    echo "teacher ID: $teacher_id";

} else {
    echo "teacher ID not found in the session.";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - IUGB</title>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\style1.css">
    <link rel="icon" href="img\logo\logo.png">
    
</head>
<body class="body-home">
 <h3>Hi Teacher</h3>
 <br>


 <div class="row no-gutters">
 <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> Courses</h5>
        <p class="card-text">View list of assigned courses.</p>
        <a href="teacher_assigned_course.php" class="btn btn-primary">Go to Courses</a>
      </div>
    </div>
  </div>
  
  </div>
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Assign Grade</h5>
        <p class="card-text">Assign grade to student.</p>
        <a href="" class="btn btn-primary">Go to student grade</a>
      </div>
    </div>
  </div>
 

</td> 


  <div class="d-flex justify-content-center align-items-center vh-100"></div>
<div class="shadow w-450 p-3 text-center bg-light">

<br>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
