<?php

function modynamics_title_tag() {
    // add title tag dynamically from wp
    add_theme_support('title-tag');

}

// function aparttheme_add_woocommerce_support() {
// 	add_theme_support( 'woocommerce' );
// }

// add_action( 'after_setup_theme', 'aparttheme_add_woocommerce_support' );

function apart_style_links() {

    wp_enqueue_style('apart-mainstyles', get_template_directory_uri() . "/style.css" , array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'apart_style_links');

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'aparttheme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'aparttheme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

?>