<?php get_header(); ?>

<div class="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	  <h1><?php the_title(); ?></h1>
	  <iframe src="http://docs.google.com/gview?url=<?= wp_get_attachment_url( $post->id ); ?>&embedded=true" class="pdf" frameborder="0"></iframe>
	<?php endwhile; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>