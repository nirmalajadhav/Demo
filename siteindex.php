<?php

/* Debug Mode */

error_reporting(E_ALL);
ini_set('display_errors','off');
ini_set('error_log', dirname(__FILE__).'/error.log');
ini_set('log_errors', 'On');

if (get_magic_quotes_runtime()){
    set_magic_quotes_runtime(false);
}

/* Define */

define('ROOT',DIRNAME(__FILE__));
define('DS',DIRECTORY_SEPARATOR);

/* Start Session */
session_start();

/* Strip magic quotes */

function stripSlashesDeep($value) {
	$value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
	return $value;
}

if (get_magic_quotes_gpc()) {
	$_GET = stripSlashesDeep($_GET);
	$_POST = stripSlashesDeep($_POST);
	$_REQUEST = stripSlashesDeep($_REQUEST);
	$_COOKIE = stripSlashesDeep($_COOKIE);
}

/* Get Basic Details */

if (empty($_SERVER['PATH_INFO'])) {
	$_SERVER['PATH_INFO'] = '';
}

if (strtolower(substr($_SERVER['PATH_INFO'],1)) != substr($_SERVER['PATH_INFO'],1)) {
	header("http/1.1 301 moved permanently\r\n");
	header("Location: ".strtolower($_SERVER['PATH_INFO'])."\r\n");
	exit;
}

/* Include Libraries */

include_once ROOT.DS.'config.php';
include_once ROOT.DS.'libraries'.DS.'template.class.php';
include_once ROOT.DS.'libraries'.DS.'helper.class.php';
include_once ROOT.DS.'libraries'.DS.'pagination.class.php';
include_once ROOT.DS.'libraries'.DS.'recaptcha.php';
include_once ROOT.DS.'libraries'.DS.'nospam.php';
include_once ROOT.DS.'libraries'.DS.'mailchimp.php';

$origurl = strtok($_SERVER['REQUEST_URI'], '?');

if(!isset($path)) {
 	$path = explode("/", (substr($origurl,1)));
}

if(!isset($path)) {
   $path = explode("/", (substr($_SERVER['REQUEST_URI'],1)));
}

if (intval(ROOT_DIR) == 1) {
array_unshift($path, "dummy");
}

$controller = 'home';
$action = 'index';
$oaction = 'index';
$norender = false;
$noheader = false;
$secureConnection = false;

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) {
       $secureConnection = true;
}

if (!empty($path[1])) { $controller = strtolower(str_replace("-","",$path[1])); }
if (!empty($path[2])) { $action = strtolower(str_replace("-","",$path[2])); $oaction = $path[2];}

if ($secureConnection == false && USE_HTTPS == 1 && $controller == 'buy') {
    header("http/1.1 301 moved permanently\r\n");
    if ($action == 'index') {
       header("Location: ".SSL_LINK_BASE_URL.$controller."\r\n");
    } else {
       header("Location: ".SSL_LINK_BASE_URL.$controller."/".$oaction."\r\n");
    }
    exit;
}

include_once ROOT.DS.'data'.DS.'redirects.php';

if(strtolower(strpos( $controller , 'chat')) > -1 && strtolower(strpos( $controller , 'chat')) == strtolower(strlen($controller) - 4))
{
	$controller = $action = 'cms';
}

$template = new Template($controller,$action);
$helper = new Helper();

include_once ROOT.DS.'libraries'.DS.'shared.php';
include_once ROOT.DS.'controllers'.DS.'helpers.php';

if (!defined('MINIMAL')) {
	/* Basic Bootstrapping */
	if (is_file(ROOT.DS.'controllers'.DS.$controller.'.php')) {
		
		if (function_exists($action)) {
			exit;
		}

		
		include ROOT.DS.'controllers'.DS.$controller.'.php';
		
		if (function_exists($action)) {
			call_user_func($action);
		} else {
			if (function_exists('index')) {
				call_user_func('index');
			} else {
				/* 404 error here */
				error404();
			}
		}
		
		if ($norender == false) {
			$template->render($noheader);
		}
	} else {
		/* 404 error here */
		error404();
	}
}
