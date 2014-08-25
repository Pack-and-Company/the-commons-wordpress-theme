<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>

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

        printf('<dl class="event-item">');
		printf(
			'<dt class="event-image"><a href="%s" title="%s"><img src="%s" width="190" height="269" alt="%s"></a></dt>',
			wp_get_attachment_url(get_post_thumbnail_id($event->ID)),
			$event->post_content,
			wp_get_attachment_url(get_post_thumbnail_id($event->ID)),
			$event->post_title
		);
		printf(
			'<dd class="event-info"><strong>%s</strong><br>%s</dd>',
			$event->post_title,
			implode(', ', array(
							  get_post_meta($event->ID, '_event_date', true), 
							  get_post_meta($event->ID, '_event_time', true), 
							  get_post_meta($event->ID, '_event_price', true)
						 ))
		);
        printf('</dl>');
    }
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>