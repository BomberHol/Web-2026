<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>home</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="tab.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    </head>

    <body class="home">
        <?php include 'tab.php'; ?>
        <div class="lenta">
            <?php
                include 'read_databases.php'; 
                $postId = $_GET['id'];
                foreach ($posts as $post) {
                    foreach ($post as $element)
                        if ($element == $postId) {
                            include 'post_preview.php';}
                }
            ?>
        </div>
    </body>
</html>