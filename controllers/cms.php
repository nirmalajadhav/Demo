<?php

function cms(){
	global $template;
	global $path;
	
	$cms_name = strtolower($path[1]);
	$cms_name = str_replace('.','-',$cms_name);
	
	$cms_name1 = "";
	$cms_name2 = "";
	$cms_name3 = "";
	$cms_demoname = "";
	$cms_vid = 1;
	$cms_vid_code = "";
	$cms_compat_title = "";
	$cms_compat_content = "";
	$cms_dontc = false;
	$cms_cont = array();
	
	include_once ROOT.DS.'data'.DS.'cms.php'; 

	/*
	$cms_name1 = $cms[$cms_name]['name'];
	$cms_name2 = $cms[$cms_name]['name2'];
	$cms_name3 = $cms[$cms_name]['name3'];
	$cms_intro = $cms[$cms_name]['intro'];
	$cms_intro2 = $cms[$cms_name]['intro2'];
	$cms_demoname = $cms[$cms_name]['demo'];
	$imgname = $cms[$cms_name]['imgname'];
	$altimage = $cms[$cms_name]['altimage'];
	$cms_cont['desc'] = $cms[$cms_name]['description'];
	$cms_cont['points'] = $cms[$cms_name]['summary'];
	$cms_vid = $cms[$cms_name]['video'];
	$cms_vid_code = $cms[$cms_name]['video_code'];
	$cms_compat_title = $cms[$cms_name]['title'];
	$cms_compat_content = $cms[$cms_name]['content'];
	*/
	
	if(array_key_exists($cms_name, $cms)){
		$cms_name1 = $cms[$cms_name]['name'];
		$cms_name2 = $cms[$cms_name]['name2'];
		$cms_name3 = $cms[$cms_name]['name3'];
		$cms_intro = $cms[$cms_name]['intro'];
		$cms_intro2 = $cms[$cms_name]['intro2'];
		$cms_demoname = $cms[$cms_name]['demo'];
		$imgname = $cms[$cms_name]['imgname'];
		$altimage = $cms[$cms_name]['altimage'];
		$cms_cont['desc'] = $cms[$cms_name]['description'];
		$cms_cont['points'] = $cms[$cms_name]['summary'];
		$cms_vid = $cms[$cms_name]['video'];
		$cms_vid_code = $cms[$cms_name]['video_code'];
		$cms_compat_title = $cms[$cms_name]['title'];
		$cms_compat_content = $cms[$cms_name]['content'];
		$is_network_page = $cms[$cms_name]['network_page'];
		$is_inboxsync = $cms[$cms_name]['inboxsync'];
		$is_user_perm = $cms[$cms_name]['user_perm'];
	} else {
		error404();
	}
	
	include_once ROOT.DS.'data'.DS.'testimonials.php';


	$testimonials = searcharray(strtolower($cms_name1), "testimonial", $tmcollection);

	if (empty($testimonials)) {
	$testimonials = $tmcollection;
	}

	shuffle($testimonials);
	$testm[] = array_pop($testimonials);

	if (empty($testimonials)) {
		$testimonials = $tmcollection;
		shuffle($testimonials);
	}

	$testm[] = array_pop($testimonials);

	if (empty($testimonials)) {
		$testimonials = $tmcollection;
		shuffle($testimonials);
	}

	$testm[] = array_pop($testimonials);

	$template->set('sitetitle', $cms[$cms_name]['sitetitle']);
	$template->set('meta_keywords', $cms[$cms_name]['meta_keywords']);
	$template->set('meta_description',$cms[$cms_name]['meta_description']);
	$template->set('is_inboxsync',$is_inboxsync);
	$template->set('is_user_perm',$is_user_perm);
	$template->set('is_network_page',$is_network_page);
	$template->set('cmsname', $cms_name1);
	$template->set('cmsname2', $cms_name2);
	$template->set('cmsname3', $cms_name3);
	$template->set('cmsintro', $cms_intro);
	$template->set('cmsintro2', $cms_intro2);
	$template->set('imgname', $imgname);
	$template->set('altimage', $altimage);
	$template->set('cmsdemoname', $cms_demoname);
	$template->set('cmscont', $cms_cont);
	$template->set('cmsvid', $cms_vid);
	$template->set('cmsvidcode', $cms_vid_code);
	$template->set('cmscompattitle', $cms_compat_title);
	$template->set('cmscompatcontent', $cms_compat_content);
	$template->set('cmstestm', $testm);
	$template->set('cmsdontc', $cms_dontc);
	
	$template->set('canonicalvariable', BASE_URL.$cms_name);
	$template->set('prefootercontent', 'Seamlessly Integrate CometChat with '.$cms[$cms_name]['name'] .' ' .$cms[$cms_name]['name2'] .' ' .$cms_name3 = $cms[$cms_name]['name3'] .' today');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL."buy");
}
