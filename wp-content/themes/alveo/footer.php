<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">
			<div class="col-md-3"><img src="/wp-content/uploads/2018/02/nectar.png" alt="Nectar logo"></div>
			<div class="col-md-9">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
							The University of Western Sydney is proud to be in partnership with, and acknowledges funding from, the National eResearch Collaboration Tools and Resources (NeCTAR) project (<a href="http://www.nectar.org.au" target="_blank">http://www.nectar.org.au</a>) to develop Alveo. NeCTAR is an Australian Government project conducted as part of the Super Science initiative and financed by the Education Investment Fund.

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

