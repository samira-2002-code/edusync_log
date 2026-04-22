<?php
include("database.php");


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];


if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
    header("Location: ../public/register.php?error=empty");
   exit(); 
}else {
   
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../public/register.php?error=invalidemail");
    
    exit();
}

echo $email . "<br>";
echo $password . "<br>";
echo $nom . "<br>";
echo $prenom . "<br>";



?>

