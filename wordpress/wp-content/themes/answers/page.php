<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div id="blog">
	<div class="container sect_cont">
		<div class="row-fluid">
			<div class="span9 ans_sect">
				<div id="primary">
					<div id="content" role="main">
		
						<?php while ( have_posts() ) : the_post(); ?>
		
							<?php get_template_part( 'content', 'page' ); ?>
		
							<?php comments_template( '', true ); ?>
		
						<?php endwhile; // end of the loop. ?>
		
					</div><!-- #content -->
				</div><!-- #primary -->
			</div>
			<div class="span3 ans-sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>