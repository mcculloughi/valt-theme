<?php

function disable_wp_backend_for_subscribers() {
    if (is_admin() && current_user_can('subscriber') && !defined('DOING_AJAX')) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('init', 'disable_wp_backend_for_subscribers');

function remove_admin_bar_for_subscribers() {
    if (current_user_can('subscriber')) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'remove_admin_bar_for_subscribers');


//
//ADD CSS
//
add_action('wp_enqueue_scripts', function() {
    
    $style_version = '1.00'; // Change this to your desired version number
    
    //
    //ADD CSS
    //
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), $style_version);
    wp_enqueue_style('cardano-press-style', get_stylesheet_directory_uri() . '/assets/css/cardanopress_styles.css', array(), $style_version);
    // wp_enqueue_style('my-account-style', get_stylesheet_directory_uri() . '/assets/css/my-account.css', array(), $style_version);
//    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');

    
    //
    //ADD JS
    //
    // wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), $style_version);
    // wp_enqueue_script('create-event-script', get_stylesheet_directory_uri() . '/assets/js/create-event.js', array('jquery'), $style_version);

});