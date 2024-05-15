<?php
    session_start();
    include '../required/conn.php';


  $userid = $_POST["id_user"];
    
  
    $stmt = $connection-> prepare("DELETE FROM  users WHERE id=:userid");
    $stmt -> bindParam(":userid", $userid);
    $stmt -> execute();

    header('Location: dashbord.php');
    
?>
