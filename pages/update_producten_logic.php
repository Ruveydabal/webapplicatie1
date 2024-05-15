<?php
    include '../required/conn.php';

    $data =[
        'naam' => $_POST['naam'],
        'id' => $_POST['id'],
        'omschrijving' => $_POST['omschrijving']
    ];

    $sql = "UPDATE producten SET naam=:naam, omschrijving=:omschrijving WHERE id=:id";
    $stmt = $connection-> prepare($sql);
    $stmt ->execute($data);

    header('location: dashbord.php');
?>