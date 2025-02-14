<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to DarkYes</title>
    <link rel="stylesheet" href="regStyle.css">
</head>
<body>
    <div class="main">


        <div class="mainmain">
            <div class="header">
                <div class="logo">
                    <div class="logo1">
                        <img src="Frame 1 (1)11.png" class="imgLogo">
                        <a href="../login/index.php" class="link"><p class="P">Авторизация</p></a>
                    </div>
                </div>
        
        
                <div class="start">
                    <p>Для продолжения Вам необходимо зарегистрироваться DarkYes.</p>
                </div>
            </div>
           
    
    
            <div class="bottom">
                
        
                <div class="login">
                    <form action="../php/signUp.php" method="post" id="form">
                        <p>Логин</p>
                        <input type="text" placeholder="Придумайте логин" name="login" id="log">
                        <p>Пароль</p>
                        <input type="text" placeholder="Придумайте пароль" name="password" id="pass">
                        <p>Повтор пароля</p>
                        <input type="text" placeholder="Повторите пароль" name="repeatpassword"  id="repeat">
                        
                        </div>
                        <br><br
                        >
                        <div class="enter">
                            <button class="button" id="reg">Зарегистрироваться</button>
                            <p>Уже зарегистрированны?</p>
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

<script src="reg.js"></script>
</html>