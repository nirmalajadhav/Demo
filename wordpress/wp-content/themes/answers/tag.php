<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="container">
	<div class="sect_cont tag_page">
		<div class="row-fluid">
				<div class="span9 ans_sect">
					<section id="primary">
						<div id="content" role="main">
			
						<?php if ( have_posts() ) : ?>
			
							<header class="page-header">
								<h2 class="page-title"><?php
									printf( __( 'Tag: %s', 'twentyeleven' ), '<span>' . single_tag_title( '', false ) . '</span>' );
								?></h2>
			
								<?php
									$tag_description = tag_description();
									if ( ! empty( $tag_description ) )
										echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
								?>
							</header>
			
							<?php twentyeleven_content_nav( 'nav-above' ); ?>
			
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
			
								<?php
									/* Include the Post-Format-specific template for the content.
									 * If you want to overload this in a child theme then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'content', get_post_format() );
								?>
			
							<?php endwhile; ?>
			
							<?php twentyeleven_content_nav( 'nav-below' ); ?>
			
						<?php else : ?>
			
							<article id="post-0" class="post no-results not-found">
								<header class="entry-header">
									<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h2>
								</header><!-- .entry-header -->
			
								<div class="entry-content">
									<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
									<?php get_search_form(); ?>
								</div><!-- .entry-content -->
							</article><!-- #post-0 -->
			
						<?php endif; ?>
			
						</div><!-- #content -->
					</section><!-- #primary -->
				</div>
				<div class="span3 ans-sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>
