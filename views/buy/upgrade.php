<div id="purchase" class="upgradepage" data-token="<?php echo $paymenttoken; ?>">
	<?php include 'psubmenu.php'; ?>
	<div class="container sect_cont">
		<div class= "row-fluid">
			<div class="span12">
				<div class="purchase_head">
					<h2>Add more functionality. Upgrade CometChat Now!</h2>
				</div>
				<div class="comodo">
					<p>
						<a href="#" title="Comodo" target="_blank" onclick="return comodocheck();">
							<img src="<?php echo LINK_BASE_URL; ?>public/img/comodo_sa_100x85_transp.png">
						</a>
					</p>
				</div>
			</div>
		</div>
		<div class="purchase_plan separat">
			<div class="row-fluid">
				<div class="span3 edition_box <?php if($basicpackvar == 0) echo 'greyout'; ?>">
					<div class="edition_name">
						<h3>Basic</h3>
					</div>
					<div class="edition_liner">
						<p>FOR SMALL SITES<p>
					</div>
					<div class="edition_feat">
						<a href="#"  class="hastip" title="Use CometChat with virtually unlimited number of users">Unlimited Users</a>
						<a href="#"  class="hastip" title="Announcements Module, Change Theme Module, Chatrooms Module, Facebook Fan Page Module, Games Module, Home Module, Scroll To Top Module, Share This Page Module, Translate Module and Twitter Module">10 CometChat Modules</a>
						<a href="#"  class="hastip" title="Block User Plugin, Chat History Plugin, Chat Time Plugin, Clear Conversation Plugin, Color your text Plugin, Games Plugin, Handwrite a message Plugin, Report Conversation Plugin, Send a file Plugin, Smilies Plugin">10 CometChat Plugins</a>
						<a href="#"  class="hastip" title="A 'Powered By CometChat' link is present in the options menu (gear icon)">Branded Edition</a>
					</div>
					<div class="edition_price" <?php if($basicpackvar == 0) echo 'style="visibility:hidden"'; ?>>
						<div class="row-fluid">
							<div class="span12">
								<div class="priceblock" style="max-width: 130px;">
									<span class="dollar">$</span>
									<span class="amt"><?php if($basicpackvar == 0) echo '0'; else $basiccost; ?></span>
									<span class="only">only</span>
								</div>
							</div>
						</div>
					</div>	
					<div class="buy_edition" <?php if($basicpackvar == 0) echo 'style="visibility:hidden"'; ?>>
						<div class="button upbutton">
							<?php if($basicpackvar == 1) { ?>
								<a>Active</a>
							<?php } else { ?>
								<a>Active</a>
							<?php } ?>
						</div>
					</div>	
				</div>
				<div class="span3 edition_box <?php if($propackvar == 0) echo 'greyout'; ?>" id="big">
					<div class="edition_name" id="pro_font">
						<h3>Professional</h3>
					</div>
					<div class="edition_liner">
						<p id="popular">MOST POPULAR</p>
					</div>
					<div class="edition_feat">
						<a href="#" class="hastip" title="No visible links to CometChat.com and no visible mention of CometChat">Branding Free Edition</a>
						<a href="#" class="hastip" title="Users can chat with their Facebook & Gtalk friends directly from CometChat. This service requires an active CometChat license.">Facebook/Gtalk Friends Chat</a>
						<a href="#" class="hastip" title="Users can type non-latin characters using standard keyboards. Over 20 languages to choose from.">Transliterate Plugin</a>
						<a href="#" class="hastip" title="Need to keep local records of a chat conversation? Your users can download entire chat conversations as text files">Save Conversation Plugin</a>
						<a href="#" class="hastip" title="Are your users chatting in different languages? Users can translate all incoming conversations into their native language with a single click">Real-time Translation Module</a>
					</div>
					<div class="edition_price" <?php if($propackvar == 0) echo 'style="visibility:hidden"'; ?>>
						<div class="row-fluid">
							<div class="span12">
								<div class="priceblock">
									<span class="dollar">$</span>
									<span class="amt"><?php if($propackvar == 0) echo '0'; else echo $procost; ?></span>
									<span class="only">only</span>
								</div>
							</div>
						</div>
					</div>	
					<div class="buy_edition" <?php if($propackvar == 0) echo 'style="visibility:hidden"'; ?>>
						<div class="button upbutton">
							<?php if($propackvar == 1) { ?>
								<a class="hidden-phone hidden-tablet hidden-desktop" href="#professional" rel="cometcontent"></a>
								<a id="buyprooptions" class="hidden-phone" href="https://www.2checkout.com/checkout/purchase?sid=138239&quantity=1&product_id=<?php echo $proprodid; ?>&skip_landing=1&currency_code=USD">UPGRADE NOW</a>
								<a class="visible-phone" href="https://www.2checkout.com/checkout/purchase?sid=138239&quantity=1&product_id=<?php echo $proprodid; ?>&skip_landing=1&currency_code=USD">UPGRADE NOW</a>
							<?php } else { ?>
								<a>Active</a>
							<?php } ?>
						</div>
					</div>				
				</div>	
				
				<div class="span3 edition_box <?php if($prepackvar == 0) echo 'greyout'; ?>">
					<div class="edition_name">
						<h3>Premium</h3>
					</div>
					<div class="edition_liner">
						<p>COMMERCIAL SITES<p>
					</div>
					<div class="edition_feat">
						<a href="#" class="hastip" title="Empower your mobile users to chat using handcrafted iPhone, iPad, Android and BlackBerry web-apps">Mobile web-apps</a>
						<a href="#" class="hastip" title="Earn money when your users chat by adding Google Adsense or your own custom ad to chat boxes.">Advertisements Extension</a>
						<a href="#" class="hastip" title="Users can share thoughts by drawing on a collaborative whiteboard">Whiteboard Plugin</a>
						<a href="#" class="hastip" title="Our professional technicians will integrate and install CometChat on your site. We guarantee installation or your money back.">Guaranteed Installation</a>
					</div>
					<div class="edition_price" <?php if($prepackvar == 0) echo 'style="visibility:hidden"'; ?>>
						<div class="row-fluid">
							<div class="span12">
								<div class="priceblock">
									<span class="dollar">$</span>
									<span class="amt"><?php if($prepackvar == 0) echo '0'; else echo $precost; ?></span>
									<span class="only">only</span>
								</div>
							</div>
						</div>
					</div>	
					<div class="buy_edition" <?php if($prepackvar == 0) echo 'style="visibility:hidden"'; ?>>
						<div class="button upbutton">
							<?php if($prepackvar == 1) { ?>
								<a class="hidden-phone hidden-tablet hidden-desktop" href="#premium" rel="cometcontent"></a>
								<a id="buypreoptions" class="hidden-phone" href="https://www.2checkout.com/checkout/purchase?sid=138239&quantity=1&product_id=<?php echo $preprodid; ?>&skip_landing=1&currency_code=USD">UPGRADE NOW</a>
								<a class="visible-phone" href="https://www.2checkout.com/checkout/purchase?sid=138239&quantity=1&product_id=<?php echo $preprodid; ?>&skip_landing=1&currency_code=USD">UPGRADE NOW</a>
							<?php } else { ?>
								<a>Active</a>
							<?php } ?>
						</div>
					</div>				
				</div>	
				<div class="span3 edition_box <?php if($plapackvar == 0) echo 'greyout'; ?>">
					<div class="edition_name">
						<h3>Platinum</h3>
					</div>
					<div class="edition_liner">
						<p>TOP-OF-THE-LINE<p>
					</div>
					<div class="edition_feat gap">
						<a href="#" class="hastip" title="The simplest way to connect face-to-face! Leverages peer-to-peer technology to achieve high quality video conversations. No server bandwidth used and works on shared servers.">Audio & Video Chat Plugin</a>
						<a href="#" class="hastip" title="The easiest way for your users to share their screen. Need to show a presentation or a demo? Easily share your screen or a particular window with another user.">Screen sharing Plugin</a>
						<a href="#" class="hastip" title="Conduct a webinar or a one way screencast with the Broadcast plugin. ">Broadcast Plugin</a>
					</div>
					<div class="edition_price"  <?php if($plapackvar == 0) echo 'style="visibility:hidden"'; ?>>
						<div class="row-fluid">
							<div class="span12">
								<div class="priceblock ">
									<span class="dollar">$</span>
									<span class="amt"><?php if($plapackvar == 0) echo '0'; else echo $placost; ?></span>
									<span class="only">only</span>
								</div>
							</div>
						</div>
					</div>	
					<div class="buy_edition " <?php if($plapackvar == 0) echo 'style="visibility:hidden"'; ?>>
						<div class="button upbutton">
							<?php if($plapackvar == 1) { ?>
								<a class="hidden-phone hidden-tablet hidden-desktop" href="#platinum" rel="cometcontent"></a>
								<a id="buyplaoptions" class="hidden-phone" href="https://www.2checkout.com/checkout/purchase?sid=138239&quantity=1&product_id=<?php echo $plaprodid; ?>&skip_landing=1&currency_code=USD">UPGRADE NOW</a>
								<a class="visible-phone" href="https://www.2checkout.com/checkout/purchase?sid=138239&quantity=1&product_id=<?php echo $plaprodid; ?>&skip_landing=1&currency_code=USD">UPGRADE NOW</a>
							<?php } else { ?>
								<a>Active</a>
							<?php } ?>
						</div>
					</div>				
				</div>		
			</div>	
		</div>	
		<div class="safe">
			<div class="row-fluid">
				<div class="span2 lock">
					<img src="<?php echo LINK_BASE_URL . "public/img/safe-and-secure.png"; ?>" alt="safe-and-secure image"/>
				</div>
				<div class="span10">
					<h2>Safe & Secure transaction</h2>
					<p>We use 2checkout and PayPal for processing payments, the most secured third party payment processing companies to handle your payments. The online commerce platform offers you a safe secure environment for you to purchase in confidence from us. The systems are checked daily by McAfee Corporation to ensure
					 that they are 100% Hacker Safe! So, do buy with confidence.</p>
				</div>		
			</div>	
		</div>
	</div>	
	<div class="faq">
		<div class="container">
			<div class="row-fluid">
				<div class="span12 divider faq_head">
					<h4>Frequently Asked Questions</h4>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6 faq_cont">
					<div class="question"><p><b>Is CometChat a one-time cost?</b></p></div>
					<div class="answer"><p>Yes, CometChat is a one-time cost. There are no monthly or yearly costs. Only for updates, support and Facebook/Gtalk chat feature require an active license.</p></div>
				</div>
				<div class="span6 faq_cont">
					<div class="question"><p><b>If I buy CometChat, will I get new updates? </b></p></div>
					<div class="answer"><p>Upgrades will be free for 1 year, this includes all major and minor releases. For subsequent year, we charge 50% of the edition price to continue downloading the latest release, if you wish. Usage license however, will never expire.</p></div>
				</div>		
			</div>
			<div class="row-fluid">
				<div class="span6 faq_cont">
					<div class="question"><p><b>How do I purchase white-labelled desktop messenger and native mobile apps? </b></p></div>
					<div class="answer"><p>The desktop messenger and native mobile apps are sold separately and can be purchased after you buy CometChat. </p></div>	
				</div>
				<div class="span6 faq_cont">
					<div class="question"><p><b>Guaranteed Installation with your site</b></p></div>
					<div class="answer"><p>Our Premium and Platinum Edition come with guaranteed installation with your site. If our team is unable to install CometChat on your site, we will refund your money. </p></div>	
				</div>		
			</div>			
		</div>
	</div>		
</div>	
<!--prettyphoto-->
<div id="popup">
	<!--basic pack-->
	<?php if($basicpackvar == 1) : ?>
	
	<?php endif; ?>
	<!--professional pack-->
	<?php if($propackvar == 1) : ?>
	<div id="professional" class="hide ">
		<h3 class="head_basic">Professional Edition</h3>
		<img class="loading-image" src="<?php echo LINK_BASE_URL; ?>public/img/loading.gif">
		<div class="content">
			<div id="prof_add" class="add_ons">
				<div class="row-fluid addon payment_modes">
					<div class="span12 addon_name">Choose your mode of payment:</div>
				</div>
				<div class="addon payment row-fluid">
					<ul>
						<li style="margin-left: 20px;">
							<input type="radio" name="optionsRadios" class="optionsRadios" value="option1" data-prodid="<?php echo $proprodid; ?>" checked>
							<a href="#" class="optionsRadios1 imgcont"><img src="<?php echo LINK_BASE_URL; ?>public/img/visa-amex-mc.png" class="buybtn" alt="visa-amex-mc image"></a>
						</li>
						<li class="pads" style="margin: 0px 0 0 90px;">
							<input type="radio" name="optionsRadios" class="optionsRadios" value="option3" data-prodn="<?php echo $proprodname; ?>" data-prodid="<?php echo $proproditemid; ?>">
							<a href="#" class="optionsRadios1 imgcont"><img src="<?php echo LINK_BASE_URL; ?>public/img/paypal.png" class="buybtn" alt="paypal image"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="button proccedbtn upbuttonpro">
				<a class="proceed" href="#" data-amt="<?php echo $procost; ?>">Upgrade Now</a>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<!--premium pack-->
	<?php if($prepackvar == 1) : ?>
	<div id="premium" class="hide ">
		<h3 class="head_basic">Premium Edition</h3>
		<img class="loading-image" src="<?php echo LINK_BASE_URL; ?>public/img/loading.gif">
		<div class="content">
			<div id="premium_add" class="add_ons">
				<div class="row-fluid addon payment_modes">
					<div class="span12 addon_name">Choose your mode of payment:</div>
				</div>
				<div class="addon payment row-fluid">
					<ul>
						<li style="margin-left: 20px;">
							<input type="radio" name="optionsRadios" class="optionsRadios" value="option1" data-prodid="<?php echo $preprodid; ?>" checked>
							<a href="#" class="optionsRadios imgcont"><img src="<?php echo LINK_BASE_URL; ?>public/img/visa-amex-mc.png" class="buybtn" alt="visa-amex image"></a>
						</li>
						<li class="pads" style="margin: 0px 0 0 90px;">
							<input type="radio" name="optionsRadios" class="optionsRadios" value="option3" data-prodn="<?php echo $preprodname; ?>" data-prodid="<?php echo $preproditemid; ?>">
							<a href="#" class="optionsRadios imgcont"><img src="<?php echo LINK_BASE_URL; ?>public/img/paypal.png" class="buybtn" alt="paypal image"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="button proccedbtn upbuttonpro">
				<a class="proceed" href="#" data-amt="<?php echo $precost; ?>">Upgrade Now</a>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<!--platinum pack-->
	<?php if($plapackvar == 1) : ?>
	<div id="platinum" class="hide ">
		<h3 class="head_basic">Platinum Edition</h3>
		<img class="loading-image" src="<?php echo LINK_BASE_URL; ?>public/img/loading.gif">
		<div class="content">
			<div id="pla_add" class="add_ons">
				<div class="row-fluid addon payment_modes">
					<div class="span12 addon_name">Choose your mode of payment:</div>
				</div>
				<div class="addon payment row-fluid">
					<ul>
						<li style="margin-left: 20px;">
							<input type="radio" name="optionsRadios" class="optionsRadios" value="option1" data-prodid="<?php echo $plaprodid; ?>" checked>
							<a href="#" class="optionsRadios1 imgcont"><img src="<?php echo LINK_BASE_URL; ?>public/img/visa-amex-mc.png" class="buybtn" alt="visa-amex image"/></a>
						</li>
						<li class="pads" style="margin: 0px 0 0 90px;">
							<input type="radio" name="optionsRadios" class="optionsRadios" value="option3" data-prodn="<?php echo $plaprodname; ?>" data-prodid="<?php echo $plaproditemid; ?>">
							<a href="#" class="optionsRadios1 imgcont"><img src="<?php echo LINK_BASE_URL; ?>public/img/paypal.png" class="buybtn" alt="paypal image"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="button proccedbtn upbuttonpro">
				<a class="proceed" href="#" data-amt="<?php echo $placost; ?>">Upgrade Now</a>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<form method="post" action="https://www.paypal.com/cgi-bin/webscr" id="paypalform" style="display:none;">
	<!-- Do not modify these values. Your order will not be processed. -->
	<input type="hidden" value="_xclick" name="cmd"/>
	<input type="hidden" value="48ZG67NDW8NTU" name="business"/>
	<input type="hidden" value="IN" name="lc"/>
	<input type="hidden" value="" name="item_name" id="buyname"/>
	<input type="hidden" value="" name="item_number" id="buyitem"/>
	<input type="hidden" value="" name="amount" id="buyamount"/>
	<input type="hidden" value="USD" name="currency_code"/>
	<input type="hidden" value="products" name="button_subtype"/>
	<input type="hidden" value="1" name="no_note"/>
	<input type="hidden" value="1" name="no_shipping"/>
	<input type="hidden" value="1" name="rm"/>
	<input type="hidden" value="https://www.cometchat.com/buy/success/?utm_nooverride=1" name="return"/>
	<input type="hidden" value="1" name="add"/>
	<input type="hidden" value="PP-ShopCartBF:btn_cart_SM.gif:NonHosted" name="bn"/>
	<input type="hidden" value="<?php echo $paymenttoken; ?>" name="custom" id="buycustom"/>
	<input type="image"  name="submit" title="Click here to pay using PayPal" style="padding:10px;border:1px solid #ccc" class="buy_buttons" />
	</form>
</div>