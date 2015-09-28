<?php

function privacypolicy() {
	global $template;
	$template->set('sitetitle', 'Privacy Policy | CometChat');
	$template->set('canonicalvariable',  BASE_URL.'legal/privacy-policy');	
	$template->set('prefootercontent', 'Add CometChat to your site now!');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');	

}
function refundpolicy() {
	global $template;
	$template->set('sitetitle', 'Refund Policy | CometChat');
	$template->set('canonicalvariable',  BASE_URL.'legal/refund-policy');
	$template->set('prefootercontent', 'Add CometChat to your site now!');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');		

}


function termsandconditions() {
	global $template;
	$template->set('sitetitle', 'Terms and Conditions | CometChat');
	$template->set('canonicalvariable',  BASE_URL.'legal/terms-and-conditions');
	$template->set('prefootercontent', 'Add CometChat to your site now!');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');		
}

function supportpolicy() {
	global $template;
	$template->set('sitetitle', 'Support Policy | CometChat');
	$template->set('canonicalvariable',  BASE_URL.'legal/refund-policy');
	$template->set('prefootercontent', 'Add CometChat to your site now!');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');	
}
