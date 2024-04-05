<?php

// ajout du style personalise
function enqueue_custom_styles()
{
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/scss/style.css', array(), filemtime(get_template_directory() . '/assets/scss/style.css'));
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


// Ajout du support pour la balise de titre
function theme_slug_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_slug_setup');

// Enregistrement des menus
function register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => 'menu header',
            'footer-menu' => 'menu footer'
        )
    );
}
add_action('init', 'register_menus');

// Ajout du support pour les miniatures (post-thumbnails)
function theme_support_post_thumbnails()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_support_post_thumbnails');
