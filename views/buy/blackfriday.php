<div id="purchase" class="blackfriday">
	<div class="container sect_cont text-center">

		<div class="row-fluid">
			<div class="span12 white">
				<h1>Cyber Monday Sale</h1>
				<h3>Last Day To Get This Deal!</h3>
			</div>		
		</div>	
		<div class="purchase_plan safe">
			<div class="row-fluid">
				<div class="span12 blackfriday-center">
					<div class="span4 edition_box1">
						<div class="edition_name1">
						</div>
					</div>	
					<div class="span4 edition_box" id="big" style="box-shadow: 2px 2px 8px #888888;">
						<div class="edition_name" id="pro_font">
							<h3>Most Popular</h3>
						</div>
						<div class="edition_feat">
							<a href="#">CometChat Platinum Edition</a>
							<a href="#">White-labelled Mobile Apps (or Mobile SDK)</a>

						</div>
						<div class="edition_price">
							<div class="row-fluid">
								<div class="span12">
									<div class="priceblock" style="max-width:200px;">
										<span class="dollar">$</span>
										<span class="amt">749</span>
										<span class="only">only</span>
									</div>
								</div>
							</div>
						</div>	
						<div class="buy_edition">
							<div class="button">
							<a href="<?php echo BASE_URL; ?>contact">DEAL OVER</a>
						</div>
						</div>	
						<div id="popup">
	<!--Add CometChat Complete-->
	<div id="CometChat-complete" class="hide basicplan ">
		<h3 class="head_basic">CometChat Complete</h3>
		<img class="loading-image" src="<?php echo LINK_BASE_URL; ?>public/img/loading.gif">
		<div class="content">
			<div id="dm_add" class="add_ons">
				<div class="row-fluid addon payment_modes">
					<div class="span12 addon_name">Choose your mode of payment:</div>
				</div>
				<div class="addon payment row-fluid">
					<ul>
						<!--2 payment modes code starts here-->
						<li style="margin-left: 20px;">
							<input type="radio" name="optionsRadios" class="optionsRadios" value="option1" data-prodid="107" checked>
							<a href="#" class="optionsRadios1 imgcont"><img src="<?php echo LINK_BASE_URL; ?>public/img/visa-amex-mc.png" class="buybtn" alt="visa-amex-mc image"></a>
						</li>
						<li class="pads" style="margin: 0px 0 0 90px;">
							<input type="radio" name="optionsRadios" class="optionsRadios" value="option3" data-prodn="CometChat Black Friday Deal" data-prodid="CCBLACKFRIDAY">
							<a href="#" class="optionsRadios1 imgcont"><img src="<?php echo LINK_BASE_URL; ?>public/img/paypal.png" class="buybtn" alt="paypal image"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="button proccedbtn">
				<a class="proceed" href="#" data-amt="749">Buy Now</a>
			</div>
		</div>
	</div>			
					</div>	
				
				</div>		
			</div>	
		</div>	
	</div>	

		<P class="shrbtn">Share this offer with your friends!</P>
		<div class="row-fluid">

			<div class="span5">
			</div>
			<div class="span1">

				<div class="fb-share-button" data-href="<?php echo SSL_LINK_BASE_URL;?>buy/black-friday/#downloadnow" data-layout="button"></div>
			</div>
			<div class="span1">
				<div>
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo SSL_LINK_BASE_URL;?>buy/black-friday" data-count="none" data-dnt="true">Tweet</a>
				</div>
			</div>
			<div class="span5">
			</div>
		</div>

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
	<input type="hidden" value="" name="custom" id="buycustom"/>
	<input type="image"  name="submit" title="Click here to pay using PayPal" style="padding:10px;border:1px solid #ccc" class="buy_buttons" />
	</form>		
</div>
</div>
<style type="text/css">
.blackfriday{

	background-image: url('<?php echo LINK_BASE_URL;?>public/img/blackfriday/blackfriday.jpg')
	
}

.blackfriday .white h2, .cloud .white h4 {
	color: white !important;
}
.blackfriday .shrbtn
{
	font-weight:bold;
	padding-top:0px !important;
}
.fb-share-button {
    transform: scale(1.5) !important;
    -ms-transform: scale(1.5) !important;
    -webkit-transform: scale(1.5) !important;
    -o-transform: scale(1.5) !important;
    -moz-transform: scale(1.5) !important;
}
.fb-share-button  {
    margin: 10px auto;
}
.twitter-share-button {
    transform: scale(1.5);
    -ms-transform: scale(1.5);
    -webkit-transform: scale(1.5);
    -o-transform: scale(1.5);
    -moz-transform: scale(1.5);
}
.twitter-share-button  {
    margin: 10px auto;
}
.blackfriday-center {
	margin: 0 auto !important;
	float: none !important;
}

@media (max-width: 560px)
	{
	.blackfriday .twitter-share-button {
    transform: scale(1) !important;
    -ms-transform: scale(1) !important;
    -webkit-transform: scale(1) !important;
    -o-transform: scale(1) !important;
    -moz-transform: scale(1) !important;
}
	.blackfriday
			{
				background-image:none !important;
			}	
	}
</style>
<script type="text/javascript">
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=146955112051520&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>


