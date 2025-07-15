jQuery(document).ready(function () {
    swiper_sliders();
    fancybox();
    mega_menu();
    search_stock();
    listings();
    read_more();
});


function read_more() {
    jQuery('.read-more-button').click(function (e) {
        jQuery('.read-more-content').removeClass('d-none');
        jQuery(this).addClass('d-none');
        e.preventDefault();
    });
}

function listings() {
    if (jQuery('.nav-tabs-js').length > 0) {
        jQuery('.nav-tabs-js .nav-item:first-child .nav-link').click();
    }
}
function search_stock() {
    jQuery('.edit-stock-filter').click(function (e) {
        jQuery(this).parents('.search-stock-mobile').toggleClass('filter--active');
        e.preventDefault();

    });
}
function mega_submenu() {
    jQuery('#Motorhomes-Submenu').appendTo('.Motorhomes-Submenu');
    jQuery('#Caravans-Submenu').appendTo('.Caravans-Submenu');
    jQuery('#Export-Submenu').appendTo('.Export-Submenu');

    let highestHeight = 0;
    let highestElement = null;

    jQuery('.custom-submenu').each(function () {
        const currentHeight = jQuery(this).outerHeight(); // Use .outerHeight() to include padding and border

        if (currentHeight > highestHeight) {
            highestHeight = currentHeight;
            highestElement = jQuery(this).outerHeight();
        }
    });
    jQuery('body').css('--mega-menu-height', highestElement + 'px');
}

jQuery(window).scroll(function () {
    if (jQuery('#announcement-bar').length > 0) {
        // Select the element you want to track
        var $element = jQuery('#masthead'); // Replace '#yourElementId' with your element's actual ID or class

        // Get the element's position relative to the document
        var elementOffset = $element.offset().top;

        // Get the current scroll position of the window
        var scrollPosition = jQuery(window).scrollTop();

        // Calculate the element's position relative to the viewport top
        // If the element is above the viewport, this will be negative.
        // If the element is at the very top of the viewport, this will be 0.
        // If the element is below the viewport, this will be positive.
        var elementDistanceFromViewportTop = elementOffset - scrollPosition;

        console.log("Element's distance from viewport top:", elementDistanceFromViewportTop);
    }
});
function mega_menu() {
    mega_submenu();

    $height = jQuery('#main-header').outerHeight();
    $main_header_inner_height = jQuery('#main-header > div').outerHeight();
    $admin_bar = jQuery('#wpadminbar').outerHeight();
    jQuery('body').css('--header-height', $height + 'px');
    jQuery('body').css('--header-inner-height', $main_header_inner_height + 'px');
    if (jQuery('#wpadminbar').length > 0) {
        jQuery('body').css('--admin-bar-height', $admin_bar + 'px');

    }
    if (window.innerWidth > 991) {
        jQuery('.has-custom-submenu').hover(function () {
            jQuery('body').addClass('mega-menu-active');
        }, function () {
            jQuery('body').removeClass('mega-menu-active');
        });
    } else {

        jQuery('.has-custom-submenu a').click(function (e) {
            jQuery(this).parent().toggleClass('active');
            e.preventDefault();
        });
        jQuery('.group-submenu-mobile > p').click(function (e) {
            jQuery(this).parent().toggleClass('active');
            e.preventDefault();
        });
    }



}

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
                spaceBetween: 20,
            },

        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    $key = 1;

    if (jQuery('.swiper-thumbnails').length > 0) {

        if (window.innerWidth > 991) {
            $height = jQuery('.swiper-gallery').outerHeight();

            jQuery('.swiper-thumbnails').css('height', $height + 'px');
            var swiper_thumb = new Swiper(".swiper-thumbnails", {
                direction: "vertical",
                spaceBetween: 10,
                slidesPerView: 'auto',
                freeMode: true,
                watchSlidesProgress: true,
            });
        } else {
            var swiper_thumb = new Swiper(".swiper-thumbnails", {
                spaceBetween: 5,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
            });
        }



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
        jQuery('.swiper-on-mobile').addClass('swiper swiper-on-mobile-js');
        jQuery('.swiper-on-mobile > *').addClass('swiper-wrapper');
        jQuery('.swiper-on-mobile > * > *').addClass('swiper-slide');
        var swiper_on_mobile = new Swiper('.swiper-on-mobile-js', {
            slidesPerView: 'auto',
            spaceBetween: 12,
            freeMode: true,

        });
    }
    if (window.innerWidth < 992) {
        jQuery('.swiper-on-mobile-2').addClass('swiper swiper-on-mobile-2-js');
        jQuery('.swiper-on-mobile-2 > *').addClass('swiper-wrapper');
        jQuery('.swiper-on-mobile-2 > * > *').removeClass().addClass('swiper-slide');
        jQuery('<div class="swiper-button-next"></div><div class="swiper-button-prev"></div>').appendTo('.swiper-on-mobile-2');
        var swiper_on_mobile2 = new Swiper('.swiper-on-mobile-2-js', {
            slidesPerView: 1,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }
    if (jQuery('.swiper-hero-slider').length > 0) {

        jQuery('<div class="swiper-button-next swiper-button"></div><div class="swiper-button-prev swiper-button"></div>').appendTo('.swiper-hero-slider');
        var swiper_hero_slider = new Swiper('.swiper-hero-slider', {
            slidesPerView: 1,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }


}