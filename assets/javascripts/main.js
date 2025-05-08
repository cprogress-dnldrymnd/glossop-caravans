jQuery(document).ready(function () {
    swiper_sliders();
});

function swiper_sliders() {
    var swiper = new Swiper(".swiper-listing", {
        slidesPerView: 3,
        spaceBetween: 40,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    $key = 1;
    jQuery('.swiper-gallery').each(function (index, element) {
        var $id = 'swiper-gallery-' + $key;
        jQuery(this).attr('id', $id);
        jQuery(this).find('.swiper-button-next').attr('id', $id + '-next');
        jQuery(this).find('.swiper-button-prev').attr('id', $id + '-prev');
        jQuery(this).find('.swiper-pagination-team').attr('id', $id + '-pagination');

        var $id = new Swiper('#' + $id, {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 0,
            navigation: {
                nextEl: '#' + $id + '-next',
                prevEl: '#' + $id + '-prev',
            },
            pagination: {
                el: '#' + $id + '-pagination',
                clickable: true,
            },
        });
        $key++;
    });
}