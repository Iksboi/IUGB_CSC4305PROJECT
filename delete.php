<?php

include'DB_connection.php';
if (isset($_GET['deleteid'])) { 

$id=$_GET['deleteid'];
$sql="delete from `admin` where u_id=$id";
$result=mysqli_query($con,$sql);

if ($result) {
  echo"deletion wa succesfull";

}else{

  die(mysqli_error($con));
}

}

?>