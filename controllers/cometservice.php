<?php

function index() {
	global $template;
	$template->set('sitetitle', 'Subscribe to CometService (optional) and handle 100,000+ users | CometChat');
	$template->set('meta_keywords', 'Subscribe to the Optional Monlthly CometService');
	$template->set('meta_description', 'Subscribe to the Monthly Optional CometService and reduce the load on your server. Optimize your site performance and enable faster delivery of messages. CometChat can run without CometService. Works with all editions. Built to scale seamlessly for any numer of users.');
	$template->set('canonicalvariable',  BASE_URL.'cometservice');
	$template->set('prefootercontent', 'Not sure how many messages you need?');
	$template->set('prefooterbuttontext', 'Try our message calculator');
	$template->set('prefooterbuttonsize', '240');
	$template->set('prefooterbuttonurl', '#inline-1');	
}

function thirdpartyalternatives() {
	global $template;
	$template->set('sitetitle', 'APE Server, BeaconPush, Pusher, PubNub for CometChat | CometChat');
	$template->set('meta_keywords', 'Third Party Alternatives CometChat : BeaconPush, APE Server, Red5, Influxis, Pusher, ORTC');
	$template->set('meta_description', 'Third Party Alternatives CometService that can reduce your server load include BeaconPush, APE Server, Red5, Influxis, Pusher, ORTC. This cost is not included with CometChat. Built to scale, boost your site and CometChat\'s performance on your website.');
	$template->set('canonicalvariable',  BASE_URL.'cometservice/third-party-alternatives');
	$template->set('prefootercontent', 'Reduce server load with CometChat Third-Party Alternatives');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', BASE_URL.'buy');	
	
}