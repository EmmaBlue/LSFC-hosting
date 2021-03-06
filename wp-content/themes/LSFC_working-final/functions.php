<?php

function theme_name_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'lsfc_main', get_template_directory_uri() . '/css/main.css');

    if (is_page_template('front-page.php')) {

        wp_enqueue_script( 'full-video', get_template_directory_uri() . '/js/full-video.js');
    }
    if (is_page_template('page-book-visit.php')) {

        wp_enqueue_script( 'form', get_template_directory_uri() . '/js/form.js');
    }

    if (is_page_template('page-contact.php')) {

        wp_enqueue_script( 'form', get_template_directory_uri() . '/js/form.js');
    }

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ));
    wp_enqueue_script( 'back-to-top', get_template_directory_uri() . '/js/back-to-top.js', array( 'jquery' ));
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ));
    wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array( 'jquery' ));
    wp_enqueue_script( 'menumaker', get_template_directory_uri() . '/js/menumaker.js', array( 'jquery' ));
    wp_enqueue_script( 'sticky-header', get_template_directory_uri() . '/js/sticky-header.js', array( 'jquery' ));

}


add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );



?>
