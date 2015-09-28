<?php 

$MailChimp='';

function index() {
	
	$url = rtrim($_SERVER['REQUEST_URI'], "/");
	$path = explode("/", strtolower(substr($url,1)));
	$page_url = end($path);
	
}

function subscribe() {
	global $template;
	global $path;
	
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type');
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	
	// echo MAILCHIMP_APIKEY;exit;
		$emailid = '';	
		if(isset($_POST['EMAIL'])){
			$emailid = $_POST['EMAIL'];	
		}

		if (empty($_SERVER["HTTP_REFERER"])) {
			$_SERVER["HTTP_REFERER"] = '';
		}

		if (!empty($_POST['email_confirm'])) {
			$fp = fopen(dirname(dirname(__FILE__))."/newsletter.txt",'a');
			fwrite($fp, $emailid." - ".$_SERVER["HTTP_REFERER"] . " - ". $_POST['email_confirm']." - BANNED\n\n"); 
			fclose($fp);
			exit;
		} 

		$_POST['email_confirm'] = '';

		$fp = fopen(dirname(dirname(__FILE__))."/newsletter.txt",'a');
		fwrite($fp, $emailid." - ".$_SERVER["HTTP_REFERER"] . " - ". $_POST['email_confirm']." - ACCEPTED\n\n"); 
		fclose($fp);

		$MailChimp = new MailChimp(MAILCHIMP_APIKEY); // SHOULD BE ADDED TO config.php
		$result = $MailChimp->call('lists/subscribe', array(
			'id' => MAILCHIMP_LISTID, // SHOULD BE ADDED TO CONFIG.php
			'email' => array('email'=>$emailid),
			'double_optin' => true,
			'send_welcome' => false,
		
		));
		
		if(isset($result['status']) && $result['status'] == 'error'){
			switch ($result['code']) {
				case -100:
					$result['error'] = "Please enter email ID";
					break;
				
				case 214:
					$result['error'] = "You have already subscribed";
					break;
				
				case 220:
					$result['error'] = "This email ID is banned";
					break;
			}
		}

		//echo '<pre>';
		//print_r($result);
		echo json_encode($result);
	
	
	exit;	
}

function unsubscribe() {
	global $template;
	global $path;
	
	$MailChimp = new MailChimp(MAILCHIMP_APIKEY); // SHOULD BE ADDED TO config.php
	$emailid = $path[3];
	$email = emaildecrypt($emailid); 
	$result = $MailChimp->call('lists/unsubscribe', array(
	'id' => MAILCHIMP_LISTID, // SHOULD BE ADDED TO CONFIG.php
	'email' => array('email'=>$email),
	'send_goodbye' => false,
	'send_notify' => false,
	));

	$template->set('canonicalvariable',   BASE_URL. 'newsletter/unsubscribe');
	
	if(isset($result['status']) && $result['status'] == 'error'){
		switch ($result['code']) {
			case -100:
					$result['error'] = "No email ID to unsubscribe";
					break;
			case 215:
				$result['error'] = "You have already unsubscribed.";
				break;
			
		}
	}
	
	//echo json_encode($result);
	//exit;	
	
}

function emaildecrypt($in, $to_num = true)
{
	$api_key = SENDY_APIKEY; // SHOULD BE ADDED TO CONFIG.php
	$encryptionMethod = "AES-256-CBC";
	
	$is_email = false;
	
	if($to_num)
	{
	    if(version_compare(PHP_VERSION, '5.3.0') >= 0) //openssl_decrypt requires at least 5.3.0
	    {
	        $decrypted = str_replace('892', '/', $in);
	        $decrypted = str_replace('763', '+', $decrypted);
	
	        if(function_exists('openssl_encrypt')) 
	        {
	            $decrypted = version_compare(PHP_VERSION, '5.3.3') >= 0 ? openssl_decrypt($decrypted, $encryptionMethod, $api_key, 0, '3j9hwG7uj8uvpRAT') : openssl_decrypt($decrypted, $encryptionMethod, $api_key, 0);
	            if(!$decrypted) return $is_email ? $in : intval($in, 36);
	        }
	        else return $is_email ? $in : intval($in, 36);
	
	        return $decrypted=='' ? intval($in, 36) : $decrypted;
	    }
	    else return $is_email ? $in : intval($in, 36);
	}
	else
	{   
	    if(version_compare(PHP_VERSION, '5.3.0') >= 0) //openssl_encrypt requires at least 5.3.0
	    {
	        if(function_exists('openssl_encrypt')) 
	        {
	            $encrypted = version_compare(PHP_VERSION, '5.3.3') >= 0 ? openssl_encrypt($in, $encryptionMethod, $api_key, 0, '3j9hwG7uj8uvpRAT') : openssl_encrypt($in, $encryptionMethod, $api_key, 0);
	            if(!$encrypted) return $is_email ? $in : base_convert($in, 10, 36);
	        }
	        else return $is_email ? $in : base_convert($in, 10, 36);
	
	        $encrypted = str_replace('/', '892', $encrypted);
	        $encrypted = str_replace('+', '763', $encrypted);
	        $encrypted = str_replace('=', '', $encrypted);
	
	        return $encrypted;
	    }
	    else return $is_email ? $in : base_convert($in, 10, 36);
	}
}
