<?php

	if (phpversion() >= '5') {
		require_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'libraries' . DIRECTORY_SEPARATOR . 'jsmin.php');
	}
	
	ob_start();
	
	if (file_exists(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'forumscript.js')) {
		if (!empty($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == filemtime(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'forumscript.js')) {
			header("HTTP/1.1 304 Not Modified");
			exit ;
		}
	
		@readfile(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'forumscript.js');
	
		if (phpversion() >= '5') {
			$js = JSMin::minify(ob_get_clean());
		} else {
			$js = ob_get_clean();
		}
	} else {
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'jquery-1.10.2.min.js');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'jquery.cookie.js');
		/*include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'bootstrap.min.js');*/
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'jquery-ui-1.10.3.custom.min.js');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'jquery.slides.min.js');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'jquery.hcsticky-min.js');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'jquery.typer.js');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'jquery.history.js');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'tooltipsy.min.js');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'jquery.prettyPhoto.js');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'jquery.nospam.min.js');
		/*include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . '404page.js');*/
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'script.js');
	
		if (phpversion() >= '5') {
			$js = JSMin::minify(ob_get_clean());
		} else {
			$js = ob_get_clean();
		}
	
		$fp = @fopen(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'forumscript.js', 'w');
		@fwrite($fp, $js);
		@fclose($fp);
	}
	
	$lastModified = filemtime(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'forumscript.js');
	
	header('Content-type: text/javascript;charset=utf-8');
	header("Last-Modified: " . gmdate("D, d M Y H:i:s", $lastModified) . " GMT");
	header('Expires: ' . gmdate("D, d M Y H:i:s", time() + 3600 * 24 * 365) . ' GMT');
	
	echo $js;
