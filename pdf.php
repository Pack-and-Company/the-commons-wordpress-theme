<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <h1><?php the_title(); ?></h1>

  <iframe src="http://docs.google.com/gview?url=<?= wp_get_attachment_url( $post->id ); ?>&embedded=true" style="width:960px; height:500px;" frameborder="0"></iframe>

<?php endwhile; wp_reset_query(); ?>

<?php comments_template( '', true ); ?>

<?php get_footer(); ?>