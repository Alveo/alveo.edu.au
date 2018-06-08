<?php
/**
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header();
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
?>

 <div class='container'>
	<div id="primary" class="site-content">
		<div id="content" role="main" class='row'>
            <div class='col-md-3'>

                <div class="list-group">
                  <a href="#" class="list-group-item active">
                      <h3>Alveo Services</h3>
                  </a>
                  <a class="list-group-item" href="https://app.alveo.edu.au/">
                      <h4>Discovery Interface</h4>
                      <p>Search for data, browse collections, create and
                          manage item lists.</p>
                  </a>
                  <a class="list-group-item" href="http://galaxy.alveo.edu.au/">
                      <h4>Galaxy Workflow</h4>
                      <p>Apply text and speech processing tools to data
                          from the Alveo collections.</p>
                  </a>
                  <a class="list-group-item" href="http://austalk-query.apps.alveo.edu.au/" >
                      <h4>Austalk Query</h4>
                      <p>Find data from the Austalk Corpus using speaker meta-data and
                          prompt text.</p>
                  </a>
              </div>

            </div>
            <div class='col-md-6'>
                <?php
                // show 5 post titles from category 1
                $args = array( 'posts_per_page' => 3, 'offset'=> 0, 'category'=> 'News');

                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                <article class="article">
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <div class="entry-content">
                  <?php the_excerpt(); ?>
                  <a href="<?php echo get_permalink(); ?>">Continue reading →</a>
                </div>
                </article>
                <?php endforeach;
                wp_reset_postdata();?>

            </div>
            <div class='col-md-3'>
                <?php get_sidebar('front'); ?>
            </div>
		</div><!-- #content -->
	</div><!-- #primary -->
</div>

<?php
} // end else clause (show_on_front)
?>
<?php get_footer(); ?>
