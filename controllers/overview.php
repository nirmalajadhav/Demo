<?php

function index() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL.'features/plugins');
	exit;
}

function seamlessintegration() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL.'features/seamlessintegration');
	exit;
}

function testimonials() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL."testimonials");
	exit;
}

function requirements() {
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: '.BASE_URL.'documentation/getting-started/system-requirements/');
	exit;
}