<?php

function index() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: https://my.cometchat.com/tickets');
	exit;
}

function findrequest() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: https://my.cometchat.com/tickets/find-ticket');
	exit;
}

function managerequests() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: https://my.cometchat.com/tickets/manage-tickets');
	exit;
}

function createnewrequest() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: https://my.cometchat.com/tickets/create-new-ticket');
	exit;
}

function viewrequest() {
	global $path;
	
	if(!empty($path[3])){
		$id = $path[3];
	}else{
		error404();
		exit;
	}
	
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: https://my.cometchat.com/tickets/view-ticket/'.$id);
	exit;
}
