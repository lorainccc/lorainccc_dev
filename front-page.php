<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LCCC Framework
 */
get_header();
?>
<div ng-app="app">
 <div ng-controller="lcStatusCtrl">
  <div class="row" ng-class="notify.active == '1' ? 'lc-active' : 'lc-inactive'">
      <div class="show-for-medium large-2 columns lc-status">
      <img src="/wp-content/themes/lorainccc/images/campus-status-{{notify.type}}.png" alt="{{notify.headline}}" border="0" />
      </div>
      <div class="small-12 large-10 columns lc-status">
       <span class="headline {{notify.type}}">{{notify.headline}}</span>
       <p>{{notify.text}}</p>
       <p><a href="{{notify.url}}" border="0" title="Learn more about LCCC Campus Status" target="_blank" class="lc-status-button-{{notify.type}}">Learn More</a></p>
      </div>
      				 <!-- Spacer -->
			  <div style="height:4px; width:100%; display:inline-block;">&nbsp;</div>
   </div>
  </div>
</div>
    <div id="primary" class="content-area" style="border-top: 2px #0055a5 solid;">
		<main id="main" class="site-main" role="main">
  <?php if ( is_active_sidebar( 'homepage-slider-sidebar' ) ) { ?>

						<?php dynamic_sidebar( 'homepage-slider-sidebar' ); ?>

			<?php }else{ ?>
			<div class="home-hero">
    <div class="row">
				&nbsp;
			</div>
  </div>
  <?php } ?>
  <section class="cta-icons" aria-label="Popular links for students and parents" role="region" aria-labelledby="lc-dashboard">
    <div id="lc-dashboard" class="row icon-container">
					<?php if ( is_active_sidebar( 'cta-icons-sidebar' ) ) { ?>
								
											<?php dynamic_sidebar( 'cta-icons-sidebar' ); ?>
							
					<?php } ?>
    </div>
  </section>
  <section class="row homepage" aria-label="LCCC marketing statement" aria-labelledby="lc-marketing-statement">
   <h1 id="lc-marketing-statement" class="homepage"><?php
    $bloginfo = get_bloginfo('description');
    $bloginfo = str_replace('Education', '<span style="font-weight:700;">Education</span>', $bloginfo);
    $bloginfo = str_replace('Jobs', '<span style="font-weight:700;">Jobs</span>', $bloginfo);
    $bloginfo = str_replace('Future', '<span style="font-weight:700;">Future</span>', $bloginfo);
    echo $bloginfo;
    ?></h1>
  </section>
  <section class="row" aria-label="For our community">
   	<?php if ( is_active_sidebar( 'lccc-spotlights-sidebar' ) ) { ?>
						<?php dynamic_sidebar( 'lccc-spotlights-sidebar' ); ?>
				<?php } ?>
  </section>
  <div class="column row">
    <hr />
  </div>
  <section class="row link-box-row">
<?php if ( is_active_sidebar( 'lccc-highlights-sidebar' ) ) { ?>
						<?php dynamic_sidebar( 'lccc-highlights-sidebar' ); ?>
				<?php } ?>
  </section>
  <div class="column row">
    <hr />
  </div>
  <section class="row news-feed" id="home-news" aria-labelledby="lccc_announcement_feed_widget-2 lccc_feed_widget-4">
    <div class="large-8 medium-8 columns home-left">
<?php if ( is_active_sidebar( 'lccc-announcements-sidebar' ) ) { ?>
						<?php dynamic_sidebar( 'lccc-announcements-sidebar' ); ?>
				<?php } ?>
    </div>
    <aside class="large-4 medium-4 columns">
<?php if ( is_active_sidebar( 'lccc-events-sidebar' ) ) { ?>
						<?php dynamic_sidebar( 'lccc-events-sidebar' ); ?>
				<?php } ?>
    </aside>
  </section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
