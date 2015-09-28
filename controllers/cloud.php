<?php


function index() {
	global $template;
	$template->set('sitetitle', 'Get CometChat - Free Trial | CometChat');
	$template->set('meta_keywords', 'Get CometChat');
	$template->set('meta_description', 'Get CometChat, Free Trial. Very affordably priced chat software solution. Branding free edition. ');
	$template->set('prefootercontent', 'Still not convinced? Try our demo');
	$template->set('prefooterbuttontext', 'Launch Demo');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', BASE_URL.'demo');
	$template->set('canonicalvariable',  SSL_LINK_BASE_URL.'cloud');
}

function upgrade() {
	global $template;
	global $path;

	if(isset($path[3]) && isset($path[4])){
		$id = $path[3];
		$plan = $path[4];
	}else{
		error404();
		exit;
	}

	$template->set('id', $id);
	$template->set('plan', $plan);
	
	$template->set('canonicalvariable',  SSL_LINK_BASE_URL.'upgrade');
}