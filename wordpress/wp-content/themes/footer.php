<footer id="footer">
			<div class="container">
				<div class="row-fluid foot_sec2">
					<div class="span6 blogs">
						<div class="foot_head">Blog</div>
						<?php
							echo file_get_contents(dirname(dirname(dirname(dirname(__FILE__)))).'/cache/rss-'.CDN_VERSION.'.txt');
						?>
					</div>
					<div class="span1">
					</div>
					<div class="span5">
						<div class="row-fluid">
							<div class="span12 cont">
								<p>Connect with us on:</p>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12 social_icons">
								<ul>
									<li>
										<a href="http://www.facebook.com/CometChat" id="fb_icon" target="_blank" title="Like us on Facebook"></a>
									</li>
									<li>
										<a href="http://www.twitter.com/CometChat" id="twitter_icon" target="_blank" title="Follow us on Twitter"></a>
									</li>
									<li>	
										<a href="https://plus.google.com/+CometChat" target="_blank" id="gtalk_icon" title="+1 us on g+"></a>
									</li>
									<li>
										<a href="http://www.youtube.com/cometchattv" id="utube_icon" title="Subscribe our channel on Youtube" target="_blank"></a>
									</li>
									<li>
										<a href="<?php echo BASE_URL.'blog'; ?>" id="rss_icon" title="Read our blog updates"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12 cont">
								<p>Subscribe to receive special offers and updates</p>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<div  id="subscribe">
									<form action="<?php echo BASE_URL.'newsletter/subscribe'; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="mc-embedded-subscribe-form validate" target="_blank" novalidate>
										<div class="mc-field-group left">
											<label for="mce-EMAIL" style="display:none">Email Address </label>
											<input type="email" placeholder="Enter your email address"  value="" name="EMAIL" class="required email" id="mce-EMAIL">
										</div>
										<div class="clear left">
											<input type="submit" value="Subscribe" rel="subscribecontent" name="subscribe" id="mc-embedded-subscribe" class="button">
											<a href="#newsletter-popup" rel="subscribecontent"></a>
										</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid foot_sec1">
					<div class="span10">
						<div class="row-fluid">
							<div class="span3">
								<div class="foot_head">CometChat</div>
								<ul>
									<li><a href="<?php echo BASE_URL; ?>features">Features</a></li>
									<li><a href="<?php echo BASE_URL; ?>demo">Demo</a></li>
									<li><a href="<?php echo SSL_LINK_BASE_URL; ?>buy">Purchase</a></li>
									<li><a href="<?php echo BASE_URL; ?>cometservice">CometService</a></li>
									<li><a href="<?php echo BASE_URL; ?>assist">Resources</a></li>
									<li><a href="<?php echo BASE_URL; ?>reviews">CometChat Reviews</a></li>
								</ul>
							</div>
							<div class="span3">
								<div class="foot_head">Resources</div>
								<ul>
									<li><a href="<?php echo BASE_URL ."documentation/installing-cometchat"; ?>">Installation Guide</a></li>
									<li><a href="<?php echo BASE_URL ."documentation/admin/"; ?>">Administration Manual</a></li>
									<li><a href="<?php echo BASE_URL ."documentation/end-user-manual/"; ?>">End User Manual</a></li>
								<!--	<li><a href="http://forum.cometchat.com/" target="_blank">Community Forums</a></li> -->
									<li><a href="<?php echo BASE_URL.'faq'; ?>">FAQs</a></li>
									<li><a href="https://my.cometchat.com/tickets/create-new-ticket" target="_blank">Create a support ticket</a></li>
									<li><a href="https://my.cometchat.com/tickets/manage-tickets" target="_blank">View existing tickets</a></li>
									<li><a href="<?php echo BASE_URL.'change-log'; ?>">Change log</a></li>
								</ul>
							</div>
							<div class="span3">
								<div class="foot_head">Make Money</div>
								<ul>
									<li><a href="<?php echo BASE_URL; ?>affiliates">Affiliates</a></li>
									<li><a href="<?php echo BASE_URL; ?>developers">Developers</a></li>
								</ul>
								<div class="foot_head">Site Policies</div>
								<ul>
									<li><a href="<?php echo BASE_URL.'legal/terms-and-conditions'; ?>">Terms & Conditions</a></li>
									<li><a href="<?php echo BASE_URL.'legal/privacy-policy'; ?>">Privacy Policy</a></li>
								</ul>
							</div>
							<div class="span3">
								<div class="foot_head">Customers Area</div>
								<ul>
									<li><a href="https://my.cometchat.com/" id="siteloginbtn2" target="_blank">Members Area</a></li>
									<li><a href="<?php echo BASE_URL.'contact'; ?>">Contact Us</a></li>
								</ul>
							</div>						
						</div>
					</div>
					<div class="span2 securecomodo">
						<div class="checkcomodo">
							<a href="javascript:void(0);" title="Comodo" target="_blank" onclick="return comodocheck();">
								<img src="<?php echo LINK_BASE_URL; ?>public/img/comodo_sa_100x85_transp.png">
							</a>
						</div>
					</div>
				</div>
				<div class="row-fluid foot_sec3">
					<div class="span12">
						<p>© Copyright 2015 CometChat</p>
					</div>
				</div>
			</div>
			<!--Thank you popup starts here-->
				<div class="hide" id="newsletter-popup" style="text-align:center;">
					<div class="row-fluid">
						<div class="span-12">
							<h2 style="text-align:center;">Thank you for subscribing!</h2>
							<span style="text-align:center; padding:10px 30px;">Please click on the confirmation link in the email you would have received from us. Be sure to check your SPAM folder as well.</span>
						</div>
					</div>
				</div>
			<!--Thank you popup ends here-->
		</footer>
		
		<script type="text/javascript" src="<?php echo LINK_BASE_URL; ?>public/js/script.js.php?v=<?php echo CDN_VERSION;?>"></script>
		<script type="text/javascript" src="<?php echo LINK_BASE_URL; ?><?php echo COMETCHAT_DIR; ?>/js.php?v=<?php echo CDN_VERSION;?>" charset="utf-8"></script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-16497754-17', 'cometchat.com');
		  ga('send', 'pageview');
		
		</script>
		
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 1017339409;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1017339409/?value=0&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
		<script>(function() {
		  var _fbq = window._fbq || (window._fbq = []);
		  if (!_fbq.loaded) {
			var fbds = document.createElement('script');
			fbds.async = true;
			fbds.src = '//connect.facebook.net/en_US/fbds.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(fbds, s);
			_fbq.loaded = true;
		  }
		  _fbq.push(['addPixelId', "753972057976244"]);
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(["track", "PixelInitialized", {}]);
		</script>
		<noscript><img height="1" width="1" border="0" alt="" style="display:none" src="https://www.facebook.com/tr?id=753972057976244&amp;ev=NoScript" /></noscript>

		<?php
		/*
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-537b626348d7f2ac"></script>
                <script type="text/javascript">
                  addthis.layers({
                    'theme' : 'transparent',
                    'share' : {
                      'position' : 'right',
                      'services' : 'facebook,twitter,google_plusone_share,email',
                      'mobile' : false
                    },
                    'responsive' : {
                       'maxWidth' : '10px',
                       'minWidth' : '0px'
                    }
                  });
                </script>
		*/
		?>

		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-537b626348d7f2ac" async="async"></script>

	<?php wp_footer(); ?>
	</body>
</html>
