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

				<div class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="maintitle"><?php the_title(); ?></h2>
					
					<div>

						<h3>Introduction</h3>

						<p>This guide will help you through the installation process and get CometChat running on your site.</p>

						<p>Installation is very straight forward, only taking about 5 minutes from uploading the files to viewing the CometChat bar on your site.</p>

						<p>Before you begin, you will need an FTP client, if you do not have one, some popular solutions include <a href="http://filezilla-project.org/">FileZilla</a> (free) or <a href="http://www.globalscape.com/products/ftp_clients.aspx">CuteFTP</a> (trial).</p>

						<p>You do not need programming knowledge to install CometChat, but a working knowledge of FTP functions is a plus.</p>

						<p>This guide assumes that you have successfully downloaded the latest release of CometChat and have the zip file "unzipped" and ready to go. If not, you can download the package from your client area.</p>

						<p>The instructions will term the zip file you downloaded as cometchat.zip.</p>

						<h3>Uploading</h3>

						<p>At this point, you should have the zip archive cometchat.zip and find a single folder- "cometchat".</p>

						<p>If you don't know already, find out the folder in which <?php the_title(); ?> is installed.</p>

						<p>If you access your <?php the_title(); ?> site via 'http://www.domain.com', then look for the webroot directory.</p>

						<p>The "webroot" directory is usually 'public_html' or 'www', but this varies from server to server so if you're unsure, contact your hosting provider.</p>

						<p>Using your FTP client, copy the cometchat folder inside your <?php the_title(); ?> folder. e.g. http://www.domain.com/cometchat</p>

						<?php global $post; echo get_post_meta($post->ID, 'extra1', true);?>



						<h3>Installation</h3>

						<p></p>
						
						<?php global $post; echo get_post_meta($post->ID, 'videoextra', true);?>

						<p><strong>Step 1</strong></p>

						<p>You should now run the installer file through your web browser by entering the URL to it into your browser address bar (if you have followed our example, type in http://www.domain.com/cometchat/install.php, naturally substituting 'domain.com' for your web address).</p>

						<p>If the installation was completed successfully, then two lines of HTML code will be displayed on your screen. Please copy these two lines.</p>

						<p><strong>Step 2</strong></p>

						<p>Now edit your template header.</p>

						<?php the_content(); ?>

						<p><br/>Now delete install.php file from the cometchat folder.</p>

						<p>That's all! Now log-in to your site and you will be able to see the CometChat bar. For customizing the text, icons, plugins, theme and modules, please refer to other documents.</p>
					
						<?php // echo do_shortcode('[fbcomments]');?>
						
					</div>
				</div>

<?php endwhile; // end of the loop. ?>