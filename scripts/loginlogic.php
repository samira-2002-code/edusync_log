<?php
session_start();
include("database.php");

$login_email=$_POST['login_email'];
$login_password=$_POST['login_password'];

$_SESSION['login_email'] = $login_email;


if ( empty($login_email) || empty($login_password)) {
    header("Location: ../public/login.php?error=empty");
   exit();
}








?>