<?php
    session_start();
    include '../required/conn.php';


    $userid = $_POST["id_product"];
    
  
    $stmt = $connection-> prepare("DELETE FROM producten WHERE id=:userid");
    $stmt -> bindParam(":userid", $userid);
    $stmt -> execute();

    header('Location: dashbord.php');
    
?>