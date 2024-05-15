<?php
    include '../required/conn.php';
?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0">    
</head>
 
<body>
    <?php
     
    $stmt = $connection->prepare('select * from producten');
    $stmt->execute();
    $imagelist = $stmt->fetchAll();
  
    foreach($imagelist as $image) {
    ?>
        
    <img src="<?=$image['afbeelding']?>"
        title="<?=$image['naam'] ?>"
        width='200' height='200'>
    <?php
    }
    ?> 
</body>
 
</html>
