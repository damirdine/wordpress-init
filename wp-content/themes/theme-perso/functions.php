<?php
function mon_support_theme()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support( 'custom-logo');
    register_nav_menu('headerNav','En tête de page');
    register_nav_menu('footer','Pied de page');
}

function theme_register_assets()
{
    wp_enqueue_style('style_css', get_stylesheet_directory_uri(). '/asset/css/style.css');
    //wp_enqueue_script('script', get_template_directory_uri() . '/asset/js/main.js', array ( 'jquery' ), 1.1, true);
}
function theme_title($title){
    return '|';
}
add_action('after_setup_theme', 'mon_support_theme');
add_action( 'wp_enqueue_scripts','theme_register_assets');

add_filter('document_title_separator','theme_title');
?>