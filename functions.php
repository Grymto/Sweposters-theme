<?php

require_once("vite.php");
require_once(get_template_directory() . "/init.php");

function mytheme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');


function theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
}
add_action('after_setup_theme', 'theme_setup');

function theme_scripts() {
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('additional-styles', get_template_directory_uri() . '/build/src/app.css', array('theme-style'), '1.0');
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/theme-script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');

function register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'text-domain'),
        'footer-menu' => __('Footer Menu', 'text-domain'),
        'footer-party-pulse' => __('Footer Party Pulse'),
        'footer-information' => __('Footer Information'),
        'footer-kundservice' => __('Footer Kundservice'),
        'footer-sociala-medier' => __('Footer Sociala Medier'),
        'footer-här-finns-vi' => __('Footer Här Finns Vi'),
        'header-logo' => __('header-logo')
    ));
}
add_action('init', 'register_menus');

add_filter('woocommerce_sale_flash', 'conditionally_show_woocommerce_sale_flash', 10, 3);

function conditionally_show_woocommerce_sale_flash($html, $post, $product) {
    // Kontrollera om vi är på en specifik produktsida
    if (is_product()) {
        return ''; // Returnera tomt för att dölja etiketten på produktsidan
    }

    // Annars returnera etiketten som den är
    return $html;
}