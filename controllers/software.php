<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on")
{
	$http = "https://";	
}
else 
{
	$http = "http://";	
}
$domain = explode(".",$_SERVER['HTTP_HOST']);
$domain[0]="my";
$domain = implode(".",$domain);
$permalink = $http . $domain . $_SERVER['REQUEST_URI']; 
header ('HTTP/1.1 301 Moved Permanently');
header ('Location:' . $permalink );
exit;
