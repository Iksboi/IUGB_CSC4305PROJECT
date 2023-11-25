
<?php
include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';

if(isset($_POST['submit'])) {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $id = generateUniqueTeacherID();;
  



    

    $sql="INSERT INTO `teacher` (username, password, fname, lname,  teacher_creat_date, teacher_id)
    
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
    $query = "SELECT teacher_id FROM teacher WHERE teacher_id = '$id'";
    $result = mysqli_query($con, $query);

    // If the ID already exists, regenerate it
    while (mysqli_num_rows($result) > 0) {
        $id = "90" . sprintf("%04d", rand(0, 9999));
        $result = mysqli_query($con, "SELECT teacher_id FROM teacher WHERE teacher_id = '$id'");
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
<link rel="icon" href="C:\xampp\htdocs\IUGB_CSC4305PROJECT\img\icons\dean.png">
</head>

<body>
  
    <div class="container">
        <br><br>
       
        ``<h3>Add a new teacher</h3>


            <form method="post">
            <div class="text-center"> 
            <img src ="img\icons\dean.png"
                 width="100">

            </div>


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