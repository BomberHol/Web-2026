<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>home</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="tab.css">
        <link rel="stylesheet" href="modal.css">
        <script src="slider.js" defer></script>
        <script src="modal.js" defer></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    </head>

    <body class="home">
        <div class="lenta">
            <?php
                include 'read_databases.php'; 
                foreach ($posts as $post) {
                    include 'post_preview.php'; 
                }
            ?>
        </div>
        <?php include 'tab.php'; ?>
        <?php include 'modal.php'; ?>
    </body>
</html>