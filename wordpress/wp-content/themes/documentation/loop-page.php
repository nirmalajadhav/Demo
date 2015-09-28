<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php
$link = get_post_meta(get_the_ID(), 'redirect', 1);

if (!empty($link)) {
	echo '<script>location.href="'.$link.'";</script>';
	exit;
}

?>

				<div class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="maintitle"><?php the_title(); ?></h2>
					<div>
						<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
						<a class="addthis_button_facebook"></a>
						<a class="addthis_button_twitter"></a>
						<a class="addthis_button_google_plusone_share"></a>
						<a class="addthis_button_email"></a>
						</div>
						<?php the_content(); ?>
						
		<ul>
  <?php global $post;
		  wp_list_pages('title_li=<h3>Links%20in%20this%20section</h3>&depth=1&child_of='.$post->ID.''); ?>
  </ul>
 
						<?php // echo do_shortcode('[fbcomments]');?>
					</div>
				</div>

<?php endwhile; // end of the loop. ?>
