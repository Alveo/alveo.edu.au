<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Muli:400,700|Rubik:400,700" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

  <!-- ******************* The Navbar Area ******************* -->
  <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

    <a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
    'understrap' ); ?></a>

    <nav class="navbar navbar-light fixed-top navbar-expand-md">

    <?php if ( 'container' == $container ) : ?>
      <div class="container">
    <?php endif; ?>

          <!-- Your site title as branding in the menu -->
          <?php if ( ! has_custom_logo() ) { ?>

            <?php if ( is_front_page() && is_home() ) : ?>

              <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
              
            <?php else : ?>

              <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            
            <?php endif; ?>
            
          
          <?php } else {
            the_custom_logo();
          } ?><!-- end custom logo -->

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- The WordPress Menu goes here -->
        <?php wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'walker'          => new understrap_WP_Bootstrap_Navwalker(),
          )
        ); ?>

        

<!--
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#about" role="tab">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#collections" role="tab">Collections</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://galaxy.alveo.edu.au/">Galaxy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#help" role="tab">Help</a>
            </li>
          </ul>

          
          <div class="tab-content">
            <div class="tab-pane active" id="about" role="tabpanel">
                <ul class="tab-nav">
                  <li><a href="#">THINGER</li>
                  <li><a href="#">THINGER</li>
                  <li><a href="#">THINGER</li>
                  <li><a href="#">THINGER</li>
                </ul>
            </div>
            <div class="tab-pane" id="collections" role="tabpanel">two</div>
            <div class="tab-pane" id="help" role="tabpanel">four</div>
          </div> -->



      <?php if ( 'container' == $container ) : ?>
      </div><!-- .container -->
      <?php endif; ?>

    </nav><!-- .site-navigation -->

  </div><!-- .wrapper-navbar end -->
