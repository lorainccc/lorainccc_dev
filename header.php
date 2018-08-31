<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package LCCC Framework
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

	<style>
/* Campus Status Styling */

 [ng-class]{
  display: none;
 }

.lc-active{
 display:block;
}

.lc-inactive{
 display:none;
}

 .lc-status{
  margin: 10px 0;
  min-height: 155px;
 }

 .lc-status h3{
  font-family: 'Raleway', sans-serif;
  font-size: 30px;
  font-weight: 700;
  color: #c00000;
 }

  .lc-status .lc-status-button {
	-moz-box-shadow:inset 0px 1px 0px 0px #f5978e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f5978e;
	box-shadow:inset 0px 1px 0px 0px #f5978e;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f24537), color-stop(1, #c00000) );
	background:-moz-linear-gradient( center top, #f24537 5%, #c00000 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24537', endColorstr='#c00000');
	background-color:#f24537;
	-webkit-border-top-left-radius:8px;
	-moz-border-radius-topleft:8px;
	border-top-left-radius:8px;
	-webkit-border-top-right-radius:8px;
	-moz-border-radius-topright:8px;
	border-top-right-radius:8px;
	-webkit-border-bottom-right-radius:8px;
	-moz-border-radius-bottomright:8px;
	border-bottom-right-radius:8px;
	-webkit-border-bottom-left-radius:8px;
	-moz-border-radius-bottomleft:8px;
	border-bottom-left-radius:8px;
	text-indent:0px;
	border:1px solid #d02718;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	line-height:30px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #810e05;
 padding:0 15px;
}
  .lc-status .lc-status-button:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #c00000), color-stop(1, #f24537) );
	background:-moz-linear-gradient( center top, #c00000 5%, #f24537 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c00000', endColorstr='#f24537');
	background-color:#c00000;
}
  .lc-status .lc-status-button:active {
	position:relative;
	top:1px;
</style>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lccc-framework' ); ?></a>
	

	<header id="masthead" class="site-header" role="banner">
<div class="grid-container">
		<div class="grid-x grid-margin-x show-for-medium">
    <div class="large-6 medium-6 cell"><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/LCCC-Logo.png" height="70" width="325" alt="Lorain County Community College Logo" /></a>  </div>

    <div class="large-6 medium-6 cell">
     									<?php
          wp_nav_menu(array(
											'container' => false,
											'menu' => __( 'Header Shortcuts Menu', 'textdomain' ),
											'menu_class' => 'menu align-right',
											'theme_location' => 'header-shortcuts',
											//'items_wrap'      => '<ul id="%1$s header-menu" class="%2$s">%3$s</ul>',
           'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
           ));
											?>
      <!-- This should be similar to what is generated when using Wordpress searchform.php -->
      <!--<form role="search" method="get" class="search-form" action="">
        <label>
          <input type="search" placeholder="Search" name="s" class="float-right"/>
        </label>
      </form>-->
					<div class="grid-x grid-margin-x align-right">
						<div class="large-9 medium-6 cell searchbox">
								<?php if ( is_active_sidebar( 'lccc-search-sidebar' ) ) { ?>
																	<?php dynamic_sidebar( 'lccc-search-sidebar' ); ?>
									<?php }else{
																if ( class_exists( 'CustomGoogleSearch' ) ) {
																	// check for plugin using plugin name
																	// Plugin is activated
																			if ( is_active_sidebar( 'lccc-four-o-four-sidebar' ) ) {

																			}else{
																			$instance = array(
																				'display_results' => '3',
																			);                                               the_widget('CGS_Widget', $instance);
																				}
																}else{
																	echo 'no widgets found';
																}
									}		?>
						</div>
					</div>
    </div>
  </div>
	</div>
<div class="medium-blue-bg show-for-medium">
    <div class="grid-x grid-margin-x">
      <div class="large-12 cell">
        <nav class="menu-centered">
									<?php
          wp_nav_menu(array(
											'container' => false,
											'menu' => __( 'Primary', 'textdomain' ),
											'menu_class' => 'dropdown menu',
											'theme_location' => 'primary',
											'items_wrap'      => '<ul id="%1$s" class="%2$s" role="menubar" data-dropdown-menu>%3$s</ul>',
											//Recommend setting this to false, but if you need a fallback...
											'fallback_cb' => 'lc_topbar_menu_fallback',
											'walker' => new lc_top_bar_menu_walker,
												));
											?>
        </nav>
      </div>
    </div>
  </div>
  <div class="grid-x grid-margin-x show-for-small-only mobile-nav-bar">
    <div class="small-8 cell"> <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/lccclogo_white.svg" alt="" width="165" height="31.875" /></a> </div>
    <div class="small-2 cell clearfix"> <span data-responsive-toggle="mobile-search" data-hide-for="medium"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/magnifying-glass.svg" height="25" width="25" alt="" class="float-right" data-toggle/></span> </div>
    <div class="small-2 cell"> <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      </span> </div>
  </div>
  <div id="mobile-search" class="show-for-small-only">
        <?php if ( is_active_sidebar( 'lccc-search-sidebar' ) ) { ?>
																<?php dynamic_sidebar( 'lccc-search-sidebar' ); ?>
								<?php }else{
															if ( class_exists( 'CustomGoogleSearch' ) ) {
																// check for plugin using plugin name
																// Plugin is activated
																		if ( is_active_sidebar( 'lccc-four-o-four-sidebar' ) ) {

																		}else{
																			$instance = array(
																			'display_results' => '3',
																		);                                               the_widget('CGS_Widget', $instance);
																			}
															}else{
																echo 'no widgets found';
															}
								}		?>
  </div>
  <div id="responsive-menu" class="show-for-small-only">
			  <nav role="navigation" aria-label="<?php _e( 'Mobile Main Menu', 'lorainccc' );?>">
    <ul class="vertical menu" data-drilldown data-parent-link="true">
     <li><a href="/" alt="Link back to LCCC Home Page">Home</a></li>
					<?php 	wp_nav_menu(array(
													'container' => false,
													'menu' => __( 'Drill Menu', 'textdomain' ),
													'menu_class' => 'vertical menu',
													'theme_location' => 'mobile-primary',
													'menu_id' => 'mobile-primary-menu',
														//Recommend setting this to false, but if you need a fallback...
													'fallback_cb' => 'lc_drill_menu_fallback',
													'walker' => new lc_drill_menu_walker(),
												));
     ?>
     <li>&nbsp;</li>
     <?php
            wp_nav_menu(array(
													'container' => false,
													'menu' => __( 'Drill Menu', 'textdomain' ),
													'menu_class' => 'vertical menu',
													'theme_location' => 'mobile-header-shortcuts',
													'menu_id' => 'mobile-header-shortcuts',
														//Recommend setting this to false, but if you need a fallback...
													'fallback_cb' => 'lc_drill_menu_fallback',
													'walker' => new lc_drill_menu_walker(),
												));
					?>

    </ul>
			</nav>
  </div>

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">