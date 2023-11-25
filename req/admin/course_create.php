<?php

include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';

if(isset($_POST['submit'])) {

    $course_name=$_POST['course_name'];
    $course_description=$_POST['course_description'];
    $course_creat_date	=$_POST['course_creat_date	'];
    $course_id=$_POST= generateCourseID();
  



    

    $sql="INSERT INTO `course` (course_name, course_description, course_creat_date, course_id)
    
    VALUES (' $course_name', '  $course_description',  NOW(),'$course_id')";

    $result=mysqli_query($con,$sql);

    if($result){

     header("location:display_course.php");
    }
     else 

    {
        die(mysqli_error($con));
    }
}
function generateCourseID() {
    // Generate a unique ID of 4digits starting with '33'
    $course_id= "3" . sprintf("%03d", rand(0, 9999));

    // Check if the generated ID already exists in the database
    global $con;
    $query = "SELECT course_id FROM course WHERE course_id = '$course_id'";
    $result = mysqli_query($con, $query);

    // If the ID already exists, regenerate it
    while (mysqli_num_rows($result) > 0) {
        $course_id ="3" . sprintf("%03d", rand(0, 9999));
        $result = mysqli_query($con, "SELECT course_id FROM course WHERE course_id = '$course_id'");
    }

    return $course_id;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create a course - IUGB</title>
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
<link rel="icon" href="img\logo\logo.png">
</head>

<body>
  
    <div class="container">
        <br><br>
       
       

            <form method="post">
            <div class="text-center"> 
            <img src ="logo.png"
                 width="100">

            </div>

            ``<h3>Create new course</h3>


            <div class="mb-3">

                <label  class="form-label">Course name</label>
                <input type="text" 
                class="form-control"
                name="course_name"
                >

            </div>

            <div class="mb-3">

                <label  class="form-label">Course Description</label>
                <input type="text" 
                class="form-control"
                name="course_description"> 

            </div>

            

          
               
            <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
            <a href="admin_home.php" class="text-decoration-none">Cancel</a>
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