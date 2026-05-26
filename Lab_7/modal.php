<div class="modal">     
    <div class="modal__slider">
        <img src="http://localhost/web-2026/lab_7/images\profiles\eight-photo.svg" alt="photo" class="modal__photo">
        <button class="modal__button-left">
            <img src="http://localhost/Web-2026/Lab_7/images/icon/image-button.svg" alt="button-left">
        </button>
        <button class="modal__button-right">
            <img src="http://localhost/Web-2026/Lab_7/images/icon/image-button.svg" alt="button-left">
        </button>
        <div class="modal__counter-photo">
            <span class="modal__counter-current">1</span>
            <span>&nbsp;из&nbsp;</span>
            <span class="modal__counter-max"><?php echo count($post['photos']) ?></span>
        </div>
        <img src="http://localhost/Web-2026/Lab_7/images/icon/cross.svg" alt="close" class="modal__cross">
    </div>
    
</div>