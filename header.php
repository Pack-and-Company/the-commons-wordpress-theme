<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title>
    <?php
      if( ! is_home() ):
        wp_title( '|', true, 'right' );
      endif;
      bloginfo( 'name' );
    ?>
  </title>

  <link href='http://fonts.googleapis.com/css?family=Lato:400,900,100italic' rel='stylesheet' type='text/css'>
  
  <link href="<?=get_template_directory_uri();?>/css/reset.css" rel="stylesheet" media="screen" type="text/css"/>
  <link href="<?=get_template_directory_uri();?>/css/prettyPhoto.css" rel="stylesheet" media="screen" type="text/css"/>
  <link href="<?=get_template_directory_uri();?>/css/style.css" rel="stylesheet" media="screen" type="text/css"/>

  <?php wp_head(); ?>

  <script src="<?=get_template_directory_uri();?>/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?=get_template_directory_uri();?>/js/scripts.js" type="text/javascript" charset="utf-8"></script>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">

<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>