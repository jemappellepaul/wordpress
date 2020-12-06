<?php

function TonFestival_supports()
{
    // balise titre
    add_theme_support('title-tag');
    //
    add_theme_support('custom-header');
    // gerer les photos de mises en avant
    add_theme_support('post-thumbnails');
    // gerer les menus
    add_theme_support('menus');
    // header
    register_nav_menu('header', 'En tête du menu');
    // footer
    register_nav_menu('footer', 'Pied de page');
}

// function TonFestival_logo()
// {
//     get_custom_logo('')
// }

function TonFestival__register_assets()
{
    // register le bootstrap
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
    // generer le script
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    // le popper
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
    // deregister du jquery de base de wordpress
    wp_deregister_script('jquery');
    // regiter de celui de bootstrap
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    // dans la queue pour etre éxécuter 
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    
}
function TonFestival_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function TonFestival_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_filter('nav_menu_css_class', 'TonFestival_menu_class');
add_filter('nav_menu_link_attributes', 'TonFestival_menu_link_class');

function TonFestival_title_separator()
{
    // séparateur dans la partie onglet
    return '|';
}
// liste des action et des filtre
add_action('after_setup_theme', 'TonFestival_supports');
add_action('wp_enqueue_scripts', 'TonFestival__register_assets');
add_filter('document_title_separator', 'TonFestival_title_separator');
// add_action('add_meta_boxes', 'TonFestival_add_custom_box');
add_action('save_page', 'TonFestival_save_sponso');

require_once('metaboxes/sponso.php');
SponsoMetaBox::register();