
<?php
include 'DB_connection.php';


$id=$_GET['updateid'];
$sql="select *from `teacher` where u_id=$id ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['fname'];
$lastname=$row['lname'];
$username=$row['username'];
$password=$row['password'];


if(isset($_POST['submit'])) {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    
  
  
    $sql="update `teacher` set username='$username', password='$password', 

    fname='$firstname', lname='$lastname', teacher_update_date=NOW() where u_id=$id" ;

    $result=mysqli_query($con,$sql);

    if($result){

     header("location:display_teacher.php");
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
<title>Update Teacher - IUGB</title>
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
<link rel="icon" href="C:\xampp\htdocs\school management system\img\Logo">
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

            <h3>Add a user</h3>

            <div class="mb-3">

                <label  class="form-label">Username</label>
                <input type="text" 
                class="form-control"
                name="username"
                value=<?php
                echo $username;               
                ?>>

            </div>

            <div class="mb-3">

                <label  class="form-label">Password</label>
                <input type="password" 
                class="form-control"
                name="password"
                value=<?php
                echo $password;               
                ?>> 

            </div>

            <div class="mb-3">

                <label  class="form-label">First name</label>
                <input type="text" 
                class="form-control"
                name="fname"
                value=<?php
                echo $firstname;               
                ?>> 

            </div>
            <div class="mb-3">

                <label  class="form-label">Last name</label>
                <input type="text" 
                class="form-control"
                name="lname"
                value=<?php
                echo $lastname;               
                ?>> 

            </div>
          
            

          
               
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            <a href="index.php" class="text-decoration-none">Cancel</a>
            </form>
                    <br>
                    <div class="text-center text-light">

                        
                       <> Copyright &copy; 2023 International University of Grand Bassam. All rights reserved.  </>
                    </div>
                
                </div>
                </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js></script>
</body>
</html>