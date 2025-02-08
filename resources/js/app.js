import './bootstrap';

/* Carousel Scripts */ 
const carousel = document.getElementById('mainCarousel');
const items = document.querySelectorAll('.carousel-item');
let currentItem = 0;
let isActive = true;

let banner1Timer = setInterval(() => {
    changeBanner1(items, 'to-left', 'from-right');
}, 4000);

function setCurrentItem(index) {
    currentItem = (index + items.length) % items.length;
}

function hideItem(direction) {
    isActive = false;
    items[currentItem].classList.add(direction);
    items[currentItem].addEventListener('animationend', function() {
        this.classList.remove('active', direction);
    });
}

function showItem(direction) {
    items[currentItem].classList.add('next', direction);
    items[currentItem].addEventListener('animationend', function() {
        this.classList.remove('next', direction);
        this.classList.add('active');
        isActive = true;
    });
}

document.getElementById('carouselPrev').addEventListener('click', function(e) {
    e.preventDefault()
    changeBanner1(items, 'to-right', 'from-left');
    
});

document.getElementById('carouselNext').addEventListener('click', function(e) {
    e.preventDefault()
    changeBanner1(items, 'to-left', 'from-right');
});

function changeBanner1(items, direction1, direction2) {
    if (isActive) {
        hideItem(direction1);
        setCurrentItem(currentItem - 1);
        showItem(direction2);
    }
}

carousel.addEventListener("mouseenter", function(){
    clearInterval(banner1Timer);
});

carousel.addEventListener("mouseleave", function(){
    banner1Timer = setInterval(() => {
        changeBanner1(items, 'to-left', 'from-right');
    }, 4000);
});
