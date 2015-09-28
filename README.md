CometChat Website
=========
In order to migrate from v5.cometchat.com to www.cometchat.com, following changes should be incorporated:

1. We need to change the URLs in 'config.php' file present in the root folder:
BASE_URL
LINK_BASE_URL
SSL_LINK_BASE_URL

2. We need to change the URLs in 'wp-config.php' file present in the wordpress folder:
BASE_URL
LINK_BASE_URL
SSL_LINK_BASE_URL

3. In forum.cometchat.com, we need to change the URLs in ‘config-defaults.php' file located in the conf folder.
BASE_URL
LINK_BASE_URL
SSL_LINK_BASE_URL
(The URL for cdn is also mentioned in the 'config.php', 'wp-config.php' and ‘config-defaults.php’ files.)

4. We need to update the following tables in the WordPress database after importing it to www.cometchat.com
ccwp_2_options
ccwp_3_options
ccwp_4_options
ccwp_2_comments
ccwp_blogs
ccwp_options
ccwp_site
ccwp_sitemeta
ccwp_usermeta
 The URLS in the above tables needs to be changed from 'v5.cometchat.com/' to 'www.cometchat.com/'

We can also refer to the following link for this step:
http://www.realisingdesigns.com/2010/09/16/moving-the-domain-of-a-wordpress-multisite-install/comment-page-1/	

5. Also we need to make neccessary changes in the .htaccess file in the content folder and wordpress of v5.cometchat.com/ and root folder of forum.cometchat.com

The HTTPS for buy page can be switched from the .htaccess file in the content folder of v5.cometchat.com/  (We have commented the code for time being.)