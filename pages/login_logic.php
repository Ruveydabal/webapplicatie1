<?php
    session_start();
    include '../required/conn.php';


    if (empty($_POST['username']) || empty($_POST['password'])){
        header("Location: login.php");
        exit();
    }
    

    $username = $_POST ["username"];
    $password = $_POST ["password"];

    $stmt = $connection-> prepare("SELECT * FROM users WHERE username=:user AND password=:pass");
    $stmt -> execute(['user' => $username, 'pass' => $password]);
    $user = $stmt->fetch(); 


    
    if (!$user){
        header("Location: login.php");
    }
    else{
        $_SESSION["user"] = $username;
        header ("Location: dashbord.php");
      
    }
?>
