
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


 <?php
include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course list</title>
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
    <link rel="icon" href="img\logo\logo.png">
</head>
<body>
    
<br>

<div class="container">
<h3>List of courses assigned</h3>

</div>
  <a href="teacher_home.php" class="text-decoration-none">Go back to homepage</a>
  </div>

<table class="table">
  <thead>
    <tr>
  
      <th scope="col">Course ID</th>
      <th scope="col">Course name</th>
      <th scope="col">Course description</th>
   
    
    </tr>
  </thead>
  <tbody>
    <?php
    
    $sql="Select * from `course` where teacher_id=$teacher_id";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $course_id=$row['course_id'];
            $course_name=$row['course_name'];
            $course_description=$row['course_description'];
          
            echo
            '<tr> <th scope="row">'. $course_id.'</th>
            <td>'.$course_name.'</td>
            <td>'.$course_description.'</td>
      
         
            <td>
            

              <a href="view_student.php?course_id='.$course_id.'" class="btn btn-primary text-light">View Students</a>

            </td>
            
                  <tr>';    

    }

}
?>
     </tbody>
  
    


</div> 


</body>
<div class="text-center text-light">
                        
                        <> Copyright &copy; 2023 International University of Grand Bassam. All rights reserved.  </>
                    </div>
                
                </div>
                </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 

