<div id="contactus">
	<div class="container">
		<div class="row-fluid sect_cont">
			<div class="span12">
				<h2>Contact Us</h2>
				<p>Get in touch with us. The CometChat team will be happy to help you. Just fill in the form so that we are able to reach you.</p>
			</div>
		</div>
	</div>
	<div id="dark-blue" class="row-fluid">
		<div class="container">
			<div class="row-fluid">
				<div class="span5">
					<div class="row-fluid">
						<div class="span12" id="form_head" data-url="<?php echo BASE_URL.'contact/sendmail'; ?>">
							<h3>Have a question about CometChat?</h3>
						</div>
					</div>
					<div class="row-fluid page">
						<div class="span12" id="form">
							<div class="row-fluid">
								<div class="span12">
									<select id="cfqtypefield">
										<!--option value="none">How can we help?</option-->
										<option value="0">I have a question before I purchase CometChat</option>
										<option value="1">I need assistance installing/running CometChat </option>
										<option value="2">I would like to contact the CometChat Team regarding something else</option>
									</select>
									<div id="cferror"></div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span12">
									<input type="text" id="cfemailfield" name="email" placeholder="Enter your email address">
									<div id="cferrormail"></div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span12">
									<input type="text" name="subject" id="cfsubjectfield" class="textbox" placeholder="Enter your subject">
									<div id="cferrorsub"></div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span12">	
									<textarea rows="6" id="cfmsgfield" cols="100" placeholder="Questions/Comments"></textarea>
									<div id="cferrormes"></div>
								</div>
							</div>
							<!--div id="condition" class="checkbx">
								<span class="click"><img class="checkbox contactbox" id="subscribe_box" src="public/img/empty.png" /></span>
								<span class="contactus_chkbox click">I would like to subscribe to CometChat.</span>
							</div-->
							<div class="button">
								<a id="cfsubmit" href="#">Submit</a>
								<a href="#contact-popup" rel="subscribecontent1" class="contact_popup"></a>
							</div>
						</div>
					</div>	
				</div>
				<div class="span1">
					<div class="half">
						
					</div>
				</div>
				<div class="span6 map">
					<div id="sprite_icon" class="mailus">
						<h3>Or email us at</h3>
						<a href="<?php echo  BASE_URL.'contact'; ?>" rel="<?php echo nospam('sales@cometchat.com'); ?>" class="obfemail">Contact Us</a>
						 <script type="text/javascript">
				            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
				            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
				        </script>
				        <script type="text/javascript">
				            var pageTracker = _gat._getTracker("UA-1790385-1");
				            pageTracker._initData();
				            pageTracker._trackPageview();
				        </script>
					</div>
					<div id="sprite_icon">
						<p class="contactUsFormText mail"> You can also connect with us on:</p>
						<a href="http://www.facebook.com/CometChat" target="_blank" class="social"><div id="fb_sprite"></div></a>
						<a href="http://www.twitter.com/CometChat" target="_blank"  class="social"><div id="gplus_sprite"></div></a>
						<a href="https://plus.google.com/+CometChat" target="_blank" class="social"><div id="twitter_sprite"></div></a>
					</div>
					<div id="subscribe" class="newsletter">
						<p>Subscribe to our Newsletter</p>
						<!--form action="http://cometchat.us1.list-manage1.com/subscribe/post?u=bb3d96997ca63c3d2772b7509&amp;id=a2fd04daa3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
							<div class="mc-field-group left span6"-->
							<form action="<?php echo BASE_URL.'newsletter/subscribe'; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="mc-embedded-subscribe-form validate" target="_blank" novalidate="">
							<div class="mc-field-group left span5">
								<label for="mce-EMAIL" style="display:none">Email Address </label>
								<input type="email" placeholder="Enter your email address" value="" name="EMAIL" class="required email" id="mce-EMAIL">
							</div>
							<div class="clear left span4">
								<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
							</div>
							<div id="mce-responses" class="clear span11">
								<div class="response" id="mce-error-response fail" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>
						</form>
					</div>
					<!--img src="<?php echo BASE_URL; ?>public/img/contact-us-map-dark.png" alt="cometchat-contact-us image" style="max-width:50%; margin:0 auto;"/-->
				</div>
			</div>
		</div>	
	</div>
</div>
<!--Message sent successfully prettyphoto popup-->
<div class="hide" id="contact-popup">
	<div class="row-fluid">
		<div class="span-12">
			<h2 style="text-align:center;">Successfully sent message!</h2>
			<h4 style="text-align:center; padding:10px 30px;">Please allow us 24-48 hours to get back to you. Be sure to keep an eye on your SPAM folder as well.</h4>
		</div>
	</div>
</div>
