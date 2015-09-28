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
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="blog">
	<div class="container sect_cont">
		<div class="row-fluid">
			<div class="span3 documentation_navbar">
				<?php get_sidebar(); ?>
			</div>
			<div class="span9 documentation_sect">		
				<div class="article">
					<?php get_template_part( 'loop', 'page' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
