<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to DarkYes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">


        <div class="mainmain">
            <div class="header">
                <div class="logo">
                    <div class="logo1">
                        <img src="Frame 1 (1)11.png" class="imgLogo">
                        <a href="../register/register.php" class="link"><p class="P">Регистрация</p></a>
                    </div>
                </div>
        
        
                <div class="start">
                    <p>Для продолжения Вам необходимо войти DarkYes.</p>
                </div>
            </div>
           
    
    
            <div class="bottom">
                
        
                <div class="login">
                    <form action="../php/signIn.php" method="post" id="form">
                        <p>Логин</p>
                        <input type="text" placeholder="Введите логин" name="login">
                        <p>Пароль</p>
                        <input type="text" placeholder="Введите пароль" name="password">
                    
                </div>
                <br><br>
                <div class="enter">
                    <button class="button">Войти</button>
                    <p>Забыли пароль?</p>
                </div>
            </form>
              
                    <?php

                                                                        
                        if (isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        };


                    ?>
                    <br><br>
            </div>
                  
        </div>
        
    </div>
</body>
</html>