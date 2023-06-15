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
        
        <!--форма реєстрації-->
        <div class="form-container sign-up-container">
            <form action="register.php" method="post">
                <h1 class="zagolovok">Реєстрація</h1>
                <span>Використовуйте свій E-mail для реєстрації</span>
                <input type="text" placeholder="Name" name="fullname" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder="Password confirm" name="confirm_password" required>
                <button type="submit" class="send">Зареєструватись</button>
                
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
                <h1 class="zagolovok">Ласкаво просимо!</h1>
                <p class="text">Щоб залишатись на зв'язку з нами, будь ласка, увійдіть в систему з вашою особистою інформацією</p>
                <a href="../index.php" class="ghost">Авторизація</a>
            </div>        
    </div>

</div>

</body>
</html>