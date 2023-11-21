<?php
session_start();

// Connexion à votre base de données (remplacez les informations par les vôtres)

$con=new mysqli('localhost','root','','sms_db');



if (!$con) {
die("La connexion à la base de données a échoué : " . !$con);
}

// Récupération des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Recherche de l'utilisateur dans les tables correspondantes
$resultAdmin = $con->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
$resultTeacher = $con->query("SELECT * FROM teacher WHERE username='$username' AND password='$password'");
$resultStudent = $con->query("SELECT * FROM student WHERE username='$username' AND password='$password'");

if ($resultAdmin->num_rows > 0) {

header('Location:admin_home.php');
} elseif ($resultTeacher->num_rows > 0) {

header('Location: teacher_home.php');
} elseif ($resultStudent->num_rows > 0) {

header('Location: student_home.php');
} else {
echo "Échec de l'authentification. Veuillez réessayer.";
}

$con->close();
?>