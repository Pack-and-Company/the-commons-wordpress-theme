<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>

<div class="footer">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>