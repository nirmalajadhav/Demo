<?php

function index() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: '.SSL_LINK_BASE_URL.'buy');
	exit;
}

function purchases() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: '.SSL_LINK_BASE_URL.'buy');
	exit;
}

function cometservice() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: '.BASE_URL.'cometservice');
	exit;
}