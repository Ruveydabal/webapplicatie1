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
        require '../required/conn.php';
        require '../required/nav.php';
            $stm = $connection->prepare("SELECT * FROM producten WHERE id=:id");
            $stm -> execute(['id' => $_GET ['id']]);
            $product = $stm -> fetch();
        ?>

        <form action='update_producten_logic.php' name='update_producten_logic' metod="POST">
            <label>Naam van Product</label>
            <input type="text" name="naam" value="<?php echo $product['naam']; ?>" required>
            <label>Id van Product</label>
            <input type="text" name="id" value="<?php echo $product['id']; ?>" required>
            <label>Omschrijving van Product</label>
            <input type="text" name="omschrijving" value="<?php echo $product['omschrijving']; ?>" required>
            <input type="submit" value="update product">
        </form>
    </body>
</html>