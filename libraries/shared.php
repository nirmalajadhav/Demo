<?php

function generateLink($controller,$action) {
	return basePath().'/'.$controller.'/'.$action;
}

function noRender() {
	global $noRender;
	$noRender = true;
}

// function required for youtube videos
function getYouTubeUrl($videoid)
{ 
	if (empty($_SERVER['HTTP_USER_AGENT'])) {
		$_SERVER['HTTP_USER_AGENT'] = '';
	}
	
	$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");  
	if ($iphone || $ipod)  
	{
		$yturl = "http://m.youtube.com/watch?v=".$videoid."&rel=0";
	}else{
		$yturl = "http://www.youtube.com/watch?v=".$videoid."&rel=0";
	}
	return $yturl;
}

// Call this function whenever you want to check if the user is logged in

function authenticate() {
	global $template;
	global $controller;
	global $action;

	$loggedin = 0;
	
	if (!empty($_SESSION['loggedin'])) {
		$loggedin = 1;
	}

	if ($loggedin == 0) {
		$template->overrideController('login');
		$template->overrideAction('index');
		$controller = "login";
		$action = "index";
		$template->render();
		exit;
	}
	
}

function error404() {
	global $template;
	global $controller;
	global $action;

	header("HTTP/1.0 404 Not Found"); 
	header("Status: 404 Not Found");
	$template->overrideController('404');
	$template->overrideAction('index');
	$controller = "404";
	$action = "index";
	$template->render();
	exit;	 
}



function getFullLink() {
	$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
	$protocol = substr(strtolower($_SERVER["SERVER_PROTOCOL"]), 0, strpos(strtolower($_SERVER["SERVER_PROTOCOL"]), "/")) . $s;
	$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
	return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
}

function sanitize($input,$type = "old") {
	
	switch ($type) {
	case "int": 
		$input = filter_var($input, FILTER_SANITIZE_NUMBER_INT);
	break;

	case "string": 
		$input = filter_var($input, FILTER_SANITIZE_STRING);
	break;

	case "url": 
		$input = filter_var($input, FILTER_SANITIZE_URL);
	break;

	case "email":
		$input = strtolower(filter_var($input, FILTER_SANITIZE_EMAIL));
	break;

	case "comment":
		$input = htmlentities($input, ENT_QUOTES);
	break;

	case "old":
		echo "Old version of sanitize called";
		exit();
	break;

	}

	return $input;
}


function escape($input) {
	$input = mysql_real_escape_string($input);
	return $input;
}

function createSlug($input) {
	$input = filter_var($input, FILTER_SANITIZE_STRING);
	$input = trim($input);
	$input = preg_replace("/ /","-",$input);
	$input = preg_replace("/[^+A-Za-z0-9\.\-]/", "", $input); 
	$input = preg_replace("/--/","-",$input);
	return strtolower($input);
}

function fetchURL($url,$fields) {
	
	$fields_string = '';

	foreach($fields as $key=>$value) { $fields_string .= $key.'='.($value).'&'; }
	rtrim($fields_string, '&');

	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	$result = curl_exec($ch);
	curl_close($ch);

    return $result;
}

function db() {
	$dbh = mysql_connect(SERVERNAME.':'.SERVERPORT,DBUSERNAME,DBPASSWORD);
	if (!$dbh) {
		echo "We are experiencing very heavy load at the moment. Please try again in 10 minutes.";
		exit;
	}

	mysql_selectdb(DBNAME,$dbh);
}


function datify($date) {
	return date('g:iA M dS', strtotime($date));
}

function datifyunix($date) {
	return date('g:iA M dS', $date);
}

function generatePassword($length=9, $strength=0) {
	$vowels = 'aeuy';
	$consonants = 'bdghjmnpqrstvz';
	if ($strength & 1) {
		$consonants .= 'BDGHJLMNPQRSTVWXZ';
	}
	if ($strength & 2) {
		$vowels .= "AEUY";
	}
	if ($strength & 4) {
		$consonants .= '23456789';
	}
	if ($strength & 8) {
		$consonants .= '@#$%';
	}
 
	$password = '';
	$alt = time() % 2;
	for ($i = 0; $i < $length; $i++) {
		if ($alt == 1) {
			$password .= $consonants[(rand() % strlen($consonants))];
			$alt = 0;
		} else {
			$password .= $vowels[(rand() % strlen($vowels))];
			$alt = 1;
		}
	}
	return $password;
}

function highlight($c,$q){ 
$q=explode(' ',str_replace(array('','\\','+','*','?','[','^',']','$','(',')','{','}','=','!','<','>','|',':','#','-','_'),'',$q));
for($i=0;$i<sizeOf($q);$i++) 
	$c=preg_replace("/($q[$i])(?![^<]*>)/i","<span class=\"highlight\">\${1}</span>",$c);
return $c;}


 function excerpt($text, $phrase, $radius = 100, $ending = "...") { 
 
  
         $phraseLen = strlen($phrase); 
       if ($radius < $phraseLen) { 
             $radius = $phraseLen; 
         } 

		 $phrases = explode (' ',$phrase);
		 
		 foreach ($phrases as $phrase) {
			 $pos = strpos(strtolower($text), strtolower($phrase)); 
			 if ($pos > -1) break;
		 }
  
         $startPos = 0; 
         if ($pos > $radius) { 
             $startPos = $pos - $radius; 
         } 
  
         $textLen = strlen($text); 
  
         $endPos = $pos + $phraseLen + $radius; 
         if ($endPos >= $textLen) { 
             $endPos = $textLen; 
         } 
  
         $excerpt = substr($text, $startPos, $endPos - $startPos); 
         if ($startPos != 0) { 
             $excerpt = substr_replace($excerpt, $ending, 0, $phraseLen); 
         } 
  
         if ($endPos != $textLen) { 
             $excerpt = substr_replace($excerpt, $ending, -$phraseLen); 
         } 
  
         return $excerpt; 
   } 

function truncate ($text, $length = 200, $ending = "...") {
	if (strlen($text) <= $length) { 
		return $text; 
	} else { 
		$truncate = substr($text, 0, $length - strlen($ending)).$ending; 
		return $truncate;
	} 
}

function searcharray($value, $key, $array) {
    $result = array();    
    foreach ($array as $k => $val) {
        if (strpos(strtolower($val[$key]),$value) !== false) {
            $result[] = $array[$k];
        }
    }
    return $result;
}

function buildrss() {
	if (!file_exists(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'rss-'.CDN_VERSION.'.txt')) {
		$rss = new DOMDocument();
		$rss->load('http://www.cometchat.com/blog/feed/');
		$feed = array();
		foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
		'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
		'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
		'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
		'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
		);
		array_push($feed, $item);
		}
		$limit = 2;
		$data = '';
		for($x=0;$x<$limit;$x++) {
			$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
			$link = $feed[$x]['link'];
			$description = $feed[$x]['desc'];
			$date = date('l F d, Y', strtotime($feed[$x]['date']));

			$data .= '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
			$data .= '<p>'.$description.'</p>';
		}

		$fp = @fopen(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'rss-'.CDN_VERSION.'.txt', 'w');
		@fwrite($fp, $data);
		@fclose($fp);
	}
}
