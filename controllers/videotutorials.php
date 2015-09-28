<?php

function index() {
	global $template;
	$template->set('sitetitle', 'CometChat Video Tutorials | CometChat');
	$template->set('meta_keywords', 'Latest videos of How to install CometChat');
	$template->set('meta_description', 'Installation videos for Different Content Management Systems. Some of our Popular videos and favorite videos.');
	$template->set('canonicalvariable',  BASE_URL.'video-tutorials');
	$template->set('prefootercontent', 'Get the easy to install CometChat now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');

}