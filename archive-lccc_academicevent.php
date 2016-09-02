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
get_header(); ?>
<div class="row page-content">
<div class="small-12 medium-12 large-12 columns breadcrumb-container">
   <?php get_template_part( 'template-parts/content', 'breadcrumb' ); ?>
</div>
<div class="medium-4 large-4 columns hide-for-small-only">
	<div class="small-12 medium-12 large-12 columns sidebar-widget">
		<div class="small-12 medium-12 large-12 columns sidebar-menu-header">
		<h3>SIDEBAR MENU</h3>
		</div>
	<?php	if ( has_nav_menu( 'left-nav' ) ) : ?>
	<div id="secondary" class="secondary">
		<?php if ( has_nav_menu( 'left-nav' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'left-nav',
					) );
				?>
			</nav><!-- .main-navigation -->
				<?php endif; ?>
		<?php endif; ?>
	</div>
	</div>
	<div class="small-12 medium-12 large-12 columns">
				<?php if ( is_active_sidebar( 'lccc-events-sidebar' ) ) { ?>
							<?php dynamic_sidebar( 'lccc-events-sidebar' ); ?>
				<?php } ?>
	</div>
	</div>			
	<div class="small-12 medium-8 large-8 columns academic-calender-content">		
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="small-12 medium-12 columns acevents-header">
					<h1>LCCC Academic Calendar</h1>
					<h2>Fall Semester 2016-2017</h2>
					<h3>August 22 to December 11, 2016</h3>
			</div>
			
					<table>
							<tbody>
								<?php
										$eventargs=array(
            'post_type' => 'lccc_academicevent',
		    						'posts_per_page' => -1,
		    						'order'=> 'ASC',
    		    		'orderby'=> 'meta_value',
    		    		'meta_key' => 'event_start_date',
          );
					$wp_query = new WP_Query($eventargs);
					if ( $wp_query->have_posts() ) :
								while ( $wp_query->have_posts() ) : $wp_query->the_post();
								$date = academic_event_metabox_get_meta('event_start_date');
								$datevar = strtotime($date);
								$dayofweek =	date("l",$datevar);
								?>
													<tr>
														<td><?php the_title(); ?></td>  
														<td><?php echo $dayofweek; ?></td>
														<td><?php echo $date; ?></td>
													</tr>
										<?php
								endwhile;
					endif;
								?>
						</tbody>
					</table>
			<div class="small-12 medium-12 columns events-table-glossary">
			
<p>
* Instructional fees are waived for qualified older adults when they register for
credit classes on an audit (no credit received) basis. Students must be at least 60
years old and have lived in Ohio for at least one year. Refer to the Credit Class
Schedule for sub-term Senior Citizen registration dates. Tuition fee waivers on
credit courses for qualifying older adults are processed on a space available first come, first served basis.
</p>
<p>				
** Schedule adjustment and add/drop for a given course must be completed prior
to the second meeting of that course but before the end of the schedule adjustment
period.
</p>
<p>				
*** Audit means to take a course without receiving college credit or a grade.
Courses taken on this basis are not included in the computation of cumulative
grade point average and are not applicable to graduation requirements. An audit
cannot be reversed once the semester is in session. Courses taken for audit are not covered by Financial Aid or used for calculating course load.
</p>
<p>				
**** A student may elect the S/U grading option in no more than three courses for
the associate’s degree and not more than one course a semester. The S/U option cannot be reversed to a letter grade once the semester is in session. The S/U option for credit may be used only for electives within a degree or certificate program. S means satisfactory and indicates credit was earned. U means unsatisfactory and indicates no credit was earned.
</p>
<p>				
****** Failure to withdraw from a course or courses will result in an F grade(s).
</p>
<p>				
Registration schedule may be staggered to allow easy access for all students.
</p>
<p>				
University Partnership colleges and universities follow the academic calendar of their institution found in their individual college Catalog and website.
</p>	
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>	
</div>
<?php get_footer(); ?>
