<?php

include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';
if (isset($_GET['deleteid'])) { 

$course_id=$_GET['deleteid'];
$sql="delete from `course` where course_id=$course_id";
$result=mysqli_query($con,$sql);

if ($result) {
  header("location:display_course.php");

}else{

  die(mysqli_error($con));
}

}

?>