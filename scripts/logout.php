<?php
session_start();

$logoutbtn = $_POST['logout'];

if(isset($logoutbtn)){
session_unset();
session_destroy();
header("Location: ../public/login.php");
}





?>