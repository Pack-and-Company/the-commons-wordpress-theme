<?php

register_nav_menus( array('primary' => 'Primary Menu') );
register_sidebar( array('name' => 'Sidebar') );

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

include(TEMPLATEPATH . '/events-custom-post.php');

function remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'remove_gallery_css' );

function my_init_method() {
  if(!is_admin()) {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'global', get_bloginfo('template_directory') . '/css/global.css');
    wp_enqueue_style( 'global' );
  }
}
add_action('init', 'my_init_method');

?>