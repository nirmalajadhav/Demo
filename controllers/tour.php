<?php

function index() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: '.BASE_URL."features/web");
	exit;
}

function oneononechat() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/web");
	exit;
}

function mobile() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL.'features/mobile');
	exit;
}

function desktop() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/desktop");
	exit;
}

function seamlessintegration() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL.'features/seamlessintegration');
	exit;
}

function groupchat() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/web");
	exit;
}

function administration() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/administration");
	exit;
}

function plugins() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."features/plugins");
	exit;
}