<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<div id="blog">
	<div class="answers_sect">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( is_sticky() ) : ?>
							<hgroup>
								<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								<h3 class="entry-format"><?php _e( 'Featured', 'twentyeleven' ); ?></h3>
							</hgroup>
						<?php else : ?>
						<h4 class="entry-title"><span class="tagcloud">
			<?php $tags_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
							if ( $tags_list ) {
			printf( __( '%2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); 
			}?>
						</span> <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="answers_question"><?php the_title(); ?></a></h4>
			<?php endif; ?>
						
			
						<?php if ( 'post' == get_post_type() ) : ?>
						<div class="entry-meta">
							<?php // twentyeleven_posted_on(); 
			?>
			
			
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
						<?php
							/* translators: used between list items, there is a space after the comma */
							$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
							if ( $categories_list ):
						?>
						<span class="cat-links">
							<?php printf( __( '<span class="%1$s"> under</span> %2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list ); ?>
						</span>
						<?php endif; // End if categories ?>
						
						<?php endif; // End if 'post' == get_post_type() ?>
			
						</div><!-- .entry-meta -->
						<?php endif; ?>
			
						
					</header>
			
					<?php if ( is_search() ) : // Only display Excerpts for Search ?>
					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->
					<?php else : ?>
					<?php endif; ?>
			
					<footer class="entry-meta">
						<?php $show_sep = false; ?>
						
			
						
			
					</footer><!-- #entry-meta -->
				</article><!-- #post-<?php the_ID(); ?> -->
	</div>
</div>
