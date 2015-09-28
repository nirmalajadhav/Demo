<?php

function index() {
	global $template;
	$template->set('sitetitle', 'Terms and Conditions | CometChat');
	$template->set('meta_keywords', 'Terms and Conditions, policies, rules, guidelines, legal, jurisdiction, Licensing, License, Distribution');
	$template->set('meta_description', 'CometChat Terms and Conditions for Usage, licensing, sale and distribution.');
	$template->set('canonicalvariable',  BASE_URL.'legal/terms-and-conditions');
}