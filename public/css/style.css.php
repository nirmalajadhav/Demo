<?php

	include_once dirname(dirname(dirname(__FILE__))).'/config.php';
	
	ob_start();
	
	if (file_exists(dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'style-'.CDN_VERSION.'.css')) {
	    if (!empty($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == filemtime(dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'style.css')) {
			header("HTTP/1.1 304 Not Modified");
			exit ;
		}
	
		@readfile(dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'style-'.CDN_VERSION.'.css');
		$css = ob_get_clean();
	} else {
		
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'bootstrap.min.css');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'jquery-ui-1.10.3.custom.min.css');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'prettyPhoto.css');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . '404page.css');
		include_once (dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'style.css');
		$css = minify(ob_get_clean());
	
		$fp = @fopen(dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'style-'.CDN_VERSION.'.css', 'w');
		@fwrite($fp, $css);
		@fclose($fp);
	}
	
	$lastModified = filemtime(dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'style-'.CDN_VERSION.'.css');
	
	header('Content-type: text/css;charset=utf-8');
	header("Last-Modified: " . gmdate("D, d M Y H:i:s", $lastModified) . " GMT");
	header('Expires: ' . gmdate("D, d M Y H:i:s", time() + 3600 * 24 * 365) . ' GMT');
	
	echo $css;
	
	function minify($css) {
		$css = preg_replace('#\s+#', ' ', $css);
		$css = preg_replace('#/\*.*?\*/#s', '', $css);
		$css = str_replace('; ', ';', $css);
		$css = str_replace(': ', ':', $css);
		$css = str_replace(' {', '{', $css);
		$css = str_replace('{ ', '{', $css);
		$css = str_replace(', ', ',', $css);
		$css = str_replace('} ', '}', $css);
		$css = str_replace(';}', '}', $css);
	
		return trim($css);
	}
