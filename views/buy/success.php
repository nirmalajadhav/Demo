<div id="success">
	<div class="container sect_cont">
		<div class="purchase_head thankyou">
			<div class = "successimg">
				<img src="<?php echo LINK_BASE_URL; ?>public/img/success.png">
			</div>
			<h2>Thank you!</h2>
		</div>
		<div class= "row-fluid">
			<div class="span12">
				<div class="info">
					<h4>
						Thank you for purchasing CometChat! You will be receiving an automated e-mail from us as soon as <span>your purchase passes the fraud review check. </span> If you have purchased using PayPal, this process usually takes a few minutes. If you have purchased using credit card, it may take a few hours. Thank you for your patience.
						</br></br>
						Please check your <span> SPAM folder also.</span>  If you do not receive any <span> e-mail within the next 8 hours</span>, feel free to create a support ticket.
					</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if (!empty($amount) && !empty($tracking) && $affproduct == 1):?>
<!--<img src="https://shareasale.com/sale.cfm?amount=<?php echo $amount;?>&tracking=<?php echo $tracking;?>&transtype=sale&merchantID=53758" width="1" height="1">
-->
<?php endif;?>


<?php if (empty($amount)):?>
<?php $amount = 0; ?>
<?php endif;?>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1017339409;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "hfvFCK-87gcQkbyN5QM";
var google_remarketing_only = false;
var google_conversion_value = <?php echo $amount;?>;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1017339409/?value=<?php echo $amount;?>&amp;label=hfvFCK-87gcQkbyN5QM&amp;guid=ON&amp;script=0"/>
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
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6015930318758', {'value':'<?php echo $amount;?>','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6015930318758&amp;cd[value]=<?php echo $amount;?>&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
