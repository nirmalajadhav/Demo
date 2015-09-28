<style>
	
	#blog_band #blog_link a
	{
		color: #fff;
		text-decoration: none;
		font-size: 15px;
		font-family: "proxima-nova",sans-serif;
		font-weight: normal;
	}
	#blog_band #blog_link a:hover
	{
		text-decoration: underline;
	}
	#blog_band #blog_link small em 
	{
		color: #98B9D5;
	}
	#blog_band p a
	{
		color: #fff;
		text-decoration: none;
		font-size: 15px;
		font-family: "proxima-nova",sans-serif;
		font-weight: normal;
	}
	#blog_band p 
	{
		color: #98B9D5;
		padding-top: 10px;
	}
	#blog_band strong a
	{
		font-size: 24.5px;		
	}
	#blog_link p 
		{
			padding-top:0;
			margin: 0 0 2px;
		}
	.sub-forum #sm_btn {
		width: 126px;
		}
		.sub-forum #sm_btn :hover {
		-webkit-transition: .50s;
		-moz-transition: .25s;
		-o-transition: .25s;
		transition: .50s;
		background: #bb422b;
		}
		.sub-forum #sm_btn {
		text-align: center;
		display: block;
		background: #d94e33;
		padding: 12px 25px;
		color: #fff;
		font-size: 16px;
		letter-spacing: 1px;
		float: left;
		-webkit-border-radius: 6px 6px 6px 6px;
		-moz-border-radius: 6px 6px 6px 6px;
		border-radius: 6px 6px 6px 6px;
		text-decoration: none;
		}
</style>
<div id="resources">
	<?php include 'rsubmenu.php'; ?>
	<div class="resources_content">
		<!--resources-->
		<div class="container">
			<div class="separat sect_cont">
				<h2>Some handy resources to get you going with CometChat.</h2>
				<div class="row-fluid">
					<div class="span4">
						<a href="<?php echo BASE_URL ."documentation/installing-cometchat"; ?>" class="resource">
							<div class="resource_content">
								<div class="icon" id="install_guide"></div>
								<h4>Installation Guide</h4>
								<p>Step-by-step reference for installation of CometChat on your website.</p>
							</div>
						</a>
					</div>
					<div class="span4">
						<a href="<?php echo BASE_URL ."documentation/admin/"; ?>" class="resource">
							<div class="resource_content">
								<div class="icon" id="admin_manual"></div>
								<h4>Administration Manual</h4>
								<p>Learn how to use the administration panel to its full potential.</p>
							</div>
						</a>
					</div>
					<div class="span4">
						<a href="<?php echo BASE_URL ."documentation/end-user-manual/"; ?>" class="resource">
							<div class="resource_content">
								<div class="icon" id="end_user_manual"></div>
								<h4>End User Manual</h4>
								<p>Get acquainted with how your users will use CometChat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4">
						<a href="<?php echo BASE_URL.'answers'; ?>" class="resource">
							<div class="resource_content">
								<div class="icon" id="ans"></div>
								<h4>Answers</h4>
								<p>Our answers to application specific questions.</p></br>
							</div>
						</a>
					</div>
					<div class="span4">
						<a href="<?php echo BASE_URL.'faq'; ?>" class="resource">
							<div class="resource_content">
								<div class="icon" id="faqicon"></div>
								<h4>FAQ</h4>
								<p>Our compiled list of FAQs addressing general questions.</p>
							</div>
						</a>
					</div>
					<div class="span4">
						<a href="https://my.cometchat.com/tickets" class="resource" target="_blank">
							<div class="resource_content">
								<div class="icon" id="ticketicon"></div>
								<h4>Tickets</h4>
								<p>Direct help from our support team. Create or manage tickets with ease.</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--ticket-->
		<div class="container sect_cont separat">
			<h2>Ticket Support</h2>
			<div class="row-fluid" id="ticket">
				<div class="span6">
					<a id="sm_btn" href="https://my.cometchat.com/tickets" target="_blank">Create a ticket</a>
					<p>If you want to install, upgrade or customize CometChat, you can create a ticket to get help from our dedicated support team.</p>
				</div>
				<div class="span6">
					<a href="https://my.cometchat.com/tickets" target="_blank">Manage a ticket</a>
					<p>If you already have an existing ticket, click here to manage your ticket and know its current status from our support team.</p>
				</div>				
			</div>
		</div>
		
		<!--video section-->
		<div class="container sect_cont">
			<div class="row-fluid " id="vid">
				<h2> Watch our video tutorials to understand CometChat better.</h2>
				<div class="row-fluid video_section">
					<div class="thumbnails">
						<div class="span3">
							<a class="thumbnail" alt=" " rel="" href="<?php echo BASE_URL.'video-tutorials'; ?>#popular">
								<div class="parent_cont">
									<img src="<?php echo LINK_BASE_URL . "public/img/resources/thumbnail_popular.png"; ?>" alt="popular image"/>  
									<div class="thumbnail_overlay">
										<div class="overlay_icon1 popular"></div>
									</div>
								</div>
								<h4 class="atag">Popular Videos</h4>
								<p>Top videos of our favorite features.</p>
							</a>
						</div>
						<div class="span3">
							<a class="thumbnail" alt=" " rel="" href="<?php echo BASE_URL.'video-tutorials'; ?>#features">
								<div class="parent_cont">
									<img src="<?php echo LINK_BASE_URL . "public/img/resources/thumbnail_features.png"; ?>" alt="features image"/>
									<div class="thumbnail_overlay">
										<div class="overlay_icon1 features"></div>
									</div>
								</div>
								<h4>CometChat Features</h4>
								<p>Watch these videos to know CometChat features better</p>
							</a>
						</div>
						<div class="span3">
							<a class=" thumbnail" alt=" " rel="" href="<?php echo BASE_URL.'video-tutorials'; ?>#extensions">
								<div class="parent_cont">
									<img src="<?php echo LINK_BASE_URL . "public/img/resources/thumbnail_extension.png"; ?>" alt="extension image"/>
									<div class="thumbnail_overlay">
										<div class="overlay_icon1 extension"></div>
									</div>
								</div>
								<h4>Extensions</h4>
								<p>Extensions that adds value to your site.</p>
							</a>
						</div>
						<div class="span3">
							<a class="thumbnail" alt="" rel="" href="<?php echo BASE_URL.'video-tutorials'; ?>#installation-videos">
								<div class="parent_cont">
									<img src="<?php echo LINK_BASE_URL . "public/img/resources/thumbnail_install.png"; ?>" alt="install image"/>
									<div class="thumbnail_overlay">
										<div class="overlay_icon1 install"></div>
									</div>
								</div>
								<h4>Installation Tutorials</h4>
								<p>Install CometChat on different platforms.</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="blog_band">
			<div class="container sect_cont">
				<h2>Blog posts: Stay in touch with the latest in CometChat</h2>
				<div class="row-fluid">
					<div class="span8">
						<div class="row-fluid">
							<?php
							$rss = new DOMDocument();
							$rss->load('http://www.cometchat.com/blog/feed/');
							$feed = array();
							foreach ($rss->getElementsByTagName('item') as $node) {
							$item = array ( 
							'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
							'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
							'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
							'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
							);
							array_push($feed, $item);
							}
							$limit = 1;
							for($x=0;$x<$limit;$x++) {
							$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
							$link = $feed[$x]['link'];
							$description = $feed[$x]['desc'];
							$date = date('l F d, Y', strtotime($feed[$x]['date']));
							
							echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
							echo '<small><em>Posted on '.$date.'</em></small></p>';
							echo '<p>'.$description.'</p>';
							
							}
							?>
						</div>
					</div>
					<div class="span4" id="blog_link">
						<h3>Others..</h3>

						<?php
						$rss = new DOMDocument();
						$rss->load('http://www.cometchat.com/blog/feed/');
						$feed = array();
						foreach ($rss->getElementsByTagName('item') as $node) {
						$item = array ( 
						'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
						'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
						'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
						'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
						);
						array_push($feed, $item);
						}
						$limitlinks = 5;
						for($x=0;$x<$limitlinks;$x++) {
						$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
						$link = $feed[$x]['link'];
						$date = date('D M dS', strtotime($feed[$x]['date']));
						
						echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong>';echo "&nbsp;&nbsp;";
						echo '<small><em>'.$date.'</em></small></p>';
						
						}
						?> 	
					</div>
				</div>
			</div>
		</div>
		
		<!--forum section-->
		<!--
		<div class="container sect_cont">
			<div class="row-fluid" id="forums">
				<div class="span12">
					<h2>CometChat Forums</h2>
					<p>Welcome to the CometChat forums - a platform for you to get in touch with other CometChat users for discussions, troubleshooting and sharing ideas. CometChat employees are also active in the forums and respond to questions and comments. </p>
				</div>
				<div class="span12 sub-forum">
					<p>
						<a id="sm_btn" href="http://forum.cometchat.com" target="_blank">Forums</a>
					</p>
				</div>
			</div>
		</div>
		-->
	</div>
</div>
