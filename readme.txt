=== Plugin Name ===
Contributors: jmayoff
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6W4YSPHSP8BD8
Tags: user, information, image, description
Requires at least: 3.0
Tested up to: 3.2.1
Stable tag: 0.9.3

Displays user info using a shortcode

== Description ==

Displays user info using a shortcode that can be placed in a post, page or widget. If the user has a Gravatar, it will be included, aligned left or right depending on the shortcode attribute 'align'. The information is pulled from the user's Wordpress profile.


== Installation ==

To install the plugin and get it working.

1. Upload `user-info-display.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place [userinfo] in your posts, pages or widgets
4. You can include the following attributes: 
	id 	= the user's id, defaults to author of current post/page
	align	= right or left, aligns the Gravatar. If not included, will default to left.
	name	= yes or no, will include the user's name or not
	email	= yes or no, will include the user's email, a link from the user's name. Name attribute must either not be included or be included and have the value 'no'
	url	= yes or no, will include the user's url, if available. Will display after the description. 

== Frequently Asked Questions ==

= Where does the plugin get it's user information from? =
The information is pulled from the user's Wordpress profile (http://yoursite.com/wp-admin/users.php) 

= To do = 
Add Twitter and Facebook support

== Screenshots ==

None

== Upgrade Notice ==

= 0.9.3 = 
Added support for email, url and First Last name

== Changelog ==


= 0.9.3 = 
* Added email address, if available
* Added user's name
* Added the user's url, if available 

= 0.9.2 = 
* Change to readme.txt only

= 0.9.1 =

* Removed the dependance on User Photo plugin
* Added Gravatar support (if user has a Gravatar it will be displayed)  


= 0.9 =
* Initial version.