<?php

include 'DB_connection.php';

$student_id = $_POST['student_id'];
$course_id = $_POST['course_id'];
$midterm_grade = $_POST['midterm_grade'];
$final_grade = $_POST['final_grade'];

// Check if the record already exists
$checkSql = "SELECT * FROM `student_course` WHERE student_id = '$student_id' AND course_id = '$course_id'";
$checkResult = $con->query($checkSql);

if ($checkResult->num_rows > 0) {
    // The record already exists, use an UPDATE statement
    $updateSql = "UPDATE `student_course` SET midterm_grade = '$midterm_grade', final_grade = '$final_grade' WHERE student_id = '$student_id' AND course_id = '$course_id'";

    if ($con->query($updateSql) === TRUE) {
        echo "Grades update successful.";
    } else {
        echo "Error updating grades: " . $con->error;
    }
} else {
    // The record does not exist, use an INSERT statement
    $insertSql = "INSERT INTO `student_course` (student_id, course_id, midterm_grade, final_grade) VALUES ('$student_id', '$course_id', '$midterm_grade', '$final_grade')";

    if ($con->query($insertSql) === TRUE) {
        echo "Grades record successful.";
    } else {
        echo "Error inserting grades record: " . $con->error;
    }
}

$con->close();

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Assign a grade- IUGB</title>
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
<link rel="icon" href="img\logo\logo.png">
</head>

<body>
  
    <div class="container">
        <br><br>
       
        ``<h3>Add a new student</h3>


            <form method="post">
            <div class="text-center"> 
            <img src ="logo.png"
                 width="100">

            </div>

           

            <div class="mb-3">

                <label  class="form-label">Midterm-Grade</label>
                <input type="int" 
                class="form-control"
                name="midterm_grade"
                >

            </div>

            <div class="mb-3">

                <label  class="form-label">Final Grade</label>
                <input type="int" 
                class="form-control"
                name="final_grade"> 

            </div>

            
            

          
               
            <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
            <a href="teacher_home.php" class="text-decoration-none">Cancel</a>
            </form>
                    <br>
                    <div class="text-center text-light">

                        
                       <> Copyright &copy; 2023 International University of Grand Bassam. All rights reserved.  </>
                    </div>
                
                </div>
                </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>