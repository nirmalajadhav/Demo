<?php

function index() {
	$url = rtrim($_SERVER['REQUEST_URI'], "/");
	$path = explode("/", strtolower(substr($url,1)));
	$pageno = end($path);
	
	if (intval($pageno) > 1) {
	} else {
		$pageno = 1;	
	}
	
	$tmpagelimit = 5;	

	include_once ROOT.DS.'data'.DS.'testimonials.php';
	
	$noofpages = ceil(sizeof($tmcollection)/$tmpagelimit);
	$i = $count = 0;
		
		for($i = ($tmpagelimit * ($pageno - 1)); $i < $tmpagelimit * $pageno && $i < sizeof($tmcollection); $i++){
			
			$testimonials[$count] = $tmcollection[$i];
			$count++;
		}
	
	$metadesc = count($tmcollection)." CometChat Reviews from our clients. CometChat swears by the best Customer support and response with our dedicated support team.";
		
	global $template;
	$template->set('sitetitle', 'CometChat Reviews - Listen to what our clients say about our Chat Software');
	$template->set('meta_keywords', 'cometchat reviews, cometchat review, chat software reviews, CometChat');
	$template->set('meta_description', $metadesc);
	$template->set('testimonials', $testimonials);
	$template->set('noofpages', $noofpages);
	$template->set('pageno', $pageno);
	$template->overrideAction('index');
	
	if ($pageno == $noofpages) {
		$template->set('canonicalvariable',  BASE_URL.'reviews/page/'.$pageno);	
		$template->set('prevlink',  BASE_URL.'reviews/page/'.($pageno - 1));
	} else if ($pageno > 2) {
		$template->set('canonicalvariable',  BASE_URL.'reviews/page/'.$pageno);	
		$template->set('prevlink',  BASE_URL.'reviews/page/'.($pageno - 1));
		$template->set('nextlink',  BASE_URL.'reviews/page/'.($pageno + 1));
	} else if($pageno == 2){
		$template->set('canonicalvariable',  BASE_URL.'reviews/page/'.$pageno);
		$template->set('prevlink',  BASE_URL.'reviews/');
		$template->set('nextlink',  BASE_URL.'reviews/page/'.($pageno + 1));
	} else {
		$template->set('canonicalvariable',  BASE_URL.'reviews');
		$template->set('nextlink',  BASE_URL.'reviews/page/'.($pageno + 1));
	}
	
}


function page() {
	index();
}
