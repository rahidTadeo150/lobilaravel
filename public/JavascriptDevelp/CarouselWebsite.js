const ContainerCarousel = document.querySelector('#ContainerCarousel');
const ContainerImageCarousel = document.querySelector('#ContainerImageCarousel');
const ContainerIndicator = document.querySelector('#ContainerIndicator');
const ContainerCarouselSlide = document.querySelector('#ContainerCarouselSlide');
const NextCarousel = document.querySelector('#NextCarousel');
const PreviousCarousel = document.querySelector('#PreviousCarousel');
let FirstLoaded = true;
const interval = 10000;
let autoCarousel;

if(FirstLoaded) {
    console.log('masuk loaded');
    ShowSlider('default');
    FirstLoaded = false;
    startAutoCarousel();
}
NextCarousel.addEventListener('click', () => {
    ShowSlider('next');
    resetAutoCarousel();
});
PreviousCarousel.addEventListener('click', () => {
    ShowSlider('prev');
    resetAutoCarousel();
});

function resetAutoCarousel() {
    stopAutoCarousel();
    startAutoCarousel();
}
function startAutoCarousel() {
    autoCarousel = setInterval(() => {
        ShowSlider('next');
    }, interval);
}

function stopAutoCarousel() {
    clearInterval(autoCarousel);
}

function ShowSlider(type) {
    let CarouselContent = document.querySelectorAll('#CarouselContent');
    let HighlightImg = document.querySelectorAll('#HighlightImg');
    let IndicatorCarousel = document.querySelectorAll('#IndicatorCarousel');
    let CarouselSlide = document.querySelectorAll('#CarouselSlide');
    if(type === 'next') {
        ContainerCarousel.appendChild(CarouselContent[0]);
        ContainerImageCarousel.appendChild(HighlightImg[0]);
        ContainerCarouselSlide.appendChild(CarouselSlide[0]);
        ContainerIndicator.prepend(IndicatorCarousel[IndicatorCarousel.length - 1]);
        setTimeout(() => {
            HighlightImg[1].classList.replace('hidden', 'CarouselImageAnimation');
            HighlightImg[0].classList.replace('CarouselImageAnimation', 'hidden');
            CarouselContent[1].classList.replace('hidden', 'CarouselContentAnimation');
            CarouselContent[0].classList.replace('CarouselContentAnimation', 'hidden');
        }, 10);
    } else if(type === 'prev') {
        ContainerCarousel.prepend(CarouselContent[CarouselContent.length - 1]);
        ContainerImageCarousel.prepend(HighlightImg[HighlightImg.length - 1]);
        ContainerCarouselSlide.prepend(CarouselSlide[CarouselSlide.length - 1]);
        ContainerIndicator.appendChild(IndicatorCarousel[0]);
        setTimeout(() => {
            HighlightImg[CarouselContent.length - 1].classList.replace('hidden', 'CarouselImageAnimation');
            HighlightImg[0].classList.replace('CarouselImageAnimation', 'hidden');
            CarouselContent[CarouselContent.length - 1].classList.replace('hidden', 'CarouselContentAnimation');
            CarouselContent[0].classList.replace('CarouselContentAnimation', 'hidden');
        }, 10);
    } else {
        document.addEventListener("DOMContentLoaded", function () {
            CarouselContent[0].classList.replace('hidden', 'CarouselContentAnimation');
            HighlightImg[0].classList.replace('hidden', 'CarouselImageAnimation');
        });
    }
}
