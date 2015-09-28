<?php
/**
 * The template for displaying attachments.
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
			<div class="span12">
				<div id="container" class="single-attachment">
					<div id="content" role="main">
		
					<?php
					/* Run the loop to output the attachment.
					 * If you want to overload this in a child theme then include a file
					 * called loop-attachment.php and that will be used instead.
					 */
					get_template_part( 'loop', 'attachment' );
					?>
		
					</div><!-- #content -->
				</div><!-- #container -->
			</div>
		</div>
	</div>
</div>
		
<?php get_footer(); ?>
