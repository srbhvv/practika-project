<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Світ документів</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="forma">
    <div class="container-form">
        
        <!--форма авторизації-->
            <div class="form-container sign-in-container">
                <form action="connect_admin.php" method="post">
                    <h1 class="zagolovok">Авторизація</h1>
                    <span>Використовуйте свій акаунт</span>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <button type="submit" class="send">Вхід</button>
                    
                    <!--Повідомлення про помилки-->
                        <?php
                            if($_SESSION['message']){
                                echo '<p class="msg">' .$_SESSION['message'] . '</p>';
                            }
                            unset($_SESSION['message']);
                        ?>
                </form>
            </div>
                
            <!--посилання для реєстрації-->
            <div class="panel panel-right">
                <h1 class="zagolovok">Привіт, Друг!</h1></p>
                <p class="text">Введіть свої особисті дані і почніть мандрувати разом з нами</p>
                <a href="../index.php" class="ghost">Увійти як користувач</a>
            </div>
    </div>
</div>
</body>
</html>