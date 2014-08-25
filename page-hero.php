<?php
/*
Template Name: Hero Image
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="hero-image">
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	}
	?>
	<div class="hero-text">
	  <?php the_content(); ?>
  	</div>
</div>
<?php endwhile; wp_reset_query(); ?>

<div class="footer">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>