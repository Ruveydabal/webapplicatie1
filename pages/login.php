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
                <div class="login-blok">
                    <div class="login">
                        <div class="login-balk-box">
                            <a class="tekst-login">Login</a>
                        </div>
                        <div class="login-balk-box">
                            <div class="login-balk">
                                <form class="login-background" action="login_logic.php" name='login.logic' method="POST">
                                    <a class="tekst5">Username: </a>
                                    <input class="login-background" type="text" name="username" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="login-balk-box">
                            <div class="login-balk">
                                <a class="tekst5">Password: </a>
                                <input class="login-background" type="password" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="login-balk-box">
                            <div class="login-balk-klein">
                                <a href='register.php'class="tekst5">Sign up </a>
                            </div>
                            <div class="login-balk-klein">
                                <input class="login-background" type="submit" value="login">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </body>
</html>