let posts = document.querySelectorAll('.post');

posts.forEach(post => {
    let button = post.querySelector('.post__window');
    const photos = JSON.parse(button.dataset.src);
    let modal = document.querySelector('.modal');
    
    button.addEventListener('click', function() {
        
        let modal_photo = modal.querySelector('.modal__photo');
        let button_left = modal.querySelector('.modal__button-left');
        let button_right = modal.querySelector('.modal__button-right');
        let maxCount_photo = modal.querySelector('.modal__counter-max');
        let counter = modal.querySelector('.modal__counter-current');
        let botton_cross = modal.querySelector('.modal__cross');

        maxCount_photo.textContent = photos.length;
        let current_photo = 0;
        modal_photo.src = photos[0];
        counter.textContent = 1;
        modal.style.display = 'flex';

        if (photos.length > 1) {
            button_left.style.display = 'block';
            button_right.style.display = 'block';
        }
        else {
            button_left.style.display = 'none';
            button_right.style.display = 'none';
        }

        button_left.addEventListener('click', function() {
            let isFound = false;
            for (index = photos.length - 1; index >= 0; index--) {
                if (index === 0 && current_photo === index) {
                    counter.textContent = photos.length;
                    modal_photo.src = photos[photos.length - 1];
                    current_photo = photos.length - 1;
                }
                else if (current_photo === index) {
                    isFound = true;
                }
                else if (isFound) {
                    modal_photo.src = photos[index];
                    current_photo = index;
                    isFound = false;
                    counter.textContent = index + 1;
                }
            }
        });

        button_right.addEventListener('click', function() {
            let isFound = false;
            for (index = 0; index < photos.length; index++) {
                if (index === photos.length - 1 && current_photo === index) {
                    counter.textContent = 1;
                    modal_photo.src = photos[0];
                    current_photo = 0;
                }
                else if (current_photo === index) {
                    isFound = true;
                }
                else if (isFound) {
                    modal_photo.src = photos[index];
                    current_photo = index;
                    isFound = false;
                    counter.textContent = index + 1;
                }
            }
        });

        botton_cross.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                modal.style.display = 'none';
            }
        });
    })

    
})

