<?php
$posts = [
    [
        'id' => 1,
        'author_avatar' => './images/first-post/first-avatar.svg',
        'photo' => './images/first-post/first-photo.png',
        'author_name' => 'Ваня Денисов',
        'description' => 'Как красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в гор...»',
        'expand_description' => 'еще',
        'counter_hearts' => 14,
        'time' => '2 часа назад' // пподсчитать , require
    ],
    [
        'id' => 2,
        'author_avatar' => './images/second-post/second-avatar.svg',
        'photo' => './images/second-post/second-photo.jpg',
        'author_name' => 'Артем Антонов',
        'description' => 'Как красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне»',
        'expand_description' => 'еще',
        'counter_hearts' => 120,
        'time' => '2 часа назад'
    ]
];
?>

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
       <div class="tab">
            <div class="tab__menu">
                <img src="./images/icon/house-item.svg" alt="house-item" class="tab__house-item">
                <img src="./images/icon/human-item.svg" alt="human-item" class="tab__human-item">
                <img src="./images/icon/plus-item.svg" alt="plus-item" class="tab__plus-item">
            </div>
        </div>
        <div class="lenta">
            <?php 
                foreach ($posts as $post) {
                    include 'post_preview.php';
                }
            ?>
        </div>
    </body>
</html>