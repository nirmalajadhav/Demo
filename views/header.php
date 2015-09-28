<!DOCTYPE html>
<html lang="en">
	<head>
		<?php if (!empty($sitetitle)){?>
		<title><?php echo $sitetitle; ?></title>
		<?php } else { ?>
		<title>CometChat</title>
		<?php } ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<?php if (!empty($meta_keywords)) { ?>   <meta name="keywords" content="<?php echo $meta_keywords; ?>"><?php } ?>
		<?php if (!empty($meta_description)) { ?>       <meta name="description" content="<?php echo $meta_description; ?>"><?php } ?>
		<?php if (!empty($facebook_url)) { ?>       <meta property="og:url" content="<?php echo $facebook_url; ?>" > <?php } ?>
		<?php if (!empty($facebook_image)) { ?>     	<meta property="og:image" content="<?php echo $facebook_image; ?>" />	<?php } ?>
		<?php if(!empty($canonicalvariable)) { ?>
			<link rel="canonical" href="<?php echo $canonicalvariable; ?>"/>
		<?php } ?>
		<?php if(!empty($prevlink)) { ?>
            <link rel="prev" href="<?php echo $prevlink; ?>"/>
        <?php } ?>
        <?php if(!empty($nextlink)) { ?>
            <link rel="next" href="<?php echo $nextlink; ?>"/>
        <?php } ?>
    	<link href="<?php echo LINK_BASE_URL; ?>public/css/style.css.php?v=<?php echo CDN_VERSION;?>" rel="stylesheet"/>
    	<!--[if IE]>
			<link rel="stylesheet" type="text/css" href="<?php echo LINK_BASE_URL; ?>public/css/ie.css" />
		<![endif]-->
		<?php if (!empty($_SERVER['HTTP_USER_AGENT']) && stripos($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) { ?>
    		<link rel="stylesheet" type="text/css" href="<?php echo LINK_BASE_URL; ?>public/css/ie.css" />
		<?php } ?>
		<link type="text/css" rel="stylesheet" media="all" href="<?php echo LINK_BASE_URL; ?><?php echo COMETCHAT_DIR; ?>/css.php?v=<?php echo CDN_VERSION;?>" /> 	
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo LINK_BASE_URL; ?>public/img/apple-touch-icon-144-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo LINK_BASE_URL; ?>public/img/apple-touch-icon-114-precomposed.png">
      	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo LINK_BASE_URL; ?>public/img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo LINK_BASE_URL; ?>public/img/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo LINK_BASE_URL; ?>favicon.ico">
	<script type="text/javascript" src="//use.typekit.net/wab4jpr.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>	
	</head>
	<body>
		<div id="header">
			<div class="container">
				<div class="navbar">
				  <div class="navbar-inner">
					<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="<?php echo BASE_URL; ?>"><img src="<?php echo LINK_BASE_URL; ?>public/img/cometchat-logo.png" alt="CometChat - PHP Chat Software"/></a>
					<div class="nav-collapse collapse">
						<!--for desktop-->
						<ul class="nav nav-pills pull-right hidden-tablet hidden-phone" id="small_menu">
						  <li id="header_blog"><a href="<?php echo BASE_URL; ?>blog">Blog</a></li>
						  <li><a href="<?php echo BASE_URL; ?>contact">Contact Us</a></li>
						  <li id="log"><a href="https://my.cometchat.com/" id="siteloginbtn" target="_blank">Members Area</a></li>
						</ul>
						<!--for desktop-->
						<ul class="nav nav-pills pull-right hidden-tablet hidden-phone" id="big_menu">
						  <li class="dropdown-submenu">
							<a href="<?php echo BASE_URL; ?>features/web"  class="dropdown-toggle">FEATURES</a>
							<ul class="dropdown-menu features-dropdown">
								<li><a href="<?php echo BASE_URL; ?>features/web"><div class="menu_sprite menu_web"></div>Web</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/mobile"><div class="menu_sprite menu_mobile"></div>Mobile</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/mobile-chat-sdk"><div class="menu_sprite menu_mobilesdk"></div>Mobile SDK</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/desktop"><div class="menu_sprite menu_desktop"></div>Desktop</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/plugins"><div class="menu_sprite menu_plugins"></div>Plugins</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/themes"><div class="menu_sprite menu_themes"></div>Themes</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/administration"><div class="menu_sprite menu_admin"></div>Administration</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/seamless-integration"><div class="menu_sprite menu_seamless"></div>Seamless Integration</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/all-features"><div class="menu_sprite menu_all_features"></div>All Features</a></li>
							</ul>
 		  				  </li>
						  <li><a href="<?php echo BASE_URL; ?>demo">DEMO</a></li>
						  <li><a href="<?php echo SSL_LINK_BASE_URL; ?>buy">PURCHASE</a></li>
						  <li><a href="<?php echo BASE_URL; ?>cometservice">COMETSERVICE</a></li>
						  <li class="dropdown-submenu">
							<a href="<?php echo BASE_URL; ?>assist"  class="dropdown-toggle">RESOURCES</a>
							<ul class="dropdown-menu resources-dropdown">
								<li><a href="<?php echo BASE_URL ."documentation/installing-cometchat"; ?>"><div class="menu_sprite menu_installation_guide"></div>Installation Guide</a></li>
								<li><a href="<?php echo BASE_URL ."documentation/admin/"; ?>"><div class="menu_sprite menu_admin_manual"></div>Administration Manual</a></li>
								<li><a href="<?php echo BASE_URL ."documentation/end-user-manual/"; ?>"><div class="menu_sprite menu_end_user_manual"></div>End User Manual</a></li>
								<li><a href="https://my.cometchat.com/tickets" target="_blank"><div class="menu_sprite menu_ticket"></div>Tickets</a></li>
								<li><a href="<?php echo BASE_URL ."video-tutorials"; ?>"><div class="menu_sprite menu_video_tutorial"></div>Video Tutorials</a></li>
								<li><a href="<?php echo BASE_URL ."faq"; ?>"><div class="menu_sprite manu_faq"></div>FAQ</a></li>
								<li><a href="<?php echo BASE_URL. "answers"; ?>"><div class="menu_sprite menu_answers"></div>Answers</a></li>
							<!--	<li><a href="http://forum.cometchat.com/" target="_blank"><div class="menu_sprite menu_forums"></div>Forums</a></li> -->
							</ul>
 		  				  </li>
						</ul>
						<!--for tablets and phones-->
						<ul class="nav nav-pills pull-right visible-tablet visible-phone" id="big_menu">
						  <li class="dropdown-submenu">
							<a href="<?php echo BASE_URL; ?>features/web" class="dropdown-toggle" data-toggle="dropdown">FEATURES</a>
							<ul class="dropdown-menu menu-down">
								<li><a href="<?php echo BASE_URL; ?>features/web"><div class="menu_sprite menu_web"></div>Web</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/mobile"><div class="menu_sprite menu_mobile"></div>Mobile</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/mobile-chat-sdk"><div class="menu_sprite menu_mobilesdk"></div>Mobile SDK</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/desktop"><div class="menu_sprite menu_desktop"></div>Desktop</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/plugins"><div class="menu_sprite menu_plugins"></div>Plugins</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/themes"><div class="menu_sprite menu_themes"></div>Themes</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/administration"><div class="menu_sprite menu_admin"></div>Administration</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/seamless-integration"><div class="menu_sprite menu_seamless"></div>Seamless Integration</a></li>
								<li><a href="<?php echo BASE_URL; ?>features/all-features"><div class="menu_sprite menu_all_features"></div>All Features</a></li>
							</ul>
 		  				  </li>
						  <li><a href="<?php echo BASE_URL; ?>demo">DEMO</a></li>
						  <li class="dropdown-submenu">
						  	<a href="<?php echo SSL_LINK_BASE_URL; ?>buy"  class="dropdown-toggle" data-toggle="dropdown">PURCHASE</a>
						  	<ul class="dropdown-menu menu-down">
								<li><a href="<?php echo SSL_LINK_BASE_URL; ?>buy"><div class="menu_sprite menu_pricing"></div>Pricing</a></li>
								<li><a href="<?php echo SSL_LINK_BASE_URL; ?>buy/add-ons"><div class="menu_sprite menu_addons"></div>Add-ons</a></li>
								<li><a href="<?php echo SSL_LINK_BASE_URL; ?>buy/compare-editions"><div class="menu_sprite menu_compareeditions"></div>Compare Editions</a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu">
						  	<a href="<?php echo BASE_URL; ?>"  class="dropdown-toggle" data-toggle="dropdown">COMETSERVICE</a>
						  	<ul class="dropdown-menu menu-down">
								<li><a href="<?php echo BASE_URL; ?>cometservice"><div class="menu_sprite menu_cometservice"></div>Cometservice Plans</a></li>
								<li><a href="<?php echo BASE_URL; ?>cometservice/third-party-alternatives"><div class="menu_sprite menu_thirdparty"></div>Thirdparty Alternatives</a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu">
							<a href="<?php echo BASE_URL; ?>assist"  class="dropdown-toggle" data-toggle="dropdown">RESOURCES</a>
							<ul class="dropdown-menu menu-down">
								<li><a href="<?php echo BASE_URL ."documentation/installing-cometchat"; ?>"><div class="menu_sprite menu_installation_guide"></div>Installation Guide</a></li>
								<li><a href="<?php echo BASE_URL ."documentation/admin/"; ?>"><div class="menu_sprite menu_admin_manual"></div>Administration Manual</a></li>
								<li><a href="<?php echo BASE_URL ."documentation/end-user-manual/"; ?>"><div class="menu_sprite menu_end_user_manual"></div>End User Manual</a></li>
								<li><a href="https://my.cometchat.com/tickets" target="_blank"><div class="menu_sprite menu_ticket"></div>Tickets</a></li>
								<li><a href="<?php echo BASE_URL ; ?>video-tutorials"><div class="menu_sprite menu_video_tutorial"></div>Video Tutorials</a></li>
								<li><a href="<?php echo BASE_URL; ?>faq"><div class="menu_sprite manu_faq"></div>FAQ</a></li>
								<li><a href="<?php echo BASE_URL; ?>answers"><div class="menu_sprite menu_answers"></div>Answers</a></li>
								<li><a href="http://forum.cometchat.com/" target="_blank"><div class="menu_sprite menu_forums"></div>Forums</a></li>
							</ul>
 		  				  </li>
 		  				  <li><a href="<?php echo BASE_URL; ?>blog">BLOG</a></li>
						  <li><a href="<?php echo BASE_URL; ?>contact">CONTACT US</a></li>
						  <li><a href="https://my.cometchat.com/" id="siteloginbtn1" target="_blank">MEMBERS AREA</a></li>
						</ul>
					</div>
				  </div>
			  </div>	  
			</div>
		</div>
