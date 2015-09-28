<?php

function index() {
	
	$url = rtrim($_SERVER['REQUEST_URI'], "/");
	$path = explode("/", strtolower(substr($url,1)));
	$page_url = end($path);
	
	if($page_url == 'features' || $page_url == ''){
		//header ('HTTP/1.1 301 Moved Permanently');
		die(header( 'Location: '.BASE_URL."features/web"));
	}
	else if($page_url == 'audio-video-chat' || $page_url == 'real-time-translation' || $page_url == 'gtalk-chat'
		 || $page_url == 'games' || $page_url == 'announcements' || $page_url == 'facebook-chat-theme' 
		 || $page_url == 'screensharing' || $page_url == 'social-networking' || $page_url == 'collaborate' 
		 || $page_url == 'file-sharing' || $page_url == 'manage-conversations' || $page_url == 'transliterate' || $page_url == 'custom-ads'  || $page_url == 'guest-chat' || $page_url == 'visitor-chat' || $page_url == 'broadcast-video' || $page_url == 'themes' ){
		/*header ('HTTP/1.1 301 Moved Permanently');*/
		header( 'Location: '.BASE_URL.'features/plugins/'.$page_url);
	} else if ($page_url == 'facebook-gtalk-chat') {
		header ('HTTP/1.1 301 Moved Permanently');
		header( 'Location: '.BASE_URL.'features/plugins/gtalk-chat');
	}
	else{
		error404();
	}
	exit;
}

function seamlessintegration() {
	global $template;
	$template->set('sitetitle', 'Seamless integration with your existing site | CometChat');
	$template->set('meta_keywords', 'Auto synchronization, friends list, user profiles, user avatars');
	$template->set('meta_description', 'CometChat comes bundled with ready integrations for the most popular softwares available. Installation takes only a few minutes and requires no programming knowledge.');
	$template->set('canonicalvariable',  BASE_URL.'features/seamless-integration');
	$template->set('prefootercontent', 'Integrate CometChat with any CMS now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');	
}

function allfeatures() {
	global $template;
	$template->set('sitetitle', 'All Features | CometChat');
	$template->set('meta_keywords', 'Multiple fun and useful features. Games, language packs, Translation, themes. ');
	$template->set('meta_description', 'Woks seamlessly with all modern browsers. Lots of themes and languages. Easy customizations. View chat logs, guests and history. Several useful and fun plugins and modules. Increase your site reachand interactivity. Handy user communication for any website.');
	$template->set('canonicalvariable',  BASE_URL.'features/all-features');
	$template->set('prefootercontent', '100+ settings to customize CometChat');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');
}

function web(){
	global $template;
	
	$template->set('sitetitle', 'Web | CometChat');
	$template->set('meta_keywords', 'Features, utilities modules and pluginsof CometChat');
	$template->set('meta_description', 'Ban or unban users. Use smileys, avatars, privacy protected and secure chat. Use personal chats or group chats in chatrooms to communicate with other users on your website. One to one chat and group chat. Facebook-like chat. Translation available. All browser compatible. Cross-browser compatibility.');
	$template->set('canonicalvariable',  BASE_URL.'features/web');
	$template->set('prefootercontent', 'Get CometChat with loads of features now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');
}

function themes(){
	global $template;
	
	$template->set('sitetitle', 'Theme | CometChat');
	$template->set('meta_keywords', 'All new CometChat themes');
	$template->set('meta_description', 'Apply different themes and change the look and feel of CometChat. Enable your users to take control of the way your site looks.');
	$template->set('canonicalvariable',  BASE_URL.'features/themes');
	$template->set('prefootercontent', 'Get CometChat with loads of features now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');
}

function mobile() {
	global $template;
	$template->set('sitetitle', 'iPhone, iPad, Android and BlackBerry Apps | CometChat');
	$template->set('meta_keywords', 'Responsive, mobile, chat for mobile website, scalable');
	$template->set('meta_description', 'Responsive web chat application, Opens from your mobile browser. Web chat solution. CometChat mobile webapp supports iPhone, iPad, Android and BlackBerry. ');
	$template->set('canonicalvariable',  BASE_URL.'features/mobile');
	$template->set('prefootercontent', 'Get mobile with CometChat now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');
	
}

function desktop() {
	global $template;
	$template->set('sitetitle', 'Desktop Messenger for Windows and Mac | CometChat');
	$template->set('meta_keywords', 'Desktop Messenger, Sign-up from your Website');
	$template->set('meta_description', 'Desktop Messenger to download on your Computer, laptop or tablet. Communication between users and friends. Increase interactivity. Desktop Messenger for Windows and Mac');
	$template->set('canonicalvariable',  BASE_URL.'features/desktop');
	$template->set('prefootercontent', 'Get your whitelabelled CometChat now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');	
}

function mobilechatsdk() {
	global $template;
	$template->set('sitetitle', 'Mobile Chat SDK | Video Chat SDK for iOS & Android | Chat API - CometChat');
	$template->set('meta_keywords', 'chat sdk, mobile chat sdk, chat sdk mobile, mobile chat api, chat api mobile, video chat sdk, mobile video chat sdk, video chat api, mobile video chat api, cometchat mobile sdk');
	$template->set('meta_description', 'Add CometChat to your existing apps using our Mobile Chat SDK. Audio Video Chat SDK for Android & iOS. Easy API. No extenal dependency.');
	$template->set('canonicalvariable',  BASE_URL.'features/mobile-chat-sdk');
	$template->set('prefootercontent', 'Add chat in your existing apps');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');	
}

function mobilesdk() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/mobile-chat-sdk");
	exit;
}

function administration() {
	global $template;
	$template->set('sitetitle', 'Customize CometChat | CometChat');
	$template->set('meta_keywords', 'Power packed administration panel');
	$template->set('meta_description', 'Manage your site easily. Multiple options. Cron job and memcache enabled. Customize your chat bar to match CometChat with the look of your website. View logs and chat history. Enable, disable or add new  themes. Monitor guest logs and conversations. Manage your website users.');
	$template->set('canonicalvariable',  BASE_URL.'features/administration');
	$template->set('prefootercontent', 'Get your customizable chat solution now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');	
}
function plugins() {
	global $template;
	$path = explode("/", strtolower(substr($_SERVER['REQUEST_URI'],1)));
	$page_url = end($path);
	if ($page_url == 'facebook-gtalk-chat') {
		header ('HTTP/1.1 301 Moved Permanently');
		header( 'Location: '.BASE_URL.'features/plugins/gtalk-chat');
	}
	$template->set('sitetitle', 'Extend functionality, add new features | CometChat');
	$template->set('meta_keywords', 'Plugins, add ons, utilities with CometChat. Bonus with CometChat');
	$template->set('meta_description', 'Multiple features, plugins and modules. Available in Mobile, web and desktop version. Facebook-like chat. Games, screensharing, audio video chat, collaboration tools and interactive features.');
	$template->set('canonicalvariable',  BASE_URL.'features/plugins');
	$template->set('prefootercontent', 'Make CometChat a part of your website now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');
}


function mostpopular() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL.'features/plugins');
	exit;
}

function visitorchat() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/plugins/guest-chat");
	exit;
}

function readyintegrations() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL.'features/seamlessintegration');
	exit;
}

function groupchat() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/web");
	exit;
}

function editions() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."buy/compare-editions");
	exit;
}

function compareeditions() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."buy/compare-editions");
	exit;
}

function iphone() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/mobile");
	exit;
}

function customizable() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/administration");
	exit;
}

function customtrayicons() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/administration");
	exit;
}

function facebookstylechat() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/plugins/themes");
	exit;
}

function sharefiles() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/plugins/file-sharing");
	exit;
}

function oneononechat() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/web");
	exit;
}

function audiovideochat() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/plugins/audio-video-chat");
	exit;
}

function screensharing() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/plugins/screensharing");
	exit;
}

function chatrooms() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/web");
	exit;
}

function all() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/all-features");
	exit;
}

function testimonials() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."testimonials");
	exit;
}
