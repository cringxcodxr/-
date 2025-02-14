<?php
    session_start();
    require_once 'db.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatpassword'];

    if ($password !== $repeatPassword){
        $_SESSION['message'] = 'Пароли не совпадают';
        header( 'Location: ../register/register.php');
    }
    else {
        mysqli_query($conn, "INSERT INTO `USERS` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password')");

        $_SESSION['message'] = 'Вы зарегистрированны';
        header('Location: ../login/index.php');
    }

?>
