<?php

    //конект до бд
    session_start();
    require_once 'connect/connect.php';

    //оголошення змінних
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $login_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password' ");
    if (mysqli_num_rows($login_user) > 0){
        
        //перехід на контент
        header('Location: content/content.php');
    }else{
        $_SESSION['message'] = 'Невірний логін або пароль';
        header('Location: index.php');
    }
?>
