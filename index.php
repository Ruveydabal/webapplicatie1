<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    
</head>
<body>
    <!-- hier begint de nav -->



<?php
 require "required/conn.php";
 require 'required/nav.php'; 
?>

<!-- hier begint currently reading -->
       
<a href='..\pages\upload.php'>link</a>


        <?php
            
            $stmt = $connection->query("SELECT * FROM producten WHERE id=1");
            while ($row = $stmt->fetch()){
                echo"<div class='box'>";
                    echo"<div class='blok-links'>";   
                        echo"<div class='blok-boek'>"; 
                            echo"<div class='boek'>";
                            echo"<img class='boek' src='../img/house-of-hades.webp'>";
                                echo $row ['afbeelding'];
                            echo"</div>";
                            echo"<div class='boek-box'>";
                                echo"<div class='balk-tekst-boek'>";
                                    echo $row ['naamschrijver'];
                            echo"</div>";
                                echo"<div class='balk-tekst-boek'>";
                                    echo $row ['naam'];
                                echo"</div>";
                                echo"<div class='balk-tekst-boek'>";
                                    echo $row ['omschrijvingkort'];
                                echo"</div>";
                        echo"</div>";
                    echo"</div>";

                    $stmt = $connection->query("SELECT * FROM producten WHERE id=2");
                    while ($row = $stmt->fetch()){
                        echo"<div class='blok-boek'>"; 
                            echo"<div class='boek'>";
                            echo"<img class='boek' src='../img/house-of-hades.webp'>";
                                echo $row ['afbeelding'];
                            echo"</div>";
                            echo"<div class='boek-box'>";
                                echo"<div class='balk-tekst-boek'>";
                                    echo $row ['naamschrijver'];
                                echo"</div>";
                                echo"<div class='balk-tekst-boek'>";
                                    echo $row ['naam'];
                                echo"</div>";
                                echo"<div class='balk-tekst-boek'>";
                                    echo $row ['omschrijvingkort'];
                                echo"</div>";
                            echo"</div>";
                        echo"</div>";
                        echo"</div>";
                       }

            }            


        ?> 

                <div class="blok-boeken-nieuw">
                    <div class="blok-boeken-rechts">
                        <div class="blok-boeken">
                            <div class="blok-foto-boeken">
                                <img class="blok-foto-boeken" src="..\img\boek-pagina's.jpg">
                            </div>
                            <div class="blok-tekst-foto">
                                <div class="balk-tekst">
                                    <a class="tekst7">Most read books of last month</a>
                                </div>
                                <div class="balk-tekst">
                                    <!-- <div class="box-klik">
                                        <a class="tekst8">Klik here</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="blok-boeken-rechts2">
                    <div class="blok-boeken">
                        <div class="blok-foto-boeken2">
                            <img class="blok-foto-boeken2" src="..\img\boeken-stapel.jpg">
                        </div>
                        <div class="blok-tekst-foto2">
                            <div class="balk2-tekst">
                                <a class=tekst7>Recomandations for you</a>
                            </div>
                            <div class="balk2-tekst">
                                <a class=tekst7>Books that we think you would like</a>
                            </div>
                            <div class="balk-tekst3">
                                <!-- <div class="box-klik">
                                    <a class="tekst8">Klik here</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>               
        
<!-- hier begint boeken onder -->
   
        <?php
          $stmt = $connection->query("SELECT * FROM producten WHERE id=1");
          while ($row = $stmt->fetch()){
            echo"<div class='blok-onder'>";
                echo"<div class='balk-onder-box'>";

                    echo"<div class='balk-onder-box'>";
                        echo"<div balk-onder>";
                            echo"<div class='box-onder'>";
                                echo"<div class='box-seen'>";
                                    echo"<div class='tekst9'>";
                                        echo"Books you looked at but did not read";
                                    echo"</div>";
                                echo"</div>";
                                // echo"<div class='box-foto-onder'";
                                     echo "<img class='box-foto-onder' src='..\img\boeken-groep.jpg'>";
                                // echo"</div>";
                             
                            echo"</div>";
                        echo"</div>";
                    echo"</div>";


                        echo"<div class='box-onder2'>";
                            echo"<div class='boek-box'>";
                                echo"<div class='boek'>";
                                echo"<img class='boek' src='../img/house-of-hades.webp'>";
                                echo $row ['afbeelding'];
                                echo"</div>";
                            echo"</div>";

                            echo"<div class='boek-box'>";
                                echo"<div class='balk-tekst-boek'>";
                                    echo $row ['naamschrijver'];
                                echo"</div>";
                                echo"<div class='balk-tekst-boek'>";
                                    echo $row ['naam'];
                                echo"</div>";
                                echo"<div class='balk-tekst-boek'>";
                                    echo $row ['omschrijvingkort'];
                                echo"</div>";
                            echo"</div>";
                        echo"</div>";

                        echo"<div class='box-onder2'>";
                        echo"<div class='boek-box'>";
                            echo"<div class='boek'>";
                            echo"<img class='boek' src='../img/house-of-hades.webp'>";
                            echo $row ['afbeelding'];
                            echo"</div>";
                        echo"</div>";

                        echo"<div class='boek-box'>";
                            echo"<div class='balk-tekst-boek'>";
                                echo $row ['naamschrijver'];
                            echo"</div>";
                            echo"<div class='balk-tekst-boek'>";
                                echo $row ['naam'];
                            echo"</div>";
                            echo"<div class='balk-tekst-boek'>";
                                echo $row ['omschrijvingkort'];
                            echo"</div>";
                        echo"</div>";
                    echo"</div>";
                    echo"</div>";
                echo"</div>";
            echo"</div>";

                    
          }
        ?>


<div class="nav-balk">

</div>

         <!-- <form class='register_form' name="register" method="POST" action="pages/register.php">  
            <h3>Register now!</h3>
            <div class="rows">
                <p>leeftijd</p>
                <input type="text" name="leeftijd">
            </div>
            <div class="rows">
                <p>algemene voorwaarden</p>
                <input type="checkbox" name="av">
            </div>
            <div class="rows">
                <p>geslacht</p>
                <input type="text" name="geslacht">
            </div>
            <div class="rows">
                <input type="submit" name="send">
            </div>

        </form> -->

</body>
</html>