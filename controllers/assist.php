<?php

function index() {
	global $template;
	$template->set('sitetitle', 'Need assistance? | CometChat');
	$template->set('meta_keywords', 'Resources for CometChat : Videos, Documentation, Installation Guide, User Manual, FAQ, Tickets');
	$template->set('meta_description', 'Find the best resources for CometChat and learn better about CometChat from our Resources. Resources include Videos, Documentation, Installation Guide, User Manual, FAQ, Answers, Knowledgebase, Tickets and Forums.');
	$template->set('canonicalvariable',  BASE_URL.'assist');	
	$template->set('prefootercontent', 'Get the easy to install CometChat now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');	

}
