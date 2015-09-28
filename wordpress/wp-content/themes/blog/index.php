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
			<div class="span9 blog_section">		
				<div class="blog">
					
						<?php $featured = new WP_Query(array('featured'=>'yes'));?>
						<?php while($featured->have_posts()): $featured->the_post();?>
							<div class="featured" style="border: 1px solid #bce8f1;background: #d9edf7;padding: 20px;">
							<style>.featured .content p { margin: 0; padding: 0 ;}</style>
							<div class="separat sect_cont" id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php echo 'style="padding-top:0px;padding-bottom: 0px;border-bottom: 0px;"'; ?>>
								<h3><span class="label label-primary" style="vertical-align:5px">FEATURED</span> &nbsp;<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="blue_tag"><?php the_title(); ?></a></h3>
								<div class="content"><?php the_excerpt( ); ?>
								</div>
							</div>
							</div>
						<?php endwhile;?>
					
				
					<?php get_template_part( 'loop', 'index' ); ?>
				</div>
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
