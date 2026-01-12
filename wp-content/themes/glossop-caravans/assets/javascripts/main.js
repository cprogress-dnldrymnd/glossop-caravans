jQuery(window).scroll(function () {
    console.log('xx2');
    // 1. Get how much the window is scrolled
    var scrollPosition = jQuery(window).scrollTop();

    // 2. Get the element's fixed position on the page
    var elementOffset = $target.offset().top;

    // 3. Calculate distance from the top of the viewport
    var distanceFromTop = elementOffset - scrollPosition;

    console.log("Distance from viewport top: " + distanceFromTop + "px");

    // Example: Do something when it hits the top
    if (distanceFromTop <= 0) {
        console.log("Element has hit the top!");
    }
});
jQuery(document).ready(function () {
    swiper_sliders();
    fancybox();
    mega_menu();
    search_stock();
    listings();
    read_more();
    header_distance();
    margin__Left();
    fixed_menu_link_mobile();
    match_height();
    toggleBtn_func();
});

function toggleBtn_func() {

    jQuery(".toggleBtn a").on("click", function () {
        jQuery('#toggleBtn').trigger('click');
        console.log('xxx');
    });
}

function match_height() {
    jQuery('.loop-mh .nav-link').click(function (e) {
        setTimeout(function () {
            matchHeights(jQuery('.loop-mh .tab-pane.active .post--title'));
            matchHeights(jQuery('.loop-mh .tab-pane.active .post--excerpt'));
        }, 500);
    });
}


function matchHeights(selector) {
    let maxHeight = 0;

    // Iterate through each element to find the maximum height
    jQuery(selector).each(function () {
        // Use .outerHeight() to include padding and border in the calculation
        const currentHeight = jQuery(this).outerHeight();
        if (currentHeight > maxHeight) {
            maxHeight = currentHeight;
        }
    });

    // Set all elements to the calculated maximum height
    jQuery(selector).height(maxHeight);
}

function fixed_menu_link_mobile() {
    if (window.innerWidth < 992) {
        jQuery('li.wp-block-navigation-item:not(.has-custom-submenu) .wp-block-navigation-item__content').click(function (e) {
            $href = jQuery(this).attr('href');
            $target = jQuery(this).attr('target');
            if ($target == '_blank') {
                window.open($href, '_blank').focus();
            } else {
                window.location.href = $href;
            }
            e.preventDefault();
        });
    }
}

function margin__Left() {
    $margin = jQuery('#main-header > div').css('margin-left');
    jQuery('body').css('--margin', $margin);
}


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
        setTimeout(function () {
            matchHeights(jQuery('.loop-mh .tab-pane.active .post--title'));
            matchHeights(jQuery('.loop-mh .tab-pane.active .post--excerpt'));
        }, 100);
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
    jQuery('#Awnings-Submenu').appendTo('.Awnings-Submenu');

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
    header_distance();
});

function header_distance() {
    var $element = jQuery('#masthead');
    var elementOffset = $element.offset().top;
    var scrollPosition = jQuery(window).scrollTop();
    var elementDistanceFromViewportTop = elementOffset - scrollPosition;
    jQuery('body').css('--header-distance', elementDistanceFromViewportTop + 'px');
}
function mega_menu() {
    mega_submenu();

    $height = jQuery('#main-header').outerHeight();
    $main_header_inner_height = jQuery('#main-header > div').outerHeight();
    jQuery('body').css('--header-height', $height + 'px');
    jQuery('body').css('--header-inner-height', $main_header_inner_height + 'px');

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


    var $target = jQuery('#main-header');


}

function fancybox() {
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });

    jQuery('.zoom').click(function (e) {
        jQuery(this).next().find('.swiper-slide-active a').addClass('sdsdss');
        jQuery(this).next().find('.swiper-slide-active a').trigger('click');
        e.preventDefault();
    });
}

function swiper_sliders() {
    var swiper = new Swiper(".swiper-listing", {
        loop: true, // Add this line
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



        //       var swiper_gallery = new Swiper('.swiper-gallery', {
        //     loop: false,
        //     slidesPerView: 1,
        //     spaceBetween: 0,
        //     preloadImages: false, // must be false for lazy loading
        //     lazy: {
        //         loadPrevNext: true,
        //         loadPrevNextAmount: 1,
        //         checkInView: true,
        //     },
        //     thumbs: { swiper: swiper_thumb },
        //     navigation: {
        //         nextEl: '.swiper-gallery-next',
        //         prevEl: '.swiper-gallery-prev',
        //     },
        //     pagination: {
        //         el: '.swiper-gallery-pagination',
        //         type: 'fraction',
        //     },
        //     watchSlidesVisibility: true,
        //     watchSlidesProgress: true,
        //     on: {
        //         init: function () {
        //             this.lazy.load(); // force load first visible slide
        //         },
        //         slideChange: function () {
        //             this.lazy.load(); // force load next slides
        //         },
        //     },
        // });
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
            autoplay: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }
    // if (jQuery('.swiper-hero-slider').length > 0) {
    //     jQuery('.swiper-hero-slider img').removeAttr('srcset');
    //     jQuery('<div class="swiper-button-next swiper-button"></div><div class="swiper-button-prev swiper-button"></div>').appendTo('.swiper-hero-slider');
    //     var swiper_hero_slider = new Swiper('.swiper-hero-slider', {
    //         slidesPerView: 1,
    //         loop: true,
    //         allowTouchMove: false,
    //         navigation: {
    //             nextEl: ".swiper-button-next",
    //             prevEl: ".swiper-button-prev",
    //         },
    //     });
    // }
    if (jQuery('.swiper-hero-slider').length > 0) {

        // Remove Gutenberg layout constraints
        jQuery('.swiper-hero-slider, .swiper-hero-slider *')
            .removeClass('is-layout-constrained wp-block-group-is-layout-constrained');

        //  Add nav buttons only once
        if (!jQuery('.swiper-hero-slider .swiper-button-next').length) {
            jQuery('<div class="swiper-button-next swiper-button"></div><div class="swiper-button-prev swiper-button"></div>')
                .appendTo('.swiper-hero-slider');
        }

        // Init Swiper
        var swiper_hero_slider = new Swiper('.swiper-hero-slider', {
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-hero-slider .swiper-button-next',
                prevEl: '.swiper-hero-slider .swiper-button-prev',
            },
            observer: true,
            observeParents: true,
        });
    }

    if (jQuery('.swiper--timeline').length > 0) {
        jQuery('.swiper--timeline-thumbs .swiper-slide').each(function (index, element) {
            $width = jQuery(this).outerWidth();
            jQuery(this).css('width', $width + 'px !important');
        });
        jQuery('.swiper--timeline, .swiper--timeline *').removeClass('is-layout-constrained wp-block-group-is-layout-constrained');
        jQuery('.swiper--timeline-thumbs, .swiper--timeline-thumbs *').removeClass('is-layout-constrained wp-block-group-is-layout-constrained');
        var swiper_thumbs = new Swiper(".swiper--timeline-thumbs", {
            spaceBetween: 30,
            slidesPerView: 'auto',
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper_timeline = new Swiper(".swiper--timeline", {
            spaceBetween: 0,
            slidesPerView: 1,
            thumbs: {
                swiper: swiper_thumbs,
            },
        });
    }


    if (jQuery('.swiper-listing-loop').length > 0) {
        jQuery('.swiper-listing-loop').each(function (index, element) {
            if (jQuery(this).find('>*').length > 0) {
                jQuery(this).find('>*').removeAttr('class').addClass('swiper-wrapper');
                jQuery(this).find('> * > *').removeAttr('class').addClass('swiper-slide');
                $swiper_loop_class = 'swiper-listing-loop-' + index;

                jQuery(this).addClass($swiper_loop_class);

                const swiper_listing_loop = new Swiper("." + $swiper_loop_class, {
                    loop: true, // Add this line
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

            }
        });
    }

    if (jQuery('.swiper-listing-loop--v2').length > 0) {
        jQuery('.swiper-listing-loop--v2').each(function (index, element) {
            if (jQuery(this).find('>*').length > 0) {
                jQuery(this).find('>*').removeAttr('class').addClass('swiper-wrapper p-0');
                jQuery(this).find('> * > *').removeAttr('class').addClass('swiper-slide');
                $swiper_loop_class = 'swiper-listing-loop--v2-' + index;

                jQuery(this).addClass($swiper_loop_class);

                const swiper_listing_loop = new Swiper("." + $swiper_loop_class, {
                    loop: true, // Add this line
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

                        1200: {
                            slidesPerView: 4,
                            spaceBetween: 20,
                        },

                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });

            }
        });
    }
}	