<?php

function index() {
	global $template;
	$template->set('sitetitle', 'What\'s new in CometChat | CometChat');
	$template->set('meta_keywords', 'Version changes, New version releases');
	$template->set('meta_description', 'A look at the latest version releases of CometChat and the changes made in them');
	$template->set('canonicalvariable',  BASE_URL.'change-log');
	$template->set('prefootercontent', 'Get your customizable chat solution now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');	
}
