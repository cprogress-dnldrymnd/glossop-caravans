jQuery(document).ready(function () {
    show_body();
    mega_menu();
    search_stock();
});
function show_body() {
    setTimeout(function () {
        jQuery('.wpcf7').appendTo('#insertForm');
    }, 1500);
    setTimeout(function () {
        jQuery('body').addClass('show-body');
    }, 1600);
}
function search_stock() {
    jQuery('.edit-stock-filter').click(function (e) {
        jQuery(this).parents('.search-stock-mobile').toggleClass('filter--active');
        e.preventDefault();

    });
}
function mega_submenu() {
    setTimeout(function () {

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
    }, 2300);

}
function mega_menu() {
    setTimeout(function () {
        mega_submenu();
    }, 1000);

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