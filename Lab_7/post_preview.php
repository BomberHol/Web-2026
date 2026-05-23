<?php include_once 'timetemp.php'; ?>
<div class="post">
    <span class="post__head-post">
        <span class="post__user-avatar">
            <img src="<?= $user[$post['user_id']]['user_avatar'] ?? null ?>" alt="human" class="post__image-user">
            <a title='Перейти' href='http://localhost/Web-2026/Lab_7/profile.php' class="post__name"><?= $user[$post['user_id']]['user_name'] ?? null ?></a>
        </span>
        <img src="./images/icon/pen.svg" alt="pen" class="post__image-pen">
    </span>
    <div class="post__slider">
        <a title='Перейти' href="http://localhost/web-2026/lab_7/post.php?id=<?= $post['post_id'] ?>" class="post__window">
            <?php foreach ($post['photos'] as $index => $photo): ?>
                <?php if ($index === 0): ?>
                    <img src="<?= $photo ?? null ?>" alt="photo" class="post__photo-visible">
                <?php else: ?>
                    <img src="<?= $photo ?? null ?>" alt="photo" class="post__photo-unvisible">
                <?php endif; ?>
            <?php endforeach; ?>        
        </a>
        <button class="post__button-left">назад</button>
        <button class="post__button-right">вперед</button>
        <span class="post__counter-photo">1/3</span>
    </div>

    <div class="post__likes">
        <img src="./images/icon/heart.svg" alt="heart" class="post__heart">
        <span class="post__counter-hearts"><?= $post['counter_heart'] ?? null ?></span>
    </div>
    <div class="post__description">
        <span class="post__text"><?= $post['post_description'] ?? null ?></span>
        <span class="post__button-open">еще</span>
        
            <?php  if ($post['post_time'] ?? null): ?>
                <span class="post__date"><?= time_ago($post['post_time']) ?></span>
            <?php else: ?>
                <span class="post__date"><?= time_ago(time()) ?></span>
            <?php endif; ?>   
    </div>
</div>