<?php

function apart_style_links() {

    wp_enqueue_style('apart-mainstyles', get_template_directory_uri() . "/style.css" , array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'apart_style_links');

?>