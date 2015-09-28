<html><head>
	<title>
		CometChat IP tables
	</title>
	<?php if(isset($canonicalvariable)) { ?>
		<link rel="canonical" href="<?php echo $canonicalvariable; ?>"/>
	<?php } ?>
</head><body><pre style="word-wrap: break-word; white-space: pre-wrap;"># Firewall configuration written by system-config-firewall
# Manual customization of this file is not recommended.
*filter
:INPUT ACCEPT [0:0]
:FORWARD ACCEPT [0:0]
:OUTPUT ACCEPT [0:0]
-A INPUT -m state --state ESTABLISHED,RELATED -j ACCEPT
-A INPUT -p icmp -j ACCEPT
-A INPUT -i lo -j ACCEPT
-A INPUT -m state --state NEW -m tcp -p tcp --dport 22 -j ACCEPT
-A INPUT -m state --state NEW -m tcp -p tcp --dport 5080 -j ACCEPT
-A INPUT -m state --state NEW -m tcp -p tcp --dport 1935 -j ACCEPT
-A INPUT -m state --state NEW -m tcp -p tcp --dport 8055 -j ACCEPT
-A INPUT -m state --state NEW -m tcp -p tcp --dport 1936 -j ACCEPT
-A INPUT -m state --state NEW -m tcp -p tcp --dport 9999 -j ACCEPT
-A INPUT -m state --state NEW -m tcp -p tcp --dport 8443 -j ACCEPT
-A INPUT -m state --state NEW -m tcp -p tcp --dport 5443 -j ACCEPT
-A INPUT -m state --state NEW -m tcp -p tcp --dport 843 -j ACCEPT
-A INPUT -j REJECT --reject-with icmp-host-prohibited
-A FORWARD -j REJECT --reject-with icmp-host-prohibited
COMMIT
</pre></body></html>