<?php
session_start();
require_once 'db.php';
$login = $_POST['login'];
$password = $_POST['password'];


$checkUser = mysqli_query($conn, query: "SELECT * FROM `USERS` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($checkUser) > 0) {
    $user = mysqli_fetch_assoc($checkUser);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['login'],
    ];
}
    

 else{
    header('Location: ../login/.index.php');
    $_SESSION['message'] = 'Неверный логин или пароль';
}
header('Location: ../profile/profile.html');

?>