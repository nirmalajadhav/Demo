<?php


function index() {
	global $template;
	$template->set('sitetitle', 'Buy CometChat - Only $49 one-time cost | CometChat');
	$template->set('meta_keywords', 'Buy or purchase CometChat');
	$template->set('meta_description', 'Buy CometChat, Purchase CometChat for 49$ only. Basic Edition for $49 only. Very affordably priced chat software solution. Branding free edition. ');
	$template->set('prefootercontent', 'Still not convinced? Try our demo');
	$template->set('prefooterbuttontext', 'Launch Demo');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', BASE_URL.'demo');
	$template->set('canonicalvariable',  SSL_LINK_BASE_URL.'buy');
}
function now() {
	global $template;
	$template->set('sitetitle', 'Buy CometChat - Only $49 one-time cost | CometChat');
	$template->set('meta_keywords', 'Buy or purchase CometChat');
	$template->set('meta_description', 'Buy CometChat, Purchase CometChat for 49$ only. Basic Edition for $49 only. Very affordably priced chat software solution. Branding free edition. ');
	$template->set('prefootercontent', 'Still not convinced? Try our demo');
	$template->set('prefooterbuttontext', 'Launch Demo');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', BASE_URL.'demo');
	$template->set('canonicalvariable',  SSL_LINK_BASE_URL.'buy');
}
function coupon() {
	global $template;
	$level = 0;	

	if(isset($_SESSION['discounted_costs'])){
		$level = $_SESSION['discounts_level'];
		$dicounts = $_SESSION['discounted_costs'];
		$basiccost = $dicounts['basiccost']; $procost = $dicounts['procost']; $precost = $dicounts['precost']; $placost = $dicounts['placost'];
		$template->set('couponused', '1');
		unset($_SESSION['discounted_costs']);		
	} else {
		
		$basiccost = '49'; $procost = '129'; $precost = '249'; $placost = '499';
		if(isset($_SESSION['coupon_invalid'])){
			$template->set('couponused', '0');
			unset($_SESSION['coupon_invalid']);
		}
	}

	if(!empty($_POST['coupon_code'])){
		include_once ROOT.DS.'data'.DS.'coupons.php';
		$couponCodeCase = $_POST['coupon_code'];
		$couponCode = strtolower($couponCodeCase);
		$_SESSION['couponcodecase'] = $couponCodeCase;
		
		if(isset($coupons[$couponCode]) && $coupons[$couponCode]['timestamp'] > time()){
			switch ($coupons[$couponCode]['level']) {
				case 1:
					$dicounts['basiccost'] = floor($basiccost - ($coupons[$couponCode]['discount'] * $basiccost / 100));
					$dicounts['procost'] = floor($procost - ($coupons[$couponCode]['discount'] * $procost / 100));
					$dicounts['precost'] = floor($precost - ($coupons[$couponCode]['discount'] * $precost / 100));
					$dicounts['placost'] = floor($placost - ($coupons[$couponCode]['discount'] * $placost / 100));
					break;
				
				case 2:
					$dicounts['basiccost'] = $basiccost;
					$dicounts['procost'] = floor($procost - ($coupons[$couponCode]['discount'] * $procost / 100));
					$dicounts['precost'] = floor($precost - ($coupons[$couponCode]['discount'] * $precost / 100));
					$dicounts['placost'] = floor($placost - ($coupons[$couponCode]['discount'] * $placost / 100));
					break;
					
				case 3:
					$dicounts['basiccost'] = $basiccost;
					$dicounts['procost'] = $procost;
					$dicounts['precost'] = floor($precost - ($coupons[$couponCode]['discount'] * $precost / 100));
					$dicounts['placost'] = floor($placost - ($coupons[$couponCode]['discount'] * $placost / 100));
					break;
					
				case 4:
					$dicounts['basiccost'] = $basiccost;
					$dicounts['procost'] = $procost;
					$dicounts['precost'] = $precost;
					$dicounts['placost'] = floor($placost - ($coupons[$couponCode]['discount'] * $placost / 100));
					break;
					
				default:
					$dicounts['basiccost'] = $basiccost;
					$dicounts['procost'] = $procost;
					$dicounts['precost'] = $precost;
					$dicounts['placost'] = $precost;
					break;
			}
			$_SESSION['discounted_costs'] = $dicounts;
			$_SESSION['discounts_level'] = $coupons[$couponCode]['level'];
			$coupons[$couponCode]['level'] = $level;
			
			header('Location: '.SSL_LINK_BASE_URL.'buy/coupon');
		} else {
			$_SESSION['coupon_invalid'] = 1;
		 	header('Location: '.SSL_LINK_BASE_URL.'buy/coupon');
		}
	}

	$template->set('couponlevel', $level);
	$template->set('couponcodecase', $_SESSION['couponcodecase']);
	$template->set('sitetitle', 'Buy CometChat for Cheap | CometChat');
	$template->set('meta_keywords', 'Discount on CometChat');
	$template->set('meta_description', 'Buy CometChat, Purchase CometChat for 49$ only. Basic Edition for $49 only. Very affordably priced chat software solution. Branding free edition. ');
	$template->set('prefootercontent', 'Still not convinced? Try our demo');
	$template->set('prefooterbuttontext', 'Launch Demo');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', BASE_URL.'demo');
	$template->set('canonicalvariable',  SSL_LINK_BASE_URL.'buy/coupon');
	$template->set('basiccost', $basiccost);
	$template->set('procost', $procost);
	$template->set('precost', $precost);
	$template->set('placost', $placost);
}

function compareeditions() {
	global $template;
	$template->set('sitetitle', 'Compare Editions | CometChat');
	$template->set('meta_keywords', 'Compare the different editions of CometChat: Basic, Professional, Premium, Platinum');
	$template->set('meta_description', 'Different editions of CometChat have different features such as Audio Video chat. Pricing starts from $49 to $449');
	$template->set('prefootercontent', 'Get your customizable chat solution now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', BASE_URL.'buy');	
	$template->set('canonicalvariable',  SSL_LINK_BASE_URL.'compare-editions');
}

function compareplatforms() {
	global $template;
	$template->set('sitetitle', 'Compare Platforms | CometChat');
	$template->set('meta_keywords', 'Compare the different Platforms of CometChat: Basic, Professional, Premium, Platinum');
	$template->set('meta_description', 'Different Platforms of CometChat have different features such as Audio Video chat. Pricing starts from $49 to $449');
	$template->set('prefootercontent', 'Get your customizable chat solution now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', BASE_URL.'buy');	
	$template->set('canonicalvariable',  SSL_LINK_BASE_URL.'compare-platforms');
}	

function addons() {
	global $template;
	$template->set('sitetitle', 'Buy CometChat - Add-ons | CometChat');
	$template->set('meta_keywords', 'Complete the CometChat experience with add-ons');
	$template->set('meta_description', 'Add-ons for chat software application : Desktop Messenger and iOS and Android App. Complete your CometChat experience with these add-ons.');
	$template->set('prefootercontent', 'Get mobile with CometChat now');
	$template->set('prefooterbuttontext', 'Buy CometChat');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', BASE_URL.'buy');	
	$template->set('canonicalvariable',  SSL_LINK_BASE_URL.'add_ons');
}

function blackfriday() {
	global $template;
	$template->set('sitetitle', 'Black Friday Sale! | CometChat');
	$template->set('meta_keywords', 'CometChat Black Friday Sale');
	$template->set('meta_description', 'CometChat Platinum Edition + White labelled Mobile Apps for 749$ only');
	$template->set('prefootercontent', 'Still not convinced? Try our demo');
	$template->set('prefooterbuttontext', 'Launch Demo');
	$template->set('prefooterbuttonsize', '205');
	$template->set('prefooterbuttonurl', BASE_URL.'demo');
	$template->set('canonicalvariable',  SSL_LINK_BASE_URL.'black-friday');
	$template->set('facebook_url', SSL_LINK_BASE_URL.'buy/black-friday/#downloadnow');
	$template->set('facebook_image',  SSL_LINK_BASE_URL.'public/img/blackfriday/black-friday-sale.png#downloadnow');
}

function upgrade() {
	global $template;
	global $path;

	if(isset($path[3])){
		$id = $path[3];
	}else{
		error404();
		exit;
	}

	$basicpack = $propack = $prepack = $plapack = 0;
	$basiccost = '49';
	$procost = '129';
	$precost = '249';
	$placost = '499';
	switch ($id[0]) {
		case 1:
			$propack = $prepack = $plapack = 1;
			$placost = $placost - $basiccost;
			$precost = $precost - $basiccost;
			$procost = $procost - $basiccost;
			$basiccost = 0;
			
			$basicprodid = 0;
			$proprodid = 48;
			$preprodid = 49;
			$plaprodid = 50;
			
			$basicproditemid = '';
			$proproditemid = 'CCBASICTOPRO';
			$preproditemid = 'CCBASICTOPRE';
			$plaproditemid = 'CCBASICTOPLA';
			break;
		
		case 2:
			$prepack = $plapack = 1;
			$placost = $placost - $procost;
			$precost = $precost - $procost;
			$procost = $basiccost = 0;
			
			$basicprodid = 0;
			$proprodid = 0;
			$preprodid = 51;
			$plaprodid = 52;
			
			$basicproditemid = '';
			$proproditemid = '';
			$preproditemid = 'CCPROTOPRE';
			$plaproditemid = 'CCPROTOPLA';
			break;
			
		case 3:
			$plapack = 1;
			$placost = $placost - $precost;
			$precost = $procost = $basiccost = 0;
			
			$basicprodid = 0;
			$proprodid = 0;
			$preprodid = 0;
			$plaprodid = 53;
			
			$basicproditemid = '';
			$proproditemid = '';
			$preproditemid = '';
			$plaproditemid = 'CCPRETOPLA';
			break;
			
		case 4:
			$placost = $precost = $procost = $basiccost = 0;
			
			$basicprodid = 0;
			$proprodid = 0;
			$preprodid = 0;
			$plaprodid = 0;
			break;
			
		default:
			error404();exit;
			break;
	}
	
	$token = strtok(substr($id, 1),'?'); 

	$template->set('paymenttoken', $token);
	//cost
	$template->set('basiccost', $basiccost);
	$template->set('procost', $procost);
	$template->set('precost', $precost);
	$template->set('placost', $placost);
	//product id
	$template->set('basicprodid', $basicprodid);
	$template->set('proprodid', $proprodid);
	$template->set('preprodid', $preprodid);
	$template->set('plaprodid', $plaprodid);
	//product item id
	$template->set('basicproditemid', $basicproditemid);
	$template->set('proproditemid', $proproditemid);
	$template->set('preproditemid', $preproditemid);
	$template->set('plaproditemid', $plaproditemid);
	//product name
	$template->set('basicprodname', '');
	$template->set('proprodname', 'CometChat Professional Edition (License Upgrade)');
	$template->set('preprodname', 'CometChat Premium Edition (License Upgrade)');
	$template->set('plaprodname', 'CometChat Platinum Edition (License Upgrade)');
	//package flag
	$template->set('basicpackvar', $basicpack);
	$template->set('propackvar', $propack);
	$template->set('prepackvar', $prepack);
	$template->set('plapackvar', $plapack);
	
	$template->set('canonicalvariable',  SSL_LINK_BASE_URL.'upgrade');
}
function redirect() {
	global $template;
	$email = $_REQUEST['email'];
	
	$ref = '';
	if (!empty($_REQUEST['ref'])) {
		$ref = $_REQUEST['ref'];
	}
	
	$productMap = array(
		'CCBASIC' => '19',
		'CCPRO' => '20',
		'CCPRE' => '21',
		'CCPLA' => '28',
		'CCDM' => '79',
		'CCMOB' => '98',
	'CCSDK' => '103',
		'CCINSTALL' => '54',
		'CS9' => '71',
		'CS19' => '72',
		'CS49' => '73',
		'CS99' => '70'
		);

	$productPriceMap = array(
		'CCBASIC' => '49',
		'CCPRO' => '129',
		'CCPRE' => '249',
		'CCPLA' => '499',
		'CCDM' => '199',
		'CCMOB' => '399',
		'CCSDK' => '399',
		'CCINSTALL' => '79',
		'CS9' => '9',
		'CS19' => '19',
		'CS49' => '49',
		'CS99' => '99'
		);

	$productNameMap = array(
		'CCBASIC' => 'CometChat Basic Edition',
		'CCPRO' => 'CometChat Professional Edition',
		'CCPRE' => 'CometChat Premium Edition',
		'CCPLA' => 'CometChat Platinum Edition',
		'CCDM' => 'CometChat Desktop Messenger',
		'CCMOB' => 'CometChat Mobile Apps',
		'CCSDK' => 'CometChat Mobile SDK',
		'CCINSTALL' => 'CometChat Installation Service',
		'CS9' => 'CometService $9/mo',
		'CS19' => 'CometService $19/mo',
		'CS49' => 'CometService $49/mo',
		'CS99' => 'CometService $99/mo'
		);

	$url = 'https://www.2checkout.com/checkout/purchase?sid=138239&&currency_code=USD&skip_landing=1&type=creditcard&merchant_order_id='.$ref.'&mode=new&fixed=Y&email='.$email;
	
	$items = '';
	$products = explode(',',$_REQUEST['products']);
	$pstring = '';
	for($i = 0;$i < sizeof($products) ; $i++){
		$pid = $productMap[$products[$i]];
		$pstring = $pstring.'&product_id'.$i.'='.$pid;
		if(!(($products[$i] == 'CS9') || ($products[$i] == 'CS19') || ($products[$i] == 'CS49') || ($products[$i] == 'CS99')) ){
			$pprice = $productPriceMap[$products[$i]];
			$pname = $productNameMap[$products[$i]];
			$items = $items."
				<input type='hidden' value='".$pname."' name='item_name_".($i+1)."' />
				<input type='hidden' value='".$products[$i]."' name='item_number_".($i+1)."' />
				<input type='hidden' value='".$pprice."' name='amount_".($i+1)."' />
			";
		}					
	}
	
$ip = '';
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; }
if (empty($ip) && !empty($_SERVER['REMOTE_ADDR'])) { $ip = $_SERVER['REMOTE_ADDR']; }

$country = '';
if (!empty($_SERVER["HTTP_CF_IPCOUNTRY"])) { $country = $_SERVER["HTTP_CF_IPCOUNTRY"]; }

$ch = curl_init();
$curlConfig = array(
    CURLOPT_URL            => "http://my.cometchat.com/api/potential",
    CURLOPT_POST           => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS     => array(
        'email' => $_REQUEST['email'],
        'products' => $_REQUEST['products'],
        'ref' => $_REQUEST['ref'],
        'device' => $_REQUEST['device'],
        'type' => $_REQUEST['type'],
        'gateway' => $_REQUEST['con'],
        'ip' => $ip,
        'country' => $country
    )
);
curl_setopt_array($ch, $curlConfig);
$result = curl_exec($ch);
curl_close($ch);


	
$paypal=<<<EOD
<form method="post" action="https://www.paypal.com/cgi-bin/webscr"
id="paypalform">
    <input type="hidden" value="48ZG67NDW8NTU" name="business">

    {$items}
    <input type="hidden" value="{$name}" name="name">
    <input type="hidden" value="{$email}" name="email">
    <input type="hidden" value="USD" name="currency_code">
    <input type="hidden" value="1" name="no_note">
    <input type="hidden" value="1" name="no_shipping">
    <input type="hidden" value="1" name="rm">
    <input type="hidden" value="
https://www.cometchat.com/buy/success/?utm_nooverride=1" name="return">
    <input type="hidden" value="{$ref}" name="custom" id="buycustom">
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="upload" value="1">
</form>
<script>
setTimeout(function(){
	document.getElementById("paypalform").submit();
},3000);
</script>
EOD;

	if($_REQUEST['device']== "desktop"){
		$type  = $_REQUEST['type'];

		if($type == 'creditcard'){
			
			$redirect = "refresh:3;url=".$url.$pstring;
			$con  = $_REQUEST['con'];
			if($con == 'in'){
				$inprice = $_REQUEST['inr'];
				$redirect = "refresh:3;url=http://cometchat.com/in/purchase.php?amount=".$inprice.'&name='.$name.'&email='.$email;
			}

		}else{
			$template->set('paypal',$paypal);
		}	
	}else{
		$mobileurl= "https://www.2checkout.com/checkout/purchase?sid=138239&quantity=1&skip_landing=1&currency_code=USD&mode=new&fixed=Y&product_id=".$_REQUEST["pid"];
		$redirect = "refresh:3;url=".$mobileurl;
	}
	header($redirect);			
	$template->render(1);
	
}
function success() {
	global $template;
		
	$amount = '';
	$tracking = '';
	$city = '';
	$country = '';
	$state = '';
	$product = '';
	$affproduct = 0;
	
	$affproducts = array('CCBASIC','CCPRO','CCPRE','CCPLA','CCDM','CCMOB','CCSDK');
	$products = array('CCBASIC','CCPRO','CCPRE','CCPLA','CCDM','CCMOB','CCSDK','CCT','CCINSTALL','CCRECOMPILE','CCBASICTOPRO','CCBASICTOPRE','CCBASICTOPLA','CCPROTOPRE','CCPROTOPLA','CCPRETOPLA','CCBASICRENEW','CCPRORENEW','CCPRERENEW','CCPLARENEW','CS9','CS19','CS49','CS99');
	
	if (!empty($_GET['item_number']) && !empty($_GET['amt']) && !empty($_GET['tx'])) {
		if (in_array($_GET['item_number'],$products)) {
			$amount = $_GET['amt'];
			$tracking = $_GET['tx'];
			$product = $_GET['item_number'];
		}
		if (in_array($_GET['item_number'],$affproducts)) {
			$affproduct = 1;
		}
		
	}
	
	if (!empty($_GET['merchant_product_id']) && !empty($_GET['total']) && !empty($_GET['order_number'])) {
		if (in_array($_GET['merchant_product_id'],$products)) {
			$amount = $_GET['total'];
			$tracking = $_GET['order_number'];
			$product = $_GET['merchant_product_id'];
			$country = $_GET['country'];
			$city = $_GET['city'];
			$state = $_GET['state'];
		}
		if (in_array($_GET['merchant_product_id'],$affproducts)) {
			$affproduct = 1;
		}
	}
	
	$template->set('affproduct',$affproduct);
	$template->set('amount',$amount);
	$template->set('tracking',$tracking);
	$template->set('product',$product);
	$template->set('country',$country);
	$template->set('city',$city);
	$template->set('state',$state);
	
	$template->set('canonicalvariable',  SSL_LINK_BASE_URL.'success');
}

function emeeting() {
	header ('HTTP/1.1 301 Moved Permanently');
	header ('Location: '.SSL_LINK_BASE_URL.'buy');
	exit;
}
