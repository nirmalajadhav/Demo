<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

header("http/1.1 301 moved permanently\r\n");
	header("Location: /documentation\r\n"); 
	exit;


get_header(); ?>
<div id="blog">
	<div class="container sect_cont">
		<div class="row-fluid">
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
			<div class="span9 documentation_sect">
				<div id="container">
					<div id="content" role="main">
		
						<h2 class="page-title"><?php
							printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
						?></h2>
						<?php
							$category_description = category_description();
							if ( ! empty( $category_description ) )
								echo '<div class="archive-meta">' . $category_description . '</div>';
		
						/* Run the loop for the category page to output the posts.
						 * If you want to overload this in a child theme then include a file
						 * called loop-category.php and that will be used instead.
						 */
						get_template_part( 'loop', 'category' );
						?>
		
					</div><!-- #content -->
				</div><!-- #container -->
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
