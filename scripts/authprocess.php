<?php
include("database.php");


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];


if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
    header("Location: ../public/register.php?error=empty");
   exit(); 
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../public/register.php?error=invalidemail");
    
    exit();
}

if (isset($_POST["submit"])){
    header("Location: ../public/login.php");
}

$sql = "INSERT INTO talamids (firstname , lastname , email ,password) 
VALUES (? , ? , ? , ?);";

$stmt = mysqli_prepare($conn , $sql);

mysqli_stmt_bind_param($stmt ,"ssss", $prenom, $nom, $email , $password);

mysqli_stmt_execute($stmt);


mysqli_stmt_close($stmt);
mysqli_close($conn); 



?>

