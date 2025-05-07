jQuery(document).ready(function () {
    swiper_sliders();
});

function swiper_sliders() {
    var swiper = new Swiper(".swiper-listing", {
        slidesPerView: 4,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
}