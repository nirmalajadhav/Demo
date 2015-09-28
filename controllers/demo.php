<?php

function index() {
	global $template;
	$template->set('sitetitle', 'Free CometChat Demo | CometChat');
	$template->set('meta_keywords', 'Trial, Demo, Test the application, See how it works');
	$template->set('meta_description', 'Check the trial version of CometChat. See the Demo. Test use and see how CometChat works. Demo available for web app and iphone and Android app.');
	$template->set('canonicalvariable',  BASE_URL.'demo');
	$template->set('prefootercontent', 'Get your customizable chat solution now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');	
}

function iphone() {
	global $template;
	$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");  
	$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");  
	$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");  
	$blackberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");  
	$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");  
	if ($ipad || $iphone || $android || $ipod || $blackberry)  
	{  
		header('Location: http://cometchat.com/chat/extensions/mobile');  
		exit;
	}
	$template->render(1);
}

function ipad() {
	global $template;
	$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");  
	$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");  
	$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");  
	$blackberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");  
	$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");  
	if ($ipad || $iphone || $android || $ipod || $blackberry)  
	{  
		header('Location: http://cometchat.com/chat/extensions/mobile');  
		exit;
	}
	$template->render(1);
}