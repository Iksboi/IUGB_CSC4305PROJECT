
<!--
    include"../DB_connection.php";

<?php
session_start();
    if(isset($_POST['uname']) &&
    isset($_POST['pass']) 
   )
    { 

    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $role=$_POST['role'];

    if(empty ($uname)){
        $em="Username is required";
        header("Location: ../login.php?error=$em");
        exit;
    
    }
    elseif(empty ($pass)){
        $em="Password is required";
        header("Location: ../login.php?error=$em");
        exit;
    }
    elseif(empty ($role)){
         $em="An error occured";
        header("Location: ../login.php?error=$em");
        exit;
   }
 else{
        if($role=='1'){
        $sql= "SELECT *FROM admin 
                WHERE username=?";
        $role="Admin";
        }elseif($role=='2'){
            $sql= "SELECT *FROM student 
            WHERE username=?";
    $role="Student";
        }elseif($role=='3'){
    
        $sql= "SELECT *FROM teacher 
                WHERE username=?";
        $role="teacher";
        }
        $stmt= $conn->prepare($sql);
        $stmt->execute([$uname]);
        if($stmt->rowCount()==1){
            $user=$stmt->fetch();
            $username=$user['username'];
            $password=$user['password'];
            $fname=$user['fname'];
            $id=$user['id'];
            if($username=== $uname){
                if(password_verify($pass,$password)){
              $_SESSION['id']=$id;
              $_SESSION['fname']=$fname;
              $_SESSION['role']=$role;
              $em="Incorrect Username or Password";
              header("Location: ../home.php");
          exit;
           }else {
            $em="Incorrect Username or Password";
            header("Location: ../login.php?error=$em");
            exit;

        }
    
    }else {
        $em="Incorrect Username or Password";
        header("Location: ../login.php?error=$em");
        exit;


        }
    }
    }}else{
header("Location: ../login.php");
exit;
}
?> -->