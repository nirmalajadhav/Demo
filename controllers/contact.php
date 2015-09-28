<?php

function index() {
	global $template;
	$template->set('sitetitle', 'Need help or have a question? | CometChat');
	$template->set('meta_keywords', 'Doubts, queries, questions or Suggestions about CometChat');
	$template->set('meta_description', 'Ask your Doubts, Queries, Questions or Suggestion for CometChat. Get in touch with the CometChat team. We will get back to you soon.');
	$template->set('canonicalvariable',  BASE_URL.'contact');
	$template->set('prefootercontent', 'Get your customizable chat solution now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', SSL_LINK_BASE_URL.'buy');	
}

function sendmail(){
	if($_POST){
		if($_POST['type'] == '' || $_POST['email'] == '' || $_POST['subject'] == '' || $_POST['msg'] == ''){
			echo 'Please fill all fields';
		}
		else{
			$si = '';
			$query = $_POST['msg'];
	
			if (!empty($_COOKIE['r'])) {
				$si .= ' R: '.$_COOKIE['r'];
			}
		
			if (!empty($_COOKIE['ref'])) {
				$si .= ' R: '.$_COOKIE['ref'];
			}
		
			if (!empty($_COOKIE['benefit'])) {
				$si .= ' B: '.$_COOKIE['benefit'];
			}
		
			if (!empty($si)) {
				$si = '#SISTART '."\r\n\r\n".$si."\r\n\r\n".'#SIEND'."\r\n\r\n";
			}
		
			$query = $si.$query;
			$subject = $_POST['subject'];
			$email = $_POST['email'];
			$type = $_POST['type'];

			$to = 'sales@inscc.zendesk.com';
		//	$group = 20386088; // Sales (Level 2)
			$group = 21358594; // Sales (Level 1)
			
			if ($type == 1) { // if option 2 selected
				$to = 'support@inscc.zendesk.com';
				$group = 20386217;
			}
		
			if ($type == 2) { // if option 3 is selected
				$to = 'help@inscc.zendesk.com';
				$group = 20386277;
			}
		
				
			$text = "From: ".$email."\r\n"."To: ".$to."\r\n"."Subject: ".$subject."\r\n"."Body:\r\n".$query."\r\n===============================\r\n";
			$fp = fopen(dirname(dirname(__FILE__))."/sendmail.txt",'a');
			fwrite($fp, $text . "\n\n"); 
			fclose($fp);
			
			/*
			$headers = 'From: '.$email . "\r\n" .
				'Reply-To: '.$email . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				
			try{
				mail($to, $subject, $query, $headers);
				echo 'Successfully sent message.';	
			}catch(Exception $e){
				echo 'Error! Fail to send message';
			}
			
			*/
			
			$name = $email;
			$name = substr($name, 0, strpos($name, '@'));
			
			$data['ticket']['requester']['name'] = $name;
			$data['ticket']['requester']['email'] = $email;
			$data['ticket']['group_id'] = $group;
			$data['ticket']['subject'] = $subject;
			$data['ticket']['comment']['body'] = iconv('UTF-8', 'UTF-8//IGNORE', $query);
			$json = json_encode($data);
			$info = zendesk("/tickets.json", $json, "POST");
			
			if (!empty($info->error)) {
				echo "Error! Fail to send message";
				
				$error = print_r($info,true);
				
				$text = "From: ".$email."\r\n"."To: ".$to."\r\n"."Subject: ".$subject."\r\n"."Body:\r\n".$query."\r\n===============================\r\n";
				$fp = fopen(dirname(dirname(__FILE__))."/sendmail-failed.txt",'a');
				fwrite($fp, $text . "\n\n". $error . "\n\n"); 
				fclose($fp);
			
			} else {
				echo 'Successfully sent message.';
				
				$text = "From: ".$email."\r\n"."To: ".$to."\r\n"."Subject: ".$subject."\r\n"."Body:\r\n".$query."\r\n===============================\r\n";
				$fp = fopen(dirname(dirname(__FILE__))."/sendmail-success.txt",'a');
				fwrite($fp, $text . "\n\n"); 
				fclose($fp);
			}
			
				
		}
	}
	exit;
}

function zendesk($url, $json, $action)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 10 );
	curl_setopt($ch, CURLOPT_URL, ZDURL.$url);
	curl_setopt($ch, CURLOPT_USERPWD, ZDUSER."/token:".ZDAPIKEY);
	switch($action){
		case "POST":
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
			break;
		case "GET":
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			break;
		case "PUT":
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
			break;
		case "DELETE":
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
			break;
		default:
			break;
	}

	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
	curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	$output = curl_exec($ch);
	curl_close($ch);
	$decoded = json_decode($output);
	return $decoded;
}
