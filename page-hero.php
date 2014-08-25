<?php
/*
Template Name: Hero Image
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<div class="hero-image">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
		}
		?>
		<div class="hero-text">
		  <?php the_content(); ?>
	  	</div>
	</div>
<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>