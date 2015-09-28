<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area blog_sidebar" role="complementary">
			<ul class="xoxo">

			<li class="widget-container">
				
				<div id="subscribe" class="newsletter row-fluid">
						<p>Subscribe to our Newsletter</p>
						<!--form action="http://cometchat.us1.list-manage1.com/subscribe/post?u=bb3d96997ca63c3d2772b7509&amp;id=a2fd04daa3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
							<div class="mc-field-group left span6"-->
							<form action="<?php echo BASE_URL; ?>newsletter/subscribe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="mc-embedded-subscribe-form validate" target="_blank" novalidate="">
							<div class="mc-field-group left span10">
								<label for="mce-EMAIL" style="display:none">Email Address </label>
								<input type="email" placeholder="Enter your email address" value="" name="EMAIL" class="required email" id="mce-EMAIL">
							</div>
							<div class="clear left span9">
								<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
							</div>
							<div id="mce-responses" class="clear span11">
								<div class="response" id="mce-error-response fail" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>
						</form>
					</div>
			<!--h3 class="widget-title"><p><a href="http://feedburner.google.com/fb/a/mailverify?uri=CometChat&amp;loc=en_US" target="_blank"><img src="<?php echo BASE_URL . "public/img/mail.png"; ?>" alt="" style="vertical-align:middle;border:0"/></a>&nbsp;&nbsp;<a href="http://feedburner.google.com/fb/a/mailverify?uri=CometChat&amp;loc=en_US"  target="_blank">Subscribe via email</a></p></h3-->
					
			<h3 class="widget-title" style="margin-top: -20px"><p><a href="http://feeds.feedburner.com/CometChat" rel="alternate" type="application/rss+xml"  target="_blank"><img src="<?php echo BASE_URL . "public/img/rss.png"; ?>" alt="" style="vertical-align:middle;border:0"/></a>&nbsp;&nbsp;<a href="http://feeds.feedburner.com/CometChat"  target="_blank" rel="alternate" type="application/rss+xml">Subscribe in a reader</a></p></h3>

			</li>



<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=yearly' ); ?>
				</ul>
			</li>

	

		<?php endif; // end primary widget area ?>
			</ul>
		</div>

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div>

<?php endif; ?>
