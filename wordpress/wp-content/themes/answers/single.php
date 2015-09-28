<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div id="blog">
	<div class="container sect_cont single_desc">
		<div class="row-fluid tag_page">
			<div class="span9 ans_sect">
				<div id="primary">
					<div id="content" class="separat" role="main">
		
						<?php while ( have_posts() ) : the_post(); ?>
		
							<nav id="nav-single">
								<span class="nav-previous"><a href="/answers"><span class="meta-nav">&larr;</span> Show all questions</a></span>
							</nav><!-- #nav-single -->
		
							<?php get_template_part( 'content', 'single' ); ?>
		
		
		
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