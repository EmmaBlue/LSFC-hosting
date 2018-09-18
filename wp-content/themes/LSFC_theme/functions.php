<?php

  function custom_styles() {

        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

  }

  function custom_scripts() {

      wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
      wp_enqueue_script('jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'));
      wp_enqueue_script('jquery-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'));
      wp_enqueue_script('menumaker', get_template_directory_uri() . '/js/menumaker.js', array('jquery'));
      //wp_enqueue_script('carousel', get_template_directory_uri() . '/js/slider-carousel.js', array('jquery'));
      wp_enqueue_script('sticky-header', get_template_directory_uri() . '/js/sticky-header.js', array('jquery'));

      if (is_page('front-page.php')){

            wp_enqueue_script('full-video', get_template_directory_uri() . '/js/full-video.js');
      }

      if (is_page('page-book-visit.php')){

            wp_enqueue_script('form', get_template_directory_uri() . '/js/form.js', array('jquery'));
      }

      if (is_page('page-contact.php')){

            wp_enqueue_script('full-video', get_template_directory_uri() . '/js/form.js' , array('jquery'));
      }



  }

  add_action('wp_enqueue_scripts', 'custom_styles');
  add_action('wp_enqueue_scripts', 'custom_scripts');

?>
