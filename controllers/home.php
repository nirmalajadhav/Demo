<?php

function index() {
	global $template;

	$template->set('sitetitle', 'PHP Chat Software - jQuery Chat Box Plugin for Websites from CometChat');
	$template->set('target_keywords', 'chat software, php chat, jquery chat, chat box');
	$template->set('meta_keywords', 'chat software, php chat, jquery chat, php chat software, jquery chat software, video chat plugin, chat box for website, CometChat');
	$template->set('meta_description', 'Add text, voice and video chat to your site in minutes. No programming knowledge required. CometChat integrates seamlessly with your site.');

	include_once ROOT.DS.'data'.DS.'testimonials.php';
	$nooftestimonials = sizeof($tmcollection);
	$testimonialsLimit = 12;
	for($i = 0; $i < $testimonialsLimit;$i++){
		if(strlen($tmcollection[$i]['testimonial']) > 100) {
				$testimonialsLimit++;
				continue;
		}
		$testimonials[] = $tmcollection[$i];
	}
	$template->set('testimonials', $testimonials);
	$template->set('nooftestimonials', $nooftestimonials);
	$template->set('canonicalvariable', BASE_URL);
	$template->set('prefootercontent', 'Get the interactive CometChat app now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '140');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL."buy");

}

function restrictedpage() {
	global $template;
	authenticate();
}