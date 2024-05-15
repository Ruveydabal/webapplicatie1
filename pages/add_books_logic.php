<?php
    session_start();
    include '../required/conn.php';


    // if (empty($_POST['boeknaam']) || empty($_POST['password'])){
    //     header("Location: add_books.php");
    //     exit();
    // }
    

    $naam = $_POST["naam"];
    $naamschrijver = $_POST["naamschrijver"];
    $afbeelding = $_POST["afbeelding"];
    $omschrijving = $_POST["omschrijving"];
    $omschrijvingkort = $_POST["omschrijvingkort"];
    $datum = $_POST["datum"];
    $recensies = $_POST["recensies"];

    $stmt = $connection-> prepare("INSERT INTO producten ( naam, naamschrijver, afbeelding, omschrijving, omschrijvingkort, datum, recensies ) VALUES (:naam, :naamschrijver, :afbeelding, :omschrijving, :omschrijvingkort, :datum, :recensies ) ");
    $stmt -> bindParam(":naam", $naam);
    $stmt -> bindParam(":naamschrijver", $naamschrijver);
    $stmt -> bindParam(":afbeelding", $afbeelding);
    $stmt -> bindParam(":omschrijving", $omschrijving);
    $stmt -> bindParam(":omschrijvingkort", $omschrijvingkort);
    $stmt -> bindParam(":datum", $datum);
    $stmt -> bindParam(":recensies", $recensies);
    $stmt -> execute();
   header('Location: dashbord.php');


    
?>
