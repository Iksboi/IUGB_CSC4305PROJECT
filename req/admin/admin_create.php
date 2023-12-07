
<?php

include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';

if(isset($_POST['submit'])) {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $date_of_birth=$_POST['date_of_birth'];
    $id = generateUniqueAdminID();
  



    

    $sql="INSERT INTO `admin` (username, password, fname, lname, date_of_birth, admin_creat_date, u_id)
    
    VALUES ('$username', '$password', '$firstname','$lastname', '$date_of_birth', NOW(),'$id')";

    $result=mysqli_query($con,$sql);

    if($result){

     header("location:display.php");
    }
     else 

    {
        die(mysqli_error($con));
    }
}
function generateUniqueAdminID() {
    // Generate a unique ID of 6 digits starting with '10'
    $id = "80" . sprintf("%04d", rand(0, 9999));

    // Check if the generated ID already exists in the database
    global $con;
    $query = "SELECT u_id FROM admin WHERE u_id = '$id'";
    $result = mysqli_query($con, $query);

    // If the ID already exists, regenerate it
    while (mysqli_num_rows($result) > 0) {
        $id = "80" . sprintf("%04d", rand(0, 9999));
        $result = mysqli_query($con, "SELECT ut_id FROM admin WHERE u_id = '$id'");
    }

    return $id;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add User - IUGB</title>
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
<link rel="icon" href="img\logo\logo.png">
</head>

<body>
  
    <div class="container">
        <br><br>
       
        ``<h3>Add a new Admin</h3>


            <form method="post">
            <div class="text-center"> 
            <img src ="logo.png"
                 width="100">

            </div>

            <h3>Add an admin</h3>

            <div class="mb-3">

                <label  class="form-label">Username</label>
                <input type="text" 
                class="form-control"
                name="username"
                required
                >

            </div>

            <div class="mb-3">

                <label  class="form-label">Password</label>
                <input type="password" 
                class="form-control"
                name="password"
                required> 

            </div>

            <div class="mb-3">

                <label  class="form-label">First name</label>
                <input type="text" 
                class="form-control"
                name="fname" required> 

            </div>
            <div class="mb-3">

                <label  class="form-label">Last name</label>
                <input type="text" 
                class="form-control"
                name="lname" required> 

            </div>
            <div class="mb-3">

                <label  class="form-label">Date of birth</label>
                <input type="date" 
                class="form-control"
                name="date_of_birth" required> 

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