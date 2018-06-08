<?php
/*
Template Name: Tutorials
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="site-content col-md-9 tutorials">
		<div id="content" role="main">

      <h1 class="entry-title">Tutorials</h1>

	<?php
	 query_posts( array ( 'category_name' => 'tutorials', 'order' => 'ASC', 'posts_per_page' => -1 ) );
	 if ( have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <article class="article">
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
          <div class="entry-content"><?php the_excerpt(); ?></div>
          <a href="<?php echo get_permalink(); ?>">Continue reading →</a>
          <div class='small'>
            Posted on <?php the_time('Y-m-d') ?> in <?php the_category(', ') ?> by <?php the_author() ?>
          </div>
        </article>
        <?php endwhile; ?>
      <?php else : ?>
        <article id="post-0" class="post no-results not-found">
          <header class="entry-header">
            <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
            <?php get_search_form(); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-0 -->
      <?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<div class="col-md-3">
  <?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>