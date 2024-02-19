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

// регистрация меню
add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'main_menu' => 'Главное меню',
	] );
} );

// добавление возможности задать класс тегу <li> в меню
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'slider', [
		'label'  => null,
		'labels' => [
			'name'               => 'Слайдер', // основное название для типа записи
			'singular_name'      => 'Слайд', // название для одной записи этого типа
			'add_new'            => 'Добавить слайд', // для добавления новой записи
			'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование слайда', // для редактирования типа записи
			'new_item'           => 'Новый слайд', // текст новой записи

			'menu_name'          => 'Слайдер', // название меню
		],
		'public'                 => true,
		'show_in_menu'           => true, // показывать ли в меню админки
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-images-alt2',

		'supports'            => [ 'title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );

}

// Включить поддержку woo
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );

// Отключение стилей woo
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );