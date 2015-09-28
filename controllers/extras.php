<?php

function index() {
	global $template;
	
	$template->set('canonicalvariable',  BASE_URL.'extras');	
	$template->render(1);
}

function iptables() {
	global $template;
	$template->set('canonicalvariable',  BASE_URL.'extras/iptables');
	$template->render(1);
}

function red5() {
	global $template;
	$template->set('canonicalvariable',  BASE_URL.'extras/red5');
	$template->render(1);
}