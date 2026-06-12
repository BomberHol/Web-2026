{
    // class list toggle
    function classOn(slide) {
        slide.classList.remove('post__photo-unvisible');
        slide.classList.add('post__photo-visible');
    }

    function classOff(slide) {
        slide.classList.remove('post__photo-visible');
        slide.classList.add('post__photo-unvisible');
    }

    let posts = document.querySelectorAll('.post');  // сделать так чтобы при обрработке клика я оращался к родителю и получался картинки

    posts.forEach(post => {
        const slider = post.querySelectorAll('.post__window img');
        let button_left = post.querySelector('.post__button-left');
        let button_right = post.querySelector('.post__button-right');
        let counter_current = post.querySelector('.post__counter-current');
        let counter = post.querySelector('.post__counter-photo');

        if (slider.length > 1) {
            counter.style.display = 'flex';  // тоже через classList
            button_left.style.display = 'block';
            button_right.style.display = 'block';
        }
        else {
            counter.style.display = 'none';  // тоже через classList
            button_left.style.display = 'none';
            button_right.style.display = 'none';
        }

        button_left.addEventListener('click', function() {
            let isFound = false;
            for (index = slider.length - 1; index >= 0; index--) {
                if (index == 0 && slider[index].classList.contains('post__photo-visible')) {
                    classOff(slider[index]);
                    classOn(slider[slider.length - 1]);
                    counter_current.textContent = slider.length;
                }
                else if (slider[index].classList.contains('post__photo-visible')) {
                    classOff(slider[index]);
                    isFound = true;
                }
                else if (isFound) {
                    classOn(slider[index]);
                    isFound = false;
                    counter_current.textContent = index + 1;
                }
            }
        });

        button_right.addEventListener('click', function() {
            let isFound = false;
            for (index = 0; index < slider.length; index++) {
                if (index == slider.length - 1 && slider[index].classList.contains('post__photo-visible')) {
                    classOff(slider[index]);
                    classOn(slider[0]);
                    counter_current.textContent = 1;
                }
                else if (slider[index].classList.contains('post__photo-visible')) {
                    classOff(slider[index]);
                    isFound = true;
                }
                else if (isFound) {
                    classOn(slider[index]);
                    isFound = false;
                    counter_current.textContent = index + 1;
                }
            } 
        });
    })
}

