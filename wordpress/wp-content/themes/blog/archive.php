<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

<div id="blog">
	<div class="container sect_cont">
		<div class="row-fluid">
			<div class="span9 blog_section">
		
				<div class="blog">
					<h2 class="title" style="padding-bottom: 0px; padding-top:20px;"><?php if ( is_day() ) : ?>
						<?php printf( __( 'Archive: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
		<?php elseif ( is_month() ) : ?>
						<?php printf( __( 'Archive: <span>%s</span>', 'twentyten' ), get_the_date('F Y') ); ?>
		<?php elseif ( is_year() ) : ?>
						<?php printf( __( 'Archive: <span>%s</span>', 'twentyten' ), get_the_date('Y') ); ?>
		<?php else : ?>
						<?php _e( 'Blog Archives', 'twentyten' ); ?>
		<?php endif; ?></h2>
					<?php rewind_posts(); get_template_part( 'loop', 'archive' ); ?>
				</div>
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
