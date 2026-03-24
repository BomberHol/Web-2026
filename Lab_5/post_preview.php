<div class="post">
    <span class="post__head-post">
        <img src="<?= $post['author_avatar'] ?? null ?>" alt="human" class="post__image-user">
        <a title='Перейти' href='http://localhost:8001/web-2026/lab_5/post.php?<?php foreach ($post as $key => $value) echo "{$key}={$value}&"?>' class="post__name"><?= $post['author_name'] ?? null ?></a>
        <img src="./images/icon/pen.svg" alt="pen" class="post__image-pen">
    </span>
    <div class="post__slider-photo">
        <img src="<?= $post['photo'] ?? null ?>" alt="photo" class="post__photo">
        <img src="./images/icon/counter.svg" alt="1/3" class="post__counter-photo">
    </div>
                
    <div class="post__information">
        <div class="post__likes">  
            <img src="./images/icon/heart.svg" alt="heart" class="post__heart">
            <span class="post__counter-hearts"><?= $post['counter_hearts'] ?? null ?></span>
        </div>
        <span class="post__description"><?= $post['description'] ?? null ?></span>
        <span class="post__button-open"><?= $post['expand_description'] ?? null ?></span>
        <span class="post__date"><?= $post['time'] ?? null ?></span>
    </div>
</div>