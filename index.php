<?php session_start(); /* Starts the session */
if(!isset($_SESSION['udata']['uname'])){
header("location:login.php");
exit;
}
?>

Welcome! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.