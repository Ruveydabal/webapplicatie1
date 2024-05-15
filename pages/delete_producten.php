<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
    <body>
        <?php  
            include '../required/conn.php';
            include '../required/nav.php';
            $stm = $connection->prepare("SELECT * FROM producten WHERE id=:id");
            $stm -> execute(['id' => $_GET ['id']]);
            $product = $stm -> fetch(); 
        ?>

        <form action='delete_product_logic.php' name='delete_product_logic' method='POST'>
            <label>Id van product: </label>
            <input type='text' name='id_product' value="<?php echo $product['id']; ?>" required>
            <input type='submit' value='delete_product'>
        </form>
    </body>
</html>