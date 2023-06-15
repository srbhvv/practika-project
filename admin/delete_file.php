<?php
require_once '../connect/connect.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Видалити запис про файл з бази даних
    $deleteQuery = "DELETE FROM documents WHERE id = $id";
    mysqli_query($connect, $deleteQuery);

    // Перенаправити на адмін панель
    header('Location: admin_panel.php');
    exit();
} else {
    echo "Помилка: Не вдалося отримати ідентифікатор файлу.";
}
?>
