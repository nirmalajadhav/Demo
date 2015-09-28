<?php

function index() {
	global $template;
	$template->set('sitetitle', 'Frequently Asked Questions? | CometChat');
	$template->set('meta_keywords', '');
	$template->set('meta_description', 'The most common questions asked about CometChat before purchase');
	$template->set('canonicalvariable',  BASE_URL.'faq');	
	$template->set('prefootercontent', 'Get the easy to install CometChat now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');	

}
