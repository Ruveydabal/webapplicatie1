<?php
    session_start();

    if(!isset($_SESSION["user"])){
        header("Location: login.php");
        exit();
    }
?>
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
            require('../required/nav.php')
        ?>

       


        <div class="container">
                <div class="delete-blok">
                    <div class="blok-nieuw-boek">
                        <div class="login-balk-box">
                            <a class="tekst-login">Nieuw boek</a>
                        </div>
                        <div class="login-balk-box-groot">
                            <div class="login-balk-groot">
                                <form class="login-background" action='add_books_logic.php'name='add_books_logic' method='POST'>
                                    <a class="tekst5">Boek naam: </a>
                                    <input class="login-background" type="text" name="naam" placeholder='boek naam' required> 
                                <div class="login-background">
                                    <a class='tekst5'>Naam schrijver</a>
                                    <input class="login-background" type='text' name='naamschrijver' placeholder='naam schrijver' required>
                                </div>    
                                <div class="login-background">
                                    <a class='tekst5'>Afbeelding</a>
                                    <input class="login-background" type='text' name='afbeelding' placeholder='afbeelding' required>
                                </div>
                                <div class="login-background">
                                    <a class='tekst5'>Omschrijving</a>
                                    <input class="login-background" type='text' name='omschrijving' placeholder='omschrijving' required>
                                </div>
                                <div class="login-background">
                                    <a class='tekst5'>omschrijving kort: </a>
                                    <input class="login-background" type='text' name='omschrijvingkort' placeholder='omschrijvingkort' required>
                                </div>
                                <div class="login-background">
                                    <a class='tekst5'>datum: </a>
                                    <input class="login-background" type='text' name='datum' placeholder='datum' required>
                                </div>
                                <div class="login-background">
                                    <a class='tekst5'>recensies: </a>
                                    <input class="login-background" type='text' name='recensies' placeholder='recensies' required>
                                </div>
                            </div>
                        </div>
                            <div class="box-delete-boek">
                                <div class="balk-onder-login">
                                    <div class="blok-login-onder">
                                        <input class="nieuw-knop" type='submit' value='Nieuw'>
                                    </div>
                                </div>
                            </div>
                    </div>
                            </form>
            </div> 

                <div class="delete-blok">
                    <div class="blok-delete">
                        <div class="login-balk-box">
                            <a class="tekst-login">delete user</a>
                        </div>
                        <div class="login-balk-box">
                            <div class="login-balk">
                                <form class="login-background" action='user_delete_logic.php' name='user_delete_logic' method='POST'>
                                    <a class="tekst5">Id van user: </a>
                                    <input class="login-background" type="text" name="id_user" placeholder="..." required>
                            </div>
                        </div>
                        <div class="login-balk-box">
                            <div class="login-balk-klein">
                            <input class="login-background" type='submit' value='delete'>
                            </div>
                        </div>
                        </form>
                </div>
        </div>
    </div>

            <div class="div">
                <?php
                    include '../required/conn.php';
                    $stm = $connection->prepare("SELECT * FROM producten");
                    $stm -> execute();
                    $product = $stm-> fetchall();
                    
                    foreach ($product as $row){
                        echo "<div class='balk-update'>";
                            echo "<div class='row-update'>";
                                echo $row['naam'] . "<br>\n";
                            echo "</div>";
                            echo "<div class='row-update'>";
                                echo "<a class='update-background' href='update_producten.php?id=" . $row['id'] . "'>update<a/>" ."<br>\n" ;
                            echo "</div>";
                            echo "<div class='row-update'>";
                                echo "<a class='update-background' href='delete_producten.php?id=" . $row['id'] . "'>delete<a/>" . "<br>\n";
                            echo "</div>";
                        echo "</div>";
                    }
                ?>

            </div>
        

    </body>
</html>