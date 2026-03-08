<?php

function news_theme_setup(){
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
register_nav_menus(array(
'primary' => __('Primary Menu')
));

}
add_action('after_setup_theme','news_theme_setup');

function news_theme_styles(){
wp_enqueue_style(
'main-style',
get_stylesheet_uri()
);
}

add_action('wp_enqueue_scripts','news_theme_styles');