<?php

function index() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: '.BASE_URL.'documentation/installing-cometchat');
	exit; break;
}

function installation() {

	$url = rtrim($_SERVER['REQUEST_URI'], "/");
	$path = explode("/", strtolower(substr($url,1)));
	$page_url = end($path);
	//print_r($page_url);
	switch($page_url) {
		case "installation" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/');
			exit; 
			break;
		case "install-cometchat-with-standalone" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/custom-coded-site/php-site/');
			exit; 
			break;
		case "install-cometchat-with-vbulletin" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/vbulletin/');
			exit; 
			break;
		case "install-cometchat-with-ipb" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/ipb/');
			exit; 
			break;
		case "install-cometchat-with-wordpress" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/wordpress/');
			exit; 
			break;
		case "install-cometchat-with-smf" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/smf/');
			exit; 
			break;
		case "install-cometchat-with-phpfox" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/phpfox/');
			exit; 
			break;
		case "install-cometchat-with-skadate" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/skadate/');
			exit; 
			break;
		case "install-cometchat-with-xenforo" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/xenforo/');
			exit; 
			break;
		case "install-cometchat-with-socialengine-3" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/socialengine-3/');
			exit; 
			break;
		case "install-cometchat-with-socialengine" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/socialengine/');
			exit; 
			break;
		case "install-cometchat-with-dolphin" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/dolphin/');
			exit; 
			break;
		case "install-cometchat-with-sharetronix" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/sharetronix/');
			exit; 
			break;
		case "install-cometchat-with-elgg" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/elgg/');
			exit; 
			break;
		case "install-cometchat-with-buddypress" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/buddypress/');
			exit; 
			break;
		case "install-cometchat-with-communitybuilder" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/communitybuilder/');
			exit; 
			break;
		case "install-cometchat-with-phpbb" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/phpbb/');
			exit; 
			break;
		case "install-cometchat-with-drupal" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/installing-cometchat/ready-integrations/drupal/');
			exit;
		break;
	}
}

function tipsandtutorials() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: '.BASE_URL.'documentation/');
	exit; 	
}

function developersapi() {
	
	$url = rtrim($_SERVER['REQUEST_URI'], "/");
	$path = explode("/", strtolower(substr($url,1)));
	$page_url = end($path);
	//print_r($page_url);
	switch($page_url) {
		case "developersapi" :
		case "launch-chat-box-dynamically" :
		case "launch-module-dynamically" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'developers/');
			exit; 
			break;
		case "add-alerts-to-modules" :
		case "find-out-if-user-is-online" :
		case "hide-bar-from-web-page" :
		case "get-active-chatbox-userid" :
			header ('HTTP/1.1 301 Moved Permanently');
			header ('Location: '.BASE_URL.'documentation/');
			exit; 
			break;
	}
}
