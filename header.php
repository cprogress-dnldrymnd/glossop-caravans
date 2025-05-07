<!DOCTYPE html>
<html <?php language_attributes(); ?> class="html">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="">
    <meta name="format-detection" content="telephone=no">

    <title>
        <?php wp_title('') ?>
    </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <main class="main">
        <header class="header">
            <div class="header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php if (get__theme_option('logo')) : ?>
                        <img src="<?php echo get__theme_option('logo'); ?>" alt="<?php bloginfo('name'); ?>" />
                    <?php else : ?>
                        <?php bloginfo('name'); ?>
                    <?php endif; ?>
                </a>
            </div>
            <nav class="header__nav">
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </nav>
        </header>