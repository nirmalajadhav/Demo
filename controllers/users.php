<?php

function index() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: https://my.cometchat.com/users/');
	exit;
}

function register() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: https://my.cometchat.com/users/register');
	exit;
}

function account() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: https://my.cometchat.com/users/account');
	exit;
}

function profile() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: https://my.cometchat.com/my/profile');
	exit;
}

function emailforgottenpassword() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: https://my.cometchat.com/users/forgot-password');
	exit;
}

function affiliateusers() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: '.BASE_URL.'affiliates/');
	exit;
}