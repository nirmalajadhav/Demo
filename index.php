<?php

	include_once DIRNAME(__FILE__).'/config.php';

	$rq = explode('/', $_SERVER['REQUEST_URI']);
	
	if($rq[ROOT_DIR] == 'blog' || $rq[ROOT_DIR] == 'answers' || $rq[ROOT_DIR] == 'documentation'){
		require('./windex.php');
	}
//	else if($rq[ROOT_DIR1] == 'extra'){
//		
//	}
	else{
		require('./siteindex.php');
	}
