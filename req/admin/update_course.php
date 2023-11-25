
<?php
include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';

$course_id=$_GET['updateid'];
$sql="select *from `course` where course_id=$course_id ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$course_name=$row['course_name'];
$course_description=$row['course_description'];



if(isset($_POST['submit'])) {
    $course_name=$_POST['course_name'];
    $course_description=$_POST['course_description'];
    
  
  
    $sql="update `course` set course_name='$course_name',course_description='$course_description', course_update_date=NOW() where course_id=$course_id" ;

    $result=mysqli_query($con,$sql);

    if($result){

     header("location:display_course.php");
    }
     else 

    {
        die(mysqli_error($con));
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update course - IUGB</title>
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
<link rel="icon" href="img\logo\logo.png">
</head>

<body>
  
    <div class="container">
        <br><br>
       
        ``


            <form method="post">
            <div class="text-center"> 
            <img src ="logo.png"
                 width="100">

            </div>

            <h3>Edit a course</h3>

            <div class="mb-3">

                <label  class="form-label">Course name</label>
                <input type="text" 
                class="form-control"
                name="course_name"
                value=<?php
                echo $course_name;               
                ?>>

            </div>

            <div class="mb-3">

                <label  class="form-label">Course description</label>
                <input type="text" 
                class="form-control"
                name="course_description"
                value=<?php
                echo $course_description;               
                ?>> 

            </div>

    
          
               
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
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