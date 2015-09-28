<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		

<h2 class="entry-title"> 

<span class="tagcloud"><?php $tags_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );


				if ( $tags_list ) {
printf( __( '%2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); 
}?>
</span>

<?php the_title(); ?>
</h2>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php // twentyeleven_posted_on();
 ?>


			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
				if ( $categories_list ):
			?>
			<span class="cat-links">
				<?php printf( __( '<span class="%1$s"> under</span> %2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list ); ?>
			</span>

<?php endif;?>



		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
<br>
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_google_plusone_share"></a>
<a class="addthis_button_email"></a>
</div>

<?php $tags_list = get_the_tag_list( '<br><blockquote><p>This answer is only applicable for ', ', ', '. Using the suggestions outlined below in other software may result in unexpected results.</p></blockquote>'  );
				if ( $tags_list ) {
echo $tags_list;
}?>

		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
