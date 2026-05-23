
let posts = document.querySelectorAll('.post');

function classOn(slide) {
    slide.classList.remove('post__photo-unvisible');
    slide.classList.add('post__photo-visible');
}

function classOff(slide) {
    slide.classList.remove('post__photo-visible');
    slide.classList.add('post__photo-unvisible');
}

posts.forEach(post => {
    let slider = post.querySelectorAll('.post__window img');
    let button_left = post.querySelector('.post__button-left');
    let button_right = post.querySelector('.post__button-right')


    button_left.addEventListener('click', function() {
        let isFound = false;
        for (index = slider.length - 1; index >= 0; index--) {
            if (index == 0 && slider[index].classList.contains('post__photo-visible')) {
                classOff(slider[index]);
                classOn(slider[slider.length - 1]);
            }
            else if (slider[index].classList.contains('post__photo-visible')) {
                classOff(slider[index]);
                isFound = true;
            }
            else if (isFound) {
                classOn(slider[index]);
                isFound = false;
            }
        }
    });

    button_right.addEventListener('click', function() {
        let isFound = false;
        for (index = 0; index < slider.length; index++) {
            if (index == slider.length - 1 && slider[index].classList.contains('post__photo-visible')) {
                classOff(slider[index]);
                classOn(slider[0]);
            }
            else if (slider[index].classList.contains('post__photo-visible')) {
                classOff(slider[index]);
                isFound = true;
            }
            else if (isFound) {
                classOn(slider[index]);
                isFound = false;
            }
        } 
    });
})

