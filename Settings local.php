<?php

/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines http://www.simplemachines.org
 * @copyright 2011 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.0
 */

########## Maintenance ##########
# Note: If $maintenance is set to 2, the forum will be unusable!  Change it to 0 to fix it.
$maintenance = 0;		# Set to 1 to enable Maintenance Mode, 2 to make the forum untouchable. (you'll have to make it 0 again manually!)
$mtitle = 'Maintenance Mode';		# Title for the Maintenance Mode message.
$mmessage = 'Okay faithful users...we\'re attempting to restore an older backup of the database...news will be posted once we\'re back!';		# Description of why the forum is in maintenance mode.

########## Forum Info ##########
$mbname = 'My Community';		# The name of your forum.
$language = 'russian-utf8';		# The default language file set for the forum.
$boardurl = 'http://wt0610';		# URL to your forum's folder. (without the trailing /!)
$webmaster_email = 'noreply@myserver.com';		# Email address to send emails from. (like noreply@yourdomain.com.)
$cookiename = 'SMFCookie864';		# Name of the cookie to set for authentication.

########## Database Info ##########
$db_type = 'mysql';
$db_server = 'localhost';
$db_name = 'wt0610';
$db_user = 'root';
$db_passwd = 'root';
$ssi_db_user = '';
$ssi_db_passwd = '';
$db_prefix = 'smf_';
$db_persist = 0;
$db_error_send = 1;

########## Directories/Files ##########
# Note: These directories do not have to be changed unless you move things.
$boarddir = 'Y:\\OSPanel5-3-5\\domains\\wt0610';		# The absolute path to the forum's folder. (not just '.'!)
$sourcedir = 'Y:\\OSPanel5-3-5\\domains\\wt0610\\Sources';		# Path to the Sources directory.
$cachedir = 'Y:\\OSPanel5-3-5\\domains\\wt0610\\cache';		# Path to the cache directory.

########## Error-Catching ##########
# Note: You shouldn't touch these settings.
$db_last_error = 0;

# Make sure the paths are correct... at least try to fix them.
if (!file_exists($boarddir) && file_exists(dirname(__FILE__) . '/agreement.txt'))
	$boarddir = dirname(__FILE__);
if (!file_exists($sourcedir) && file_exists($boarddir . '/Sources'))
	$sourcedir = $boarddir . '/Sources';
if (!file_exists($cachedir) && file_exists($boarddir . '/cache'))
	$cachedir = $boarddir . '/cache';

$image_proxy_secret = '2f9620e956d00219f210';
$image_proxy_maxsize = '5190';
$image_proxy_enabled = '0';
$auth_secret = 'b357fece62e63c285f7dee39bb150fe3c5339eff9e0c195097f44464fc96a1d3';
$db_character_set = 'utf8';
?>