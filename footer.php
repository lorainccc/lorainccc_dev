<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package LCCC Framework
 */
?>
	</div><!-- #content -->

		<footer id="colophon" class="small-12 medium-12 large-12 columns site-footer hide-for-print" role="contentinfo">
		  <div class="row text-center medium-text-left">
    <div class="large-3 medium-3 columns"> <a href="/" title="Lorain County Community College Home"><img class="footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/lccclogo_white.svg" alt="Lorain County Community College Home" width="220" height="42.5"/></a>
      <h2>Connect with LCCC</h2>
      <ul class="menu footer-sm-links">
        <li><a href="http://facebook.com/lorainccc" title="Follow LCCC on Facebook" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/facebook_white.svg" height="30" width="30" alt="Follow LCCC on Facebook" /></a></li>
        <li><a href="http://twitter.com/lorainccc" title="Follow LCCC on Twitter" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/twitter_white.svg" height="30" width="30" alt="Follow LCCC on Twitter" /></a></li>
        <li><a href="http://www.linkedin.com/company/lorain-county-community-college" title="Follow LCCC on LinkedIn" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/linkedin_white.svg" height="30" width="30" alt="Connect with LCCC on LinkedIn" /></a></li>
        <!--<li><a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/pinterest_white.svg" height="30" width="30" alt="" /></a></li>-->
        <li><a href="http://www.instagram.com/lorainccc" title="Follow LCCC on Instagram" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/instagram_white.svg" height="30" width="30" alt="Follow LCCC on Instagram" /></a></li>
      </ul>
      <a href="/campus-technology/lccc-mobile/" title="Download LCCC's Mobile App" target="_blank" class="clearfix mobile-app-link"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/smartphone_yellow.svg" heigth="33" width="20" alt="Download LCCC's Mobile App"/>
      <h2>LCCC'S<br />
        Mobile App</h2>
      </a>
     <?php if($_GET['siteurl'] == ''){ ?>
     <p class="website-feedback">
      <a href="/website-feedback?siteurl=<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" title="Provide Feedback about this Page" target="_blank">Feedback about this page</a>
     </p>
     <?php } ?>
     </div>
    <div class="large-3 medium-3 columns">
      <h2>Contact LCCC</h2>
      <p>1005 N Abbe Rd<br />
        Elyria, OH 44035<br />
        1-800-995-LCCC (5222)<br />
							 or (440) 365-5222<br />
        <a href="mailto:info@lorainccc.edu" title="Email LCCC for more information">info@lorainccc.edu</a> </p>
      <ul class="underline"> 
        <li><a href="/about/map-and-directions-to-lccc/" title="Map and Directions to LCCC">Map and Directions</a></li>
        <li><a href="/about/contact-lorain-county-community-college/" title="Contact LCCC">Contact LCCC</a></li>
        <li><a href="/getting-started/campus-visitation-days/" title="Visit LCCC">Visit LCCC</a></li>
      </ul>
    </div>
    <div class="large-3 medium-3 columns">
      <h2>Campus Locations</h2>
  <?php if ( has_nav_menu( 'footer-campus-location-nav' ) ) : ?>
		<nav id="campus-locations" class="footer-navigation" role="navigation" aria-labelledby="menu-footer-campus-locations">
			<?php
				// Primary Footer navigation menu.
				wp_nav_menu( array(
					'menu_class'     => 'underline',
					'theme_location' => 'footer-campus-location-nav',
				) );
			?>
		</nav><!-- .main-navigation -->
	<?php endif; ?>
    </div>
    <div class="large-3 medium-3 columns">
      <h2>Quick Links</h2>
	<?php if ( has_nav_menu( 'footer-quicklinks-nav' ) ) : ?>
		<nav id="site-navigation" class="footer-navigation" role="navigation" aria-labelledby="menu-footer-quicklinks">
			<?php
				// Primary Footer navigation menu.
				wp_nav_menu( array(
					'menu_class'     => 'underline',
					'theme_location' => 'footer-quicklinks-nav',
				) );
			?>
		</nav><!-- .main-navigation -->
	<?php endif; ?>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
