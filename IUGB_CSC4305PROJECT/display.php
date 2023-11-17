<?php
include 'DB_connection.php';?>

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

<button  class="btn btn-primary my-5"><a href="admin_create.php" class="text-light">Add user</a> </button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Account creation date</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from `admin`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $fname=$row['fname'];
            $username=$row['username'];
            $password=$row['password'];
            $date_of_birth=$row['date_of_birth'];
           
            echo'<th scope="row">'.$id.'</th>
            <td>'.$fname.'</td>
            <td>'.$username.'</td>
            <td>'.$password.'</td>
            <td>'.$date_of_birth.'</td>';

    }
}
    
    
    ?>

    <!--tr>
  
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr-->
  </tbody>
</table>
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