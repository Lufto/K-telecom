const carousel = document.getElementById('carousel');
let isDragging = false;
let startX;
let scrollStart;

const getMaxScrollLeft = () => {
    return carousel.scrollWidth - carousel.clientWidth;
};

carousel.addEventListener('wheel', (event) => {
    event.preventDefault();
    const scrollStep = 300; 
    const maxScrollLeft = getMaxScrollLeft();

    if (event.deltaY > 0) {
        carousel.scrollLeft = Math.min(carousel.scrollLeft + scrollStep, maxScrollLeft);
    } else {
        carousel.scrollLeft = Math.max(carousel.scrollLeft - scrollStep, 0);
    }
});

carousel.addEventListener('mousedown', (event) => {
    if (event.button === 0) {
        isDragging = true;
        startX = event.clientX;
        scrollStart = carousel.scrollLeft;
        carousel.style.cursor = 'grabbing';
        event.preventDefault();
    }
});

carousel.addEventListener('mousemove', (event) => {
    if (isDragging) {
        const deltaX = startX - event.clientX;
        const maxScrollLeft = getMaxScrollLeft();

        carousel.scrollLeft = Math.max(0, Math.min(scrollStart + deltaX * 0.8, maxScrollLeft));
    }
});

document.addEventListener('mouseup', () => {
    if (isDragging) {
        isDragging = false;
        carousel.style.cursor = 'grab';
    }
});

let touchStartX = 0;
let touchScrollStart = 0;

carousel.addEventListener('touchstart', (event) => {
    touchStartX = event.touches[0].clientX;
    touchScrollStart = carousel.scrollLeft;
});

carousel.addEventListener('touchmove', (event) => {
    const touchDeltaX = touchStartX - event.touches[0].clientX;
    const maxScrollLeft = getMaxScrollLeft();

    carousel.scrollLeft = Math.max(0, Math.min(touchScrollStart + touchDeltaX * 0.8, maxScrollLeft));
});

carousel.addEventListener('touchend', () => {
    isDragging = false;
});
