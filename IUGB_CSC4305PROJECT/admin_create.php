
<?php
include 'DB_connection.php';

if(isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $fullname=$_POST['fname'];
    $date_of_birth=$_POST['date_of_birth'];

    $sql="INSERT INTO `admin` (username, password, fname, date_of_birth)
          VALUES ('$username', '$password', '$fullname', '$date_of_birth')";

    $result=mysqli_query($con,$sql);

    if($result){
       echo"data inserted successfully";
    } else {
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User - IUGB</title>
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
    <link rel="icon" href="C:\xampp\htdocs\school management system\img\Logo">
</head>
<body>
  
    <div class="container">
        <br><br>
       
        ``


              <form method="post" >
            <div class="text-center"> 
                <img src ="logo.png"
                            width="100">
            </div>
            <h3>Add a user</h3>

            <div class="mb-3">
                <label  class="form-label">Username</label>
                <input type="text" 
                class="form-control"
                name="username">

            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" 
                class="form-control"
                name="password"> 
            </div>
            <div class="mb-3">
                <label  class="form-label">Fullname</label>
                <input type="text" 
                class="form-control"
                name="fname"> 
            </div>
            <div class="mb-3">
                <label  class="form-label">Date of birth</label>
                <input type="date" 
                class="form-control"
                name="date_of_birth"> 
            </div>
            
               
            <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
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