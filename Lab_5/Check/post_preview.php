<div class="post">
    <span class="post__head-post">
        <img src="<?=$post['img_author']?>" alt="human" class="post__image-user">
        <span class="post__name"><?= $post['author']?></span>
        <img src="./images/icon/pen.svg" alt="pen" class="post__image-pen">
    </span>
    <div class="post__slider-photo">
        <img src="<?=$post['photo']?>" alt="photo" class="post__photo">
        <img src="./images/icon/counter.svg" alt="1/3" class="post__counter-photo">
    </div>
                
    <div class="post__information">
        <div class="post__likes">  
            <img src="./images/icon/heart.svg" alt="heart" class="post__heart">
            <span class="post__counter-hearts">203</span>
        </div>
        <span class="post__description"><?= $post['description'] ?></span>
        <span class="post__button-open">ещё</span>
        <span class="post__date"><?= $post['time'] ?></span>
    </div>
</div>