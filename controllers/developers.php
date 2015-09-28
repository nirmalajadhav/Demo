<?php

function index() {
	global $template;
	$template->set('sitetitle', 'Integrate CometChat with virually any website | CometChat');
	$template->set('meta_keywords', 'Developers guide and resources for CometChat');
	$template->set('meta_description', 'Use CometChat Application program interfaces and tools to Develop and Custom code CometChat as per your Website needs');
	$template->set('prefootercontent', 'Get your customizable chat solution now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL."buy");	
}