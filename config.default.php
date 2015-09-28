<?php

/* Config variables here */

// The following link for the URLs
define('BASE_URL','http://localhost/cometchat/');

// Conditional check for HTTPS
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) {

// The following link is for static content like css and images (for CDN) (SSL)
define('LINK_BASE_URL','https://www.cometchat.com/v5/');

} else {

// The following link is for static content like css and images (for CDN)
define('LINK_BASE_URL','http://static.cometchat.com/v5/');

}

// The $path for controller. If installed on root, it will be 1
define('ROOT_DIR','1');

// Change this value if you want to re-cache everything
define('CDN_VERSION','140505');

// Change this value to the location where CometChat is installed
define('COMETCHAT_DIR','chat');

//The following link is for https in buy page
define('SSL_LINK_BASE_URL','http://aditya-pc/cometchat/');

define('USE_HTTPS','1');

/* MailChimp Newsletter variables here */
define('MAILCHIMP_APIKEY','08b0cdcdb2a2fe4283f1a90599082941-us1');
define('MAILCHIMP_LISTID','c43a4d5caf');
define('SENDY_APIKEY','1P12CSQClPcnkEsYOgLe');

/* GeoPlugin.net for CCAvenue */
define('GEOPLUGIN_KEY','');

/* ZenDesk variables here */

define("ZDAPIKEY", "test");
define("ZDUSER", "test");
define("ZDURL", "https://inscc.zendesk.com/api/v2");
