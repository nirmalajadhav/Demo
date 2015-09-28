<?php


function index() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: '.SSL_LINK_BASE_URL.'buy/add-ons');
	exit;
}
