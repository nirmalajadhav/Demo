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
	<div class="container">
	<div class="sect_cont">
		<div class="row-fluid">
				<div class="span9 ans_sect">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php wp_paginate(); ?>	
				</div>
				<div class="span3 ans-sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>
