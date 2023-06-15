<?php
    //конект до бд
    
    $connect = mysqli_connect('localhost', 'root', '', 'practuka');

    if(!$connect){
        die('Помилка підключення до бази даних');
    }
    