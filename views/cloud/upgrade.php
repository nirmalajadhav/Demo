<div id="purchase">
	<div class="container sect_cont text-center">

		<div class="row-fluid network-images">
			<div class="span12">
				<h2>CometChat Cloud Edition</h2>
				<h4>Select a new plan to add more features!</h4>
			</div>		
		</div>			

		<div class="purchase_plan safe">
			<div class="row-fluid">
				<div class="span9 network-center">
					<div class="span4 edition_box <?php if($plan == 11) echo 'greyout'; ?>">
						<div class="edition_name">
							<h3>Starter</h3>
						</div>
						<div class="edition_liner">&nbsp;</div>
						<div class="edition_feat">
							<a href="#">50,000 Page Views</a>
							<a href="#">Unlimited Users</a>
							<a href="#">Priority Support</a>
							<a href="#">All features!</a>
						</div>
						<div class="edition_price">
							<div class="row-fluid">
								<div class="span12">
									<div class="priceblock" style="max-width: 130px;">
										<span class="dollar">$</span>
										<span class="amt">99</span>
										<span class="only">/mo</span>
									</div>
								</div>
							</div>
						</div>	
						<div class="buy_edition">
							<div class="button">
							<?php if ($plan == 11):?>
							Current Plan
							<?php else:?>
							<a href="https://my.cometchat.com/cloud/upgrade/<?php echo $id;?>/11">Downgrade Plan</a>
							<?php endif;?>
						</div>
						</div>	
					</div>
					<div class="span4 edition_box <?php if($plan == 12) echo 'greyout'; ?>" id="big">
						<div class="edition_name" id="pro_font">
							<h3>Plus</h3>
						</div>
						<div class="edition_feat">
							<a href="#">100,000 Page Views</a>
							<a href="#">Unlimited Users</a>
							<a href="#">Priority Support</a>
							<a href="#">All features!</a>
						</div>
						<div class="edition_price">
							<div class="row-fluid">
								<div class="span12">
									<div class="priceblock">
										<span class="dollar">$</span>
										<span class="amt">199</span>
										<span class="only">/mo</span>
									</div>
								</div>
							</div>
						</div>	
						<div class="buy_edition">
							<div class="button">
							<?php if ($plan == 12):?>
							Current Plan
							<?php elseif ($plan == 11):?>
							<a href="https://my.cometchat.com/cloud/upgrade/<?php echo $id;?>/12">Upgrade Plan</a>
							<?php else:?>
							<a href="https://my.cometchat.com/cloud/upgrade/<?php echo $id;?>/12">Downgrade Plan</a>
							<?php endif;?>
						</div>
						</div>				
					</div>	
					
					<div class="span4 edition_box <?php if($plan == 13) echo 'greyout'; ?>">
						<div class="edition_name">
							<h3>Max</h3>
						</div>
						<div class="edition_liner">&nbsp;</div>
						<div class="edition_feat">
							<a href="#">300,000 Page Views</a>
							<a href="#">Unlimited Users</a>
							<a href="#">Priority Support</a>
							<a href="#">All features!</a>
						</div>
						<div class="edition_price">
							<div class="row-fluid">
								<div class="span12">
									<div class="priceblock">
										<span class="dollar">$</span>
										<span class="amt">299</span>
										<span class="only">/mo</span>
									</div>
								</div>
							</div>
						</div>	
						<div class="buy_edition">
							<div class="button">
							<?php if ($plan == 13):?>
							Current Plan
							<?php else:?>
							<a href="https://my.cometchat.com/cloud/upgrade/<?php echo $id;?>/13">Upgrade Plan</a>
							<?php endif;?>
				          	</div>
						</div>				
					</div>	
					
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
					<div class="question"><p><b>How will I be charged?</b></p></div>
					<div class="answer"><p>You will be charged on pro-rata basis. So if you upgrade, you will be charged additional for the remaining days only. If you downgrade, you will be refunded the difference for the remaining days of your billing cycle.</p></div>
				</div>
				<div class="span6 faq_cont">
					<div class="question"><p><b>I am still on my trial; what will happen if I upgrade/downgrade?</b></p></div>
					<div class="answer"><p>Your trial plan will continue and you will only be charged as per your new plan after the trial period is over.</p></div>
				</div>		
			</div>		
		</div>
	</div>		
</div>		

<style>
.network-images img {
	padding: 20px 20px;
	max-height: 35px;
}
.network-center {
	margin: 0 auto !important;
	float: none !important;
}
</style>
