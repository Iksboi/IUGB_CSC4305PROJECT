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
    <link rel="icon" href="C:\xampp\htdocs\school management system\img\Logo">
</head>
<body>
    


<div class="container">
<h3>List of Admin</h3>
<button  class="btn btn-primary my-5"><a href="admin_create.php" class="text-light">Add user</a> </button>

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
    $sql="Select * from `admin`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id=$row['u_id'];
            $fullname=$row['fname'];
            $lastname=$row['lname'];
            $username=$row['username'];
            $password=$row['password'];
            $date_of_birth=$row['date_of_birth'];
            $admin_creat_date=$row['admin_creat_date'];
            $admin_update_date=$row['admin_update_date'];
            echo
            '<tr> <th scope="row">'.$id.'</th>
            <td>'.$fullname.'</td>
            <td>'.$lastname.'</td>
            <td>'.$username.'</td>
            <td>'.$password.'</td>
            <td>'.$date_of_birth.'</td>
            <td>'.$admin_creat_date.'</td>
            <td>'.$admin_update_date.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class=text-light >Update</a></button>
            <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class=text-light>Delete</a></button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js></script>
</body>
</html>