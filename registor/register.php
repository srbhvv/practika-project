<?php
    //конект до бд
    session_start();
    require_once '../connect/connect.php';

    //оголошення змінних
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Перевірка правильності написання електронної пошти
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = 'Помилка реєстрації: неправильний формат електронної пошти';
        header('Location: index_sign.php');
        exit();
    }

    // Перевірка, чи пошта вже зареєстрована
    $email_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
    if (mysqli_num_rows($email_user) > 0){
        $_SESSION['message'] = 'Помилка реєстрації: дана пошта вже зареєстрована';
        header('Location: index_sign.php');
    }else{
        
        //перевірка на співпадіння пароля
        if($password === $confirm_password){
    
            //хешування пароля
            $password = md5($password);
            
            //додавання даних
            mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$fullname', '$email', '$password')"); 
            
            //перехід на контент
            header('Location: ../content/content.php');
    
        }else{
            $_SESSION['message'] = 'Паролі не співпадають';
            header('Location: index_sign.php');
        }
    }
?>