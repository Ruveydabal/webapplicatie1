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
    ?>



    <div class="container-row">
        <div class="boek-groot-box">
            <div class="boek-groot">
                <img class="afbeelding-boek-groot" src="../img/house-of-hades.webp">
            </div>
            <div class="box-tekst-boek">
                <?php
                    $stm = $connection->prepare("SELECT * FROM producten WHERE id=:id");
                    $stm -> execute(['id' => $_GET ['id']]);
                    $product = $stm -> fetch();

                    echo"<div class='box-tekst-boek'>";
                            echo "<div class='tekst-boek-groot'>";
                            echo $product ['naamschrijver'];
                        echo "</div>";
                        echo "<div class='tekst-boek-groot'>";
                            echo $product ['naam'];
                        echo "</div>";
                        echo "<div class='tekst-boek-groot'>";
                            echo $product ['omschrijving']."<br>\n";
                        echo "</div>";
                        echo "<div class='tekst-boek-groot'>";
                            echo $product ['datum']."<br>\n";
                        echo "</div>";
                    echo"</div>";
                ?>
       
            </div>
        </div>
    </div>
    
</body>
</html>