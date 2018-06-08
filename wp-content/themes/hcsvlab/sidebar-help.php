<?php
/**
 * The sidebar containing the help pages widgets
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

  <?php wp_reset_query() ?>
	<?php if ( is_active_sidebar( 'sidebar-help' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-help' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>