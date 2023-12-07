<?php
include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';


if(isset($_POST['submit'])) {

$course_id=$_POST['course_id'];
$teacher_id=$_POST['teacher_id'];

$sql="update `course` set teacher_id='$teacher_id' where course_id=$course_id" ;
$result=mysqli_query($con,$sql);

    if($result){

    echo"Assignment was successfull !";
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
<title>Assign course - IUGB</title>
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

         
            <div class="mb-3">

                <label  class="form-label">Which teacher will be assigned  ?</label>
                <input type="text" 
                class="form-control"
                name="teacher_id"
                placeholder="Enter the desired teacher ID "> 

            </div>
        

            </div>

            <div class="mb-3">

                <label  class="form-label">Which course would you like to assign ?</label>
                <input type="text" 
                class="form-control"
                name="course_id"
                placeholder="Enter the desired course ID "> 

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