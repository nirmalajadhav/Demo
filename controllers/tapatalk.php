<?php

function index() {
	global $template;
	$template->set('sitetitle', 'Add CometChat to Tapatalk for free!');
	$template->set('meta_keywords', 'cometchat, tapatalk, cometchat free, forum, chat, footer chat');
	$template->set('meta_description', 'Enable your site users to chat using your site & the Tapatalk app on mobile');
	$template->set('canonicalvariable',  BASE_URL.'tapatalk');
}
