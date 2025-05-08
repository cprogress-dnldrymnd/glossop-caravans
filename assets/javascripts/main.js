jQuery(document).ready(function () {
    swiper_sliders();
    fancybox();
});

function fancybox() {
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });

    jQuery('.zoom').click(function (e) {
        jQuery(this).next().find('.swiper-slide-active a').click();
        console.log('mama mo');
        e.preventDefault();
    });
}

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
        var $id = 'swiper' + $key;
        jQuery(this).attr('id', $id);
        jQuery(this).find('.swiper-button-next').attr('id', $id + '-next');
        jQuery(this).find('.swiper-button-prev').attr('id', $id + '-prev');
        jQuery(this).find('.swiper-pagination').attr('id', $id + '-pagination');

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
                type: "fraction",
            },
        });
        $key++;
    });
}