<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
	
<div id="blog">
	<div class="container sect_cont">
		<div class="row-fluid">
			<div class="span9 blog_section">	
				<div class="blog">
					<h2 class="title" style="margin-bottom: 0px; padding-bottom:10px;">Category: <?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );?></h2>
					<?php get_template_part( 'loop', 'category' ); ?>
				</div>
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>

