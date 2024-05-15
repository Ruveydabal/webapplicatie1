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



         <div class="balk-klein">
                <!-- blijft leeg -->
            </div>
        <section class="productRow">
            <?php
                
                $stmt = $connection->query("SELECT * FROM producten ");
                while ($row = $stmt->fetch()){
                    echo "<div class='singleProduct'>";
                        echo"<div class='row'>";
                    
                            echo"<img class='afbeelding' src='../img/house-of-hades.webp'>";
                                echo $row ['afbeelding']."<br>\n"; 
                            echo"</div>";
                            echo"<div class='naam-schrijver'>";
                                echo $row ['naamschrijver']."<br>\n"; 
                                    echo"<div class='naam'>";
                                        echo $row ['naam']."<br>\n";
                                        echo "<a class='tekst-product' href='single_product.php?id=" . $row['id'] . "'>link<a/>";
                                    echo"</div>";  
                                    echo"<div class='tekst-product' class='omschrijving'>";
                                        echo $row ['omschrijving']."<br>\n";
                                    echo"</div>";    
                                    echo"<div class='datum'>";
                                        echo $row ['datum']."<br>\n";
                                    echo"</div>";  
                            echo"</div>";
                        echo"</div>"; 
                    echo "</div>";
                    

                    
                }                 

            ?>
        </div>


    </body>
</html>