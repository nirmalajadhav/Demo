<?php

function index() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: http://forum.cometchat.com/');
	exit;
}