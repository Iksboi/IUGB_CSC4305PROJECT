<?php

include'DB_connection.php';
if (isset($_GET['deleteid'])) { 

$id=$_GET['deleteid'];
$sql="delete from `admin` where u_id=$id";
$result=mysqli_query($con,$sql);

if ($result) {
  header("location:display.php");

}else{

  die(mysqli_error($con));
}

}

?>