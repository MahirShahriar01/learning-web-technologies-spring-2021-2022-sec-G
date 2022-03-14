<?php 
session_start();
unset($_SESSION['status']);
setcookie('status', 'true', time()-200,'/');
header('location: ../views/login.php');
?>