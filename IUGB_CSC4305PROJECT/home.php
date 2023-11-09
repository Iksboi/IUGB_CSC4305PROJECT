
<?php 
session_start();
if (isset($_SESSION["id"]) && $_SESSION["role"]){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - IUGB</title>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="logo.png">
</head>
<body class="body-home">
 hello
  <div class="d-flex justify-content-center align-items-center vh-100"></div>
<div class="shadow w-450 p-3 text-center bg-light">
<small>Role: 
    <b>
        <?php
        if($_SESSION['role']=='Admin'){
            echo"Admin";

        }else if($_SESSION['role']== 'Teacher'){
            echo"Teacher";

        }else {
            echo"Student";
        }
        ?>
        </br><br>
        <h3 class="display-4"><?=$_SESSION['fname']?></h3>
        <a href="logout.php" class="btn btn-warning">>
            Log out
        </a>
    </b>   
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js></script>
</body>
</html>

<?php }else {
    header("Location: login.php");
exit;
}
?>