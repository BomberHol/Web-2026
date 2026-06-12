<?php include_once 'timetemp.php'; ?>
<div class="post">
    <span class="post__head-post">
        <span class="post__user-avatar">
            <img src="<?= $user[$post['user_id']]['user_avatar'] ?? null ?>" alt="human" class="post__image-user">
            <a title='Перейти' href='http://localhost/Web-2026/Lab_7/profile.php' class="post__name"><?= $user[$post['user_id']]['user_name'] ?? null ?></a>
        </span>
        <a href="http://localhost/web-2026/lab_7/post.php?id=<?= $post['post_id'] ?>" class="post__image-pen">
            <img src="./images/icon/pen.svg" alt="pen">
        </a>
    </span>

    <div class="post__slider">
        <!-- сделать через querySelectAll к картинкам добавить атрибут по которому буду их считывать -->
        <a title='Перейти' data-src=<?php echo json_encode($post['photos']) ?> class="post__window">
            <?php foreach ($post['photos'] as $index => $photo): ?>
                <?php if ($index === 0): ?>
                    <img src="<?= $photo ?? null ?>" alt="photo" class="post__photo-visible">
                <?php else: ?>
                    <img src="<?= $photo ?? null ?>" alt="photo" class="post__photo-unvisible">
                <?php endif; ?>
            <?php endforeach; ?>        
        </a>

        <button class="post__button-left">
            <img src="http://localhost/Web-2026/Lab_7/images/icon/image-button.svg" alt="button-left">
        </button>
        <button class="post__button-right">
            <img src="http://localhost/Web-2026/Lab_7/images/icon/image-button.svg" alt="button-left">
        </button>
        <div class="post__counter-photo">
            <span class="post__counter-current">1</span>
            <span class="post__counter-max">/<?php echo count($post['photos']) ?></span>
        </div>
        
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