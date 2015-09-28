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
			<div class="span9 blog_section">	
				<div class="blog">
					
		
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
									<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<h2 class="maintitle"><?php the_title(); ?></h2>
					
										<div class="tagline">
											<?php twentyten_posted_on(); ?>
										</div>
					
										<div class="content">
											<br>
											<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
											<a class="addthis_button_facebook"></a>
											<a class="addthis_button_twitter"></a>
											<a class="addthis_button_google_plusone_share"></a>
											<a class="addthis_button_email"></a>
											</div>
											<?php the_content(); ?>
										</div>
					
									</div>
					
					
					<div id="body_quicklinks" style="font-weight:bold">
						<div id="body_quicklinks_left" style="padding-left:0px;">
						<?php previous_post_link( '%link', '' . _x( '&laquo;', 'Previous post link', 'twentyten' ) . ' %title' ); ?>
						</div>
						<div id="body_quicklinks_right" style="padding-right:0px;">
						<?php next_post_link( '%link', '%title ' . _x( '&raquo;', 'Next post link', 'twentyten' ) . '' ); ?>
						</div>
						<div style="clear:both"></div>
					</div>
								
									<?php comments_template( '', true ); ?>
					
					<?php endwhile; ?>
					
		
		
				</div>
		</div>
		<div class="span3">
		<?php get_sidebar(); ?>
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?>
