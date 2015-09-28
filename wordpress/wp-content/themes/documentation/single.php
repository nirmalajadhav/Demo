<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div id="blog">
	<div class="container sect_cont">
		<div class="row-fluid">
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
			<div class="span9">
				<div id="container">
					<div id="content" role="main">
		
					<?php
					/* Run the loop to output the post.
					 * If you want to overload this in a child theme then include a file
					 * called loop-single.php and that will be used instead.
					 */
					get_template_part( 'loop', 'single' );
					?>
		
					</div><!-- #content -->
				</div><!-- #container -->
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
