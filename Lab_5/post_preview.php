
<div class="post">
    <span class="post__head-post">
        <span class="post__user-avatar">
            <img src="<?= $post['author_avatar'] ?? null ?>" alt="human" class="post__image-user">
            <a title='Перейти' href='http://localhost/Web-2026/Lab_5/profile.php' class="post__name"><?= $post['author_name'] ?? null ?></a>
        </span>
        <img src="<?= $post['icon-pen'] ?? null ?>" alt="pen" class="post__image-pen">
    </span>
    <div class="post__slider">
        <a title='Перейти' href="http://localhost/web-2026/lab_5/post.php?id=<?= $post['id'] ?>">
            <img src="<?= $post['photo'] ?? null ?>" alt="photo" class="post__photo">
        </a>
        <?php if ($post['counter-photos'] ?? null): ?>
            <span class="post__counter-photo"><?= $post['counter-photos'] ?></span>
        <?php endif; ?>
    </div>

    <div class="post__likes">
        <img src="<?= $post['image-heart'] ?? null ?>" alt="heart" class="post__heart">
        <span class="post__counter-hearts"><?= $post['counter_hearts'] ?? null ?></span>
    </div>
    <div class="post__description">
        <span class="post__text"><?= $post['description'] ?? null ?></span>
        <span class="post__button-open"><?= $post['expand_description'] ?? null ?></span>
        <span class="post__date"><?= $post['time'] ?? null ?></span>
    </div>
</div>