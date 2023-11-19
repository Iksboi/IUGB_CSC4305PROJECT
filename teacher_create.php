
<?php
include 'DB_connection.php';

if(isset($_POST['submit'])) {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $id = generateUniqueTeacherID();;
  



    

    $sql="INSERT INTO `teacher` (username, password, fname, lname,  teacher_creat_date, u_id)
    
    VALUES ('$username', '$password', '$firstname','$lastname',  NOW(),'$id')";

    $result=mysqli_query($con,$sql);

    if($result){

     header("location:display_teacher.php");
    }
     else 

    {
        die(mysqli_error($con));
    }
}
function generateUniqueTeacherID() {
    // Generate a unique ID of 6 digits starting with '10'
    $id = "90" . sprintf("%04d", rand(0, 9999));

    // Check if the generated ID already exists in the database
    global $con;
    $query = "SELECT u_id FROM teacher WHERE u_id = '$id'";
    $result = mysqli_query($con, $query);

    // If the ID already exists, regenerate it
    while (mysqli_num_rows($result) > 0) {
        $id = "90" . sprintf("%04d", rand(0, 9999));
        $result = mysqli_query($con, "SELECT ut_id FROM teacher WHERE u_id = '$id'");
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
<link rel="icon" href="C:\xampp\htdocs\school management system\img\Logo">
</head>

<body>
  
    <div class="container">
        <br><br>
       
        ``<h3>Add a new teacher</h3>


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
                >

            </div>

            <div class="mb-3">

                <label  class="form-label">Password</label>
                <input type="password" 
                class="form-control"
                name="password"> 

            </div>

            <div class="mb-3">

                <label  class="form-label">First name</label>
                <input type="text" 
                class="form-control"
                name="fname"> 

            </div>
            <div class="mb-3">

                <label  class="form-label">Last name</label>
                <input type="text" 
                class="form-control"
                name="lname"> 

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