<?php
/*
Template Name: Events
*/
?>

<?php get_header(); ?>

<div class="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	  <h1><?php the_title(); ?></h1>
	  <?php the_content(); ?>
	<?php endwhile; wp_reset_query(); ?>
</div>

<div class="events-list">
	<?php

    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby'     => 'menu_order',
        'order'       => 'ASC',
    );
    $events = get_posts( $args );

    foreach ( $events as $event ) {
        setup_postdata($event);

        $post_meta = array(
			get_post_meta($event->ID, '_event_date', true), 
			get_post_meta($event->ID, '_event_time', true), 
			get_post_meta($event->ID, '_event_price', true)
		);
		
        ?>

		<dl class="event-item">
			<dt class="event-image">
				<a href="<?=wp_get_attachment_url(get_post_thumbnail_id($event->ID));?>">
				<img src="<?=wp_get_attachment_url(get_post_thumbnail_id($event->ID));?>" width="190" height="269" alt="<?=$event->post_title;?>" />
				</a>
			</dt>
			<dd class="event-info">
				<h2><?=$event->post_title;?></h2>
				<p><?=implode($post_meta);?></p>
				<p><?=$event->post_content;?></p>
			</dd>
		</dl>

		<?php
    }
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>