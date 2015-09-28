<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Free CometChat Demo | CometChat</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<meta name="keywords" content="Trial, Demo, Test the application, See how it works">
    	<meta name="description" content="Demo the CometChat webapp for tablets. Works seamlessly on iPad, Tabs and more! Now your users can chat from anywhere!">
		<link href="<?php echo LINK_BASE_URL; ?>public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    	<link href="<?php echo LINK_BASE_URL; ?>public/css/style.css" rel="stylesheet" type="text/css">
    	<link href="<?php echo LINK_BASE_URL; ?>public/css/ie.css" rel="stylesheet" type="text/css">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo LINK_BASE_URL; ?>public/img/apple-touch-icon-144-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo LINK_BASE_URL; ?>public/img/apple-touch-icon-114-precomposed.png">
      	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo LINK_BASE_URL; ?>public/img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo LINK_BASE_URL; ?>public/img/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo LINK_BASE_URL; ?>favicon.ico">
	</head>
	<body id="ipad_demo">
		<div class="row-fluid">
			<div class="container">
				<div class="span9 ipad_case">
					<img src="<?php echo LINK_BASE_URL . "public/img/ipad_flat.png"; ?>">
					<iframe class="weburl_page" id="mobileframe" src="<?php echo BASE_URL; ?><?php echo COMETCHAT_DIR; ?>/extensions/mobilewebapp/#chat" width="606" height="405" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" allowtransparency="true">
					</iframe>
				</div>
				<div class="span3 demo_right">
					<h2>
						LIVE MOBILE PREVIEW
					</h2>
					<p>
						Play around with the CometChat HTML5 Mobile App and unleash conversations on the move.<br/><br/><br/>
						Like the demo?
					</p>
					<div class="button">
						<a href="<?php echo SSL_LINK_BASE_URL.'buy'; ?>" class="buy">Buy CometChat</a>
					</div>
				</div>
			</div>
		</div>
		<script src="<?php echo LINK_BASE_URL; ?>public/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo LINK_BASE_URL; ?>public/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="//use.typekit.net/wab4jpr.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-16497754-17', 'cometchat.com');
		  ga('send', 'pageview');
		</script>
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 1017339409;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
			<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1017339409/?value=0&amp;guid=ON&amp;script=0"/>
			</div>
		</noscript>
		<script>
			(function() {
			  var _fbq = window._fbq || (window._fbq = []);
			  if (!_fbq.loaded) {
				var fbds = document.createElement('script');
				fbds.async = true;
				fbds.src = '//connect.facebook.net/en_US/fbds.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(fbds, s);
				_fbq.loaded = true;
			  }
			  _fbq.push(['addPixelId', "753972057976244"]);
			})();
			window._fbq = window._fbq || [];
			window._fbq.push(["track", "PixelInitialized", {}]);
		</script>
		<noscript><img height="1" width="1" border="0" alt="" style="display:none" src="https://www.facebook.com/tr?id=753972057976244&amp;ev=NoScript" /></noscript>

	</body>
</html>
