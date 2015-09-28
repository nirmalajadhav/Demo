<?php


if (substr($controller,-1) == ')' && $action == 'index') {
	$controller = substr($controller,0,-1);
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '.BASE_URL.$controller);	
	exit();
}

if (!empty($action) && substr($action,-1) == ')') {
	$action = substr($action,0,-1);
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '.BASE_URL.$controller.'/'.$action);	
	exit();
}

if ($controller == 'oneononechat' || $controller == 'groupchat') {
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '.BASE_URL.'web/features');	
	exit();
}

if ($controller == 'plugins') {
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '.BASE_URL.'features/plugins');	
	exit();
}

if ($controller == 'skadate' || $controller == 'jomsocial' || $controller == 'vbulletin' || $controller == 'expressionengine' || $controller == 'buddypress' || $controller == 'communitybuilder' || $controller == 'joomla' || $controller == 'wordpress' || $controller == 'ipboard') {
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '  .BASE_URL.''.$controller.'-chat');	
	exit();
}

if ($controller == 'ipboardchat') {
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '  .BASE_URL.'ipb-chat');	
	exit();
}

if ($controller == 'burningboardchat') {
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '  .BASE_URL.'woltlab-chat');	
	exit();
}

if ($controller == 'features' && $action == 'guestschat') {
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '.BASE_URL.'features/guest-chat');	
	exit();
}

if ($controller == 'features' && $action == 'seamless_integration') {
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '.BASE_URL.'features/seamless-integration');	
	exit();
}


if ($controller == 'features' && $action == 'requirements') {
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '.BASE_URL.'documentation/getting-started/system-requirements');	
	exit();
}

if ($controller == 'requirements') {
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '.BASE_URL.'documentation/getting-started/system-requirements');	
	exit();
}

if ($controller == 'help') {
	header ('HTTP/1.1 301 Moved Permanently');
	header( 'Location : '.BASE_URL.'contact');	
	exit();
}
