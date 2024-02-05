<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.css' );
    wp_enqueue_style( 'shop', get_template_directory_uri() . '/assets/css/shop.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), null, true );
    wp_enqueue_script( 'shopjs', get_template_directory_uri() . '/assets/js/shop.js', array(), null, true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0.0', true );

}