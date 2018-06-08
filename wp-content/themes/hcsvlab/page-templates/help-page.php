<?php
// Template Name: Help Page
get_header(); ?>

<div class="container">
	<div id="primary" class="site-content col-md-9">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page-help' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<div class="col-md-3">
  <?php get_sidebar('help'); ?>
</div>
</div>
<?php get_footer(); ?>
