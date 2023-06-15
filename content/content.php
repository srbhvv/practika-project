<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Світ документів</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="shapka">
                <div class="logo_img"><img src="photo/logo.png" alt="logo"></div>
                <p class="logo_text">Зразки наказів та інших кадрових документів</p>
                <a href="http://practica/index.php" class="exit">ВИЙТИ</a>
            </div>
        </div>
    </header>

    <section class="section-1">
        <div class="container">
            <div class="section_content">
                <p class="section_text">Зразки наказів та інших документів з кадрового діловодства (безплатно)</p>

                <div class="documents">
                    <ul class="document-list">
                        <?php
                        require_once '../connect/connect.php';

                        $query = "SELECT * FROM documents";
                        $result = mysqli_query($connect, $query);

                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <li class="document">
                                <p class="document-text"><?php echo $row['title']; ?></p>
                                <div class="document-button">
                                    <a href="../content/files/<?php echo $row['file_path']; ?>" class="view" target="_blank">переглянути</a>
                                    <form method="POST" action="download_file.php">
                                        <input type="hidden" name="file_path" value="<?php echo $row['file_path']; ?>">
                                        <button type="submit" class="download">скачати</button>
                                    </form>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer_content">
                <div class="logo_footer">
                    <img src="photo/logo_footer.png" alt="">
                </div>
                <div class="footer-text">
                    <p class="footer-text-1">© 2020-2023 «Світ документів»</p>
                    <p class="footer-text-1">Всі права захищені</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
