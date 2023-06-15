<?php

    //конект до бд
    session_start();
    require_once '../connect/connect.php';

// Отримання даних з форми
$title = $_POST['title'];
$file_path = $_FILES['document']['name'];

// Завантаження файлу на сервер
$target_directory = "../content/files/"; // Директорія для зберігання завантажених файлів
$target_file = $target_directory . basename($_FILES['document']['name']); // Шлях до завантаженого файлу

// Переміщення завантаженого файлу в цільову директорію
if (move_uploaded_file($_FILES['document']['tmp_name'], $target_file)) {
    // Завантаження файлу успішне

    // Запис даних у базу даних
    $sql = "INSERT INTO documents (title, file_path) VALUES ('$title', '$file_path')";
    if ($connect->query($sql) === TRUE) {
        header('Location: admin_panel.php');
    } else {
        echo "Помилка запису даних в базу даних: ";
    }
} else {
    echo "Помилка завантаження файлу.";
}

// Закриття з'єднання з базою даних
$connect->close();

?>