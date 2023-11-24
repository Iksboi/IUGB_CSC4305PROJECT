<?php

include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';
if (isset($_GET['deleteid'])) { 

$id=$_GET['deleteid'];
$sql="delete from `student` where student_id=$id";
$result=mysqli_query($con,$sql);

if ($result) {
  header("location:display_student.php");

}else{

  die(mysqli_error($con));
}

}

?>