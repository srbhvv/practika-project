<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file_path = $_POST['file_path'];

    $file = '../content/files/' . $file_path;
    if (file_exists($file)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        readfile($file);
        exit;
    } else {
        echo 'Помилка: Файл не знайдено';
    }
}
?>
