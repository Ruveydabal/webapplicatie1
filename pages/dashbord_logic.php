<?php
 session_start();
 include '../required/conn.php';


 if (empty($_POST['username']) || empty($_POST['password'])){
     header("Location: register.php");
     exit();
 }


 

?>
