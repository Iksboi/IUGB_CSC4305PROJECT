<?php
include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operations</title>
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
    <link rel="icon" href="img\logo\logo.png">
</head>
<body>
    


<div class="container">
<h3>List of  students</h3>
<button  class="btn btn-primary my-5"><a href="student_create.php" class="text-light">Add user</a> </button>
</div>
  <a href="admin_home.php" class="text-decoration-none">Go back to homepage</a>
  </div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Account creation date</th>
      <th scope="col">Last Update </th>
      <th scope="col">Operations</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from `student`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id=$row['student_id'];
            $fullname=$row['fname'];
            $lastname=$row['lname'];
            $username=$row['username'];
            $password=$row['password'];
            $date_of_birth=$row['date_of_birth'];
            $student_creat_date=$row['student_creat_date'];
            $student_update_date=$row['student_update_date'];
            echo
            '<tr> <th scope="row">'.$id.'</th>
            <td>'.$fullname.'</td>
            <td>'.$lastname.'</td>
            <td>'.$username.'</td>
            <td>'.$password.'</td>
            <td>'.$date_of_birth.'</td>
            <td>'.$student_creat_date.'</td>
            <td>'.$student_update_date.'</td>
            <td>
            <button class="btn btn-primary"><a href="update_student.php? updateid='.$id.'" class=text-light >Update</a></button>
            <button class="btn btn-danger"><a href="delete_student.php? deleteid='.$id.'" class=text-light>Delete</a></button>
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