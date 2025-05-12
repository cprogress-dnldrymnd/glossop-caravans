jQuery(document).ready(function () {
    swiper_sliders();
    fancybox();
});

function fancybox() {
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });

    jQuery('.zoom').click(function (e) {
        jQuery(this).next().find('.swiper-slide-active a').addClass('sdsdss');
        jQuery(this).next().find('.swiper-slide-active a').trigger('click');
        console.log('mama mo');
        e.preventDefault();
    });
}

function swiper_sliders() {
    var swiper = new Swiper(".swiper-listing", {

        breakpoints: {
            0: {
                slidesPerView: 'auto',
                spaceBetween: 12,
                freeMode: true,
            },


            992: {
                slidesPerView: 3,
                spaceBetween: 40,
            },

        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    $key = 1;

    if (jQuery('.swiper-thumbnails').length > 0) {

        $height = jQuery('.swiper-gallery').outerHeight();

        jQuery('.swiper-thumbnails').css('height', $height + 'px');

        var swiper_thumb = new Swiper(".swiper-thumbnails", {
            direction: "vertical",
            spaceBetween: 10,
            slidesPerView: 'auto',
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper_gallery = new Swiper('.swiper-gallery', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 0,
            thumbs: {
                swiper: swiper_thumb,
            },
            navigation: {
                nextEl: '.swiper-gallery-next',
                prevEl: '.swiper-gallery-prev',
            },
            pagination: {
                el: '.swiper-gallery-pagination',
                type: "fraction",
            },
        });
        $key++;
    } else {
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
    jQuery('.nav-tabs-swiper .swiper-slide').each(function (index, element) {
        $width = jQuery(this).find('.nav-link').outerWidth();
        jQuery(this).css('width', $width + 'px');
    });
    var swiper_on_mobile = new Swiper('.nav-tabs-swiper', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        freeMode: true,
    });

    if (window.innerWidth < 992) {
        jQuery('.swiper-on-mobile > div').addClass('swiper-on-mobile-js');
        jQuery('.swiper-on-mobile > div > div').addClass('swiper-wrapper');
        jQuery('.swiper-on-mobile > div > div > div').addClass('swiper-slide');
        var swiper_on_mobile = new Swiper('.swiper-on-mobile-js', {
            slidesPerView: 'auto',
            spaceBetween: 12,
            freeMode: true,

        });
    }

}