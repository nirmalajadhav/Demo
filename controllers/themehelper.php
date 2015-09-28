<?php

function index() {
	global $template;
	
	$template->set('canonicalvariable',  BASE_URL.'theme-helper');	
	$template->render(1);
	}